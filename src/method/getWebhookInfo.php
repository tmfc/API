<?php namespace api\method;

use api\response\Error;
use api\response\WebhookInfo;

/**
 * Class getWebhookInfo
 * @package api\method
 * @link https://core.telegram.org/bots/api#getwebhookinfo
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @method WebhookInfo|Error send()
 */
class getWebhookInfo extends Method
{

    /**
     * every methods have a response.
     * @return string the name of response class
     */
    protected function response()
    {
        return WebhookInfo::className();
    }
}