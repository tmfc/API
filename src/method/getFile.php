<?php namespace api\method;

use api\response\File;
use api\response\Error;

/**
 * Class getFile
 * @package api\method
 * @link https://core.telegram.org/bots/api#getfile
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property string file_id
 *
 * @method File|Error send()
 * @method bool hasFileId()
 * @method $this setFileId($string)
 * @method $this remFileId()
 * @method string getFileId($default = null)
 */
class getFile extends Method
{

    /**
     * Every method have a response type.
     * @return string the class's name.
     */
    protected function response()
    {
        return File::className();
    }
}