<?php namespace api\method;

use api\response\Error;

/**
 * Class getChatMembersCount
 * @package api\method
 * @link https://core.telegram.org/bots/api#getchatmemberscount
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property int|string chat_id
 *
 * @method int|Error send()
 * @method bool hasChatId()
 * @method $this setChatId($integer)
 * @method $this remChatId()
 * @method string|int getChatId($default = null)
 */
class getChatMembersCount extends Method
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