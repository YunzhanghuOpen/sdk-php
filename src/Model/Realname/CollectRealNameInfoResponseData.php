<?php

namespace Yzh\Model\Realname;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**

 * Class CollectRealNameInfoResponseData
 */
class CollectRealNameInfoResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 录入状态
     * @var string
     */
    protected $status;

    /**
     * 录入状态
     * @var string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * 录入状态
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
}
