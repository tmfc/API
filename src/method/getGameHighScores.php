<?php namespace api\method;

use api\response\Error;
use api\response\GameHighScore;

/**
 * Class getGameHighScores
 * @package api\method
 * @link https://core.telegram.org/bots/api#getgamehighscores
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property int user_id
 * @property int chat_id
 * @property int message_id
 * @property int inline_message_id
 *
 * @method GameHighScore[]|Error send()
 * @method bool hasUserId($integer)
 * @method bool hasChatId($integer)
 * @method bool hasMessageId($integer)
 * @method bool hasInlineMessageId($string)
 * @method $this setUserId()
 * @method $this setChatId()
 * @method $this setMessageId()
 * @method $this setInlineMessageId()
 * @method $this remUserId()
 * @method $this remChatId()
 * @method $this remMessageId()
 * @method $this remInlineMessageId()
 * @method int getUserId($default = null)
 * @method int getChatId($default = null)
 * @method int getMessageId($default = null)
 * @method string getInlineMessageId($default = null)
 */
class getGameHighScores extends Method
{

    /**
     * Every method have a response type.
     * @return string the class's name.
     */
    protected function response()
    {
        return GameHighScore::className();
    }
}