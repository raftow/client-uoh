<?php
return [
        'applicant'=>
            [
                'mobile' => array(
                        'search' => true,
                        'qsearch' => true,
                        'show' => true,
                        'retrieve' => true,
                        'edit' => true,
                        'qedit' => false,
                        'step' => 2,
                        'mandatory' => true,
                        'css' => 'width_pct_50'                        
                ),

                'email' => array(
                        'search' => true,
                        'qsearch' => true,
                        'show' => true,
                        'retrieve' => false,
                        'edit' => true,
                        'qedit' => false,
                        'step' => 2,
                        'mandatory' => true,
                        'css' => 'width_pct_50'
                ),

            ]
];