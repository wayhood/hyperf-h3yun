<?php

namespace Wayhood\H3yun\Request;

class LoadBizObjects extends AbstractRequest
{
    public ?string $Name = '批量查询业务数据';

    // 调用的方法名
    public ?string $ActionName = 'LoadBizObjects';

    // 需要查询的表单编码
    public ?string $SchemaCode;

    // 过滤条件。默认返回前500条数据
    public Filter $Filter;

    public function getParams(): array
    {
        return [
            'ActionName' => $this->ActionName,
            'SchemaCode' => $this->SchemaCode,
            'Filter' => (string) $this->Filter,
        ];
    }
}