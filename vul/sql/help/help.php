<?php

session_start();
if(empty($_SESSION['UserName']))
die('Not logged in.<br> <a href="/my website/index.php">Login</a> to continue.');

echo"

<h3>Short note on SQL Injection</h3>

<p>A SQL injection attack consists of insertion of a SQL query via the input data from the client to the application.
A successful SQL injection exploit can read sensitive data from the database, modify database data (Insert/Update/Delete), execute administration operations on the database
(such as shutdown the DBMS), recover the content of a given file present on the DBMS file system and in some cases issue commands to the operating system. SQL injection attacks are a
type of  injection attack, in which SQL commands are injected into data-plane input in order to effect the execution of predefined SQL commands. </p>

<p>The 'id' variable within this PHP script is vulnerable to SQL injection.</p>

<p>Assume that there are 'x' users in the database, with randomly genereated id's from 1 to 'p' ( p >= x ). Your mission is to steal passwords of all available id's.</p>

<a href = '../'>Back</a>

";

 ?>
