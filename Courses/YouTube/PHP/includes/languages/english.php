<?php



function lang($phrase) {
    static $lang = array(

        // Dashboard Page

        'HOME_ADMIN'    =>'Admin Page',
        'CATEGORIES'    =>'Categories',
        'USER'          =>'USER',
        'ITEMS'         =>'Items',
        'MEMBERS'       =>'Members',
        'STATISTICS'    =>'Statistics',
        'LOGS'          =>'Logs',
    );

    return $lang[$phrase];
}

/*
    $lang = array(
        'Asem' => 'Hamdi'
    );

    echo $lang['Asem'];

*/