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

    'accepted' => 'El :attribute debe ser aceptada.',
    'active_url' => 'El :attribute no es una URL válida.',
    'after' => 'El :attribute debe ser una fecha posterior a :date.',
    'after_or_equal' => 'El :attribute debe ser una fecha posterior o igual a :date.',
    'alpha' => 'El :attribute sólo debe contener letras.',
    'alpha_dash' => 'El :attribute sólo debe contener letras, números, guiones y guiones bajos.',
    'alpha_num' => 'El :attribute sólo debe contener letras y números.',
    'array' => 'El :attribute debe ser una matriz.',
    'before' => 'El :attribute debe ser una fecha anterior a :date.',
    'before_or_equal' => 'El :attribute debe ser una fecha anterior o igual a :date.',
    'between' => [
        'numeric' => 'El :attribute debe estar entre :min y :max.',
        'file' => 'El :attribute debe estar entre :min y :max kilobytes.',
        'string' => 'El :attribute debe estar entre :min y :max caracteres.',
        'array' => 'El :attribute debe tener entre :min y :max items.',
    ],
    'boolean' => 'El :attribute debe ser verdadero o falso.',
    'confirmed' => 'El :attribute confirmación no coincide.',
    'date' => 'El :attribute no es una fecha válida.',
    'date_equals' => 'El :attribute debe ser una fecha igual a :date.',
    'date_format' => 'El :attribute no coincide con el formato :format.',
    'different' => 'El :attribute y :other debe ser diferente',
    'digits' => 'El :attribute debe ser :digits digitos.',
    'digits_between' => 'El :attribute debe estar entre :min y :max digitos.',
    'dimensions' => 'El :attribute tiene dimensiones de imagen no válidas.',
    'distinct' => 'El :attribute tiene un valor duplicado.',
    'email' => 'El :attribute debe ser una dirección de correo electrónico válida.',
    'ends_with' => 'El :attribute debe terminar con una de las siguientes opciones: :values.',
    'exists' => 'El seleccionado :attribute is invalid.',
    'file' => 'El :attribute debe ser un archivo.',
    'filled' => 'El :attribute debe tener un valor.',
    'gt' => [
        'numeric' => 'El :attribute debe ser mayor que :value.',
        'file' => 'El :attribute debe ser mayor que :value kilobytes.',
        'string' => 'El :attribute debe ser mayor que :value characters.',
        'array' => 'El :attribute debe tener más de :value items.',
    ],
    'gte' => [
        'numeric' => 'El :attribute debe ser mayor que or igual :value.',
        'file' => 'El :attribute debe ser mayor que or igual :value kilobytes.',
        'string' => 'El :attribute debe ser mayor que or igual :value characters.',
        'array' => 'El :attribute must have :value items or more.',
    ],
    'image' => 'El :attribute debe ser una imagen.',
    'in' => 'El selected :attribute no es válido.',
    'in_array' => 'El :attribute no existe en :other.',
    'integer' => 'El :attribute debe ser un número entero.',
    'ip' => 'El :attribute debe ser una dirección IP válida.',
    'ipv4' => 'El :attribute debe ser una dirección IPv4 válida',
    'ipv6' => 'El :attribute debe ser una dirección IPv6 válida.',
    'json' => 'El :attribute debe ser una cadena JSON válida.',
    'lt' => [
        'numeric' => 'El :attribute debe ser inferior a :value.',
        'file' => 'El :attribute debe ser inferior a :value kilobytes.',
        'string' => 'El :attribute debe ser inferior a :value caracteres.',
        'array' => 'El :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'El :attribute debe ser inferior a or igual :value.',
        'file' => 'El :attribute debe ser inferior a or igual :value kilobytes.',
        'string' => 'El :attribute debe ser inferior a or igual :value caracteres.',
        'array' => 'El :attribute no debe tener más de :value items.',
    ],
    'max' => [
        'numeric' => 'El :attribute no debe ser superior a :max.',
        'file' => 'El :attribute no debe ser superior a :max kilobytes.',
        'string' => 'El :attribute no debe ser superior a :max caracteres.',
        'array' => 'El :attribute no debe tener más de :max items.',
    ],
    'mimes' => 'El :attribute debe ser un fichero de tipo: :values.',
    'mimetypes' => 'El :attribute debe ser un fichero de tipo: :values.',
    'min' => [
        'numeric' => 'El :attribute debe ser como mínimo :min.',
        'file' => 'El :attribute debe ser como mínimo :min kilobytes.',
        'string' => 'El :attribute debe ser como mínimo :min caracteres.',
        'array' => 'El :attribute debe tener al menos :min items.',
    ],
    'multiple_of' => 'El :attribute debe ser múltiplo de :value.',
    'not_in' => 'El selected :attribute no es válido.',
    'not_regex' => 'El :attribute format no es válido.',
    'numeric' => 'El :attribute debe ser un número.',
    'password' => 'La contraseña incorrecta.',
    'present' => 'El :attribute debe estar presente.',
    'regex' => 'El :attribute format no es válido.',
    'required' => 'El :attribute campo obligatorio.',
    'required_if' => 'El :attribute es obligatorio cuando :other está :value.',
    'required_unless' => 'El :attribute es obligatorio a menos que :other está en :values.',
    'required_with' => 'El :attribute es obligatorio cuando :values está presente.',
    'required_with_all' => 'El :attribute es obligatorio cuando :values están presentes.',
    'required_without' => 'El :attribute es obligatorio cuando :values no está presente.',
    'required_without_all' => 'El :attribute es obligatorio cuando none of :values están presentes.',
    'prohibited' => 'El :attribute campo está prohibido.',
    'prohibited_if' => 'El :attribute está prohibido cuando :other está :value.',
    'prohibited_unless' => 'El :attribute campo está prohibido a menos que :other está en :values.',
    'same' => 'El :attribute y :other debe coincidir.',
    'size' => [
        'numeric' => 'El :attribute debe ser :size.',
        'file' => 'El :attribute debe ser :size kilobytes.',
        'string' => 'El :attribute debe ser :size caracteres.',
        'array' => 'El :attribute debe contener :size items.',
    ],
    'starts_with' => 'El :attribute debe empezar por uno de los siguientes: :values.',
    'string' => 'El :attribute debe ser un texto.',
    'timezone' => 'El :attribute ya se ha tomado.',
    'unique' => 'El :attribute ya se ha tomado.',
    'uploaded' => 'El :attribute error al cargar.',
    'url' => 'El :attribute el formato no es válido.',
    'uuid' => 'El :attribute debe ser un UUID válido.',

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
