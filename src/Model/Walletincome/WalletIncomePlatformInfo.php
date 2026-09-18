<?php

namespace Yzh\Model\Walletincome;

use Yzh\Model\BaseModel;

/**
 * 平台信息
 * Class WalletIncomePlatformInfo
 */
class WalletIncomePlatformInfo extends BaseModel
{
    /**
     * 互联网平台名称
     * @var string
     */
    protected $platform_name;
    /**
     * 劳动者 ID
     * @var string
     */
    protected $user_id;
    /**
     * 劳动者名称或昵称
     * @var string
     */
    protected $user_nickname;

    /**
     * 互联网平台名称
     * @var string $platform_name
     */
    public function setPlatformName($platform_name)
    {
        $this->platform_name = $platform_name;
    }

    /**
     * 互联网平台名称
     * @return string
     */
    public function getPlatformName()
    {
        return $this->platform_name;
    }

    /**
     * 劳动者 ID
     * @var string $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * 劳动者 ID
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * 劳动者名称或昵称
     * @var string $user_nickname
     */
    public function setUserNickname($user_nickname)
    {
        $this->user_nickname = $user_nickname;
    }

    /**
     * 劳动者名称或昵称
     * @return string
     */
    public function getUserNickname()
    {
        return $this->user_nickname;
    }
}
