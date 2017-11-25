<?php namespace api\inline;

use api\keyboard\InlineKeyboardMarkup;

/**
 * Class InlineQueryResultGame
 * @package api\inline
 * @link https://core.telegram.org/bots/api#inlinequeryresultgame
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property string game_short_name
 * @property InlineKeyboardMarkup reply_markup
 *
 * @method bool hasGameShortName()
 * @method bool hasReplyMarkup()
 * @method $this setGameShortName($string)
 * @method $this setReplyMarkup(InlineKeyboardMarkup $markup)
 * @method $this remGameShortName()
 * @method $this remReplyMarkup()
 * @method string getGameShortName($default = null)
 * @method InlineKeyboardMarkup getReplyMarkup($default = null)
 */
class InlineQueryResultGame extends InlineQueryResult
{
}