<?php namespace api\response;

/**
 * Class Invoice
 * @package api\response
 * @link https://core.telegram.org/bots/api#invoice
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property string title
 * @property string description
 * @property string start_parameter
 * @property string currency
 * @property int total_amount
 *
 * @method string getTitle()
 * @method string getDescription()
 * @method string getStartParameter()
 * @method string getCurrency()
 * @method int getTotalAmount()
 */
class Invoice extends Response
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