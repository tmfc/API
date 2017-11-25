<?php namespace api\response;

/**
 * Class InlineQuery
 * @package api\response
 * @link https://core.telegram.org/bots/api#inlinequery
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property string id
 * @property User from
 * @property Location location
 * @property string query
 * @property string offset
 *
 * @method bool hasLocation()
 * @method string getId()
 * @method User getFrom()
 * @method Location getLocation($default = null)
 * @method string getQuery()
 * @method string getOffset()
 */
class InlineQuery extends Response
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