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

class UohApplicationFormulaManager
{

    
    public static function calcApplicantAge($applicationObj, $what="value")
    {
        // die("here calcApplicantAge");
        try
        {
            $age = -1;
            $age_aparameter_id = 10;
            $application_model_id = $applicationObj->getVal("application_model_id");
            $application_plan_id = $applicationObj->getVal("application_plan_id");
            // date of calculation of age
            $objPV = AparameterValue::loadByMainIndex($age_aparameter_id, $application_model_id, $application_plan_id, $training_unit_id = 0, $department_id = 0, $application_model_branch_id = 0);
            if($objPV)
            {
                $start_gdate = $objPV->getVal("value");
                $applicantObj = $applicationObj->het("applicant_id"); 
                if($applicantObj)
                {
                    $birth_gdate = $applicantObj->getVal("birth_gdate");
                    if(AfwDateHelper::isCorrectGregDate($birth_gdate) and AfwDateHelper::isCorrectGregDate($start_gdate))
                    {
                        $ageInDays = AfwDateHelper::diff_date($start_gdate,$birth_gdate,false);
                        $age = round(10 * $ageInDays / 365) / 10;
                    }
                    else $age = -4; // applicant birth date format incorrect
                }
                else $age = -3; // no applicant 
            }
            else $age = -2; // no start date to calculate age
    
            return $age;
        }
        catch(Exception $e)
        {
            return -99;
        }
    }
    
    public static function calcQualificationAge($applicationObj, $what="value")
    {
        try
        {
            $age = -1;
            $age_aparameter_id = 9;
            $application_model_id = $applicationObj->getVal("application_model_id");
            $application_plan_id = $applicationObj->getVal("application_plan_id");
            // date of calculation of age
            $objPV = AparameterValue::loadByMainIndex($age_aparameter_id, $application_model_id, $application_plan_id, $training_unit_id = 0, $department_id = 0, $application_model_branch_id = 0);
            if($objPV)
            {
                $start_gdate = $objPV->getVal("value");
                $qualifObj = $applicationObj->het("applicant_qualification_id"); 
                if($qualifObj)
                {
                    $qual_date = $qualifObj->getVal("date");
                    if(AfwDateHelper::isCorrectGregDate($qual_date) and AfwDateHelper::isCorrectGregDate($start_gdate))
                    {
                        $ageInDays = AfwDateHelper::diff_date($start_gdate, $qual_date,false);
                        $age = round(10 * $ageInDays / 365) / 10;
                        if($age<=0) $age = 0;
                    }
                    else $age = ($what=="value") ? 666 : "incorrect date format<!-- $qual_date or $start_gdate is not correct greg date -->";                    
                }
                else $age = ($what=="value") ? 777 : "please select your qualification";     
            }
            else $age = ($what=="value") ? 888 : "no start date param value to calculate qualification age (aparameter_id=$age_aparameter_id)"; // 
            /*
            if(!is_numeric($age))
            {
                return "$age = round(10 * $ageInDays / 365) / 10;";
            }*/
            return $age;
        }
        catch(Exception $e)
        {
            return 999;
        }
        catch(Error $e)
        {
            return 555;
        }
    }

    public static function calcQualificationLevel($applicationObj, $what="value")
    {
        try
        {
            $qualifObj = $applicationObj->het("applicant_qualification_id"); 
            if($qualifObj)
            {
                $level = $qualifObj->calc("qualification_id.level_enum");
            }
            else $level = 0;

            return $level;
        }
        catch(Exception $e)
        {
            return -1;
        }
        catch(Error $e)
        {
            return -2;
        }
    }

    public static function calcQualificationImported($applicationObj, $what="value")
    {
        try
        {
            list($yes,$no) = AfwLanguageHelper::translateYesNo($what);
            $qualifObj = $applicationObj->het("applicant_qualification_id"); 
            if($qualifObj)
            {
                $imported = ($qualifObj->getVal("imported")=="Y") ? $yes : $no;
            }
            else $imported = $no;

            return $imported;
            
        }
        catch(Exception $e)
        {
            return $what=="value" ? 'W' : 'Exception';
        }
        catch(Error $e)
        {
            return $what=="value" ? 'W' : 'Error';
        }
    }
    
}
