<?php namespace api\response;

/**
 * Class Error
 * @package api\response
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property int error_code
 * @property ResponseParameters parameters
 * @property string description
 *
 * @method bool hasErrorCode()
 * @method bool hasParameters()
 * @method bool hasDescription()
 * @method int getErrorCode()
 * @method ResponseParameters getParameters($default = null)
 * @method string getDescription()
 */
class Error extends Response
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
            'parameters' => ResponseParameters::className()
        ];
    }
}