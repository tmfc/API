<?php namespace api\event;

use yii\base\Event;
use api\method\Method;

/**
 * Class BeforeSend
 * @package api\event
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 */
class BeforeSend extends Event
{

    /**
     * @var string
     */
    public $token;

    /**
     * @var Method
     */
    public $method;
}