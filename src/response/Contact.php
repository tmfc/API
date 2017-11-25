<?php namespace api\response;

/**
 * Class Contact
 * @package api\response
 * @link https://core.telegram.org/bots/api#contact
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property string phone_number
 * @property string first_name
 * @property string last_name
 * @property int user_id
 *
 * @method bool hasLastName()
 * @method bool hasUserId()
 * @method string getPhoneNumber()
 * @method string getFirstName()
 * @method string getLastName($default = null)
 * @method int getUserId($default = null)
 */
class Contact extends Response
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