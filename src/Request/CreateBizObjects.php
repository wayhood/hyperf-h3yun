<?php

namespace Wayhood\H3yun\Request;

class CreateBizObjects extends AbstractRequest
{
    public ?string $Name = '批量创建业务数据';

    // 调用的方法名
    public ?string $ActionName = 'CreateBizObjects';

    public bool $IsSubmit = true;

    // 需要查询的表单编码
    public ?string $SchemaCode;

    // 需要查询的数据ID，每个表单都有唯一的ObjectId
    public array $BizObjectArray = [];

    public function getParams(): array
    {
        return [
            'ActionName' => $this->ActionName,
            'SchemaCode' => $this->SchemaCode,
            'BizObjectArray' => $this->BizObjectArray,
            'IsSubmit' => $this->IsSubmit,
        ];
    }
}