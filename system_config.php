<?php
return [ 
    'db_prefix' => 'uoh_',
    'theme' => 'modern',
    'main_company_domain' => "uoh.edu.sa",
    'main_company' => "uoh",
    'amd_options' => [
            'tu_college' => 'many',
    ],
    'site_administrator' => 'Rafik BOUBAKER',
    'site_administrator_extension' => '0000',
    'site_administrator_email' => 'roubaker@uoh.edu.sa',

    'login_page_options' => [
        'register_as' => 'user',  
        'password_reminder' => true,
    ],

    'check_employee_from_external_system' => false,
    'internal_email_domains' => ["uoh.edu.sa"=>true],

    // company settings of structure
    'setting-academic_program-sis_program_code-mandatory' => true,
    'setting-jobrole-id_domain-*' => true,
];