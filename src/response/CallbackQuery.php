<?php namespace api\response;

/**
 * Class CallbackQuery
 * @package api\response
 * @link https://core.telegram.org/bots/api#callbackquery
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property string id
 * @property User from
 * @property Message message
 * @property string inline_message_id
 * @property string chat_instance
 * @property string data
 * @property string game_short_name
 *
 * @method bool hasMessage()
 * @method bool hasInlineMessageId()
 * @method bool hasData()
 * @method bool hasGameShortName()
 * @method string getId()
 * @method User getFrom()
 * @method Message getMessage($default = null)
 * @method string getInlineMessageId($default = null)
 * @method string getChatInstance()
 * @method string getData($default = null)
 * @method string getGameShortName($default = null)
 */
class CallbackQuery extends Response
{

    /**
     * Every object have relations with other object,
     * in this method we introduce all object we have relations.
     *
     * @return array of objects
     */
    protected function relations()
    {
        return [
            'from' => User::className(),
            'message' => Message::className()
        ];
    }
}