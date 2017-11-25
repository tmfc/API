<?php namespace api\keyboard\button;

use api\response\CallbackGame;

/**
 * Class InlineKeyboardButton
 * @package api\keyboard\button
 * @link https://core.telegram.org/bots/api#inlinekeyboardbutton
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property string text
 * @property string url
 * @property string callback_data
 * @property string switch_inline_query
 * @property string switch_inline_query_current_chat
 * @property CallbackGame callback_game
 * @property bool pay
 *
 * @method bool hasText()
 * @method bool hasUrl()
 * @method bool hasCallbackData()
 * @method bool hasSwitchInlineQuery()
 * @method bool hasSwitchInlineQueryCurrentChat()
 * @method bool hasCallbackGame()
 * @method bool hasPay()
 * @method $this setText($string)
 * @method $this setUrl($string)
 * @method $this setCallbackData($string)
 * @method $this setSwitchInlineQuery($string)
 * @method $this setSwitchInlineQueryCurrentChat($string)
 * @method $this setCallbackGame($callbackGame)
 * @method $this setPay($bool)
 * @method $this remText()
 * @method $this remUrl()
 * @method $this remCallbackData()
 * @method $this remSwitchInlineQuery()
 * @method $this remSwitchInlineQueryCurrentChat()
 * @method $this remCallbackGame()
 * @method $this remPay()
 * @method string getText($default = null)
 * @method string getUrl($default = null)
 * @method string getCallbackData($default = null)
 * @method string getSwitchInlineQuery($default = null)
 * @method string getSwitchInlineQueryCurrentChat($default = null)
 * @method CallbackGame getCallbackGame($default = null)
 * @method bool getPay($default = null)
 */
class InlineKeyboardButton extends Button
{

    /**
     * InlineKeyboardButton constructor.
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
