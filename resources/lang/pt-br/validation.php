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

    'accepted'              => 'O campo :attribute precisa ser aceito.',
    'active_url'            => 'O campo :attribute não é uma URL válida.',
    'after'                 => 'O campo :attribute precisa ser uma data posterior à :date.',
    'after_or_equal'        => 'O campo :attribute precisa ser uma data posterior ou igual à :date.',
    'alpha'                 => 'O campo :attribute deve conter apenas letras.',
    'alpha_dash'            => 'O campo :attribute deve conter apenas letras, números, hífens e underlines.',
    'alpha_num'             => 'O campo :attribute deve conter apenas letras e números.',
    'array'                 => 'O campo :attribute precisa ser um array.',
    'before'                => 'O campo :attribute precisa ser uma data anterior à :date.',
    'before_or_equal'       => 'O campo :attribute deve ser uma data anterior ou igual à :date.',
    'between'               => [
        'numeric'           => 'O campo :attribute precisa estar entre :min e :max.',
        'file'              => 'O arquivo :attribute deve ser um arquivo entre :min e :max kilobytes.',
        'string'            => 'O campo :attribute precisa conter entre :min e :max caracteres.',
        'array'             => 'O campo :attribute deve conter entre :min e :max items.',
    ],
    'boolean'               => 'O campo :attribute deve ser verdadeiro ou falso.',
    'confirmed'             => 'O campo de confirmação de :attribute não está correto.',
    'date'                  => 'O campo :attribute não é uma data válida.',
    'date_equals'           => 'A data no campo :attribute precisa ser igual a :date.',
    'date_format'           => 'O campo :attribute não bate com o formato :format.',
    'different'             => 'Os campos :attribute e :other precisam ser diferentes.',
    'digits'                => 'O campo :attribute precisa conter :digits dígitos.',
    'digits_between'        => 'O campo :attribute precisa ser conter entre :min e :max dígitos.',
    'dimensions'            => 'The :attribute has invalid image dimensions.',
    'distinct'              => 'O campo :attribute contém um valor duplicado.',
    'email'                 => 'O campo :attribute deve ser um endereço de email válido.',
    'ends_with'             => 'O campo :attribute deve terminar em um dos seguintes valores: :values.',
    'exists'                => 'O campo :attribute é inválido.',
    'file'                  => 'O campo :attribute precisa ser um arquivo.',
    'filled'                => 'O campo :attribute deve ser preenchido.',
    'gt' => [
        'numeric'   => 'O campo :attribute deve ser maior que :value.',
        'file'      => 'O arquivo :attribute deve ser maior que :value kilobytes.',
        'string'    => 'O campo :attribute deve ser maior que :value caracteres.',
        'array'     => 'O campo :attribute precisa conter mais de :value items.',
    ],
    'gte' => [
        'numeric'   => 'O campo :attribute precisa ser maior ou igual a :value.',
        'file'      => 'O arquivo :attribute precisa ser maior ou igual a :value kilobytes.',
        'string'    => 'O campo :attribute deve conter :value ou mais caracteres.',
        'array'     => 'O campo :attribute deve conter :value ou mais items.',
    ],
    'image'                 => 'O campo :attribute deve ser uma imagem.',
    'in'                    => 'O valor selecionado no campo :attribute não é válido.',
    'in_array'              => 'O campo :attribute não existe em :other.',
    'integer'               => 'O campo :attribute deve ser um valor numérico inteiro.',
    'ip'                    => 'O campo :attribute deve ser um endereço de IP válido.',
    'ipv4'                  => 'O campo :attribute deve ser um endereço IPv4 válido.',
    'ipv6'                  => 'O campo :attribute deve ser um endereço IPv6 válido.',
    'json'                  => 'O campo :attribute deve conter um JSON válido.',
    'lt' => [
        'numeric'   => 'O campo :attribute deve ser menor que :value.',
        'file'      => 'O arquivo :attribute deve ser menor que :value kilobytes.',
        'string'    => 'O campo :attribute deve ser conter menos de :value caracteres.',
        'array'     => 'O array :attribute deve conter menos de :value items.',
    ],
    'lte' => [
        'numeric'   => 'O campo :attribute deve ser menor ou igual à :value.',
        'file'      => 'O arquivo :attribute deve ser menor ou igual à :value kilobytes.',
        'string'    => 'O campo :attribute deve ser menor ou igual à :value caracteres.',
        'array'     => 'O campo :attribute não deve conter mais de :value items.',
    ],
    'max' => [
        'numeric'   => 'O campo :attribute não deve ser maior que :max.',
        'file'      => 'O arquivo :attribute não pode ser maior que :max kilobytes.',
        'string'    => 'O campo :attribute não deve conter mais de :max caracteres.',
        'array'     => 'O array :attribute não pode conter mais de :max items.',
    ],
    'mimes'                 => 'O campo :attribute deve ser um arquivo de um dos seguintes tipos: :values.',
    'mimetypes'             => 'O campo :attribute precisa ser um arquivo do tipo: :values.',
    'min' => [
        'numeric'   => 'O campo :attribute deve ser no mínimo :min.',
        'file'      => 'O arquivo :attribute precisa conter pelo menos :min kilobytes.',
        'string'    => 'O campo :attribute precisa conter pelo menos :min caracteres.',
        'array'     => 'The :attribute must have at least :min items.',
    ],
    'multiple_of'           => 'O campo :attribute precisa ser um múltiplo de :value.',
    'not_in'                => 'O valor :attribute selecionado é inválido.',
    'not_regex'             => 'O formato do campo :attribute é inválido.',
    'numeric'               => 'O campo :attribute precisa ser um número.',
    'password'              => 'A senha está incorreta.',
    'present'               => 'O campo :attribute precisa estar present.',
    'regex'                 => 'O formato da regex no campo :attribute é inválido.',
    'required'              => 'O campo :attribute é obrigatório.',
    'required_if'           => 'O campo :attribute é obrigatório quando :other contém :value.',
    'required_unless'       => 'O campo :attribute é obrigatório a menos que :other contenha um dos valores a seguir: :values.',
    'required_with'         => 'O campo :attribute é obrigatório quando um dos valores :values está presente.',
    'required_with_all'     => 'O campo :attribute é obrigatório quando os valores :values estão presentes.',
    'required_without'      => 'O campo :attribute é obrigatório quando :values não está presente.',
    'required_without_all'  => 'O campo :attribute é obrigatório quando nenhum dos valores a seguir está presente: :values.',
    'prohibited'            => 'O campo :attribute é proibido.',
    'prohibited_if'         => 'O campo :attribute é proibido quando :other contém :value.',
    'prohibited_unless'     => 'O campo :attribute é proibido, a menos que :other contenha um dos seguintes valores: :values.',
    'same'                  => 'Os capos :attribute e :other devem ser iguais.',
    'size' => [
        'numeric'   => 'The :attribute must be :size.',
        'file'      => 'O arquivo do campo :attribute precisa ter :size kilobytes.',
        'string'    => 'O campo :attribute precisa conter :size caracteres.',
        'array'     => 'O campo :attribute precisa conter :size items.',
    ],
    'starts_with'           => 'O campo :attribute precisa iniciar com um dos seguintes valores: :values.',
    'string'                => 'O campo :attribute precisa ser uma string.',
    'timezone'              => 'O campo :attribute deve conter um timezone válido.',
    'unique'                => 'O :attribute informado já está sendo utilizado.',
    'uploaded'              => 'O upload do arquivo :attribute falhou.',
    'url'                   => 'O formato da url no campo :attribute não é válido.',
    'uuid'                  => 'O campo :attribute deve ser um UUID válido.',

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
            'rule-name'  => 'custom-message',
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

    'attributes'    => [],

];
