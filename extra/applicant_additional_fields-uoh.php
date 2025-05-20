<?php
global $additional_fields;

$additional_fields = [
    'attribute_1' => array('type' => 'YN', 'css' => 'width_pct_25', 'size' => 64, 'step' => 2, 'fgroup' => 'moe', 'field_code' => 'mohe_regular', 'optional' => false, 
            'title_ar' => 'منتظم بجهة تعليمية حكومية', 'title_en' => 'Regular in any governmental educational institution', 'help' => ''),
    'attribute_2' => array('type' => 'TEXT', 'size' => 64, 'step' => 2, 'fgroup' => 'moe', 'field_code' => 'mohe_Institution', 'optional' => false, 
            'title_ar' => 'الجهة التعليمية الحكومية', 'title_en' => 'Governmental educational Institiotion', 'help' => ''),
    'attribute_3' => array('type' => 'GDAT', 'css' => 'width_pct_25', 'size' => 64, 'step' => 2, 'fgroup' => 'moe', 'field_code' => 'mohe_activity_date', 'optional' => false, 
            'title_ar' => 'تاريخ الحركة', 'title_en' => 'Activity date', 'help' => ''),
    'attribute_4' => array('type' => 'YN', 'css' => 'width_pct_25', 'size' => 64, 'step' => 2, 'fgroup' => 'moegraduate', 'field_code' => 'Universities_Graduated_ind', 'optional' => false, 
            'title_ar' => 'لديه درجة جامعية أو جامعية متوسطة', 'title_en' => 'Has a university or intermediate university degree', 'help' => ''),
    'attribute_5' => array('type' => 'YN', 'css' => 'width_pct_25', 'size' => 64, 'step' => 2, 'fgroup' => 'rayat', 'field_code' => 'rayat_closed', 'optional' => false, 
            'title_ar' => 'مطوي القيد', 'title_en' => 'Closed file', 'help' => ''),
    'attribute_6' => array('type' => 'TEXT','css' => 'width_pct_25', 'size' => 16, 'step' => 2, 'fgroup' => 'rayat', 'field_code' => 'rayat_closed_semester', 'optional' => false, 
            'title_ar' => 'الفصل التدريبي لطي القيد', 'title_en' => 'term File closed', 'help' => ''),
    'attribute_7' => array('type' => 'YN', 'css' => 'width_pct_25', 'size' => 64, 'step' => 2, 'fgroup' => 'moegraduate', 'field_code' => 'sec_school_ind', 'optional' => false, 
            'title_ar' => 'لديه الثانويةأو ما يعادلها ', 'title_en' => 'High school graduate or equivalent', 'help' => 'شرط المؤهل العلمي لدبلوم الكلية التقنية',
                   'readonly' => true,
                ),
    'attribute_8' => array('type' => 'YN', 'css' => 'width_pct_25', 'size' => 16, 'step' => 2, 'fgroup' => 'rayat', 'field_code' => 'rayat_dismissed', 'optional' => false, 
            'title_ar' => 'مفصول تدريبيا', 'title_en' => 'Training dismissed', 'help' => ''),
    'attribute_9' => array('type' => 'TEXT','css' => 'width_pct_25', 'size' => 64, 'step' => 2, 'fgroup' => 'rayat', 'field_code' => 'rayat_dismissed_semester', 'optional' => false, 'title_ar' => 'الفصل التدريبي لاجراء الفصل من التدريب', 'title_en' => 'Training class to conduct a class from training', 'help' => ''),

    'attribute_10' => array('type'=> 'YN',  'css' => 'width_pct_50', 'size' => 64, 'step' => 8, 'fgroup' => 'disability', 'field_code' => 'social_security_beneficiary_child', 'optional' => FALSE, 'title_ar' => 'من ابناء مستفيدي الضمان الاجتماعي', 'title_en' => 'Child of a Social Security beneficiary', 'help' => '' ),

    'attribute_11' => array('type' => 'YN', 'css' => 'width_pct_25', 'size' => 64, 'step' => 2, 'fgroup' => 'rayat', 'field_code' => 'uoh_enroll_ind', 'optional' => false, 'title_ar' => 'المتقدم مقيد في جامعة حائل', 'title_en' => 'Continuing in Hail University', 'help' => ''),
    'attribute_12' => array('type' => 'YN', 'css' => 'width_pct_25', 'size' => 64, 'step' => 2, 'fgroup' => 'rayat', 'field_code' => 'rayat_EN_graduated_ind', 'optional' => false, 'title_ar' => 'خريج برنامج الإنجليزية المكثف', 'title_en' => 'raduate of the Intensive English Program', 'help' => ''),
    'attribute_13' => array('type' => 'YN', 'css' => 'width_pct_25', 'size' => 64, 'step' => 2, 'fgroup' => 'rayat', 'field_code' => 'rayat_DP_graduated_ind', 'optional' => false, 'title_ar' => 'خريج دبلوم المعاهد الصناعية الثانوية', 'title_en' => 'Diploma graduate of secondary industrial institutes', 'help' => ''),
    'attribute_14' => array('type' => 'YN', 'css' => 'width_pct_25', 'size' => 64, 'step' => 2, 'fgroup' => 'rayat', 'field_code' => 'rayat_UG_graduated_ind', 'optional' => false, 'title_ar' => 'خريج دبلوم بكالوريوس الكلية التقنية', 'title_en' => 'Graduate of Bachelor s Degree in Technical College', 'help' => ''),
    'attribute_15' => array('type' => 'YN', 'css' => 'width_pct_25', 'size' => 64, 'step' => 2, 'fgroup' => 'rayat', 'field_code' => 'rayat_PR_graduated_ind', 'optional' => false, 'title_ar' => 'خريج برامج المعاهد الصناعية', 'title_en' => 'Graduate of industrial institute programs', 'help' => ''),
    'attribute_16' => array('type' => 'YN', 'css' => 'width_pct_25', 'size' => 64, 'step' => 2, 'fgroup' => 'rayat', 'field_code' => 'rayat_AS_graduated_ind', 'optional' => false, 'title_ar' => 'خريج دبلوم الكلية التقنية', 'title_en' => 'Graduate of technical college diploma', 'help' => ''),
    'attribute_17' => array('type' => 'GDAT', 'css' => 'width_pct_25', 'size' => 64, 'step' => 2, 'fgroup' => 'rayat', 'field_code' => 'rayat_activity_date', 'optional' => false, 'title_ar' => 'تاريخ الحركة في رايات', 'title_en' => 'Activity date', 'help' => ''),
    //update `application_field` set shortname = 'rayat' WHERE `field_name` in ('attribute_5','attribute_6','attribute_8','attribute_9','attribute_10','attribute_11','attribute_12','attribute_13','attribute_14','attribute_15','attribute_16','attribute_17');
    'attribute_18' => array('type' => 'YN', 'css' => 'width_pct_25', 'size' => 64, 'step' => 7, 'fgroup' => 'profile-other', 'field_code' => 'children_of_martyrs', 'optional' => false, 
            'title_ar' => 'المتقدم من أبناء شهداء الواجب', 'title_en' => 'Are you one of the children of martyrs of duty?', 'help' => 'هل أنت من ذوي شهداء الواجب'),
    'attribute_19' => array('type' => 'FK', 'css' => 'width_pct_25', 'size' => 64, 'step' => 7, 'fgroup' => 'profile-other', 'answer' => 'check_method', 'ansmodule' => 'adm', 'field_code' => 'children_of_martyrs_check_method_id', 'optional' => false, 
            'title_ar' => 'طريقة التحقق', 'title_en' => 'Verification method', 'help' => ''),
    'attribute_20' => array('type' => 'TEXT', 'css' => 'width_pct_50', 'size' => 64, 'step' => 7, 'fgroup' => 'profile-other', 'field_code' => 'children_of_martyrs_afile_id', 'optional' => false, 
            'title_ar' => 'إثبات ذوي شهداء الواجب', 'title_en' => 'Proof of the relatives of martyrs of duty', 'help' => 'اذا كان martyrs_Ind=Yيصبح من الضروري على المتقدم رفع وثيقة اثبات انه من شهداء الواجب'),
    //'attribute_21' => array('type' => 'YN', 'css' => 'width_pct_25', 'size' => 64, 'step' => 2, 'fgroup' => 'hrsd', 'field_code' => 'saudi_ind', 'optional' => false, 
            // 'title_ar' => 'سعودي أو من أم سعودية', 'title_en' => 'Saudi?', 'help' => 'يستخدم لشرط ان يكون المتقدم سعودي'),
    'attribute_22' => array('type' => 'YN', 'css' => 'width_pct_25', 'size' => 64, 'step' => 8, 'fgroup' => 'disability', 'field_code' => 'is_deaf', 'optional' => false, 
                'title_ar' => 'من فئة الصم؟', 'title_en' => 'Are you deaf?', 'help' => 'يستخدم لفتح مسارات التقنية الخاصةلفئة الصم'),
    'attribute_23' => array('type' => 'YN', 'css' => 'width_pct_50', 'size' => 64, 'step' => 2, 'fgroup' => 'hrsd', 'field_code' => 'high_inst_qualified_ind', 'optional' => false, 
            'title_ar' => 'خريج مرحلة المتوسطة، شهادة إتمام الصف الأول الثانوي، شهادة إتمام الصف الثاني الثانوي', 'title_en' => 'Qualified for high industrial institue diplma', 'help' => 'مؤهل لمرحلة دبلوم المعاهد الصناعية'),
    'attribute_24' => array('type' => 'YN', 'css' => 'width_pct_25', 'size' => 64, 'step' => 2, 'fgroup' => 'hrsd', 'field_code' => 'medium_Proficiency_cert_ind', 'optional' => false, 
            'title_ar' => 'لديه كفاءة متوسطة فأعلى', 'title_en' => 'Certificate of medium Proficiency or above', 'help' => 'شرط المؤهل العلمي لبرامج المعاهد الصناعية'),
    'attribute_25' => array('type' => 'YN', 'css' => 'width_pct_25', 'size' => 64, 'step' => 2, 'fgroup' => 'hrsd', 'field_code' => 'tech_College_diploma_ind', 'optional' => false, 
            'title_ar' => 'خريج دبلوم كلية تقنية', 'title_en' => 'Graduate of a technical college diploma', 'help' => 'شرط المؤهل العلمي لبرنامج الانجليزية المكثف للمؤسسة'),
    /*'attribute_26' => array('type' => 'YN', 'css' => 'width_pct_50', 'size' => 64, 'step' => 3, 'fgroup' => 'hrsd', 'field_code' => 'sec_school_ind', 'optional' => false, 'title_ar' => 'لديه الثانوية أو ما يعادلهالا تتجاوز الخمس سنوات', 'title_en' => 'High school graduate or equivalent not more than five years old', 'help' => 'شرط المؤهل العلمي لدبلوم الكلية التقنية'),*/

    'attribute_27' => array('type' => 'YN', 'css' => 'width_pct_25', 'size' => 24, 'step' => 1, 'fgroup' => 'qiyas', 'field_code' => 'qiyas_aptitude_ind', 'optional' => false, 
            'title_ar' => 'لديه اختبار القدرات العامة', 'title_en' => 'He has a general aptitude test', 'help' => 'شرط ان يكون لدى المتقدماختبار القدرات العامة',
            'readonly' => true,
        ),
    'attribute_28' => array('type' => 'YN', 'css' => 'width_pct_25', 'size' => 24, 'step' => 1, 'fgroup' => 'qiyas', 'field_code' => 'qiyas_achievement_ind', 'optional' => false, 
            'title_ar' => 'لديه اختبار التحصيلي', 'title_en' => 'He has an achievement test', 'help' => 'شرط ان يكون لدى المتقدماختبار التحصيلي',
        'readonly' => true,
        ),

    /* changed definitively by rafik       
    'attribute_29' => array('type' => 'INT', 'css' => 'width_pct_25', 'size' => 24, 'step' => 2, 'fgroup' => 'qiyas', 'field_code' => 'qiyas_achievement_th', 'optional' => false, 'title_ar' => 'درجةاختبار التحصيل الدراسي-التخصصات النظرية', 'title_en' => 'Academic achievement test score - theoretical', 'help' => ''),
    'attribute_30' => array('type' => 'GDAT', 'css' => 'width_pct_25', 'size' => 24, 'step' => 2, 'fgroup' => 'qiyas', 'field_code' => 'qiyas_achievement_th_date', 'optional' => false, 'title_ar' => 'تاريخ اختبار التحصيلي-التخصصات النظرية', 'title_en' => 'History of the achievement test - theoretical', 'help' => ''),
    'attribute_31' => array('type' => 'INT', 'css' => 'width_pct_25', 'size' => 24, 'step' => 2, 'fgroup' => 'qiyas', 'field_code' => 'qiyas_aptitude_sc', 'optional' => false, 'title_ar' => 'درجة اختبار القدرات العامة-التخصصات العلمية', 'title_en' => 'General aptitude test score - scientific', 'help' => ''),
    'attribute_32' => array('type' => 'GDAT', 'css' => 'width_pct_25', 'size' => 24, 'step' => 2, 'fgroup' => 'qiyas', 'field_code' => 'qiyas_aptitude_sc_date', 'optional' => false, 'title_ar' => 'تاريخ اختبار القدرات العامة-التخصصات العلمية', 'title_en' => 'Date of the general aptitude test - scientific', 'help' => ''),
    'attribute_33' => array('type' => 'INT', 'css' => 'width_pct_25', 'size' => 24, 'step' => 2, 'fgroup' => 'qiyas', 'field_code' => 'qiyas_aptitude_th', 'optional' => false, 'title_ar' => 'درجة اختبار القدرات العامة-التخصصات النظرية', 'title_en' => 'General aptitude test score - theoretical', 'help' => ''),
    'attribute_34' => array('type' => 'GDAT', 'css' => 'width_pct_25', 'size' => 24, 'step' => 2, 'fgroup' => 'qiyas', 'field_code' => 'qiyas_aptitude_th_date', 'optional' => false, 'title_ar' => 'تاريخ اختبار القدرات العامة-التخصصات النظرية', 'title_en' => 'Date of general aptitude testing - theoretical', 'help' => ''),
    'attribute_35' => array('type' => 'INT', 'css' => 'width_pct_25', 'size' => 24, 'step' => 2, 'fgroup' => 'qiyas', 'field_code' => 'qiyas_achievement_sc', 'optional' => false, 'title_ar' => 'درجةاختبار التحصيل الدراسي-التخصصات العلمية', 'title_en' => 'Academic achievement test score - scientific', 'help' => ''),
    'attribute_36' => array('type' => 'GDAT', 'css' => 'width_pct_25', 'size' => 24, 'step' => 2, 'fgroup' => 'qiyas', 'field_code' => 'qiyas_achievement_sc_date', 'optional' => false, 'title_ar' => 'تاريخ اختبار التحصيلي-التخصصات العلمية', 'title_en' => 'Date of the achievement test - scientific', 'help' => ''),
    */
    'attribute_37' => array('type' => 'GDAT', 'css' => 'width_pct_25', 'size' => 24, 'step' => 2, 'fgroup' => 'qiyas', 'field_code' => 'qiyas_activity_date', 'optional' => false, 'title_ar' => 'تاريخ الحركة', 'title_en' => 'History of the movement', 'help' => ''),
    'dragDropDiv' => array('step' => 3,)
];
/*
class UohApplicantFormulaManager
{

    
    public static function calcWeightedPercentage($applicantObj, $what="value")
    {
        // die("here calcWeightedPercentage");
        try
        {
            $pct = $coefA*$a + $coefB*$b + $coefC*$c;
    
            return $pct;
        }
        catch(Exception $e)
        {
            return -99;
        }
    }
}
*/
