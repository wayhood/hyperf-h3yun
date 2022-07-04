<?php

namespace Wayhood\H3yun\Request;

class Filter
{
    public int $FromRowNum = 0;
    public int|bool $RequireCount = false;
    public array $ReturnItems = [];
    public array $SortByCollection = [];
    public int $ToRowNum = 500;
    public ?Matcher $Matcher;

    public function __toString(): string
    {
        $vars = get_class_vars(__CLASS__);
        $newVars = [];
        foreach($vars as $key => $v) {
            if (!is_null($this->{$key})) {
                if ($this->{$key} instanceof Matcher) {
                    $newVars[$key] = json_decode((string) $this->{$key}, true);
                } else {
                    $newVars[$key] = $this->{$key};
                }
            }
        }
        return json_encode($newVars);
    }


}