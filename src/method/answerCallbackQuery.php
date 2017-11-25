<?php namespace api\method;

use api\response\Error;

/**
 * Class answerCallbackQuery
 * @package api\method
 * @link https://core.telegram.org/bots/api#answercallbackquery
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property string callback_query_id
 * @property string text
 * @property bool show_alert
 * @property string url
 * @property int cache_time
 *
 * @method true|Error send()
 * @method bool hasCallbackQueryId()
 * @method bool hasText()
 * @method bool hasShowAlert()
 * @method bool hasUrl()
 * @method bool hasCacheTime()
 * @method $this setCallbackQueryId($string)
 * @method $this setText($string)
 * @method $this setShowAlert($boolean)
 * @method $this setUrl($string)
 * @method $this setCacheTime($integer)
 * @method $this remCallbackQueryId()
 * @method $this remText()
 * @method $this remShowAlert()
 * @method $this remUrl()
 * @method $this remCacheTime()
 * @method string getCallbackQueryId($default = null)
 * @method string getText($default = null)
 * @method bool getShowAlert($default = null)
 * @method string getUrl($default = null)
 * @method int getCacheTime($default = null)
 */
class answerCallbackQuery extends Method
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