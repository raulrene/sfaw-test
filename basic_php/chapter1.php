<?php
# cele 2 instructiuni de mai jos sunt echivalente
print "Text";
echo "Text";
 
# o singura instructiune echo poate primi mai multi parametri, separati prin virgula
echo "<br />", "Afisez", " un text din ", 4, " bucati";
 
# o singura intstructiune print poate primi doar unul
print "<br />";
print "Afisez";
print " un text din ";
print 4;
print  " bucati";
 
# printf este folosita pentru a formata continutul, la fel ca in C/C++
printf( "<br />Am %4.2f lei", 102.123456 ); // afiseaza Am 102.12 lei
?>