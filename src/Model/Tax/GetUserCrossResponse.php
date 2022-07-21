<?php

namespace Yzh\Model\Tax;

use Yzh\Model\BaseResponse;

/**
 * 查询纳税人是否为跨集团用户返回
 * Class GetUserCrossResponse
 */
class GetUserCrossResponse extends BaseResponse
{

    /**
     * 跨集团标识
     * @var bool
     */
    public $is_cross;
}