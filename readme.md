# 检测类型

检测中国的身份证格式与港澳台居民居住证是否正确

# 检测方式

```php

IdCard::check('5100199909090009');

```

# laravel专用

```php
$v = Validator::make($data, [
    'id' =>  new IdCardRule(),
]);

```