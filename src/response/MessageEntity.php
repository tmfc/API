<?php namespace api\response;

/**
 * Class MessageEntity
 * @package api\response
 * @link https://core.telegram.org/bots/api#messageentity
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property string type
 * @property int offset
 * @property int length
 * @property string url
 * @property User user
 *
 * @method bool hasUrl()
 * @method bool hasUser()
 * @method string getType()
 * @method int getOffset()
 * @method int getLength()
 * @method string getUrl($default = null)
 * @method User getUser($default = null)
 */
class MessageEntity extends Response
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
            'user' => User::className()
        ];
    }
}