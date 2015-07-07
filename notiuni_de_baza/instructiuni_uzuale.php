<?php
/*mail('adresa@exemple.com', 'Subiect mesaj', 'Mesaj simplu');


$to      = 'adresa@example.com';
$subject = 'Subiect mesaj';
$message = 'Mesaj simplu cu date aditionale';
$headers = 'From: punctsivirgula@example.com' . "\r\n" .
    'Reply-To: punctsivirgula@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);)*/

echo abs(-7);
echo sin(60);
echo decbin(12);
echo base_convert('7DB', 16, 10);
echo round(12.3);

echo rand();
echo rand(10, 70);
print "<br />";
set_time_limit(50); // seteaza limita la 50 secunde

set_time_limit(0);
print "<br />";

echo 'Text 1<br />';
echo 'Text 2<br />';
flush();
print "<br />";
exit( "Script terminat" );
die( "Script terminat" );

print "Acesta linie nu se afiseaza niciodata";


print "<br />";
$text = 'Tutorial PHP in limba romana';
echo base64_encode($text); // afiseaza VHV0b3JpYWwgUEhQIGluIGxpbWJhIHJvbWFuYQ==
echo base64_decode('VHV0b3JpYWwgUEhQIGluIGxpbWJhIHJvbWFuYQ==');
print "<br />";
phpinfo();
