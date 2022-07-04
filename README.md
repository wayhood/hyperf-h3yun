# hyperf-h3yun

config
```
php80 bin/hyperf.php vendor:publish wayhood/hyperf-h3yun
```

add in .env
```
H3YUN_ENGINE_CODE=code
H3YUN_ENGINE_SECRET=secret
```

## 创建单条
```
// 创建单条数据
$bo = make(BizObject::class);
$bo->CreateBy = 'ceab5269-e6e2-47fb-aea8-373066282927';
$bo->OwnerId = 'ceab5269-e6e2-47fb-aea8-373066282927';
$bo->F0000001 = '1111';
$bo->F0000002 = '33333';
$bo->F0000003 = 'e7b59392-1e14-4186-a5ea-ecd2e96e0486';
$bo->F0000004 = '26e1e269-4260-404d-a43d-7a8760f4e140;e7b59392-1e14-4186-a5ea-ecd2e96e0486';
$bo->D000576F1dc00a7c18ae474a8be9efe0f9ff96cc = [
    [
        "F0000005" => 's11111',
        "F0000006" => 's22222',
    ],
    [
        "F0000005" => 's33333',
        "F0000006" => 's44444',
    ],
];
$cbo = make(CreateBizObject::class);
$cbo->SchemaCode = 'D000576df832c5a92c74d398c60698c5da7ddb5';
$cbo->BizObject = $bo;
$ret = $cbo->request();
print_r($ret);
```

## 创建多条
```
// 创建多条
$cbos = make(CreateBizObjects::class);
$cbos->SchemaCode = 'D000576df832c5a92c74d398c60698c5da7ddb5';
$cbos->BizObjectArray = [
    (string) $bo,
    (string) $bo,
    (string) $bo,
    (string) $bo,
    (string) $bo,
];
$ret = $cbos->request();
print_r($ret);
```

## 查询列表
```
// 列表
$matcher = make(Matcher::class);
$matcher->Type = 'And';

$filter = make(Filter::class);
$filter->FromRowNum = 0;
$filter->RequireCount = false;
$filter->ReturnItems = [];
$filter->SortByCollection = [];
$filter->Matcher = $matcher;

$lbos = make(LoadBizObjects::class);
$lbos->SchemaCode = 'D000576df832c5a92c74d398c60698c5da7ddb5';
$lbos->Filter = $filter;
$ret = $lbos->request();
print_r($ret);
```

## 查询单条
```
$lbo = make(LoadBizObject::class);
$lbo->SchemaCode = 'D000576df832c5a92c74d398c60698c5da7ddb5';
$lbo->BizObjectId = 'b821ec06-b5c5-46eb-a314-2e29897b1961';
$ret = $lbo->request();
print_r($ret);
 ```

