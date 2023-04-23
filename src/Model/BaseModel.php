<?php

namespace Yzh\Model;

abstract class BaseModel
{
    public function __construct($params = array())
    {
        foreach (array_keys(get_object_vars($this)) as $property) {
            if (isset($params[$property])) {
                $setMethodName = "set" . $this->camelCase($property);
                if (method_exists($this, $setMethodName)) {
                    call_user_func(array($this, $setMethodName), $params[$property]);
                } else {
                    $this->{$property} = $params[$property];
                }
            }
        }
    }

    protected function camelCase($string, $dontStrip = [])
    {
        /*
         * This will take any dash or underscore turn it into a space, run ucwords against
         * it so it capitalizes the first letter in all words separated by a space then it
         * turns and deletes all spaces.
         */
        return lcfirst(str_replace(' ', '', ucwords(preg_replace('/[^a-z0-9' . implode('', $dontStrip) . ']+/', ' ', $string))));
    }
}
