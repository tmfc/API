<?php namespace api\response;

/**
 * Class VideoNote
 * @package api\response
 * @link https://core.telegram.org/bots/api#videonote
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property string file_id
 * @property int length
 * @property int duration
 * @property PhotoSize thumb
 * @property int file_size
 *
 * @method bool hasThumb()
 * @method bool hasFileSize()
 * @method string getFileId()
 * @method int getLength()
 * @method int getDuration()
 * @method PhotoSize getThumb($default = null)
 * @method int getFileSize($default = null)
 */
class VideoNote extends Response
{

    /**
     * Every object have relations with other object,
     * in this method we introduce all object we have relations.
     *
     * @return array of objects
     */
    protected function relations()
    {
        return [
            'thumb' => PhotoSize::className()
        ];
    }
}