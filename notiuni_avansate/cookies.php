<?php
setcookie("Test", 'acesta este un test');


setcookie("Test2", 'o ora', time()+3600);


if( isset( $_COOKIE[ 'Test' ] ) ) {
    echo 'Test: ', $_COOKIE[ 'Test' ], '<br>';
}

if( isset( $_COOKIE[ 'Test2' ] ) ) {
    echo 'Test2: ', $_COOKIE[ 'Test2' ], '<br>';
}

function testCookie() {


    $paginaCurenta = $_SERVER[ 'PHP_SELF' ];


    if( empty( $_GET[ 'creat' ] ) ) {

        setcookie( 'ctest', 'verificare' );


        header( 'Location: ' . $paginaCurenta . '?creat=1' );
        exit;
    } else {

        if( isset( $_COOKIE[ 'ctest' ] ) && !empty( $_COOKIE[ 'ctest' ] ) ) {
            return true;
        } else {
            return false;
        }
    }

}

if (testCookie()) print 'Browserul dvs. accepta cookie-uri';
else print 'Ne pare rau dar browserul dvs. nu accepta cookies';
