<?php namespace api\method;

use api\response\User;
use api\response\Error;

/**
 * Class getMe
 * @package api\method
 * @link https://core.telegram.org/bots/api#getme
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @method User|Error send()
 */
class getMe extends Method
{

    /**
     * Every method have a response type.
     * @return string the class's name.
     */
    protected function response()
    {
        return User::className();
    }
}