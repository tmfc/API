<?php namespace api\media;

use api\InputFile;
use api\base\Object;
use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/**
 * Class InputMedia
 * @package api\media
 * @link https://core.telegram.org/bots/api#inputmedia
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.5
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
        $className = self::className();
        $baseName = StringHelper::basename($className);

        $mainName = 'InputMedia';
        $replaced = str_replace($mainName, '', $baseName);

        $correctType = Inflector::camel2id($replaced, '_');
        return $correctType;
    }

    /**
     * Initializes the object.
     * This method is invoked at the end of the constructor after
     * the object is initialized with the given configuration.
     */
    public function init()
    {
        $this->__set('type', $this->typeName());
        parent::init();
    }

    /**
     * @param array $results
     */
    public function addTo(array &$results)
    {
        $results[] = $this;
    }
}