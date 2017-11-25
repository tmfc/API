<?php namespace api\event;

use yii\base\Event;
use api\method\Method;
use api\response\Response;

/**
 * Class RequestSucceed
 * @package api\event
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 */
class RequestSucceed extends Event
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
     * @var Response|array|bool
     */
    public $result;
}