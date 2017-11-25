<?php namespace api\response;

/**
 * Class Video
 * @package api\response
 * @link https://core.telegram.org/bots/api#video
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property string file_id
 * @property int width
 * @property int height
 * @property int duration
 * @property PhotoSize thumb
 * @property string mime_type
 * @property int file_size
 *
 * @method bool hasThumb()
 * @method bool hasMimeType()
 * @method bool hasFileSize()
 * @method string getFileId()
 * @method int getWidth()
 * @method int getHeight()
 * @method int getDuration()
 * @method PhotoSize getThumb($default = null)
 * @method string getMimeType($default = null)
 * @method int getFileSize($default = null)
 */
class Video extends Response
{

    const MP4 = 'video/mp4';
    const HTML = 'text/html';

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