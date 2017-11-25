<?php namespace api\response;

/**
 * Class Audio
 * @package api\response
 * @link https://core.telegram.org/bots/api#audio
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property string file_id
 * @property int duration
 * @property string performer
 * @property string title
 * @property string mime_type
 * @property int file_size
 *
 * @method bool hasPerformer()
 * @method bool hasTitle()
 * @method bool hasMimeType()
 * @method bool hasFileSize()
 * @method string getFileId()
 * @method int getDuration()
 * @method string getPerformer($default = null)
 * @method string getTitle($default = null)
 * @method string getMimeType($default = null)
 * @method int getFileSize($default = null)
 */
class Audio extends Response
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