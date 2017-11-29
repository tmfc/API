<?php namespace api\event;

use api\base\Token;
use yii\base\Event;
use api\method\Method;
use api\response\Response;

/**
 * Class RequestSucceed
 * @package api\event
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.5.3
 */
class RequestSucceed extends Event
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
     * @var Response|array|bool
     */
    public $result;
}