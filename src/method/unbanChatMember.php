<?php namespace api\method;

use api\response\Error;

/**
 * Class unbanChatMember
 * @package api\method
 * @link https://core.telegram.org/bots/api#unbanchatmember
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.5
 *
 * @property int|string chat_id
 * @property int user_id
 *
 * @method true|Error send()
 * @method bool hasChatId()
 * @method bool hasUserId()
 * @method $this setChatId($integer)
 * @method $this setUserId($integer)
 * @method $this remChatId()
 * @method $this remUserId()
 * @method string|int getChatId()
 * @method int getUserId()
 */
class unbanChatMember extends Method
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