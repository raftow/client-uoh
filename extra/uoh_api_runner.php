<?php
class UohApiRunner {

    public static function register_apis()
    {
        return ['offline_data', 'uoh_enrol'];
    }

    public static function weighted_perecentage_apis()
    {
        return ['offline_data','qiyas_exam_result','noor_api'];
    }

    public static function run_api_mlsd_disability($applicantObject)
    {
        // return [$error, $info, $warning, $tech]
        return ["not implemented", "", "", ""];
    }


    

    public static function run_api_mohe_graduate_record($applicantObject)
    {
        $applicantObject->set("attribute_1", "N");
        $applicantObject->commit();
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

    /**
     * @var Applicant $applicantObject
     */

    public static function run_api_qiyas_exam_result($applicantObject)
    {
        /*
        $at27 = $applicantObject->getVal("attribute_27");
        $at28 = $applicantObject->getVal("attribute_28");
        $at11 = $applicantObject->getVal("attribute_11");
        // @medlii to add your code here
        // 1 	اختبار القدرات العامة	اختبار القدرات العامة للتخصصات العلمية	General Aptitude Test for Science Track	100	Percentage		عندما تكون نتائج البحث كثيرة يتم ايقاف التعديلات على جزء من السجلات. قم باختيار معايير اكثر دقة للبحث	عندما تكون نتائج البحث كثيرة يتم ايقاف التعديلات على جزء من السجلات. قم باختيار معايير اكثر دقة للبحث
        //2	اختبار القدرات العامة	اختبار القدرات العامة للتخصصات النظرية	General Aptitude Test for Humanities Track	100	Percentage		عندما تكون نتائج البحث كثيرة يتم ايقاف التعديلات على جزء من السجلات. قم باختيار معايير اكثر دقة للبحث	عندما تكون نتائج البحث كثيرة يتم ايقاف التعديلات على جزء من السجلات. قم باختيار معايير اكثر دقة للبحث
        //3	اختبار التحصيل الدراسي	اختبار التحصيل الدراسي للتخصصات العلمية	Academic Achievement Test for the Science Track	100	Percentage		عندما تكون نتائج البحث كثيرة يتم ايقاف التعديلات على جزء من السجلات. قم باختيار معايير اكثر دقة للبحث	عندما تكون نتائج البحث كثيرة يتم ايقاف التعديلات على جزء من السجلات. قم باختيار معايير اكثر دقة للبحث
        //4	اختبار التحصيل الدراسي	اختبار التحصيل الدراسي للتخصصات النظرية	Academic Achievement Test for the Humanities Track	100	Percentage		عندما تكون نتائج البحث كثيرة يتم ايقاف التعديلات على جزء من السجلات. قم باختيار معايير اكثر دقة للبحث	عندما تكون نتائج البحث كثيرة يتم ايقاف التعديلات على جزء من السجلات. قم باختيار معايير اكثر دقة للبحث
        //5	اختبار كفايات اللغة الإنجليزية	اختبار كفايات اللغة الإنجليزية STEP	Standardized Test of English Proficiency (STEP)	100	Percentage	
        $evaluation_id = 1;
        $MajorPath_id = false;
        $dataUrl = 'http://212.138.86.196/api/qiya';

        if($MajorPath_id==143 || $MajorPath_id==false){//علمي
            $ExamCode = "01";
            $ExamSpecialtyCode = "01";
            $qiyas[1] = self::getApiData($dataUrl,$applicantObject->id,$ExamCode,$ExamSpecialtyCode);
            
            $ExamCode = "02";
            $ExamSpecialtyCode = "01";
            $qiyas[3] = self::getApiData($dataUrl,$applicantObject->id,$ExamCode,$ExamSpecialtyCode);
            
        }elseif($MajorPath_id==141){ // أدبي
            $ExamCode = "02";
            $ExamSpecialtyCode = "02";
            $qiyas[4] = self::getApiData($dataUrl,$applicantObject->id,$ExamCode,$ExamSpecialtyCode);
            //return $qiyas;
            
            $ExamCode = "01";
            $ExamSpecialtyCode = "02";           
            $qiyas[2] = self::getApiData($dataUrl,$applicantObject->id,$ExamCode,$ExamSpecialtyCode);
        }
        if($MajorPath_id==false && $qiyas[1]==false){
            $ExamCode = "02";
            $ExamSpecialtyCode = "02";
            $qiyas[4] = self::getApiData($dataUrl,$applicantObject->id,$ExamCode,$ExamSpecialtyCode);
            //return $qiyas;
            
            $ExamCode = "01";
            $ExamSpecialtyCode = "02";           
            $qiyas[2] = self::getApiData($dataUrl,$applicantObject->id,$ExamCode,$ExamSpecialtyCode);
        }

        foreach($qiyas as $num => $row){
            if($row){
                
                //$eval = ApplicantEvaluation::firstOrNew(["applicant_id"=>$applicant_id,"evaluation_id"=>$num]);
                $eval = ApplicantEvaluation::loadByMainIndex($evaluation_id, $applicantObject->id, '2025-01-01', true);

                $eval->eval_result = $row["ExamResult"];
                $eval->eval_date = '2025-01-01';
                $eval->created_by = 100;
                $eval->updated_by = 100;
                $eval->active = "Y";
                $eval->draft="N";
                $eval->commit();
            }
        }

        // please keep below
        $new_at27 = $applicantObject->getVal("attribute_27");
        $new_at28 = $applicantObject->getVal("attribute_28");
        $new_at11 = $applicantObject->getVal("attribute_11");

        return ["", "done attribute_27 was $at27 and become $new_at27, attribute_28 was $at28 and become $new_at28, attribute_11 was $at11 and become $new_at11", "", ""];*/
        return ["", "done", "", ""];
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
        /*
        $token = self::getToken();
        $dataUrl = 'http://212.138.86.196/api/noor';
        $noorData = self::getApiData($dataUrl,$applicantObject->id,$ExamCode,$ExamSpecialtyCode);
        if($noorData){
            if(isset($noorData["qualificationMajor"])){
                $Major_res = QualificationMajor::loadByMainIndex($noorData["qualificationMajor"]);
                
                if($Major_res){
                    $qualification_major_id = $Major_res["id"];
                    $qualMajorPath = QualMajorPath::loadByMainIndex(49,$qualification_major_id); // to review with rafik
                    if($qualMajorPath){
                        $MajorPath = MajorPath::find($qualMajorPath["major_path_id"]);
                        $major_path_id = $qualMajorPath["major_path_id"];
                        $major_cathegory = $MajorPath["major_category_id"];
                    }
                    
                }else{
                    if($noorData["qualificationMajor"]) $qualification_major_desc = $noorData["qualificationMajor"];
                    else $qualification_major_desc = "";
                    $qualification_major_id = 0;
                    $major_cathegory = 0;
                    $major_path_id = 0;
                }
        

            }else{
                if($noorData["qualificationMajor"]) $qualification_major_desc = $noorData["qualificationMajor"];
                    else $qualification_major_desc = "";
                    
                $qualification_major_id = 0;
                $major_cathegory = 0;
                $major_path_id = 0;
            }
        // $prospect2 = Prospect::find($prospect->id);
            //dd($prospect2);
            //die("$qualification_major_id | $major_cathegory | $major_path_id");
            $comment = "";
            $actif = "Y";
            
            $source = QualSource::loadByMainIndex($noorData["qualificationSchoolName"],true);
            $source->source_code = $noorData["qualificationSchoolCode"];
            $source->created_by	=100;
            $source->updated_by	=100;
            $source->draft = "N";
            $source->active ="Y";
            $source->commit();

            $educationalZone = educationalZone::loadByMainIndex($noorData["educational_zone_ar"],true);
            $educationalZone->educational_zone_en = $noorData["educational_zone_en"];
            $educationalZone->commit();
            $applicant_qualification = ApplicantQualification::loadByMainIndex($applicant_id, 49, $major_cathegory,true);

            $applicant_qualification->educational_zone_id = $educationalZone->educational_zone_id;
            $applicant_qualification->qualification_major_id = $qualification_major_id;
            $applicant_qualification->major_path_id = $major_path_id;
            $applicant_qualification->gpa = $noorData["qualificationGPA"];
            $applicant_qualification->gpa_from = 100;
            $applicant_qualification->date = $noorData["qualificationDate"];
            
            $applicant_qualification->source = $source->id;
            //$applicant_qualification->qualification_comment = $comment;
            //$applicant_qualification->qualification_actif = $actif;
            $applicant_qualification->created_by	=100;
            $applicant_qualification->updated_by	=100;
            $applicant_qualification->draft = "N";
            $applicant_qualification->active ="Y";
            $applicant_qualification->source_name  = $noorData["qualificationSchoolName"];
            $applicant_qualification->imported = "Y";
            $applicant_qualification->commit();
        
        }
        //return true;
        // return [$error, $info, $warning, $tech]
        // return ["not implemented", "", "", ""];
        */
        return ["", "done", "", ""];
    }

    
    public static function getToken(){
        $authUrl = 'http://212.138.86.196/api/apilogin';
        $credentials = [
            "email"=>'admission@uoh.com', 
            "password"=>'admin102030'
        ];

        $ch = curl_init($authUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($credentials));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Accept: application/json',
            'Content-Type: application/json'
        ]);

        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            //die('Auth Error: ' . curl_error($ch));
            return false;
        }
        curl_close($ch);

        // استخراج التوكن
        $result = json_decode($response, true);
        $token = $result['token'] ?? null;

        if (!$token) {
            return false;
        }
        return $token;
    }
    
    public static function getApiData($dataUrl,$idn,$ExamCode,$ExamSpecialtyCode){
                // ====== STEP 2: Use Token in Another API Call ======
                $token = self::getToken();
                $request = [
                    "idn"=>$idn,
                    "ExamCode"=>$ExamCode,
                    "ExamSpecialtyCode"=>$ExamSpecialtyCode

                ];
                $ch = curl_init($dataUrl);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($request));
                curl_setopt($ch, CURLOPT_HTTPHEADER, [
                    'Authorization: Bearer ' . $token,
                    'Accept: application/json'
                ]);
        
                $dataResponse = curl_exec($ch);
                if (curl_errno($ch)) {
                    //die('Data Error: ' . curl_error($ch));
                    return false;
                }
                curl_close($ch);
        
                // تحليل الاستجابة
                $data = json_decode($dataResponse, true);
                return $data;
    }

    

}