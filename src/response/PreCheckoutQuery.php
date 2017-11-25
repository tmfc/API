<?php namespace api\response;

/**
 * Class PreCheckoutQuery
 * @package api\response
 * @link https://core.telegram.org/bots/api#precheckoutquery
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property string id
 * @property User from
 * @property string currency
 * @property int total_amount
 * @property string invoice_payload
 * @property string shipping_option_id
 * @property OrderInfo order_info
 *
 * @method bool hasShippingOptionId()
 * @method bool hasOrderInfo()
 * @method string getId()
 * @method User getFrom()
 * @method string getCurrency()
 * @method int getTotalAmount()
 * @method string getInvoicePayload()
 * @method string getShippingOptionId($default = null)
 * @method OrderInfo getOrderInfo($default = null)
 */
class PreCheckoutQuery extends Response
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
            'order_info' => OrderInfo::className()
        ];
    }
}