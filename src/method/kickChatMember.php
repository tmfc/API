<?php namespace api\method;

use api\response\Error;

/**
 * Class kickChatMember
 * @package api\method
 * @link https://core.telegram.org/bots/api#kickchatmember
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property int|string chat_id
 * @property int user_id
 * @property int until_date
 *
 * @method true|Error send()
 * @method bool hasChatId()
 * @method bool hasUserId()
 * @method bool hasUntilDate()
 * @method $this setChatId($integer)
 * @method $this setUserId($integer)
 * @method $this setUntilDate($integer)
 * @method $this remChatId()
 * @method $this remUserId()
 * @method $this remUntilDate()
 * @method string|int getChatId($default = null)
 * @method int getUserId($default = null)
 * @method int getUntilDate($default = null)
 */
class kickChatMember extends Method
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