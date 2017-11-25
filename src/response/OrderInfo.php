<?php namespace api\response;

/**
 * Class OrderInfo
 * @package api\response
 * @link https://core.telegram.org/bots/api#orderinfo
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property string name
 * @property string phone_number
 * @property string email
 * @property ShippingAddress shipping_address
 *
 * @method bool hasName()
 * @method bool hasPhoneNumber()
 * @method bool hasEmail()
 * @method bool hasShippingAddress()
 * @method string getName($default = null)
 * @method string getPhoneNumber($default = null)
 * @method string getEmail($default = null)
 * @method ShippingAddress getShippingAddress($default = null)
 */
class OrderInfo extends Response
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
            'shipping_address' => ShippingAddress::className()
        ];
    }
}