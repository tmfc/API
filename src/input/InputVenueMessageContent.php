<?php namespace api\input;

/**
 * Class InputVenueMessageContent
 * @package api\input
 * @link https://core.telegram.org/bots/api#inputvenuemessagecontent
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property float latitude
 * @property float longitude
 * @property string title
 * @property string address
 * @property string foursquare_id
 *
 * @method bool hasLatitude()
 * @method bool hasLongitude()
 * @method bool hasTitle()
 * @method bool hasAddress()
 * @method bool hasFoursquareId()
 * @method $this setLatitude($float)
 * @method $this setLongitude($float)
 * @method $this setTitle($string)
 * @method $this setAddress($string)
 * @method $this setFoursquareId($string)
 * @method $this remLatitude()
 * @method $this remLongitude()
 * @method $this remTitle()
 * @method $this remAddress()
 * @method $this remFoursquareId()
 * @method float getLatitude($default = null)
 * @method float getLongitude($default = null)
 * @method string getTitle($default = null)
 * @method string getAddress($default = null)
 * @method string getFoursquareId($default = null)
 */
class InputVenueMessageContent extends InputMessageContent
{
}