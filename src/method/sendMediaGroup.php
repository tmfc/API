<?php namespace api\method;

use api\response\Error;
use api\response\Message;
use api\media\InputMedia;

/**
 * Class sendMediaGroup
 * @package api\method
 * @link https://core.telegram.org/bots/api#sendmediagroup
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.5
 *
 * @property int|string chat_id
 * @property InputMedia[] media
 * @property bool disable_notification
 * @property int reply_to_message_id
 *
 * @method Message[]|Error send()
 * @method bool hasChatId()
 * @method bool hasMedia()
 * @method bool hasDisableNotification()
 * @method bool hasReplyToMessageId()
 * @method $this setChatId($integer)
 * @method $this setMedia($array)
 * @method $this setDisableNotification($boolean)
 * @method $this setReplyToMessageId($integer)
 * @method $this remChatId()
 * @method $this remMedia()
 * @method $this remDisableNotification()
 * @method $this remReplyToMessageId()
 * @method string|int getChatId($default = null)
 * @method InputMedia[] getMedia($default = null)
 * @method bool getDisableNotification($default = null)
 * @method int getReplyToMessageId($default = null)
 */
class sendMediaGroup extends Method
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