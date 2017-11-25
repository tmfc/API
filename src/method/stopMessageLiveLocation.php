<?php namespace api\method;

use api\response\Error;
use api\response\Message;
use api\keyboard\InlineKeyboardMarkup;

/**
 * Class stopMessageLiveLocation
 * @package api\method
 * @link https://core.telegram.org/bots/api#stopmessagelivelocation
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property int|string chat_id
 * @property int message_id
 * @property string inline_message_id
 * @property InlineKeyboardMarkup reply_markup
 *
 * @method Message|Error send()
 * @method bool hasChatId()
 * @method bool hasMessageId()
 * @method bool hasInlineMessageId()
 * @method bool hasReplyMarkup()
 * @method $this setChatId($integer)
 * @method $this setMessageId($integer)
 * @method $this setInlineMessageId($integer)
 * @method $this setReplyMarkup($markup)
 * @method $this remChatId()
 * @method $this remMessageId()
 * @method $this remInlineMessageId()
 * @method $this remReplyMarkup()
 * @method string|int getChatId($default = null)
 * @method int getMessageId($default = null)
 * @method int getInlineMessageId($default = null)
 * @method InlineKeyboardMarkup getReplyMarkup($default = null)
 */
class stopMessageLiveLocation extends Method
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