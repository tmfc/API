<?php namespace api\response;

/**
 * Class User
 * @package api\response
 * @link https://core.telegram.org/bots/api#user
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property int id
 * @property bool is_bot
 * @property string first_name
 * @property string last_name
 * @property string username
 * @property string language_code
 *
 * @method bool hasLastName()
 * @method bool hasUsername()
 * @method bool hasLanguageCode()
 * @method int getId()
 * @method bool getIsBot()
 * @method string getFirstName()
 * @method string getLastName($default = null)
 * @method string getUsername($default = null)
 * @method string getLanguageCode($default = null)
 */
class User extends Response
{

    /**
     * @return bool True, if this user is a bot
     */
    public function isBot()
    {
        return $this->is_bot == true;
    }

    /**
     * Every object have relations with other object,
     * in this method we introduce all object we have relations.
     *
     * @return array of objects
     */
    protected function relations()
    {
        return [];
    }
}
