<?php namespace api\method;

use api\InputFile;
use api\response\Error;

/**
 * Class uploadStickerFile
 * @package api\method
 * @link https://core.telegram.org/bots/api#uploadstickerfile
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property int user_id
 * @property InputFile png_sticker
 *
 * @method true|Error send()
 * @method bool hasUserId()
 * @method bool hasPngSticker()
 * @method $this setUserId($integer)
 * @method $this setPngSticker($file)
 * @method $this remUserId()
 * @method $this remPngSticker()
 * @method int getUserId($default = null)
 * @method InputFile getPngSticker($default = null)
 */
class uploadStickerFile extends Method
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