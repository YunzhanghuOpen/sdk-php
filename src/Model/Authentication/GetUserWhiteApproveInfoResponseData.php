<?php

namespace Yzh\Model\Authentication;

use Yzh\Model\BaseModel;
use Yzh\Model\ResponseDataInterface;

/**

 * Class GetUserWhiteApproveInfoResponseData
 */
class GetUserWhiteApproveInfoResponseData extends BaseModel implements ResponseDataInterface
{
    /**
     * 审核状态 pass：通过 reviewing：审核中 reject：拒绝
     * @var string
     */
    protected $status;
    /**
     * 审核信息
     * @var string
     */
    protected $comment;

    /**
     * 审核状态 pass：通过 reviewing：审核中 reject：拒绝
     * @var string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * 审核状态 pass：通过 reviewing：审核中 reject：拒绝
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * 审核信息
     * @var string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * 审核信息
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }
}
