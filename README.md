#thinkphp5-geetest

### 使用方法
####1、安装扩展
```
composer require lengai/geetest
```
>由于我没发布版本，所有暂时需带dev-master安装

####2、配置参数
安装好扩展后在 application\extra\ 文件夹下会生成 geetest.php 配置文件
####3、设置geetest的密钥
方法如下：在.env 文件里面添加密钥
```
[geetest]
captcha_id=
private_key=
```
