<?php namespace api;

/**
 * This object represents the contents of a file to be
 * uploaded. Must be posted using multipart/form-data in
 * the usual way that files are uploaded
 * via the browser.
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * Class InputFile
 * @package api
 * @link https://core.telegram.org/bots/api#inputfile
 */
class InputFile extends \CURLFile
{

    /**
     * InputFile constructor.
     * @param string $file path to the file.
     * @param string $type mimetype of the file.
     */
    public function __construct($file, $type = null){
        $path = \Yii::getAlias($file);
        parent::__construct($path, $type, null);
    }
}
