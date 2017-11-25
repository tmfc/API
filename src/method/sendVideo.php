<?php namespace api\method;

use api\InputFile;
use api\response\Error;
use api\response\Message;
use api\keyboard\Keyboard;

/**
 * Class sendVideo
 * @package api\method
 * @link https://core.telegram.org/bots/api#sendvideo
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property int|string chat_id
 * @property InputFile|string video
 * @property int duration
 * @property int width
 * @property int height
 * @property string caption
 * @property bool disable_notification
 * @property int reply_to_message_id
 * @property Keyboard reply_markup
 *
 * @method Message|Error send()
 * @method bool hasChatId()
 * @method bool hasVideo()
 * @method bool hasDuration()
 * @method bool hasWidth()
 * @method bool hasHeight()
 * @method bool hasCaption()
 * @method bool hasDisableNotification()
 * @method bool hasReplyToMessageId()
 * @method bool hasReplyMarkup()
 * @method $this setChatId($integer)
 * @method $this setVideo($video)
 * @method $this setDuration($integer)
 * @method $this setWidth($integer)
 * @method $this setHeight($integer)
 * @method $this setCaption($string)
 * @method $this setDisableNotification($boolean)
 * @method $this setReplyToMessageId($integer)
 * @method $this setReplyMarkup($markup)
 * @method $this remChatId()
 * @method $this remVideo()
 * @method $this remDuration()
 * @method $this remWidth()
 * @method $this remHeight()
 * @method $this remCaption()
 * @method $this remDisableNotification()
 * @method $this remReplyToMessageId()
 * @method $this remReplyMarkup()
 * @method string|int getChatId($default = null)
 * @method string|InputFile getVideo($default = null)
 * @method int getDuration($default = null)
 * @method int getWidth($default = null)
 * @method int getHeight($default = null)
 * @method string getCaption($default = null)
 * @method bool getDisableNotification($default = null)
 * @method int getReplyToMessageId($default = null)
 * @method Keyboard getReplyMarkup($default = null)
 */
class sendVideo extends Method
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