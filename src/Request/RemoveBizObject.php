<?php

namespace Wayhood\H3yun\Request;

class RemoveBizObject extends AbstractRequest
{
    public ?string $Name = '删除业务数据';

    // 调用的方法名
    public ?string $ActionName = 'RemoveBizObject';

    // 需要查询的表单编码
    public ?string $SchemaCode;

    // 需要查询的数据ID，每个表单都有唯一的ObjectId
    public ?string $BizObjectId;
    
    public function getParams(): array
    {
        return [
            'ActionName' => $this->ActionName,
            'SchemaCode' => $this->SchemaCode,
            'BizObjectId' => $this->BizObjectId,
        ];
    }
}