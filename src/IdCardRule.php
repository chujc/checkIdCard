<?php
namespace chujc;

use Illuminate\Contracts\Validation\Rule;

class IdCardRule implements Rule
{

    /**
     * 判断验证规则是否通过。
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return IdCard::check($value);
    }

    /**
     * 获取验证错误信息。
     *
     * @return string
     */
    public function message()
    {
        return '身份证验证失败';
    }
}