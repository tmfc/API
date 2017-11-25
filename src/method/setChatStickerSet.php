<?php namespace api\method;

use api\response\Error;

/**Class setChatStickerSet
 * @package api\method
 * @link https://core.telegram.org/bots/api#setchatstickerset
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property int|string chat_id
 * @property string sticker_set_name
 *
 * @method true|Error send()
 * @method bool hasChatId()
 * @method bool hasStickerSetName()
 * @method $this setChatId($string)
 * @method $this setStickerSetName($string)
 * @method $this remChatId()
 * @method $this remStickerSetName()
 * @method string|int getChatId($default = null)
 * @method string getStickerSetName($default = null)
 */
class setChatStickerSet extends Method
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