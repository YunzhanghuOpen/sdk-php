<?php

namespace Yzh;

use Yzh\Exception\RunTimeException;
use Yzh\Model\Notify\NotifyRequest;
use Yzh\Model\Notify\NotifyResponse;

class NotifyClient extends BaseClient
{
    /**
     * 异步回调验签和解密
     * @param NotifyRequest $request
     * @return NotifyResponse
     * @throws RunTimeException
     */
    public function verifyAndDescrype($request)
    {
        $response = new NotifyResponse();

        if ($this->sign_type == Config::SIGN_TYPE_RSA) {
            if (!$this->verifyRSA($request)) {
                $response->setSignRes(false);
                return $response;
            }
            $response->setSignRes(true);
        } else {
            if (!$this->verifyHmac($request)) {
                $response->setSignRes(false);
                return $response;
            }
            $response->setSignRes(true);
        }

        $decryptRes = $this->des->decrypt($request->getData());
        if ($decryptRes == null) {
            $response->setDecryptRes(false);
            return $response;
        }

        $response->setDecryptRes(true);
        $response->setData($decryptRes);
        return $response;
    }

    /**
     * 异步回调验签
     * @param NotifyRequest $request
     * @return bool
     */
    public function verifyRSA($request)
    {
        return $this->rsa->verify($this->getPain($request), $request->getSign());
    }


    public function verifyHmac($request)
    {
        return $this->hmac->verify($this->getPain($request), $request->getSign());
    }

    /**
     * @param NotifyRequest $request
     */
    public function getPain($request)
    {
        return join("", array(
            "data=", $request->getData(),
            "&mess=", $request->getMess(),
            "&timestamp=", $request->getTimestamp(),
            "&key=", $this->app_key
        ));
    }
}
