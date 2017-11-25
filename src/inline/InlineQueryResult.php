<?php namespace api\inline;

use api\base\Object;
use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/**
 * Class InlineQueryResult
 * @package api\inline
 * @link https://core.telegram.org/bots/api#inlinequeryresult
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property string $id
 *
 * @method bool hasId()
 * @method $this setId($string)
 * @method $this remId()
 * @method string getId($default = null)
 *
 */
abstract class InlineQueryResult extends Object
{

    /**
     * @return string
     */
    public static function typeName()
    {
        $className = self::className();
        $baseName = StringHelper::basename($className);

        $mainName = 'InlineQueryResult';
        $replaces = [$mainName, $mainName . 'Cached'];
        $replaced = str_replace($replaces, '', $baseName);

        $correctType = Inflector::camel2id($replaced, '_');
        return $correctType;
    }

    /**
     * InlineQueryResult constructor.
     * @param array|string $properties
     */
    public function __construct($properties = [])
    {
        $this->__set('type', $this->typeName());
        parent::__construct($properties);
    }
}
