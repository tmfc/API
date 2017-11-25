<?php namespace api\method;

use api\response\Error;

/**
 * Class deleteMessage
 * @package api\method
 * @link https://core.telegram.org/bots/api#deletemessage
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property int|string chat_id
 * @property int message_id
 *
 * @method true|Error send()
 * @method bool hasChatId()
 * @method bool hasMessageId()
 * @method $this setChatId($integer)
 * @method $this setMessageId($integer)
 * @method $this remChatId()
 * @method $this remMessageId()
 * @method string|int getChatId($default = null)
 * @method int getMessageId($default = null)
 */
class deleteMessage extends Method
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