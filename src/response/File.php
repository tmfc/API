<?php namespace api\response;

/**
 * Class File
 * @package api\response
 * @link https://core.telegram.org/bots/api#file
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property string file_id
 * @property int file_size
 * @property string file_path
 *
 * @method bool hasFileSize()
 * @method bool hasFilePath()
 * @method string getFileId()
 * @method int getFileSize($default = null)
 * @method string getFilePath($default = null)
 */
class File extends Response
{

    /**
     * Every object have relations with other object,
     * in this method we introduce all object we have relations.
     *
     * @return array of objects
     */
    protected function relations()
    {
        return [];
    }
}