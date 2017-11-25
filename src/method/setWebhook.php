<?php namespace api\method;

use api\InputFile;
use api\response\Error;

/**
 * Class setWebhook
 * @package api\method
 * @link https://core.telegram.org/bots/api#setwebhook
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property string url
 * @property InputFile certificate
 * @property int max_connections
 * @property array allowed_updates
 *
 * @method true|Error send()
 * @method bool hasUrl()
 * @method bool hasCertificate()
 * @method bool hasMaxConnections()
 * @method bool hasAllowedUpdates()
 * @method $this setUrl($string)
 * @method $this setCertificate(InputFile $file)
 * @method $this setMaxConnections($integer)
 * @method $this setAllowedUpdates($array)
 * @method $this remUrl()
 * @method $this remCertificate()
 * @method $this remMaxConnections()
 * @method $this remAllowedUpdates()
 * @method string getUrl($default = null)
 * @method InputFile getCertificate($default = null)
 * @method int getMaxConnections($default = null)
 * @method array getAllowedUpdates($default = null)
 */
class setWebhook extends Method
{

    /**
     * every methods have a response.
     * @return string the name of response class
     */
    protected function response()
    {
        return true;
    }
}