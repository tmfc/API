<?php namespace api\media;

use api\InputFile;
use api\base\Object;
use yii\helpers\Inflector as STR;
use yii\helpers\StringHelper as SH;

/**
 * @author MehdiKhody <khody.khoram@gmail.com>
 * @since 1.0.0
 *
 * @property string|InputFile media
 * @property string caption
 *
 * @method bool hasMedia()
 * @method bool hasCaption()
 * @method $this setMedia($file)
 * @method $this setCaption($string)
 * @method $this remMedia()
 * @method $this remCaption()
 * @method string|InputFile getMedia($default = null)
 * @method string getCaption($default = null)
 */
abstract class InputMedia extends Object
{

    /**
     * @return string
     */
    public static function typeName()
    {
        return STR::camel2id(
            str_replace(
                'InputMedia', '',
                SH::basename(self::className())
            ),
            '_'
        );
    }

    /**
     * Initializes the object.
     * This method is invoked at the end of the constructor after
     * the object is initialized with the given configuration.
     */
    public function init()
    {
        $this->__set('type', $this->typeName());
    }
}