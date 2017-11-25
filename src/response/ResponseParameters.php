<?php namespace api\response;

/**
 * Class ResponseParameters
 * @package api\response
 * @link https://core.telegram.org/bots/api#responseparameters
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property int migrate_to_chat_id
 * @property int retry_after
 *
 * @method bool hasMigrateToChatId()
 * @method bool hasRetryAfter()
 * @method int getMigrateToChatId($default = null)
 * @method int getRetryAfter($default = null)
 */
class ResponseParameters extends Response
{

    /**
     * Every object have relations with other object,
     * in this method we introduce all object we have relations.
     *
     * @return array of objects
     */
    protected function relations()
    {
        return [];
    }
}