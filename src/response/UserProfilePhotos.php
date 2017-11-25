<?php namespace api\response;

/**
 * Class UserProfilePhotos
 * @package api\response
 * @link https://core.telegram.org/bots/api#userprofilephotos
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property int total_count
 * @property array photos
 *
 * @method int getTotalCount()
 * @method array getPhotos()
 */
class UserProfilePhotos extends Response
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
            'photos' => PhotoSize::className()
        ];
    }
}