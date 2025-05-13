<?php
class UohApiRunner {

    public static function register_apis()
    {
        return ['offline_data', 'moi_person_info'];
    }

    public static function run_api_mlsd_disability($applicantObject)
    {
        // return [$error, $info, $warning, $tech]
        return ["not implemented", "", "", ""];
    }


    

    public static function run_api_mohe_graduate_record($applicantObject)
    {
        // return [$error, $info, $warning, $tech]
        // return ["not implemented", "", "", ""];
        return ["", "done", "", ""];
    }


    public static function run_api_moe_qualifications($applicantObject)
    {
        // return [$error, $info, $warning, $tech]
        return ["", "done", "", ""];
    }


    public static function run_api_moi_person_info($applicantObject)
    {
        // return [$error, $info, $warning, $tech]
        return ["", "done", "", ""];
    }



    public static function run_api_offline_data($applicantObject)
    {
        if (!class_exists("UohCopyFromProspect", false)) {
            $file_dir_name = dirname(__FILE__);
            require($file_dir_name . "/uoh_copy_from_prospect.php");
        }
        $res = UohCopyFromProspect::updateDataFromProspect($applicantObject->id, $applicantObject);
        // return [$error, $info, $warning, $tech]
        // return ["not implemented", "", "", ""];
        if($res) return ["", "done", "", ""];
        else return ["not found in prospect data", "", "", ""];
    }

    public static function run_api_msc_employee_info($applicantObject)
    {
        // return [$error, $info, $warning, $tech]
        // return ["not implemented", "", "", ""];
        return ["", "done", "", ""];
    }

    public static function run_api_uoh_enrol($applicantObject)
    {
        $new_at11 = "N";
        $applicantObject->set("attribute_11", $new_at11);
        $applicantObject->commit();
        
        // return [$error, $info, $warning, $tech]
        // return ["not implemented", "", "", ""];
        return ["", "done", "", ""];
    }

    

    public static function run_api_qiyas_exam_result($applicantObject)
    {
        // @medlii to add your code here
        // 1 	اختبار القدرات العامة	اختبار القدرات العامة للتخصصات العلمية	General Aptitude Test for Science Track	100	Percentage		عندما تكون نتائج البحث كثيرة يتم ايقاف التعديلات على جزء من السجلات. قم باختيار معايير اكثر دقة للبحث	عندما تكون نتائج البحث كثيرة يتم ايقاف التعديلات على جزء من السجلات. قم باختيار معايير اكثر دقة للبحث
        //2	اختبار القدرات العامة	اختبار القدرات العامة للتخصصات النظرية	General Aptitude Test for Humanities Track	100	Percentage		عندما تكون نتائج البحث كثيرة يتم ايقاف التعديلات على جزء من السجلات. قم باختيار معايير اكثر دقة للبحث	عندما تكون نتائج البحث كثيرة يتم ايقاف التعديلات على جزء من السجلات. قم باختيار معايير اكثر دقة للبحث
        //3	اختبار التحصيل الدراسي	اختبار التحصيل الدراسي للتخصصات العلمية	Academic Achievement Test for the Science Track	100	Percentage		عندما تكون نتائج البحث كثيرة يتم ايقاف التعديلات على جزء من السجلات. قم باختيار معايير اكثر دقة للبحث	عندما تكون نتائج البحث كثيرة يتم ايقاف التعديلات على جزء من السجلات. قم باختيار معايير اكثر دقة للبحث
        //4	اختبار التحصيل الدراسي	اختبار التحصيل الدراسي للتخصصات النظرية	Academic Achievement Test for the Humanities Track	100	Percentage		عندما تكون نتائج البحث كثيرة يتم ايقاف التعديلات على جزء من السجلات. قم باختيار معايير اكثر دقة للبحث	عندما تكون نتائج البحث كثيرة يتم ايقاف التعديلات على جزء من السجلات. قم باختيار معايير اكثر دقة للبحث
        //5	اختبار كفايات اللغة الإنجليزية	اختبار كفايات اللغة الإنجليزية STEP	Standardized Test of English Proficiency (STEP)	100	Percentage	
        $evaluation_id = 1;
        $obj = ApplicantEvaluation::loadByMainIndex($evaluation_id, $applicantObject->id, '2025-01-01', true);


        // please keep below
        $at27 = $applicantObject->getVal("attribute_27");
        $at28 = $applicantObject->getVal("attribute_28");
        $new_at27 = $applicantObject->hasEvaluation();
        $applicantObject->set("attribute_27", $new_at27);

        $new_at28 = $applicantObject->hasEvaluation();
        $applicantObject->set("attribute_28", $new_at28);
        /*
        $at11 = $applicantObject->getVal("attribute_11");
        if($at11==0)
        {
            $new_at11 ="N";
            
        }
        else 
        {
            $r = random_int(0,100);
            $new_at11 = ($r > 93) ? "Y" : "N";
            
        }
        $applicantObject->set("attribute_11", $new_at11);
        

        $applicantObject->commit();*/
        return ["", "done attribute_27 was $at27 and become $new_at27", "", ""]; // , attribute_11 was $at11 and become $new_at11
        
    }

    public static function run_api_rayat_api($applicantObject)
    {
        // return [$error, $info, $warning, $tech]
        // return ["not implemented", "", "", ""];
        return ["", "done", "", ""];
    }

    public static function run_api_noor_api($applicantObject)
    {
        // @medlii to add your code here

        // return [$error, $info, $warning, $tech]
        // return ["not implemented", "", "", ""];
        return ["", "done", "", ""];
    }

    

    



}