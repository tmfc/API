<?php namespace api\keyboard;

use api\keyboard\button\KeyboardButton;

/**
 * Class ReplyKeyboardMarkup
 * @package api\keyboard
 * @link https://core.telegram.org/bots/api#replykeyboardmarkup
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property array keyboard
 * @property bool resize_keyboard
 * @property bool one_time_keyboard
 * @property bool selective
 *
 * @method bool hasKeyboard()
 * @method bool hasResizeKeyboard()
 * @method bool hasOneTimeKeyboard()
 * @method bool hasSelective()
 * @method $this setKeyboard($array)
 * @method $this setResizeKeyboard($boolean)
 * @method $this setOneTimeKeyboard($boolean)
 * @method $this setSelective($boolean)
 * @method $this remKeyboard()
 * @method $this remResizeKeyboard()
 * @method $this remOneTimeKeyboard()
 * @method $this remSelective()
 * @method array getKeyboard($default = null)
 * @method bool getResizeKeyboard($default = null)
 * @method bool getOneTimeKeyboard($default = null)
 * @method bool getSelective($default = null)
 */
class ReplyKeyboardMarkup extends Keyboard
{

    /**
     * ReplyKeyboardMarkup constructor.
     * @param array $properties
     */
    public function __construct($properties = [])
    {
        $this->resize_keyboard = true;
        parent::__construct($properties);
    }

    /**
     * @param int $row
     * @param int $column
     * @return $this
     */
    public function deleteButton($row, $column = null)
    {
        if ($this->hasKeyboard()) {
            $keyboard = $this->keyboard;

            if (is_int($row)) {
                if (is_int($column))
                    unset($keyboard[$row][$column]);
                else
                    unset($keyboard[$row]);
            }

            $this->keyboard = $keyboard;
        }

        return $this;
    }

    /**
     * @param KeyboardButton $button
     * @param int $row
     * @param int $column
     * @return $this
     */
    public function addButton($button, $row = null, $column = null)
    {
        $index = 0;
        $keyboard = [];

        if ($this->hasKeyboard()) {
            $keyboard = $this->keyboard;

            if (is_int($row))
                $index = $row > 0 ? $row  : 0;

            else if ($row == null && sizeof($keyboard) > 0)
                $index = sizeof($keyboard) - 1;

            else $index++;
        }

        if (is_int($column))
            $keyboard[$index][$column] = $button;
        else
            $keyboard[$index][] = $button;

        $this->keyboard = $keyboard;
        return $this;
    }
}
