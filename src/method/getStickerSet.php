<?php namespace api\method;

use api\response\Error;
use api\response\StickerSet;

/**
 * Class getStickerSet
 * @package api\method
 * @link https://core.telegram.org/bots/api#getstickerset
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property string name
 * 
 * @method StickerSet|Error send()
 * @method bool hasName()
 * @method $this setName($string)
 * @method $this remName()
 * @method string getName($default = null)
 */
class getStickerSet extends Method
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