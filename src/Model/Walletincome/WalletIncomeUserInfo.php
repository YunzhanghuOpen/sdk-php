<?php

namespace Yzh\Model\Walletincome;

use Yzh\Model\BaseModel;

/**
 * 劳动者信息
 * Class WalletIncomeUserInfo
 */
class WalletIncomeUserInfo extends BaseModel
{
    /**
     * 姓名
     * @var string
     */
    protected $real_name;
    /**
     * 证件号
     * @var string
     */
    protected $id_card;
    /**
     * 证件类型编码
     * @var string
     */
    protected $card_type;
    /**
     * 手机号
     * @var string
     */
    protected $phone_no;

    /**
     * 姓名
     * @var string $real_name
     */
    public function setRealName($real_name)
    {
        $this->real_name = $real_name;
    }

    /**
     * 姓名
     * @return string
     */
    public function getRealName()
    {
        return $this->real_name;
    }

    /**
     * 证件号
     * @var string $id_card
     */
    public function setIdCard($id_card)
    {
        $this->id_card = $id_card;
    }

    /**
     * 证件号
     * @return string
     */
    public function getIdCard()
    {
        return $this->id_card;
    }

    /**
     * 证件类型编码
     * @var string $card_type
     */
    public function setCardType($card_type)
    {
        $this->card_type = $card_type;
    }

    /**
     * 证件类型编码
     * @return string
     */
    public function getCardType()
    {
        return $this->card_type;
    }

    /**
     * 手机号
     * @var string $phone_no
     */
    public function setPhoneNo($phone_no)
    {
        $this->phone_no = $phone_no;
    }

    /**
     * 手机号
     * @return string
     */
    public function getPhoneNo()
    {
        return $this->phone_no;
    }
}
