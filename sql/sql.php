<?php
	echo '<h1 style="background:green;"> My SQL statements</h1>';
	echo '<span style = "background:pink;font-size:20px;">SELECT</span>';
	echo '<p style = "background:magenta;">SELECT column_name,column_name
FROM table_name;</p>';
	echo '<span style = "background:pink;font-size:20px;">SELECT DISTINCT</span>';
	echo '<p style = "background:yellow;">In a table, a column may contain many duplicate values; and sometimes you only want to list the different (distinct) values.
The DISTINCT keyword can be used to return only distinct (different) values.</p>';
	echo '<p style = "background:magenta;">SELECT DISTINCT column_name,column_name
FROM table_name;</p>';
	echo '<span style = "background:pink;font-size:20px;">WHERE</span>';
	echo '<p style = "background:yellow;">The WHERE clause is used to extract only those records that fulfill a specified criterion.</p>';
	echo '<p style = "background:magenta;">SELECT column_name,column_name
FROM table_name
WHERE column_name operator value;</p>';
	echo '<span style = "background:pink;font-size:20px;">ORDER BY</span>';
	echo '<p style = "background:yellow;">The ORDER BY keyword is used to sort the result-set by one or more columns.

The ORDER BY keyword sorts the records in ascending order by default. To sort the records in a descending order, you can use the DESC keyword.</p>';
	echo '<p style = "background:magenta;"> SELECT column_name, column_name
ORDER BY column_name ASC|DESC, column_name ASC|DESC;</p>';
	echo '<span style = "background:pink;font-size:20px;">INSERT INTO</span>';
	echo '<p style = "background:magenta;">INSERT INTO table_name (column1,column2,column3,...)
VALUES (value1,value2,value3,...);</p>';
	echo '<span style = "background:pink;font-size:20px;">UPDATE</span>';
	echo '<p style = "background:magenta;"> UPDATE table_name
SET column1=value1,column2=value2,...
WHERE some_column=some_value;</p>';
	echo '<span style = "background:pink;font-size:20px;">DELETE</span>';
	echo '<p style = "background:magenta;">DELETE FROM table_name
WHERE some_column=some_value; </p>';
	echo '<span style = "background:pink;font-size:20px;">SELECT TOP</span>';
	echo '<p style = "background:yellow;">he SELECT TOP clause is used to specify the number of records to return.
The SELECT TOP clause can be very useful on large tables with thousands of records. Returning a large number of records can impact on performance.
Note: Not all database systems support the SELECT TOP clause.</p>';
	echo '<p style = "background:magenta;">SELECT TOP number|percent column_name(s)
FROM table_name;</p>';
	echo '<span style = "background:pink;font-size:20px;">LIKE </span>';
	echo '<p style = "background:yellow;">The LIKE operator is used to search for a specified pattern in a column.</p>';
	echo '<p style = "background:magenta;">SELECT column_name(s)
FROM table_name
WHERE column_name LIKE pattern;</p>';
	echo '<span style = "background:pink;font-size:20px;">IN</span>';
	echo '<p style = "background:yellow;">The IN operator allows you to specify multiple values in a WHERE clause.</p>';
	echo '<p style = "background:magenta;">SELECT column_name(s)
FROM table_name
WHERE column_name IN (value1,value2,...);</p>';
	echo '<span style = "background:pink;font-size:20px;">BETWEEN</span>';
	echo '<p style = "background:yellow;">The BETWEEN operator selects values within a range. The values can be numbers, text, or dates.</p>';
	echo '<p style = "background:magenta;"> SELECT column_name(s)
WHERE column_name BETWEEN value1 AND value2;</p>';
	echo '<span style = "background:pink;font-size:20px;">Aliases</span>';
	echo '<p style = "background:yellow;">SQL aliases are used to give a database table, or a column in a table, a temporary name.
Basically aliases are created to make column names more readable.</p>';
	echo '<p style = "background:magenta;">for columns  : SELECT column_name AS alias_name
FROM table_name;</p>';
	echo '<p style = "background:magenta;">for tables  : SELECT column_name(s)
FROM table_name AS alias_name;</p>';
	echo '<span style = "background:pink;font-size:20px;">JOIN(same as INNER JOIN)</span>';
	echo '<p style = "background:yellow;">An SQL JOIN clause is used to combine rows from two or more tables, based on a common field between them.

The most common type of join is: SQL INNER JOIN (simple join). An SQL INNER JOIN return all rows from multiple tables where the join condition is met.</p>';
	echo '<p style = "background:magenta;">SELECT column_name(s)
FROM table1
INNER JOIN table2
ON table1.column_name=table2.column_name;</p>';
	echo '<span style = "background:pink;font-size:20px;">LEFT JOIN</span>';
	echo '<p style = "background:yellow;">The LEFT JOIN keyword returns all rows from the left table (table1), with the matching rows in the right table (table2). The result is NULL in the right side when there is no match.</p>';
	echo '<p style = "background:magenta;"> SELECT column_name(s)
