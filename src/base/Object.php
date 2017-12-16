<?php namespace api\base;

use yii\helpers\Json;
use yii\helpers\Inflector;
use yii\helpers\ArrayHelper as AH;
use yii\base\InvalidParamException;

/**
 * Class Object
 * @package api\base
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.5.6
 */
class Object extends \yii\base\Object
{

    /**
     * @var array
     */
    protected $properties = [];

    /**
     * @return $this
     */
    public function __empty()
    {
        $this->properties = [];
        return $this;
    }

    /**
     * @return string
     */
    public function __json()
    {
        $array = $this->__array();
        return Json::encode($array);
    }

    /**
     * @return array
     */
    public function __array()
    {
        $properties = $this->properties;
        array_walk_recursive(
            $properties, function (&$value) {
                if ($value instanceof Object) {
                    $value = $value->__array();
                }
            }
        );

        return $properties;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->__json();
    }

    /**
     * @param string $name
     * @return bool
     */
    public function __isset($name)
    {
        $name = Inflector::id2camel($name, '_');
        $getter = 'get' . $name;

        return $this->$getter() !== null;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $name = Inflector::id2camel($name, '_');
        $setter = 'set' . $name;

        $this->$setter(null);
    }

    /**
     * @param string $name
     * @return mixed
     */
    public function __get($name)
    {
        $name = Inflector::id2camel($name, '_');
        $getter = 'get' . $name;
        return $this->$getter();
    }

    /**
     * @param string $name
     * @param mixed $value
     * @return mixed
     */
    public function __set($name, $value)
    {
        $name = Inflector::id2camel($name, '_');
        $setter = 'set' . $name;
        $this->$setter($value);
        return $value;
    }

    /**
     * @param string $name
     * @param array $params
     * @return $this|bool|mixed
     */
    public function __call($name, $params)
    {
        $action = substr($name, 0, 3);
        $actions = ['set', 'get', 'has', 'rem'];
        if (array_search($action, $actions) === false) {
            return parent::__call($name, $params);
        }

        $key = substr($name, 3);
        $action = substr($name, 0, 3);
        $property = Inflector::camel2id($key, '_');

        switch ($action) {
            case 'rem': {
                $this->__unset($property);
                break;
            }
            case 'has': {
                $status = $this->__isset($property);
                return $status;
            }
            case 'get': {
                $properties = $this->properties;
                $default = AH::getValue($params, 0);
                return AH::getValue($properties, $property, $default);
            }
            case 'set': {
                if (AH::keyExists(0, $params)) {
                    $value = AH::getValue($params, 0);
                    if ($value == null) {
                        unset($this->properties[$property]);
                        break;
                    }

                    $this->properties[$property] = $value;
                    break;
                }

                $class = self::className();
                $setter = 'set' . $name . '($value)';
                $message = 'Set method arguments: ' . $class . '::' . $setter;
                throw new InvalidParamException($message);
                break;
            }
        }

        return $this;
    }
}