<?php

return [

    /*
    |--------------------------------------------------------------------------
    | 验证语言行
    |--------------------------------------------------------------------------
    |
    | 以下语言行包含验证器使用的默认错误消息。
    | 您可以根据需要自由调整这些语言行，以更符合您的应用需求。
    |
    */

    'accepted' => '必须接受。',
    'active_url' => '不是有效的 URL。',
    'after' => '必须是 :date 之后的日期。',
    'after_or_equal' => '必须是等于或晚于 :date 的日期。',
    'alpha' => '只能包含字母。',
    'alpha_dash' => '只能包含字母、数字、破折号和下划线。',
    'alpha_num' => '只能包含字母和数字。',
    'array' => '必须是一个数组。',
    'before' => '必须是 :date 之前的日期。',
    'before_or_equal' => '必须是等于或早于 :date 的日期。',
    'between' => [
        'numeric' => '必须介于 :min 到 :max 之间。',
        'file' => '必须介于 :min 到 :max KB 之间。',
        'string' => '必须介于 :min 到 :max 个字符之间。',
        'array' => '必须包含 :min 到 :max 个项目。',
    ],
    'boolean' => '字段必须为 true 或 false。',
    'confirmed' => '确认信息不匹配。',
    'date' => '不是有效的日期。',
    'date_equals' => '必须是等于 :date 的日期。',
    'date_format' => '与格式 :format 不匹配。',
    'different' => '必须不同。',
    'digits' => '必须是 :digits 位数字。',
    'digits_between' => '必须介于 :min 到 :max 位数字之间。',
    'dimensions' => ':attribute 的图片尺寸无效。',
    'distinct' => '字段具有重复的值。',
    'email' => '必须是有效的电子邮箱地址。',
    'ends_with' => '必须以以下之一结尾：:values。',
    'exists' => '无效的值。',
    'file' => '必须是一个文件。',
    'filled' => '字段必须有值。',
    'gt' => [
        'numeric' => '必须大于 :value。',
        'file' => '必须大于 :value KB。',
        'string' => '必须多于 :value 个字符。',
        'array' => '必须多于 :value 个项目。',
    ],
    'gte' => [
        'numeric' => '必须大于或等于 :value。',
        'file' => '必须大于或等于 :value KB。',
        'string' => '必须大于或等于 :value 个字符。',
        'array' => '必须至少有 :value 个项目。',
    ],
    'image' => '必须是一张图片。',
    'in' => '无效的值。',
    'in_array' => '字段在 :other 中不存在。',
    'integer' => '必须是整数。',
    'ip' => '必须是有效的 IP 地址。',
    'ipv4' => '必须是有效的 IPv4 地址。',
    'ipv6' => '必须是有效的 IPv6 地址。',
    'json' => '必须是有效的 JSON 字符串。',
    'lt' => [
        'numeric' => '必须小于 :value。',
        'file' => '必须小于 :value KB。',
        'string' => '必须少于 :value 个字符。',
        'array' => '必须少于 :value 个项目。',
    ],
    'lte' => [
        'numeric' => '必须小于或等于 :value。',
        'file' => '必须小于或等于 :value KB。',
        'string' => '必须少于或等于 :value 个字符。',
        'array' => '不能超过 :value 个项目。',
    ],
    'max' => [
        'numeric' => '不能大于 :max。',
        'file' => '不能大于 :max KB。',
        'string' => '不能超过 :max 个字符。',
        'array' => '不能超过 :max 个项目。',
    ],
    'maxlength' => '不能超过 :digits 个字符。',
    'minlength' => '不能少于 :digits 个字符。',
    'mimes' => '文件类型必须是：:values。',
    'mimetypes' => '文件类型必须是：:values。',
    'min' => [
        'numeric' => '至少为 :min。',
        'file' => '至少为 :min KB。',
        'string' => '至少为 :min 个字符。',
        'array' => '至少包含 :min 个项目。',
    ],
    'not_in' => '无效的值。',
    'not_regex' => '格式无效。',
    'numeric' => '必须是数字。',
    'password' => '密码不正确。',
    'present' => '字段必须存在。',
    'regex' => '格式无效。',
    'required' => '字段为必填项。',
    'required_if' => '当 :other 为 :value 时，此字段为必填项。',
    'required_unless' => '除非 :other 在 :values 中，否则此字段为必填项。',
    'required_with' => '当 :values 存在时，此字段为必填项。',
    'required_with_all' => '当 :values 都存在时，此字段为必填项。',
    'required_without' => '当 :values 不存在时，此字段为必填项。',
    'required_without_all' => '当 :values 都不存在时，此字段为必填项。',
    'same' => '必须匹配。',
    'size' => [
        'numeric' => '必须为 :size。',
        'file' => '必须为 :size KB。',
        'string' => '必须为 :size 个字符。',
        'array' => '必须包含 :size 个项目。',
    ],
    'starts_with' => '必须以以下之一开头：:values。',
    'string' => '必须是字符串。',
    'timezone' => '必须是有效的时区。',
    'unique' => ':attribute 已被占用。',
    'uploaded' => '上传失败。',
    'url' => '格式无效。',
    'uuid' => '必须是有效的 UUID。',

    'custom' => [
        'attribute-name' => [
            'rule-name' => '自定义消息',
        ],
    ],

    'attributes' => [],

];
