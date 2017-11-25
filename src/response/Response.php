<?php namespace api\response;

use api\base\Object;
use yii\helpers\ArrayHelper as AH;
use yii\base\UnknownClassException;

/**
 * Class Response
 * @package api\response
 * @link https://core.telegram.org/bots/api#available-types
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.5
 */
abstract class Response extends Object
{

    /**
     * Initializes the object.
     * This method is invoked at the end of the constructor after
     * the object is initialized with the given configuration.
     */
    public function init()
    {
        $relations = $this->relations();
        foreach ($relations as $property => $className) {
            if (
                class_exists($className) &&
                $this->__isset($property)
            ) {
                $value = $this->__get($property);
                $relation = $this->createRelation(
                    $className, $value
                );

                // set property by relation
                $this->__set($property, $relation);
            }
        }
    }

    /**
     * @param string $className
     * @param array $properties
     * @return array
     * @throws UnknownClassException
     */
    private function createRelation($className, $properties)
    {
        if (AH::isAssociative($properties)) {
            $class = new $className($properties);
            if ($class instanceof Response) {
                return $class;
            }

            $message = $className . ' isn\'t a response object.';
            throw new UnknownClassException($message);
        }

        if (AH::isIndexed($properties)) {
            $output = [];
            foreach ($properties as $index => $value) {
                $output[$index] = $this->createRelation(
                    $className, $value
                );
            }

            return $output;
        }

        return $properties;
    }

    /**
     * Every object have relations with other object,
     * in this method we introduce all object we have relations.
     *
     * @return array of objects
     */
    abstract protected function relations();
}