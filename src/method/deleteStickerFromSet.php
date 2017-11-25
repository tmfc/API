<?php namespace api\method;

use api\response\Error;

/**
 * Class deleteStickerFromSet
 * @package api\method
 * @link https://core.telegram.org/bots/api#deletestickerfromset
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property string sticker
 *
 * @method true|Error send()
 * @method bool hasSticker()
 * @method $this setSticker($string)
 * @method $this remSticker()
 * @method string getSticker($default = null)
 */
class deleteStickerFromSet extends Method
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