LEFT JOIN table2
ON table1.column_name=table2.column_name;</p>';
	echo '<span style = "background:pink;font-size:20px;">RIGHT JOIN</span>';
	echo '<p style = "background:yellow;">The RIGHT JOIN keyword returns all rows from the right table (table2), with the matching rows in the left table (table1). The result is NULL in the left side when there is no match.</p>';
	echo '<p style = "background:magenta;">SELECT column_name(s)
FROM table1
RIGHT JOIN table2
ON table1.column_name=table2.column_name;</p>';
	echo '<span style = "background:pink;font-size:20px;">FULL OUTER JOIN</span>';
	echo '<p style = "background:yellow;">The FULL OUTER JOIN keyword returns all rows from the left table (table1) and from the right table (table2).

The FULL OUTER JOIN keyword combines the result of both LEFT and RIGHT joins.</p>';
	echo '<p style = "background:magenta;">SELECT column_name(s)
FROM table1
FULL OUTER JOIN table2
ON table1.column_name=table2.column_name;</p>';
	echo '<span style = "background:pink;font-size:20px;">UNION</span>';
	echo '<p style = "background:yellow;">The UNION operator is used to combine the result-set of two or more SELECT statements.

Notice that each SELECT statement within the UNION must have the same number of columns. The columns must also have similar data types. Also, the columns in each SELECT statement must be in the same order.</p>';
	echo '<p style = "background:magenta;"> SELECT column_name(s) FROM table1
UNION
SELECT column_name(s) FROM table2;</p>';	
	echo '<span style = "background:pink;font-size:20px;">SELECT INTO</span>';
	echo '<p style = "background:yellow;">The SELECT INTO statement selects data from one table and inserts it into a new table. </p>';
	echo '<p style = "background:magenta;">SELECT *
INTO newtable [IN externaldb]
FROM table1;</p>';
	echo '<span style = "background:pink;font-size:20px;">INSERT INTO SELECT</span>';
	echo '<p style = "background:yellow;">The INSERT INTO SELECT statement selects data from one table and inserts it into an existing table. Any existing rows in the target table are unaffected.</p>';
	echo '<p style = "background:magenta;">INSERT INTO table2
SELECT * FROM table1;</p>';
	echo '<span style = "background:pink;font-size:20px;">SQL CONSTRAINTS</span>';
	echo '<p style = "background:yellow;">SQL constraints are used to specify rules for the data in a table.

 If there is any violation between the constraint and the data action, the action is aborted by the constraint.

Constraints can be specified when the table is created (inside the CREATE TABLE statement) or after the table is created (inside the ALTER TABLE statement).</p>';
	echo '<p style = "background:magenta;">NOT NULL : The NOT NULL constraint enforces a column to NOT accept NULL values.

The NOT NULL constraint enforces a field to always contain a value. This means that you cannot insert a new record, or update a record without adding a value to this field.</p>';
	echo '<p style = "background:magenta;">UNIQUE : The UNIQUE constraint uniquely identifies each record in a database table.

The UNIQUE and PRIMARY KEY constraints both provide a guarantee for uniqueness for a column or set of columns.

A PRIMARY KEY constraint automatically has a UNIQUE constraint defined on it.

Note that you can have many UNIQUE constraints per table, but only one PRIMARY KEY constraint per table.</p>';
	echo '<p style = "background:magenta;">PRIMARY KEY : The PRIMARY KEY constraint uniquely identifies each record in a database table.

Primary keys must contain UNIQUE values.

A primary key column cannot contain NULL values.

Most tables should have a primary key, and each table can have only ONE primary key.</p>';
	echo '<p style = "background:magenta;">FOREIGN KEY : A FOREIGN KEY in one table points to a PRIMARY KEY in another table.</p>';
	echo '<p style = "background:magenta;">CHECK : The CHECK constraint is used to limit the value range that can be placed in a column.

If you define a CHECK constraint on a single column it allows only certain values for this column.

If you define a CHECK constraint on a table it can limit the values in certain columns based on values in other columns in the row.</p>';
	echo '<p style = "background:magenta;">DEFAULT : The DEFAULT constraint is used to insert a default value into a column.

The default value will be added to all new records, if no other value is specified.</p>';	

	echo '<span style = "background:pink;font-size:20px;">ALTER TABLE</span>';
	echo '<p style = "background:yellow;">The ALTER TABLE statement is used to add, delete, or modify columns in an existing table.</p>';
	echo '<p style = "background:magenta;"> ALTER TABLE table_name
ADD/DROP/MODIFY column_name datatype</p>';
?>