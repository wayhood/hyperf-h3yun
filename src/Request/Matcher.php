<?php

namespace Wayhood\H3yun\Request;

class Matcher
{
    public string $Type;
    public ?string $Name = null;
    public ?int $Operator = null;
    public ?string $Value = null;
    public ?array $Matchers = [];
    
    public function __toString(): string
    {
        $vars = get_class_vars(__CLASS__);
        $newVars = [];
        foreach($vars as $key => $v) {
            if (!is_null($this->{$key})) {
                $newVars[$key] = $this->{$key};
            }
        }
        return json_encode($newVars);
    }
}