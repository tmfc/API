<?php namespace api\input;

/**
 * Class InputLocationMessageContent
 * @package api\input
 * @link https://core.telegram.org/bots/api#inputlocationmessagecontent
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property float latitude
 * @property float longitude
 * @property int live_period
 *
 * @method bool hasLatitude()
 * @method bool hasLongitude()
 * @method $this setLatitude($float)
 * @method $this setLongitude($float)
 * @method $this remLatitude()
 * @method $this remLongitude()
 * @method float getLatitude($default = null)
 * @method float getLongitude($default = null)
 */
class InputLocationMessageContent extends InputMessageContent
{
}