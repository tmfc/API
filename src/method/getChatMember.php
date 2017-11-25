<?php namespace api\method;

use api\response\Error;
use api\response\ChatMember;

/**
 * Class getChatMember
 * @package api\method
 * @link https://core.telegram.org/bots/api#getchatmember
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property int|string chat_id
 * @property int user_id
 *
 * @method ChatMember|Error send()
 * @method bool hasChatId()
 * @method bool hasUserId()
 * @method $this setChatId($integer)
 * @method $this setUserId($integer)
 * @method $this remChatId()
 * @method $this remUserId()
 * @method string|int getChatId($default = null)
 * @method int getUserId($default = null)
 */
class getChatMember extends Method
{

    /**
     * every methods have a response.
     * @return string the name of response class
     */
    protected function response()
    {
        return ChatMember::className();
    }
}