<?php namespace api\response;

/**
 * Class LabeledPrice
 * @package api\response
 * @link https://core.telegram.org/bots/api#labeledprice
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property string label
 * @property int amount
 *
 * @method string getLabel()
 * @method int getAmount()
 */
class LabeledPrice extends Response
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