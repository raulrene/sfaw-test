<?php




session_start();


function citireDate() {
	if( !isset( $_SESSION[ 'anunturi' ] ) ) $_SESSION[ 'anunturi' ] = array();
	return $_SESSION[ 'anunturi' ];
}






function scriereDate($date) {


	array_push( $_SESSION[ 'anunturi' ], $date );
	

	return true;

}





?>