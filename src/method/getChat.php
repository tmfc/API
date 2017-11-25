<?php namespace api\method;

use api\response\Chat;
use api\response\Error;

/**
 * Class getChat
 * @package api\method
 * @link https://core.telegram.org/bots/api#getchat
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property int|string chat_id
 *
 * @method Chat|Error send()
 * @method bool hasChatId()
 * @method $this setChatId($integer)
 * @method $this remChatId()
 * @method string|int getChatId($default = null)
 */
class getChat extends Method
{

    /**
     * every methods have a response.
     * @return string the name of response class
     */
    protected function response()
    {
        return Chat::className();
    }
}