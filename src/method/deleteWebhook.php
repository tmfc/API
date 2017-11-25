<?php namespace api\method;

use api\response\Error;

/**
 * Class deleteWebhook
 * @package api\method
 * @link https://core.telegram.org/bots/api#deletewebhook
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @method true|Error send()
 */
class deleteWebhook extends Method
{

    /**
     * every methods have a response.
     * @return string the name of response class
     */
    protected function response()
    {
        return true;
    }
}