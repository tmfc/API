<?php namespace api\response;

/**
 * Class ChosenInlineResult
 * @package api\response
 * @link https://core.telegram.org/bots/api#choseninlineresult
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property string result_id
 * @property User from
 * @property Location location
 * @property string inline_message_id
 * @property string query
 *
 * @method bool hasLocation()
 * @method bool hasInlineMessageId()
 * @method string getResultId()
 * @method User getFrom()
 * @method Location getLocation($default = null)
 * @method string getInlineMessageId($default = null)
 * @method string getQuery()
 */
class ChosenInlineResult extends Response
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
            'location' => Location::className()
        ];
    }
}