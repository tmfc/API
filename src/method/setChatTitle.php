<?php namespace api\method;

use api\response\Error;

/**
 * Class setChatTitle
 * @package api\method
 * @link https://core.telegram.org/bots/api#setchattitle
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property int|string chat_id
 * @property string title
 *
 * @method true|Error send()
 * @method bool hasChatId()
 * @method bool hasTitle()
 * @method $this setChatId($integer)
 * @method $this setTitle($string)
 * @method $this remChatId()
 * @method $this remTitle()
 * @method string|int getChatId($default = null)
 * @method string getTitle($default = null)
 */
class setChatTitle extends Method
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