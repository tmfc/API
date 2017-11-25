<?php namespace api\base;

use api\InputFile;
use yii\helpers\Json;

/**
 * Class Request
 * @package api\base
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
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
        foreach ($this->properties as $param) {
            if ($param instanceof InputFile)
                return true;
        }

        return false;
    }
}