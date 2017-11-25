<?php namespace api\response;

/**
 * Class CallbackGame
 * @package api\response
 * @link https://core.telegram.org/bots/api#callbackgame
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 */
class CallbackGame extends Response
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