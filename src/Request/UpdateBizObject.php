<?php

namespace Wayhood\H3yun\Request;

class UpdateBizObject extends AbstractRequest
{
    public ?string $Name = ' 更新业务数据';

    // 调用的方法名
    public ?string $ActionName = 'UpdateBizObject';

    // 需要查询的表单编码
    public ?string $SchemaCode;

    // 需要查询的数据ID，每个表单都有唯一的ObjectId
    public string $BizObjectId;

    public BizObject $BizObject;

    public function getParams(): array
    {
        return [
            'ActionName' => $this->ActionName,
            'SchemaCode' => $this->SchemaCode,
            'BizObject' => (string) $this->BizObject,
            'BizObjectId' => $this->BizObjectId,
        ];
    }
}