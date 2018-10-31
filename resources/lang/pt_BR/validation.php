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

    'accepted'             => 'The :attribute must be accepted.',
    'active_url'           => 'The :attribute is not a valid URL.',
    'after'                => 'The :attribute must be a date after :date.',
    'after_or_equal'       => 'The :attribute must be a date after or equal to :date.',
    'alpha'                => 'The :attribute may only contain letters.',
    'alpha_dash'           => 'The :attribute may only contain letters, numbers, and dashes.',
    'alpha_num'            => 'The :attribute may only contain letters and numbers.',
    'array'                => 'The :attribute must be an array.',
    'before'               => 'The :attribute must be a date before :date.',
    'before_or_equal'      => 'The :attribute must be a date before or equal to :date.',
    'between'              => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file'    => 'The :attribute must be between :min and :max kilobytes.',
        'string'  => 'The :attribute must be between :min and :max characters.',
        'array'   => 'The :attribute must have between :min and :max items.',
    ],
    'boolean'              => 'The :attribute field must be true or false.',
    'confirmed'            => 'The :attribute confirmation does not match.',
    'date'                 => 'The :attribute is not a valid date.',
    'date_format'          => 'The :attribute does not match the format :format.',
    'different'            => 'The :attribute and :other must be different.',
    'digits'               => 'The :attribute must be :digits digits.',
    'digits_between'       => 'The :attribute must be between :min and :max digits.',
    'dimensions'           => 'The :attribute has invalid image dimensions.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => 'The :attribute must be a valid email address.',
    'exists'               => 'The selected :attribute is invalid.',
    'file'                 => 'The :attribute must be a file.',
    'filled'               => 'The :attribute field must have a value.',
    'image'                => 'The :attribute must be an image.',
    'in'                   => 'The selected :attribute is invalid.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => 'The :attribute must be an integer.',
    'ip'                   => 'The :attribute must be a valid IP address.',
    'ipv4'                 => 'The :attribute must be a valid IPv4 address.',
    'ipv6'                 => 'The :attribute must be a valid IPv6 address.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes'                => 'The :attribute must be a file of type: :values.',
    'mimetypes'            => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'The :attribute must be at least :min.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'numeric'              => 'The :attribute must be a number.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'The :attribute format is invalid.',
    'required'             => 'The :attribute field is required.',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'               => 'The :attribute must be a string.',
    'timezone'             => 'The :attribute must be a valid zone.',
    'unique'               => 'The :attribute has already been taken.',
    'uploaded'             => 'The :attribute failed to upload.',
    'url'                  => 'The :attribute format is invalid.',

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
        'reg_name' => [
            'min' => 'Seu nome de usuário deve conter no mínimo :min caracteres. Espaços, traços e underline permitidos.',
            'max' => 'Seu nome de usuário deve conter no máximo :max caracteres. Espaços, traços e underline permitidos.',
            'unique' => 'O nome de usuário escolhido já está em uso.',
        ],
        'reg_email' => [
            'min' => 'O endereço de e-mail informado não é válido.',
            'max' => 'O endereço de e-mail informado não é válido.',
            'unique' => 'O endereço de e-mail está em uso.',
        ],
        'reg_password' => [
            'min' => 'Sua senha deve conter no mínimo :min caracteres.',
            'max' => 'Sua senha deve conter até :max caracteres.',
            'same' => 'Suas senhas não são iguais.',
        ],
        'agree_tos' => [
            'required' => 'Você deve aceitar os Termos de serviço e os Termos de privacidade.',
            'accepted' => 'Você deve aceitar os Termos de serviço e os Termos de privacidade.'
        ],
        'codGame' => [
            'required' => 'Você precisa informar o jogo que será utilizado na competição.',
            'numeric' => 'O jogo informado não existe.',
            'min' => 'Você precisa informar o jogo que será utilizado na competição.',
        ],
        'gamePlataform' => [
            'required' => 'Você precisa informar uma plataforma válida para o jogo.',
            'numeric' => 'Você precisa informar uma plataforma válida para o jogo.',
            'min' => 'Você precisa informar uma plataforma válida para o jogo.',
        ],
        'eventEmail' => [
            'required' => 'Informe um e-mail válido para o evento.',
            'string' => 'Informe um e-mail válido para o evento.',
            'email' => 'Informe um e-mail válido para o evento.',
            'max' => 'O endereço de e-mail com certeza não excede :max caracteres! O_o',
        ],
        'eventPhone' => [
            'required' => 'Por favor, nos informe um telefone para contato.',
            'string' => 'Por favor, nos informe um telefone válido para contato.',
            'min' => 'O número de telefone não é válido. Deve conter no mínimo :min caracteres. Apenas números são permitidos.',
            'max' => 'O número de telefone não é válido. Deve conter no máximo :max caracteres. Apenas números são permitidos.',
        ],
        'eventName' => [
            'required' => 'Você precisa dar um nome para o seu evento!',
            'string' => 'O nome do seu evento só pode conter caracteres alfanuméricos.',
            'min' => 'O nome do seu evento deve conter no mínimo :min caracteres.',
            'max' => 'O nome do seu evento não pode exceder :max caracteres.',
            'unique' => 'Já existe um evento com este nome.',
        ],
        'eventStartDate' => [
            'required' => 'Você precisa informar a data de início do seu evento.',
            'date' => 'Você não inseriu uma data válida para o início do evento.',
            'after_or_equal' => 'O início do evento deve ser após a data do fim das inscrições.',
        ],
        'eventStartInscDate' => [
            'required' => 'Você precisa informar o ínicio das inscrições.',
            'date' => 'Você não inseriu uma data válida para o início das inscrições.',
            'after_or_equal' => 'O início das inscrições só pode ser definido para um momento após a criação.',
            'before' => 'O início das inscrições deve ser uma data antes do final das inscrições.',
        ],
        'eventEndInscDate' => [
            'date' => 'Você não inseriu uma data válida para o final das inscrições.',
            'after' => 'O final das inscrições deve ser definido para depois do início das descrições.',
            'before' => 'O final das inscrições deve ser uma data antes do início do evento.',
        ],
        'eventDescription' => [
            'required' => 'Você não escreveu uma descrição para o seu evento.',
            'string' => 'A descrição do evento não é um texto válido.',
            'max' => 'A descrição do evento não pode exceder :max caracteres.',
        ],
        'eventPrize' => [
            'required' => 'Você precisa definir se o seu evento terá ou não um prêmio.',
            'boolean' => 'Você precisa definir se o seu evento terá ou não um prêmio.',
        ],
        'eventRules' => [
            'string' => 'As regras do evento não contém um texto válido.',
            'max' => 'As regras do evento não podem exceder :max caracteres.',
        ],
        'eventPaid' => [
            'required' => 'Você precisa definir se o seu evento é pago ou gratuito.',
            'boolean' => 'Você precisa definir se o seu evento é pago ou gratuito.',
        ],
        'eventLogo' => [
            'file' => 'Você não enviou um arquivo válido.',
            'mimes' => 'O arquivo do logo deve ser uma imagem de um dos seguintes formatos: :values.',
            'max' => 'O arquivo do logo deve conter no máximo :max KB.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];