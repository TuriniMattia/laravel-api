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

    'accepted' => ':Attribute deve essere accettato.',
    'accepted_if' => ':Attribute deve essere accettato quando :other è :value.',
    'active_url' => ':Attribute non contiene un indirizzo email valido.',
    'after' => ':Attribute deve essere successivo a :date.',
    'after_or_equal' => ':Attribute deve essere successivo o uguale a :date.',
    'alpha' => ':Attribute può contenere solamente lettere.',
    'alpha_dash' => ':Attribute può contenere solamente lettere, numeri, trattini e trattini bassi.',
    'alpha_num' => ':Attribute può contenere solamente lettere e numeri.',
    'array' => ':Attribute deve essere un array.',
    'ascii' => ':Attribute deve contenere solo caratteri alfanumerici e simboli a byte singolo.',
    'before' => ':Attribute deve essere una data antecedente a :date.',
    'before_or_equal' => ':Attribute deve essere una data antecedente o uguale a :date.',
    'between' => [
        'array' => ':Attribute deve essere compreso tra :min and :max elementi.',
        'file' => ':Attribute deve essere compreso tra :min e :max kilobytes.',
        'numeric' => ':Attribute deve essere compreso tra :min e :max.',
        'string' => ':Attribute deve essere compreso tra :min and :max caratteri.',
    ],
    'boolean' => ':Attribute deve essere vero o falso.',
    'confirmed' => ':Attribute non corrisponde.',
    'current_password' => 'La password inserita non è corretta.',
    'date' => ':Attribute non è una data valida.',
    'date_equals' => ':Attribute deve essere uguale a :date.',
    'date_format' => ':Attribute non corrisponde al formato :format.',
    'decimal' => ':Attribute deve avere :decimal decimali.',
    'declined' => ':Attribute deve essere rifiutato.',
    'declined_if' => ':Attribute deve essere rifiutato quando :other è :value.',
    'different' => ':Attribute e :other devono essere diversi.',
    'digits' => ':Attribute deve essere lungo :digits caratteri.',
    'digits_between' => ':Attribute deve essere compreso tra :min e :max cifre.',
    'dimensions' => 'Le dimensioni immagine di :attribute non sono valide.',
    'distinct' => ':Attribute contiene dei valori duplicati.',
    'doesnt_end_with' => ':Attribute non deve finire con uno dei seguenti valori: :values.',
    'doesnt_start_with' => ':Attribute non deve cominciare con uno dei seguenti valori: :values.',
    'email' => ':Attribute deve essere un indirizzo email valido.',
    'ends_with' => ':Attribute deve finire con uno dei seguenti valori: :values.',
    'enum' => 'L\'elemento :attribute selezionato non è valido.',
    'exists' => 'L\'elemento :attribute selezionato non è valido.',
    'file' => ':Attribute deve essere un file.',
    'filled' => ':Attribute deve essere valorizzato.',
    'gt' => [
        'array' => ':Attribute deve contenere più di :value elementi.',
        'file' => ':Attribute deve essere più grande di :value kilobytes.',
        'numeric' => ':Attribute deve essere maggiore di :value.',
        'string' => ':Attribute deve contenere più di :value caratteri.',
    ],
    'gte' => [
        'array' => ':Attribute deve contenere almeno :value elementi.',
        'file' => ':Attribute deve essere maggiore o uguale a :value kilobytes.',
        'numeric' => ':Attribute deve essere maggiore o uguale di :value.',
        'string' => ':Attribute deve contenere almeno :value caratteri.',
    ],
    'image' => ':Attribute deve essere un\'immagine.',
    'in' => ':Attribute selezionato non è valido.',
    'in_array' => ':Attribute non esiste in :other.',
    'integer' => ':Attribute deve essere un intero.',
    'ip' => ':Attribute deve essere un indirizzo IP valido.',
    'ipv4' => ':Attribute deve essere un indirizzo IPv4 valido.',
    'ipv6' => ':Attribute deve essere un indirizzo IPv6 valido.',
    'json' => ':Attribute deve contenere una stringa JSON valida.',
    'lowercase' => ':Attribute deve essere minuscolo.',
    'lt' => [
        'array' => ':Attribute deve contenere meno di :value elementi.',
        'file' => ':Attribute deve essere più piccolo di :value kilobytes.',
        'numeric' => ':Attribute deve essere inferiore a :value.',
        'string' => ':Attribute deve contenere meno di :value caratteri.',
    ],
    'lte' => [
        'array' => ':Attribute deve contenere non più di :value elementi.',
        'file' => ':Attribute deve essere minore o uguale a :value kilobytes.',
        'numeric' => ':Attribute deve essere inferiore o uguale a :value.',
        'string' => ':Attribute deve contenere non più di :value caratteri.',
    ],
    'mac_address' => ':Attribute deve essere un indirizzo MAC valido.',
    'max' => [
        'array' => ':Attribute non può contenere più di :max elementi.',
        'file' => ':Attribute non può essere più grande di :max kilobytes.',
        'numeric' => ':Attribute non può essere superiore a :max.',
        'string' => ':Attribute non può essere più lungo di :max caratteri.',
    ],
    'max_digits' => ':Attribute non deve contenere più di :max caratteri.',
    'mimes' => ':Attribute deve contenere un file di tipo: :values.',
    'mimetypes' => ':Attribute deve contenere un file di tipo: :values.',
    'min' => [
        'array' => ':Attribute deve avere almeno :min elementi.',
        'file' => ':Attribute deve essere almeno :min kilobyte.',
        'numeric' => ':Attribute deve essere minimo :min.',
        'string' => ':Attribute deve contenere almeno :min caratteri.',
    ],
    'min_digits' => ':Attribute deve avere almeno :min caratteri.',
    'missing' => ':Attribute deve essere mancante.',
    'missing_if' => ':Attribute deve essere mancante se :other è :value.',
    'missing_unless' => ':Attribute deve essere mancante a meno che :other non sia :value.',
    'missing_with' => ':Attribute deve essere mancante quando :values è presente.',
    'missing_with_all' => ':Attribute deve essere mancante quando :values sono presenti.',
    'multiple_of' => ':Attribute deve essere un multiplo di :value.',
    'not_in' => ':Attribute selezionato non è valido.',
    'not_regex' => 'Il formato di :attribute non è valido.',
    'numeric' => ':Attribute deve essere un numero.',
    'password' => [
        'letters' => ':Attribute deve contenere almeno una lettera.',
        'mixed' => ':Attribute deve contenere almeno una lettera maiuscola e una minuscola.',
        'numbers' => ':Attribute deve contenere almeno un numero.',
        'symbols' => ':Attribute deve contenere almeno un simbolo.',
        'uncompromised' => ':Attribute compare in una fuga di dati. Scegli un altro :attribute.',
    ],
    'present' => ':Attribute deve essere presente.',
    'prohibited' => ':Attribute è proibito.',
    'prohibited_if' => ':Attribute è proibito quando :other è :value.',
    'prohibited_unless' => ':Attribute è proibito a meno che :other non sia :values.',
    'prohibits' => ':Attribute proibisce a :other di essere presente.',
    'regex' => 'Il formato di :attribute non è valido.',
    'required' => ':Attribute è richiesto.',
    'required_array_keys' => ':Attribute deve contenere uno dei seguenti valori: :values.',
    'required_if' => ':Attribute è richiesto quando :other è :value.',
    'required_if_accepted' => ':Attribute è richiesto quando :other è accettato.',
    'required_unless' => ':Attribute è richiesto salvo che :other sia in :values.',
    'required_with' => ':Attribute è richiesto quando :values è presente.',
    'required_with_all' => ':Attribute è richiesto quando sono presenti :values.',
    'required_without' => ':Attribute è richiesto quando :values non è presente.',
    'required_without_all' => ':Attribute è richiesto quanto nessuno di :values è presente.',
    'same' => ':Attribute e :other devono corrispondere.',
    'size' => [
        'array' => ':Attribute deve contenere :size elementi.',
        'file' => ':Attribute deve essere :size kilobytes.',
        'numeric' => ':Attribute deve essere :size.',
        'string' => ':Attribute deve essere di :size caratteri.',
    ],
    'starts_with' => ':Attribute deve cominciare con uno dei seguenti valori: :values.',
    'string' => ':Attribute deve essere una stringa.',
    'timezone' => ':Attribute deve essere un fuso orario valido.',
    'unique' => ':Attribute è già in uso.',
    'uploaded' => 'L\'upload di :attribute è fallito.',
    'uppercase' => ':Attribute deve essere maiuscolo.',
    'url' => ':Attribute deve essere un URL valido.',
    'ulid' => ':Attribute deve essere un ULID valido.',
    'uuid' => ':Attribute deve essere un UUID valido.',

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

    'attributes' => [
        'project_name' => 'nome progetto',
        'project_description' => 'descrizione del progetto',
        'github_link' => 'link al GitHub',
    ],

];
