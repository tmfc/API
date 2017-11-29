<?php namespace api\base;

use api\exceptions\InvalidTokenException;

/**
 * Class Token
 * @package api\base
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.5.5
 *
 * @property int id
 * @property string key
 */
class Token extends \yii\base\Object
{

    const PATTERN = '/(\d+)\:(.*)/';

    /**
     * @var int
     */
    private $_id;

    /**
     * @var string
     */
    private $_key;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->_key;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->_id . ':' . $this->_key;
    }

    /**
     * Token constructor.
     * @param string $token
     */
    public function __construct($token)
    {
        $pattern = self::PATTERN;
        $preg = @preg_match($pattern, $token, $matches);
        if ($preg && sizeof($matches) === 3) {
            $this->_id = intval($matches[1]);
            $this->_key = $matches[2];
        }
        else {
            $message = 'Invalid Token: ' . $token;
            throw new InvalidTokenException($message);
        }

        parent::__construct();
    }
}