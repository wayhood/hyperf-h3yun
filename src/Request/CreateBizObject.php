<?php

namespace Wayhood\H3yun\Request;

class CreateBizObject extends AbstractRequest
{
    public ?string $Name = ' 创建单个数据';

    // 调用的方法名
    public ?string $ActionName = 'CreateBizObject';

    public bool $IsSubmit = true;

    // 需要查询的表单编码
    public ?string $SchemaCode;

    // 需要查询的数据ID，每个表单都有唯一的ObjectId
    public ?BizObject $BizObject;

    public function getParams(): array
    {
        return [
            'ActionName' => $this->ActionName,
            'SchemaCode' => $this->SchemaCode,
            'BizObject' => (string) $this->BizObject,
            'IsSubmit' => $this->IsSubmit,
        ];
    }
}