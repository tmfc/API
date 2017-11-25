<?php namespace api\input;

/**
 * Class InputContactMessageContent
 * @package api\input
 * @link https://core.telegram.org/bots/api#inputcontactmessagecontent
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property string phone_number
 * @property string first_name
 * @property string last_name
 *
 * @method bool hasPhoneNumber()
 * @method bool hasFirstName()
 * @method bool hasLastName()
 * @method $this setPhoneNumber($string)
 * @method $this setFirstName($string)
 * @method $this setLastName($string)
 * @method $this remPhoneNumber()
 * @method $this remFirstName()
 * @method $this remLastName()
 * @method string getPhoneNumber($default = null)
 * @method string getFirstName($default = null)
 * @method string getLastName($default = null)
 */
class InputContactMessageContent extends InputMessageContent
{
}