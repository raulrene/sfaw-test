<?php
/**
 * Cod-sursa oferit gratuit de punctsivirgula.ro
 */

#
# nota: acest fisier pastreaza datele temporar, in sesiune, atat timp 
# cat utilizatorul este pe site.
#
# daca se inchide browserul (toate ferestrele) si se revine pe 
# pagina, datele salvate sunt pierdute.
#
# pentru mai multe detalii legate de mecanismul de sesiune, verificati
# capitolul aferent pe site
#


session_start();

# functie folosita pentru a prelua datele stocate
function citireDate() {
	if( !isset( $_SESSION[ 'anunturi' ] ) ) $_SESSION[ 'anunturi' ] = array();
	return $_SESSION[ 'anunturi' ];
}





# functie folosita pentru a salva datele
function scriereDate($date) {

	# in vectorul existent, mai adaugam un element
	array_push( $_SESSION[ 'anunturi' ], $date );
	
	// print_r( $_SESSION[ 'anunturi' ] ); # pentru debugging
	
	# am stocat datele cu success
	return true;

}




# pot pune sau nu tagul de inchidere PHP, nu are importanta, atata timp cat nu 
# avem cod HTML la sfarsitul fisierului

?>