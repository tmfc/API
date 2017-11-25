<?php namespace api\base;

use yii\helpers\Json;
use yii\base\Exception;
use yii\helpers\ArrayHelper as AH;

/**
 * Class Curl
 * @package api\helpers
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 */
class Curl
{

    /**
     * @var int
     */
    public $code = null;

    /**
     * @var resource
     */
    private $_curl = null;

    /**
     * @var array
     */
    private $_options = [];

    /**
     * @var array
     */
    private $_default_options = [
        CURLOPT_TIMEOUT        => 30,
        CURLOPT_CONNECTTIMEOUT => 30,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER         => false,
        CURLOPT_USERAGENT      => 'Botstan-Agent',
    ];

    /**
     * @param string $key
     * @param mixed $value
     * @return $this
     */
    public function setOption($key, $value)
    {
        $this->_options[$key] = $value;
        return $this;
    }

    /**
     * @param array $options
     * @return $this
     */
    public function setOptions($options)
    {
        foreach ($options as $key => $value) {
            $this->setOption($key, $value);
        }

        return $this;
    }

    /**
     * @param string $key
     * @return $this
     */
    public function unsetOption($key)
    {
        AH::remove($this->_options, $key);
        return $this;
    }

    /**
     * @param array $keys
     * @return $this
     */
    public function unsetOptions($keys)
    {
        foreach ($keys as $key) {
            $this->unsetOption($key);
        }

        return $this;
    }

    /**
     * @param string $key
     * @param mixed $default
     *
     * @return mixed
     */
    public function getOption($key, $default = null)
    {
        $os = $this->getOptions();
        $value = AH::getValue($os, $key, $default);

        return $value;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        $o = $this->_options;
        $do = $this->_default_options;
        return AH::merge($do, $o);
    }

    /**
     * @param string $url
     * @return mixed
     */
    public function head($url)
    {
        return $this->send('HEAD', $url);
    }

    /**
     * @param string $url
     * @param bool $raw
     * @return mixed
     */
    public function get($url, $raw = false)
    {
        return $this->send('GET', $url, $raw);
    }

    /**
     * @param string $url
     * @param bool $raw
     * @return mixed
     */
    public function post($url, $raw = false)
    {
        return $this->send('POST', $url, $raw);
    }

    /**
     * @param string $url
     * @param bool $raw
     * @return mixed
     */
    public function delete($url, $raw = false)
    {
        return $this->send('DELETE', $url, $raw);
    }

    /**
     * @param string $url
     * @param bool $raw
     * @return mixed
     */
    public function put($url, $raw = false)
    {
        return $this->send('PUT', $url, $raw);
    }

    /**
     * @param string $method
     * @param string $url
     * @param bool $raw
     * @return mixed
     */
    public function send($method, $url, $raw = false)
    {
        // method of request
        $method = strtoupper($method);
        $this->setOption(CURLOPT_CUSTOMREQUEST, $method);

        // is head request
        if ($method === 'HEAD') {
            $this->setOption(CURLOPT_NOBODY, true);
            $this->unsetOption(CURLOPT_WRITEFUNCTION);
        }

        // create curl
        $this->_curl = curl_init($url);
        curl_setopt_array($this->_curl, $this->getOptions());

        // sending request
        $response = curl_exec($this->_curl);

        // debugging
        $code = CURLINFO_HTTP_CODE;
        $this->__checkError($response);
        $this->code = curl_getinfo($this->_curl, $code);

        // result
        if ($method === 'HEAD') return true;
        else {
            $result = $raw ? Json::decode($response, true) : $response;
            return $result;
        }
    }

    /**
     * @param mixed $response
     * @throws Exception
     */
    private function __checkError($response)
    {
        if ($response === false) {
            $error = curl_errno($this->_curl);

            if ($error == 7) $this->code = 'timeout';
            else {
                $message = 'Curl request failed: ' . curl_error($this->_curl);
                throw new Exception($message, $error);
            }
        }
    }
}