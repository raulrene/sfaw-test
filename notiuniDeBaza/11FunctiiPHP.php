<?php
 
function afisLuna()
{
	$luni = array( 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul',
		'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
	echo '<select>';
	for( $i = 0; $i < 12; $i++ ) {
		# intrucat se cunosc nr de pasi, se foloseste structura repetitiva for
		echo "<option>{$luni[ $i ]}</option>\n";
	}
	echo '</select>';
}
 
# mai jos vom folosi functia pentru a afisa un drop-down cu lunile anului:
echo 'Luna inceperii activitatii: ';
afisLuna();
 
echo '<br /><br />Luna terminarii activitatii: ';
afisLuna();
 
?>