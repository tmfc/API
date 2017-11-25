<?php namespace api\method;

use api\InputFile;
use api\response\Error;

/**
 * Class setChatPhoto
 * @package api\method
 * @link https://core.telegram.org/bots/api#setchatphoto
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property int|string chat_id
 * @property InputFile photo
 *
 * @method true|Error send()
 * @method bool hasChatId()
 * @method bool hasPhoto()
 * @method $this setChatId($integer)
 * @method $this setPhoto($file)
 * @method $this remChatId()
 * @method $this remPhoto()
 * @method string|int getChatId($default = null)
 * @method InputFile getPhoto($default = null)
 */
class setChatPhoto extends Method
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