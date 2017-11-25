<?php namespace api\response;

/**
 * Class Location
 * @package api\response
 * @link https://core.telegram.org/bots/api#location
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property float longitude
 * @property float latitude
 *
 * @method float getLongitude()
 * @method float getLatitude()
 */
class Location extends Response
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