<?php namespace api\method;

use api\response\Error;

/**
 * Class answerPreCheckoutQuery
 * @package api\method
 * @link https://core.telegram.org/bots/api#answerprecheckoutquery
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property string pre_checkout_query_id
 * @property bool ok
 * @property string error_message
 *
 * @method true|Error send()
 * @method bool hasPreCheckoutQueryId()
 * @method bool hasOk()
 * @method bool hasErrorMessage()
 * @method $this setPreCheckoutQueryId($string)
 * @method $this setOk($boolean)
 * @method $this setErrorMessage($string)
 * @method $this remPreCheckoutQueryId()
 * @method $this remOk()
 * @method $this remErrorMessage()
 * @method string getPreCheckoutQueryId($default = null)
 * @method bool getOk($default = null)
 * @method string getErrorMessage($default = null)
 */
class answerPreCheckoutQuery extends Method
{

    /**
     * Every method have a response type.
     * @return string the class's name.
     */
    protected function response()
    {
        return true;
    }
}