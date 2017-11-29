<?php namespace api\event;

use api\base\Token;
use yii\base\Event;
use api\method\Method;

/**
 * Class AfterSend
 * @package api\event
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.5.3
 */
class AfterSend extends Event
{

    /**
     * @var Token
     */
    public $token;

    /**
     * @var Method
     */
    public $method;

    /**
     * @var array
     */
    public $response;
}