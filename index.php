<?php

require '../libs/Smarty.class.php';
$smarty = new Smarty;

$smarty->assign(
    'options',
    array(
        1 => "Prince sinha",
        2 => "Surya",
        3 => "Abdul"
    )
);
$smarty->assign('select', 1);
$smarty->assign('email', "prince@ucertify.com");

$smarty->assign(
    'pp',
    array(
        'fax' => '555-222-9876',
        'email' => 'megha@ucertify.com',
        'phone' => array(
            'home' => '555-444-3333',
            'cell' => '555-111-1234'
        )
    ),
    array(
        'fax' => '555-222-8876',
        'email' => 'pete.gupta@ucertify.com',
        'phone' => array(
            'home' => '555-444-8888',
            'cell' => '555-111-9999'
        )
    )
);

$smarty->assign("string1", "uCertify LEARN is specifically designed to deliver Higher Ed, vocational, workforce development & readiness, and corporate training programs to diverse audiences with different proficiency levels.
");
$smarty->assign("string2", " At uCertify, we believe that assessments are the key to both engaging learners and effective, focused learning.");

$smarty->assign(
    'cust',
    array(
        1 => "prince",
        2 => "sinha",
        3 => "kumar"
    )
);
$smarty->assign('customer', 1);

$smarty->assign('num', 10);


$smarty->display('test.tpl');

?>