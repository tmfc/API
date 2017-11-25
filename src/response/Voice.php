<?php namespace api\response;

/**
 * Class Voice
 * @package api\response
 * @link https://core.telegram.org/bots/api#voice
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property string file_id
 * @property int duration
 * @property string mime_type
 * @property int file_size
 *
 * @method bool hasMimeType()
 * @method bool hasFileSize()
 * @method string getFileId()
 * @method int getDuration()
 * @method string getMimeType($default = null)
 * @method int getFileSize($default = null)
 */
class Voice extends Response
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