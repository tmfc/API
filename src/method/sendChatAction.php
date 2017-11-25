<?php namespace api\method;

use api\response\Error;
use api\response\Message;

/**
 * Class sendChatAction
 * @package api\method
 * @link https://core.telegram.org/bots/api#sendchataction
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property int|string chat_id
 * @property string action
 *
 * @method Message|Error send()
 * @method bool hasChatId()
 * @method bool hasAction()
 * @method $this setChatId($integer)
 * @method $this setAction($string)
 * @method $this remChatId()
 * @method $this remAction()
 * @method string|int getChatId($default = null)
 * @method string getAction($default = null)
 */
class sendChatAction extends Method
{

    /**
     * Every method have a response type.
     * @return string the class's name.
     */
    protected function response()
    {
        return true;
    }
}