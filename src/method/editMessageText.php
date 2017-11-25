<?php namespace api\method;

use api\response\Error;
use api\response\Message;
use api\keyboard\InlineKeyboardMarkup;

/**
 * Class editMessageText
 * @package api\method
 * @link https://core.telegram.org/bots/api#editmessagetext
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property int|string chat_id
 * @property int message_id
 * @property string inline_message_id
 * @property string text
 * @property string parse_mode
 * @property bool disable_web_page_preview
 * @property InlineKeyboardMarkup reply_markup
 *
 * @method Message|true|Error send()
 * @method bool hasChatId()
 * @method bool hasMessageId()
 * @method bool hasInlineMessageId()
 * @method bool hasText()
 * @method bool hasParseMode()
 * @method bool hasDisableWebPagePreview()
 * @method bool hasReplyMarkup()
 * @method $this setChatId($integer)
 * @method $this setMessageId($integer)
 * @method $this setInlineMessageId($string)
 * @method $this setText($string)
 * @method $this setParseMode($string)
 * @method $this setDisableWebPagePreview($boolean)
 * @method $this setReplyMarkup($markup)
 * @method $this remChatId()
 * @method $this remMessageId()
 * @method $this remInlineMessageId()
 * @method $this remText()
 * @method $this remParseMode()
 * @method $this remDisableWebPagePreview()
 * @method $this remReplyMarkup()
 * @method string|int getChatId($default = null)
 * @method int getMessageId($default = null)
 * @method string getInlineMessageId($default = null)
 * @method string getText($default = null)
 * @method string getParseMode($default = null)
 * @method bool getDisableWebPagePreview($default = null)
 * @method InlineKeyboardMarkup getReplyMarkup($default = null)
 */
class editMessageText extends Method
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