<?php namespace api\response;

/**
 * Class Venue
 * @package api\response
 * @link https://core.telegram.org/bots/api#venue
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property Location location
 * @property string title
 * @property string address
 * @property string foursquare_id
 *
 * @method bool hasFoursquareId()
 * @method Location getLocation()
 * @method string getTitle()
 * @method string getAddress()
 * @method string getFoursquareId($default = null)
 */
class Venue extends Response
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
            'location' => Location::className()
        ];
    }
}