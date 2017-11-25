<?php namespace api\response;

/**
 * Class Game
 * @package api\response
 * @link https://core.telegram.org/bots/api#game
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property string title
 * @property string description
 * @property PhotoSize[] photo
 * @property string text
 * @property MessageEntity[] text_entities
 * @property Animation animation
 *
 * @method bool hasText()
 * @method bool hasTextEntities()
 * @method bool hasAnimation()
 * @method string getTitle()
 * @method string getDescription()
 * @method PhotoSize[] getPhoto()
 * @method string getText($default = null)
 * @method MessageEntity[] getTextEntities($default = null)
 * @method Animation getAnimation($default = null)
 */
class Game extends Response
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
            'photo' => PhotoSize::className(),
            'text_entities' => MessageEntity::className(),
            'animation' => Animation::className()
        ];
    }
}