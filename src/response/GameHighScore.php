<?php namespace api\response;

/**
 * Class GameHighScore
 * @package api\response
 * @link https://core.telegram.org/bots/api#gamehighscore
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property int position
 * @property User user
 * @property int score
 *
 * @method int getPosition()
 * @method User getUser()
 * @method int getScore()
 */
class GameHighScore extends Response
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