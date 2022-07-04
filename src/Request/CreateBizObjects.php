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

    /**
     * 需要查询的数据ID，每个表单都有唯一的ObjectId
     * @var BizObject[]
     */
    public array $BizObjectArray = [];

    public function getParams(): array
    {
        $BizObjectArray = [];
        foreach($this->BizObjectArray as $item) {
            if ($item instanceof BizObject) {
                $BizObjectArray[] = (string)$item;
            }
        }

        return [
            'ActionName' => $this->ActionName,
            'SchemaCode' => $this->SchemaCode,
            'BizObjectArray' => $BizObjectArray,
            'IsSubmit' => $this->IsSubmit,
        ];
    }
}