<?php namespace api\method;

use api\response\Error;
use api\response\Message;
use api\keyboard\Keyboard;

/**
 * Class sendContact
 * @package api\method
 * @link https://core.telegram.org/bots/api#sendcontact
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property int|string chat_id
 * @property string phone_number
 * @property string first_name
 * @property string last_name
 * @property bool disable_notification
 * @property int reply_to_message_id
 * @property Keyboard reply_markup
 *
 * @method Message|Error send()
 * @method bool hasChatId()
 * @method bool hasPhoneNumber()
 * @method bool hasFirstName()
 * @method bool hasLastName()
 * @method bool hasDisableNotification()
 * @method bool hasReplyToMessageId()
 * @method bool hasReplyMarkup()
 * @method $this setChatId($integer)
 * @method $this setPhoneNumber($string)
 * @method $this setFirstName($string)
 * @method $this setLastName($string)
 * @method $this setDisableNotification($boolean)
 * @method $this setReplyToMessageId($integer)
 * @method $this setReplyMarkup($markup)
 * @method $this remChatId()
 * @method $this remPhoneNumber()
 * @method $this remFirstName()
 * @method $this remLastName()
 * @method $this remDisableNotification()
 * @method $this remReplyToMessageId()
 * @method $this remReplyMarkup()
 * @method string|int getChatId($default = null)
 * @method string getPhoneNumber($default = null)
 * @method string getFirstName($default = null)
 * @method string getLastName($default = null)
 * @method bool getDisableNotification($default = null)
 * @method int getReplyToMessageId($default = null)
 * @method Keyboard getReplyMarkup($default = null)
 */
class sendContact extends Method
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