<?php namespace api\response;

/**
 * Class PhotoSize
 * @package api\response
 * @link https://core.telegram.org/bots/api#photosize
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property string file_id
 * @property int width
 * @property int height
 * @property int file_size
 *
 * @method bool hasFileSize()
 * @method string getFileId()
 * @method int getWidth()
 * @method int getHeight()
 * @method int getFileSize($default = null)
 */
class PhotoSize extends Response
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