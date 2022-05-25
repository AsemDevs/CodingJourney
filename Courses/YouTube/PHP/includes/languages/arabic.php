<?php



function lang($phrase) {
    static $lang = array(
          // Dashboard Page

          'HOME_ADMIN'=>'صفحة المدير',
          'CATEGORIES'=>'تصنيفات',
          'USER'=>'المستخدم',
          ''=>'',
    );

    return $lang[$phrase];
}

/*
    $lang = array(
        'Asem' => 'Hamdi'
    );

    echo $lang['Asem'];

*/