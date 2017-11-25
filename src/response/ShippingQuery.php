<?php namespace api\response;

/**
 * Class ShippingQuery
 * @package api\response
 * @link https://core.telegram.org/bots/api#shippingquery
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property string id
 * @property User from
 * @property string invoice_payload
 * @property ShippingAddress shipping_address
 *
 * @method string getId()
 * @method User getFrom()
 * @method string getInvoicePayload()
 * @method ShippingAddress getShippingAddress()
 */
class ShippingQuery extends Response
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
            'from' => User::className(),
            'shipping_address' => ShippingAddress::className()
        ];
    }
}