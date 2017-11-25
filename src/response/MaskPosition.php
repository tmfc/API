<?php namespace api\response;

/**
 * Class MaskPosition
 * @package api\response
 * @link https://core.telegram.org/bots/api#maskposition
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property string point
 * @property float x_shift
 * @property float y_shift
 * @property float scale
 *
 * @method string getPoint()
 * @method float getXShift()
 * @method float getYShift()
 * @method float getScale()
 */
class MaskPosition extends Response
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