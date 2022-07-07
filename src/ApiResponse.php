<?php

namespace Yzh;

use Yzh\Model\BaseModel;
use Yzh\Model\BaseResponse;

final class ApiResponse
{
    const HTTP_CODE_200 = 200;
    const SERVER_CODE_0000 = '0000';

    public $server_code;
    public $server_data;
    public $server_message;
    public $server_request_id;

    public static function newFromResponse($body, $responseDataClass = "", $responseDecoder = null)
    {
        $resp = new ApiResponse();

        $respData = json_decode($body, true);
        if (isset($respData['code'])) {
            $resp->server_code = $respData['code'];
        }
        if (isset($respData['message'])) {
            $resp->server_message = $respData['message'];
        }

        if (isset($respData['request_id'])) {
            $resp->server_request_id = $respData['request_id'];
        } elseif (isset($respData['requestID'])) {
            $resp->server_request_id = $respData['requestID'];
        } else {
            $resp->server_request_id = "";
        }

        if (empty($respData) || !isset($respData['data']) || !class_exists($responseDataClass)) {
            return $resp;
        }


        $dataObj = new $responseDataClass();
        if ($dataObj instanceof BaseModel) {
            $dataInstanceArray = array();
            foreach ($respData['data'] as $dataArray) {
                $dataInstance = new $responseDataClass();
                foreach ($dataArray as $k => $v) {
                    $dataInstance->{$k} = $v;
                }
                array_push($dataInstanceArray, $dataInstance);
            }
            $resp->server_data = $dataInstanceArray;
        }

        if ($dataObj instanceof BaseResponse) {
            $responseInstance = new $responseDataClass();
            if (is_string($respData['data']) && !is_null($responseDecoder)) {
                $data  = json_decode($responseDecoder->decrypt($respData['data']), true);
            } else {
                $data = $respData['data'];
            }
            foreach ($data as $k => $v) {
                $responseInstance->{$k} = $v;
            }
            $resp->server_data = $responseInstance;
        }

        return $resp;
    }

    public function toArray()
    {
        $ret = array(
            'code' => $this->server_code,
            'message' => $this->server_message,
            'request_id' => $this->server_request_id,
        );
        if (!is_null($this->server_data)) {
            $ret['data'] = $this->server_data;
        }
        return $ret;
    }
}
