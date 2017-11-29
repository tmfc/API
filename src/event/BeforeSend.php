<?php namespace api\event;

use api\base\Token;
use yii\base\Event;
use api\method\Method;

/**
 * Class BeforeSend
 * @package api\event
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.5.3
 */
class BeforeSend extends Event
{

    /**
     * @var Token
     */
    public $token;

    /**
     * @var Method
     */
    public $method;
}