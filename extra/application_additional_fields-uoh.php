<?php
global $application_additional_fields;

$application_additional_fields = [
    'attribute_1' => array('type' => 'INT', 'css' => 'width_pct_25', 'size' => 64, 'step' => 1, 
                            'field_code' => 'applicant_age', 'optional' => false, 'readonly' =>true,
                            'title_ar' => 'عمر المتقدم', 'title_en' => 'applicant age', 
                            'category' => 'FORMULA',
                            'formula' => 'calcApplicantAge', ),
                            
    'attribute_2' => array('type' => 'INT', 'css' => 'width_pct_25', 'size' => 64, 'step' => 1, 
                            'field_code' => 'qualification_age', 'optional' => false, 'readonly' =>true,
                            'title_ar' => 'عمر المؤهل', 'title_en' => 'qualification age', 
                            'category' => 'FORMULA',
                            'formula' => 'calcQualificationAge', ),

    'attribute_3' => array('type' => 'INT', 'css' => 'width_pct_25', 'size' => 64, 'step' => 1, 
                            'field_code' => 'qualification_level', 'optional' => false, 'readonly' =>true,
                            'title_ar' => 'مستوى المؤهل', 'title_en' => 'qualification age', 
                            'category' => 'FORMULA',
                            'formula' => 'calcQualificationLevel', ),

    'attribute_4' => array('type' => 'YN', 'css' => 'width_pct_25', 'size' => 64, 'step' => 1, 
                            'field_code' => 'qualification_imported', 'optional' => false, 'readonly' =>true,
                            'title_ar' => 'المؤهل المتقدم به مستورد', 'title_en' => 'qualification imported', 
                            'category' => 'FORMULA',
                            'formula' => 'calcQualificationImported', ),
                            
    
];

$file_dir_name = dirname(__FILE__);
require($file_dir_name . "/application_formula_manager.php");