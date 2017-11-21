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


使用
```
QcloudCos::createFolder('bucketName','folder')
```

更多参照[腾讯云cos储存sdk文档](https://cloud.tencent.com/document/product/436/6274)
