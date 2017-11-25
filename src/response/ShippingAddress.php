<?php namespace api\response;

/**
 * Class ShippingAddress
 * @package api\response
 * @link https://core.telegram.org/bots/api#shippingaddress
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property string country_code
 * @property string state
 * @property string city
 * @property string street_line1
 * @property string street_line2
 * @property string post_code
 *
 * @method string getCountryCode()
 * @method string getState()
 * @method string getCity()
 * @method string getStreetLine1()
 * @method string getStreetLine2()
 * @method string getPostCode()
 */
class ShippingAddress extends Response
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