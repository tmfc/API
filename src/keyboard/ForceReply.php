<?php namespace api\keyboard;

/**
 * Class ForceReply
 * @package api\keyboard
 * @link https://core.telegram.org/bots/api#forcereply
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property bool force_reply
 * @property bool selective
 *
 * @method bool hasForceReply()
 * @method bool hasSelective()
 * @method $this setForceReply($bool)
 * @method $this setSelective($bool)
 * @method $this remForceReply()
 * @method $this remSelective()
 * @method True getForceReply($default = null)
 * @method bool getSelective($default = null)
 */
class ForceReply extends Keyboard
{

    /**
     * ForceReply constructor.
     * @param array $properties
     */
    public function __construct(array $properties = [])
    {
        $this->force_reply = true;
        parent::__construct($properties);
    }
}
