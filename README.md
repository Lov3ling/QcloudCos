# QcloudCos


在Laravel中集成腾讯云cos储存扩展

安装
`composer require ysandreew/qcloud-cos`

注册服务提供者以及代理
```
"providers" =>[
   Lee\QcloudCos\QcloudCosServiceProvider::class,
],
"aliases" =>[
  'QcloudCos'=>Lee\QcloudCos\Facades\QcloudCos::class
]
```

发布配置文件至config/qcloud.php

`php artisan vendor:publish --provider="Lee\QcloudCos\QcloudCosServiceProvider"`

在配置文件添加你的腾讯云app_id以及秘钥
```
return[
    'app_id' => '123456789',
    'secret_id' => 'xxxxxxxxxxxxxxxxxx',
    'secret_key' => 'xxxxxxxxxxxxxxxxxxxx',
    'timeout' => 60
];

```

配置完成后即可在Laravel中操作Cos存储

```

use Lee\QcloudCos\Facades\QcloudCos;
   //
·  QcloudCos::createFolder('bucketName','folder')
```

更多方法参照[腾讯云cos储存sdk文档](https://cloud.tencent.com/document/product/436/6274)
