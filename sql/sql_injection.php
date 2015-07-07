<?php
echo '<h1 style="background:darkcyan">SQL injections</h1>';
echo '<p>An SQL Injection can destroy your database.</p>';
echo '<p>Since SQL statements are text only, it is easy, with a little piece of computer code, to dynamically change SQL statements to provide the user with selected data</p>';
echo '<p>SQL injection is a technique where malicious users can inject SQL commands into an SQL statement, via web page input.<br/>
Injected SQL commands can alter SQL statement and compromise the security of a web application.</p>';
echo '<p>SQL Injection Based on 1=1 is Always True</p>';
echo '<p>SQL Injection Based on ""="" is Always True</p>';
echo '<p>SQL Injection Based on Batched SQL Statements</p>';
echo '<h3>Prevention</h3>';
echo '<p>1.Use of Prepared Statements (Parameterized Queries)</p>';
echo '<p>2. Use of Stored Procedures</p>';
echo '<p>3.Escaping all User Supplied Input</p>';
echo '<p></p>';
echo '<p></p>';
?>