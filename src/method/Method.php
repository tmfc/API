<?php namespace api\method;

use api\base\API;
use api\base\Object;
use api\base\Request;
use api\response\Error;
use api\event\AfterSend;
use api\event\BeforeSend;
use api\response\Response;
use api\event\RequestFailed;
use api\event\RequestSucceed;
use yii\helpers\StringHelper;
use yii\helpers\ArrayHelper as AH;
use yii\base\UnknownClassException;

/**
 * Class Method
 * @package api\method
 * @link https://core.telegram.org/bots/api#available-methods
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 */
abstract class Method extends Request
{

    /**
     * @return string
     */
    public static function methodName()
    {
        $className = self::className();
        $correctName = StringHelper::basename($className);
        return lcfirst($correctName);
    }

    /**
     * Initializes the object.
     * This method is invoked at the end of the constructor after
     * the object is initialized with the given configuration.
     */
    public function init()
    {
        $methodName = $this->methodName();
        $this->set('method', $methodName);
    }

    /**
     * @return Response
     */
    public function send()
    {
        API::trigger(API::EVENT_BEFORE_SEND, new BeforeSend([
            'method' => $this,
            'token' => $this->token
        ]));

        $response = parent::send();

        API::trigger(API::EVENT_AFTER_SEND, new AfterSend([
            'method' => $this,
            'response' => $response,
            'token' => $this->token
        ]));

        if (AH::keyExists('result', $response)) {
            $result = $response['result'];
            if (is_array($result)) {
                $className = $this->response();
                if (class_exists($className)) {
                    $value = $result;
                    $result = $this->createRelation(
                        $className, $value
                    );
                }
            }

            API::trigger(API::EVENT_REQUEST_SUCCEED, new RequestSucceed([
                'method' => $this,
                'result' => $result,
                'token' => $this->token
            ]));

            return $result;
        }
        elseif (is_array($response)) {
            $error = new Error($response);
            API::trigger(API::EVENT_REQUEST_FAILED, new RequestFailed([
                'method' => $this,
                'error' => $error,
                'token' => $this->token
            ]));

            return $error;
        }

        return false;
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
            if ($class instanceof Object) {
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
     * Every method have a response type.
     * @return string the class's name.
     */
    abstract protected function response();
}