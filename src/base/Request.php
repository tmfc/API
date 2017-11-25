<?php namespace api\base;

use api\InputFile;
use yii\helpers\Json;
use api\media\InputMedia;
use yii\helpers\ArrayHelper as AH;

/**
 * Class Request
 * @package api\base
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.5
 */
class Request extends Object
{

    const SERVER = 'api.telegram.org';

    /**
     * @var string
     */
    protected $token;

    /**
     * Request constructor.
     * @param string $token
     * @param array $params
     */
    public function __construct($token, $params = [])
    {
        $this->token = $token;
        parent::__construct($params);
    }

    /**
     * @param string $name
     * @return bool
     */
    public function has($name)
    {
        return $this->__isset($name);
    }

    /**
     * @param string $name
     * @return $this
     */
    public function delete($name)
    {
        $this->__unset($name);
        return $this;
    }

    /**
     * @param string $name
     * @param mixed $value
     * @return $this
     */
    public function set($name, $value)
    {
        $this->__set($name, $value);
        return $this;
    }

    /**
     * @param string $name
     * @param mixed $default
     * @return mixed
     */
    public function get($name, $default = null)
    {
        if ($this->__isset($name)) {
            return $this->__get($name);
        }

        return $default;
    }

    /**
     * @return array
     */
    public function send()
    {
        $curl = new Curl();
        $curl->setOption(CURLOPT_TIMEOUT, 30);
        $curl->setOption(CURLOPT_HEADER, false);
        $curl->setOption(CURLOPT_RETURNTRANSFER, true);
        $curl->setOption(CURLOPT_SSL_VERIFYPEER, false);
        if ($this->hasFile()) $curl->setOptions([
            CURLOPT_SAFE_UPLOAD => true,
            CURLOPT_HTTPHEADER  => [
                'Content-Type: multipart/form-data'
            ]
        ]);

        $params = [];
        foreach ($this->__array() as $key => $value) {
            if (is_array($value)) {
                if (AH::isIndexed($value)) {
                    $valueObj = $this->get($key);
                    foreach ($valueObj as $index => $item) {
                        if (
                            $item instanceof InputMedia &&
                            $item->media instanceof InputFile
                        ) {
                            $fileName = $item->media->getFilename();
                            $id = 'file_' . md5($fileName);

                            $field = $item->__array();
                            $field['media'] = 'attach://' . $id;

                            $value[$index] = $field;
                            $params[$id] = $item->media;
                        }
                    }
                }

                $params[$key] = Json::encode($value);
                continue;
            }

            $params[$key] = $value;
        }

        $curl->setOption(CURLOPT_POSTFIELDS, $params);
        $hostInfo = 'https://' . self::SERVER . '/bot';
        $apiAddress = $hostInfo . $this->token . '/';
        return $curl->post($apiAddress, true);
    }

    /**
     * @return bool
     */
    private function hasFile()
    {
        $exist = false;
        $params = $this->__array();
        array_walk_recursive($params,
            function ($param) use (&$exist) {
                if ($param instanceof InputFile)
                    $exist = true;

                var_dump($param);
            }
        );

        return $exist;
    }
}