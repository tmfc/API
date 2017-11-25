<?php namespace api\method;

use api\response\Error;
use api\response\UserProfilePhotos;

/**
 * Class getUserProfilePhotos
 * @package api\method
 * @link https://core.telegram.org/bots/api#getuserprofilephotos
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property int user_id
 * @property int offset
 * @property int limit
 *
 * @method UserProfilePhotos|Error send()
 * @method bool hasUserId()
 * @method bool hasOffset()
 * @method bool hasLimit()
 * @method $this setUserId($integer)
 * @method $this setOffset($integer)
 * @method $this setLimit($integer)
 * @method $this remUserId()
 * @method $this remOffset()
 * @method $this remLimit()
 * @method int getUserId($default = null)
 * @method int getOffset($default = null)
 * @method int getLimit($default = null)
 */
class getUserProfilePhotos extends Method
{

    /**
     * Every method have a response type.
     * @return string the class's name.
     */
    protected function response()
    {
        return UserProfilePhotos::className();
    }
}