<?php namespace api\event;

use yii\base\Event;
use api\method\Method;

/**
 * Class AfterSend
 * @package api\event
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 */
class AfterSend extends Event
{

    /**
     * @var string
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