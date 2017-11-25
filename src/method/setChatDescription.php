<?php namespace api\method;

use api\response\Error;

/**
 * Class setChatDescription
 * @package api\method
 * @link https://core.telegram.org/bots/api#setchatdescription
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property int|string chat_id
 * @property string description
 *
 * @method true|Error send()
 * @method bool hasChatId()
 * @method bool hasDescription()
 * @method $this setChatId($integer)
 * @method $this setDescription($string)
 * @method $this remChatId()
 * @method $this remDescription()
 * @method string|int getChatId($default = null)
 * @method string getDescription($default = null)
 */
class setChatDescription extends Method
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