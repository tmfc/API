<?php namespace api\keyboard;

use api\keyboard\button\InlineKeyboardButton;

/**
 * Class InlineKeyboardMarkup
 * @package api\keyboard
 * @link https://core.telegram.org/bots/api#inlinekeyboardmarkup
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property array inline_keyboard
 *
 * @method bool hasInlineKeyboard()
 * @method $this setInlineKeyboard($array)
 * @method $this remInlineKeyboard()
 * @method array getInlineKeyboard($default = null)
 */
class InlineKeyboardMarkup extends Keyboard
{

    /**
     * InlineKeyboardMarkup constructor.
     * @param array $inlineKeyboard
     */
    public function __construct($inlineKeyboard = [])
    {
        $this->inline_keyboard = $inlineKeyboard;
        parent::__construct();
    }

    /**
     * @param int $row
     * @param int $column
     * @return $this
     */
    public function deleteButton($row, $column = null)
    {
        if ($this->hasInlineKeyboard()) {
            $keyboard = $this->inline_keyboard;

            if (is_int($row)) {
                if (is_int($column))
                    unset($keyboard[$row][$column]);
                else
                    unset($keyboard[$row]);
            }

            $this->inline_keyboard = $keyboard;
        }

        return $this;
    }

    /**
     * @param InlineKeyboardButton $button
     * @param int $row
     * @param int $column
     * @return $this
     */
    public function addButton($button, $row = null, $column = null)
    {
        $index = 0;
        $keyboard = [];

        if ($this->hasInlineKeyboard()) {
            $keyboard = $this->inline_keyboard;

            if (is_int($row))
                $index = $row > 0 ? $row - 1 : 0;

            else if ($row == null && sizeof($keyboard) > 0)
                $index = sizeof($keyboard) - 1;

            else $index++;
        }

        if (is_int($column))
            $keyboard[$index][$column] = $button;
        else
            $keyboard[$index][] = $button;

        $this->inline_keyboard = $keyboard;
        return $this;
    }
}
