<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Поље :attribute мора бити прихваћено.',
    'accepted_if' => 'Поље :attribute мора бити прихваћено када је :other :value.',
    'active_url' => 'Поље :attribute није валидан URL.',
    'after' => 'Поље :attribute мора бити датум након :date.',
    'after_or_equal' => 'Поље :attribute мора бити датум једнак или већи од :date.',
    'alpha' => 'Поље :attribute може садржати само слова.',
    'alpha_dash' => 'Поље :attribute може садржати само слова, бројеве, средње и доње црте.',
    'alpha_num' => 'Поље :attribute може садржати само слова и бројеве.',
    'array' => 'Поље :attribute мора бити низ.',
    'before' => 'Поље :attribute мора бити датум пре :date.',
    'before_or_equal' => 'Поље :attribute мора бити датум пре или једнак датуму :date.',
    'between' => [
        'array' => 'Поље :attribute мора бити између :min и :max елемената.',
        'file' => 'Фајл :attribute мора бити између :min и :max килобајта.',
        'numeric' => 'Поље :attribute мора бити између :min и :max.',
        'string' => 'Поље :attribute мора бити између :min и :max карактера.',
    ],
    'boolean' => 'Поље :attribute мора бити true или false.',
    'confirmed' => 'Потврда поља :attribute се не поклапа.',
    'current_password' => 'Лозинка је неисправна.',
    'date' => 'Поље :attribute није валидан датум.',
    'date_equals' => 'Поље :attribute мора бити датум једнак датуму :date.',
    'date_format' => 'Формат поља :attribute се не поклапа са форматом :format.',
    'declined' => 'Поље :attribute мора бити одбачено.',
    'declined_if' => 'Поље :attribute мора бити одбачено када је вредност :other :value.',
    'different' => 'Поља :attribute и :other морају бити различита.',
    'digits' => 'Поље :attribute мора бити :digits цифри.',
    'digits_between' => 'Поље :attribute мора бити између :min и :max цифри.',
    'dimensions' => 'Поље :attribute садржи невалидне врености димензија слике.',
    'distinct' => 'Поље :attribute има дуплу вредност.',
    'email' => 'Поље :attribute мора бити валидна адреса Е-поште.',
    'ends_with' => 'Поље :attribute се мора завшити са једном од следећих вредности: :values.',
    'enum' => 'Изабрано поље :attribute није валидно.',
    'exists' => 'Изабрано поље :attribute није валидно.',
    'file' => 'Поље :attribute мора бити фајл.',
    'filled' => 'Поље :attribute мора имати вредност.',
    'gt' => [
        'array' => 'Поље :attribute мора имати више од :value елемената.',
        'file' => 'Поље :attribute мора бити веће од :value килобајта.',
        'numeric' => 'Поље :attribute мора бити веће од вредности :value.',
        'string' => 'Поље :attribute мора бити веће од :value карактра.',
    ],
    'gte' => [
        'array' => 'Поље :attribute мора имати :value или више елемената.',
        'file' => 'Поље :attribute мора бити веће или једнако :value килобајта.',
        'numeric' => 'Поље :attribute мора бити веће или једнако вредности :value.',
        'string' => 'Поље :attribute мора бити веће или једнако од :value карактера.',
    ],
    'image' => 'Поље :attribute мора бити слика.',
    'in' => 'Изабрано поље :attribute није валидно.',
    'in_array' => 'Вредност :attribute поља се не садржи у :other.',
    'integer' => 'Поље :attribute мора бити цео број.',
    'ip' => 'Поље :attribute мора бити валидна IP адреса.',
    'ipv4' => 'Поље :attribute мора бити валидна IPv4 адреса.',
    'ipv6' => 'Поље :attribute мора бити валидна IPv6 адреса.',
    'json' => 'Поље :attribute мора бити валидад JSON string.',
    'lt' => [
        'array' => 'Поље :attribute мора имати мање од :value елемената.',
        'file' => 'Поље :attribute мора бити мање од :value килобајта.',
        'numeric' => 'Поље :attribute мора бити мање од вредности :value.',
        'string' => 'Поље :attribute мора бити мање од :value карактера.',
    ],
    'lte' => [
        'array' => 'Поље :attribute не сме имати више од :value елемената.',
        'file' => 'Поље :attribute мора бити мање или једнако :value килобајта.',
        'numeric' => 'Поље :attribute мора бити мање или једнако :value.',
        'string' => 'Поље :attribute мора бити мање или једнако од :value карактера.',
    ],
    'mac_address' => 'Поље :attribute мора бити валдина MAC адреса.',
    'max' => [
        'array' => 'Поље :attribute не сме имати више од :max елеманата.',
        'file' => 'Поље :attribute не сме бити веће од :max килобајта.',
        'numeric' => 'Поље :attribute не сме бити веће од :max.',
        'string' => 'Поље :attribute не сме бити веће од :max карактера.',
    ],
    'mimes' => 'Поље :attribute мора бити фајл типа: :values.',
    'mimetypes' => 'Поље :attribute мора бити фајл типа: :values.',
    'min' => [
        'array' => 'The :attribute must have at least :min items.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'numeric' => 'The :attribute must be at least :min.',
        'string' => 'The :attribute must be at least :min characters.',
    ],
    'multiple_of' => 'Поље :attribute мора бити дељиво са :value.',
    'not_in' => 'Изабрано поље :attribute није валидно.',
    'not_regex' => 'Формат поља :attribute није валидан.',
    'numeric' => 'Поље :attribute мора бити број.',
    'password' => [
        'letters' => 'Поље :attribute мора садржати бар један карактер.',
        'mixed' => 'Поље :attribute мора садржати бар једно мало и једно велико слово.',
        'numbers' => 'Поље :attribute мора садржати бар један број.',
        'symbols' => 'Поље :attribute мора садржати бар један симбол.',
        'uncompromised' => 'Вредност :attribute се појавила бар у једно цурењу података. Молимо вас изаберите другу вредност :attribute.',
    ],
    'present' => 'Поље :attribute мора бити присутно.',
    'prohibited' => 'Поље :attribute је забрањено.',
    'prohibited_if' => 'Поље :attribute је забрањено ако је :other :value.',
    'prohibited_unless' => 'Поље :attribute је забрањено ако је :other у :values.',
    'prohibits' => 'Поље :attribute забрањује присуство пољу :other.',
    'regex' => 'Формат поља :attribute није валидан.',
    'required' => 'Поље :attribute је обавезно.',
    'required_array_keys' => 'Поље :attribute мора имати кључеве: :values.',
    'required_if' => 'Поље :attribute мора бити присутно када је :other :value.',
    'required_unless' => 'Поље :attribute мора бити присутно осим ако је :other у :values.',
    'required_with' => 'Поље :attribute мора бити присутно када је вредност :values присутна.',
    'required_with_all' => 'Поље :attribute мора имати вредност када су вредности :values присутне.',
    'required_without' => 'Поље :attribute мора имати вредност када вредности :values нису присутне.',
    'required_without_all' => 'Поље :attribute мора имати вредност када нити једна од вредности :values није присутна.',
    'same' => 'Пољ :attribute и :other морају имати исте вредности.',
    'size' => [
        'array' => 'Поље :attribute мора садржати :size елемената.',
        'file' => 'Поље :attribute мора бити :size килобајта.',
        'numeric' => 'Поље :attribute мора бити :size.',
        'string' => 'Поље :attribute мора бити :size карактера.',
    ],
    'starts_with' => 'Поље :attribute мора почети са једном од следећих вредности: :values.',
    'string' => 'Поље :attribute мора бити string.',
    'timezone' => 'Поље :attribute мора бити валидна временска зона.',
    'unique' => 'Вредност поља :attribute већ постоји.',
    'uploaded' => 'Поље :attribute није отпремљено.',
    'url' => 'Поље :attribute није валидан URL.',
    'uuid' => 'Поље :attribute није валидан UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
