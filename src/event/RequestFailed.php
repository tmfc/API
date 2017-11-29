<?php namespace api\event;

use api\base\Token;
use yii\base\Event;
use api\method\Method;
use api\response\Error;

/**
 * Class RequestFailed
 * @package api\event
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.5.3
 */
class RequestFailed extends Event
{

    /**
     * @var Token
     */
    public $token;

    /**
     * @var Error
     */
    public $error;

    /**
     * @var Method
     */
    public $method;
}