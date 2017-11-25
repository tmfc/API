<?php namespace api\method;

use api\response\Error;
use api\response\Message;

/**
 * Class forwardMessage
 * @package api\method
 * @link https://core.telegram.org/bots/api#forwardmessage
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property int|string chat_id
 * @property int|string from_chat_id
 * @property bool disable_notification
 * @property int message_id
 *
 * @method Message|Error send()
 * @method bool hasChatId()
 * @method bool hasFromChatId()
 * @method bool hasDisableNotification()
 * @method bool hasMessageId()
 * @method $this setChatId($integer)
 * @method $this setFromChatId($integer)
 * @method $this setDisableNotification($boolean)
 * @method $this setMessageId($integer)
 * @method $this remChatId()
 * @method $this remFromChatId()
 * @method $this remDisableNotification()
 * @method $this remMessageId()
 * @method string|int getChatId($default = null)
 * @method string|int getFromChatId($default = null)
 * @method bool getDisableNotification($default = null)
 * @method int getMessageId($default = null)
 */
class forwardMessage extends Method
{

    /**
     * Every method have a response type.
     * @return string the class's name.
     */
    protected function response()
    {
        return Message::className();
    }
}