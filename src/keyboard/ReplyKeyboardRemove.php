<?php namespace api\keyboard;

/**
 * Class ReplyKeyboardRemove
 * @package api\keyboard
 * @link https://core.telegram.org/bots/api#replykeyboardremove
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property bool remove_keyboard
 * @property bool selective
 *
 * @method bool hasRemoveKeyboard()
 * @method bool hasSelective()
 * @method $this setRemoveKeyboard($true)
 * @method $this setSelective($boolean)
 * @method $this remRemoveKeyboard()
 * @method $this remSelective()
 * @method true getRemoveKeyboard($default = null)
 * @method bool getSelective($default = null)
 */
class ReplyKeyboardRemove extends Keyboard
{

    /**
     * ReplyKeyboardRemove constructor.
     * @param array $properties
     */
    public function __construct(array $properties = [])
    {
        $this->remove_keyboard = true;
        parent::__construct($properties);
    }
}
