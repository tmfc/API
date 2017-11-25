<?php namespace api\method;

use api\response\Error;
use api\response\ChatMember;

/**
 * Class getChatAdministrators
 * @package api\method
 * @link https://core.telegram.org/bots/api#getchatadministrators
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property int|string chat_id
 *
 * @method ChatMember[]|Error send()
 * @method bool hasChatId()
 * @method $this setChatId($integer)
 * @method $this remChatId()
 * @method string|int getChatId($default = null)
 */
class getChatAdministrators extends Method
{

    /**
     * Every method have a response type.
     * @return string the class's name.
     */
    protected function response()
    {
        return ChatMember::className();
    }
}