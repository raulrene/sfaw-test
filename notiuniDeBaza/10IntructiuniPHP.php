<?php
// trimitere mesaj simplu
mail('adresa@exemple.com', 'Subiect mesaj', 'Mesaj simplu');
 
// trimiterea unui mesaj in care se specifica date aditionale
$to      = 'adresa@example.com';
$subject = 'Subiect mesaj';
$message = 'Mesaj simplu cu date aditionale';
$headers = 'From: punctsivirgula@example.com' . "\r\n" .
           'Reply-To: punctsivirgula@example.com' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();
 
mail($to, $subject, $message, $headers);

echo abs(-7);   // functia "valoare absoluta", afiseaza 7
print "<br>";
echo sin(60);   // functia "sinus", afiseaza -0.304810621 
print "<br>";
echo decbin(12);   // returneaza reprezentarea binara a numarului, afiseaza 1100
print "<br>";
echo base_convert('7DB', 16, 10);   // returneaza convesia dintr-o baza in alta, afiseaza 2011
print "<br>";
echo round(12.3); // returneaza o rotunjire la cel mai apropiat intreg, afiseaza 12
print "<br>"; 
echo rand(); // afiseaza un numar aleator
print "<br>";
echo rand(10, 70); // afiseaza un numar aleator din intervalul specificat
print "<br>";
?>