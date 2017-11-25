<?php namespace api\method;

use api\response\Error;

/**
 * Class setStickerPositionInSet
 * @package api\method
 * @link https://core.telegram.org/bots/api#setstickerpositioninset
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property string sticker
 * @property int position
 *
 * @method true|Error send()
 * @method bool hasSticker()
 * @method bool hasPosition()
 * @method $this setSticker($string)
 * @method $this setPosition($integer)
 * @method $this remSticker()
 * @method $this remPosition()
 * @method string getSticker($default = null)
 * @method int getPosition($default = null)
 */
class setStickerPositionInSet extends Method
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