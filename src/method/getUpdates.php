<?php namespace api\method;

use api\response\Error;
use api\response\Update;

/**
 * Class getUpdates
 * @package api\method
 * @link https://core.telegram.org/bots/api#getupdates
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property int offset
 * @property int limit
 * @property int timeout
 * @property array allowed_updates
 *
 * @method Update[]|Error send()
 * @method bool hasOffset()
 * @method bool hasLimit()
 * @method bool hasTimeout()
 * @method bool hasAllowedUpdates()
 * @method $this setOffset($integer)
 * @method $this setLimit($integer)
 * @method $this setTimeout($integer)
 * @method $this setAllowedUpdates($array)
 * @method $this remOffset()
 * @method $this remLimit()
 * @method $this remTimeout()
 * @method $this remAllowedUpdates()
 * @method int getOffset($default = null)
 * @method int getLimit($default = null)
 * @method int getTimeout($default = null)
 * @method array getAllowedUpdates($default = null)
 */
class getUpdates extends Method
{
    
    /**
     * every methods have a response.
     * @return string the name of response class
     */
    protected function response()
    {
        return Update::className();
    }
}