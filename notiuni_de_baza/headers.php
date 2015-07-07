<?php
if( isset( $_GET[ 'site' ] ) ) {

    switch( $_GET[ 'site' ] ) {
        case 'home':
            header( 'Location: /');
            break;
        case 'search':
            header( 'Location: http://www.google.ro' );
            break;
        default:
            header( 'Location: http://www.punctsivirgula.ro' );
    }
    exit;
}
?>
<a href="page.php?site=home">home</a>
<a href="page.php?site=search">home</a>
<a href="page.php?site=bla">other</a>

