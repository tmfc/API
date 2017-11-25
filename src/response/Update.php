<?php namespace api\response;

/**
 * Class Update
 * @package api\response
 * @link https://core.telegram.org/bots/api#update
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property int update_id
 * @property Message message
 * @property Message edited_message
 * @property Message channel_post
 * @property Message edited_channel_post
 * @property InlineQuery inline_query
 * @property ChosenInlineResult chosen_inline_result
 * @property CallbackQuery callback_query
 * @property ShippingQuery shipping_query
 * @property PreCheckoutQuery pre_checkout_query
 *
 * @method bool hasMessage()
 * @method bool hasEditedMessage()
 * @method bool hasChannelPost()
 * @method bool hasEditedChannelPost()
 * @method bool hasInlineQuery()
 * @method bool hasChosenInlineResult()
 * @method bool hasCallbackQuery()
 * @method bool hasShippingQuery()
 * @method bool hasPreCheckoutQuery()
 * @method int getUpdateId()
 * @method Message getMessage($default = null)
 * @method Message getEditedMessage($default = null)
 * @method Message getChannelPost($default = null)
 * @method Message getEditedChannelPost($default = null)
 * @method InlineQuery getInlineQuery($default = null)
 * @method ChosenInlineResult getChosenInlineResult($default = null)
 * @method CallbackQuery getCallbackQuery($default = null)
 * @method ShippingQuery getShippingQuery($default = null)
 * @method PreCheckoutQuery getPreCheckoutQuery($default = null)
 */
class Update extends Response
{

    /**
     * @return Chat|null
     */
    public function getChat()
    {
        if ($this->hasMessage()) {
            return $this->message->chat;
        }
        if ($this->hasChannelPost()) {
            return $this->channel_post->chat;
        }
        if ($this->hasEditedMessage()) {
            return $this->edited_message->chat;
        }
        if ($this->hasEditedChannelPost()) {
            return $this->edited_channel_post->chat;
        }

        return null;
    }

    /**
     * @return User|null
     */
    public function getFrom()
    {
        if ($this->hasMessage()) {
            return $this->message->from;
        }
        if ($this->hasChannelPost()) {
            return $this->channel_post->from;
        }
        if ($this->hasInlineQuery()) {
            return $this->inline_query->from;
        }
        if ($this->hasCallbackQuery()) {
            return $this->callback_query->from;
        }
        if($this->hasChosenInlineResult()) {
            return $this->chosen_inline_result->from;
        }
        if ($this->hasEditedMessage()) {
            return $this->edited_message->from;
        }
        if ($this->hasEditedChannelPost()) {
            return $this->edited_channel_post->from;
        }
        if ($this->hasShippingQuery()) {
            return $this->shipping_query->from;
        }
        if ($this->hasPreCheckoutQuery()) {
            return $this->pre_checkout_query->from;
        }

        return null;
    }

    /**
     * Every object have relations with other object,
     * in this method we introduce all object we have relations.
     *
     * @return array of objects
     */
    protected function relations()
    {
        return [
            'message' => Message::className(),
            'edited_message' => Message::className(),
            'channel_post' => Message::className(),
            'edited_channel_post' => Message::className(),
            'inline_query' => InlineQuery::className(),
            'chosen_inline_result' => ChosenInlineResult::className(),
            'callback_query' => CallbackQuery::className(),
            'shipping_query' => ShippingQuery::className(),
            'pre_checkout_query' => PreCheckoutQuery::className()
        ];
    }
}