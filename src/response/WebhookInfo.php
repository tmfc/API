<?php namespace api\response;

/**
 * Class WebhookInfo
 * @package api\response
 * @link https://core.telegram.org/bots/api#webhookinfo
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property string url
 * @property bool has_custom_certificate
 * @property int pending_update_count
 * @property int last_error_date
 * @property string last_error_message
 * @property int max_connections
 * @property array allowed_updates
 *
 * @method bool hasLastErrorDate()
 * @method bool hasLastErrorMessage()
 * @method bool hasMaxConnections()
 * @method bool hasAllowedUpdates()
 * @method string getUrl()
 * @method bool getHasCustomCertificate()
 * @method int getPendingUpdateCount()
 * @method int getLastErrorDate($default = null)
 * @method string getLastErrorMessage($default = null)
 * @method int getMaxConnections($default = null)
 * @method array getAllowedUpdates($default = null)
 */
class WebhookInfo extends Response
{

    /**
     * @return bool
     */
    public function hasSetWebhook()
    {
        return !empty($this->url);
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