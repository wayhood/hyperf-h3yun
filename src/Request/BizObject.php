<?php

namespace Wayhood\H3yun\Request;

class BizObject
{
    public ?string $CreateBy;
    public ?string $OwnerId;
    private array $fields = [];

    public function __set($name, $value) {
        $this->fields[$name] = $value;
    }

    public function __toString(): string
    {
        $vars = get_class_vars(__CLASS__);
        $newVars = [];
        foreach($vars as $key => $value) {
            if ($key == 'fields') {
                foreach($this->fields as $k => $v) {
                    $newVars[$k] = $v;
                }
            } else {
                $newVars[$key] = $this->{$key};
            }
        }
        return json_encode($newVars);
    }



}