# jdcloud-php-sdk-demo
jdcloud php openapi sdk demo


## 如何创建项目

* 需要安装 `Composer` php 包管理器 进行php 包管理，如果直接将文件放到 项目中引用也是可以的，如果使用Composer 具体的安装方法可以参考[PHP 的包管理工具 -- Composer](https://www.jianshu.com/p/5954fe55d067)

* 首先创建项目文件夹，然后创建Composer 需要的文件 `composer.json`

* 在`composer.json` 中添加引用

```json
{
    "require": {
        "jdcloud-api/jdcloud-sdk-php": "^5.2"
    }
}
```

* 在`composer.json` 所在的目录执行 composer install，会自动添加 vendor 文件夹，并下载引用

```bash
 docker run -d --rm -e JDCLOUD_ACCESS_KEY=xxx -e JDCLOUD_SECRET_ACCESS_KEY=xxx -v /Users/lishijun1/Documents/phpworkspace/jdcloud-php-sdk-demo:/var/www/html/ -p 8080:80 php:7.2-apache
```