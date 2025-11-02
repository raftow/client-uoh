<?php
    $file_dir_name = dirname(__FILE__);                
    
    $active_evals = [];
    $active_evals['qiyas'] = require("$file_dir_name/../../amd/extra/qiyas_eval_settings.php");

    return $active_evals;