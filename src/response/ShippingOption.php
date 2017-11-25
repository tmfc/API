<?php namespace api\response;

/**
 * Class ShippingOption
 * @package api\response
 * @link https://core.telegram.org/bots/api#shippingoption
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property string id
 * @property string title
 * @property LabeledPrice[] prices
 *
 * @method bool hasId()
 * @method bool hasTitle()
 * @method bool hasPrices()
 * @method string getId($default = null)
 * @method string getTitle($default = null)
 * @method LabeledPrice[] getPrices($default = null)
 */
class ShippingOption extends Response
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
            'prices' => LabeledPrice::className()
        ];
    }
}