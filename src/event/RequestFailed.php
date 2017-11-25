<?php namespace api\event;

use yii\base\Event;
use api\method\Method;
use api\response\Error;

/**
 * Class RequestFailed
 * @package api\event
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 */
class RequestFailed extends Event
{

    /**
     * @var string
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