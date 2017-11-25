<?php namespace api\response;

/**
 * Class ChatPhoto
 * @package api\response
 * @link https://core.telegram.org/bots/api#chatphoto
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property bool small_file_id
 * @property bool big_file_id
 *
 * @method bool getSmallFileId()
 * @method bool getBigFileId()
 */
class ChatPhoto extends Response
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