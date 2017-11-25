<?php namespace api\method;

use api\response\Error;
use api\response\Message;
use api\keyboard\InlineKeyboardMarkup;

/**
 * Class sendGame
 * @package api\method
 * @link https://core.telegram.org/bots/api#sendgame
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property int chat_id
 * @property string game_short_name
 * @property bool disable_notification
 * @property int reply_to_message_id
 * @property InlineKeyboardMarkup reply_markup
 *
 * @method true|Error send()
 * @method bool hasChatId()
 * @method bool hasGameShortName()
 * @method bool hasDisableNotification()
 * @method bool hasReplyToMessageId()
 * @method bool hasReplyMarkup()
 * @method $this setChatId($integer)
 * @method $this setGameShortName($string)
 * @method $this setDisableNotification($boolean)
 * @method $this setReplyToMessageId($integer)
 * @method $this setReplyMarkup($markup)
 * @method $this remChatId()
 * @method $this remGameShortName()
 * @method $this remDisableNotification()
 * @method $this remReplyToMessageId()
 * @method $this remReplyMarkup()
 * @method string|int getChatId($default = null)
 * @method string getGameShortName($default = null)
 * @method bool getDisableNotification($default = null)
 * @method int getReplyToMessageId($default = null)
 * @method InlineKeyboardMarkup getReplyMarkup($default = null)
 */
class sendGame extends Method
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