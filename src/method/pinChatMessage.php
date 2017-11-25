<?php namespace api\method;

use api\response\Error;

/**
 * Class pinChatMessage
 * @package api\method
 * @link https://core.telegram.org/bots/api#pinchatmessage
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property int|string chat_id
 * @property int message_id
 * @property bool disable_notification
 *
 * @method true|Error send()
 * @method bool hasChatId()
 * @method bool hasMessageId()
 * @method bool hasDisableNotification()
 * @method $this setChatId($integer)
 * @method $this setMessageId($integer)
 * @method $this setDisableNotification($boolean)
 * @method $this remChatId()
 * @method $this remMessageId()
 * @method $this remDisableNotification()
 * @method string|int getChatId($default = null)
 * @method int getMessageId($default = null)
 * @method bool getDisableNotification($default = null)
 */
class pinChatMessage extends Method
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