<?php
    include(__DIR__ . '/../inc/pre_config.php');
    include(__DIR__ . '/../../config/config.php');
    include(PERCH_CORE . '/inc/loader.php');
    $Perch  = PerchAdmin::fetch();
    include(PERCH_CORE . '/inc/auth.php');

    
    
    $Perch->page_title = PerchLang::get('My Account');
    $Alert = new PerchAlert;
    
    include('modes/edit.pre.php');
    
    include(PERCH_CORE . '/inc/top.php');

    include('modes/edit.post.php');

    include(PERCH_CORE . '/inc/btm.php');

?>
