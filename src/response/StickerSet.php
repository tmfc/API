<?php namespace api\response;

/**
 * Class StickerSet
 * @package api\response
 * @link https://core.telegram.org/bots/api#stickerset
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property string name
 * @property string title
 * @property bool contains_masks
 * @property Sticker[] stickers
 *
 * @method string getName()
 * @method string getTitle()
 * @method bool getContainsMasks()
 * @method Sticker[] getStickers()
 */
class StickerSet extends Response
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
            'stickers' => Sticker::className()
        ];
    }
}