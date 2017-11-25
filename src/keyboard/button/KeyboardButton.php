<?php namespace api\keyboard\button;

/**
 * Class KeyboardButton
 * @package api\keyboard\button
 * @link https://core.telegram.org/bots/api#keyboardbutton
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property string text
 * @property bool request_contact
 * @property bool request_location
 *
 * @method bool hasText()
 * @method bool hasRequestContact()
 * @method bool hasRequestLocation()
 * @method $this setText($string)
 * @method $this setRequestContact($boolean)
 * @method $this setRequestLocation($boolean)
 * @method $this remText()
 * @method $this remRequestContact()
 * @method $this remRequestLocation()
 * @method string getText($default = null)
 * @method bool getRequestContact($default = null)
 * @method bool getRequestLocation($default = null)
 */
class KeyboardButton extends Button
{

    /**
     * KeyboardButton constructor.
     * @param array|string $properties
     */
    public function __construct($properties = [])
    {
        if (is_string($properties)) {
            $this->text = $properties;
            $properties = [];
        }

        parent::__construct($properties);
    }
}
