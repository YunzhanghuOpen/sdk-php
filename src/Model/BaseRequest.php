<?php
namespace Yzh\Model;

abstract class BaseRequest {
    public function getRequestData(){
        $requestData = array();
        foreach (array_keys(get_object_vars($this)) as $property) {
            $requestData[$property] = $this->{$property};
        }
        return $requestData;
    }
}