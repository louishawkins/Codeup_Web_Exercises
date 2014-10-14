<?php
var_dump($_GET);
var_dump($_POST);
?>
<html>
<head>
	<title>A Form</title>
</head>
<body>
<h2>Login</h2>
<form method="POST" action="/form.php">
	<p>
		<label for="name">Real Name</label>
		<input id="name" name="name" type="text" placeholder="Bill Gates">
    <p>
        <label for="username">Username</label>
        <input id="username" name="username" type="text" placeholder="Enter any username">
    </p>
    <p>
        <label for="password">Password</label>
        <input id="password" name="password" type="password" placeholder="Enter a password">
    </p>
    <p>
        <button type="submit" value="Login">Login</button>
    </p>
</form>
<h2>Compose an Email</h2>
<form method="POST" action="/form.php">
    <p>
        <label for="mailto">To:</label>
        <input id="mailto" name="mailto" type="text" placeholder="billgates@microsoft.com">
    </p>
        <label for="mailfrom">From:</label>
        <input id="mailfrom" name="mailfrom" type="text" placeholder="your email address">
    </p>
    <p>
        <label for="subject">Subject:</label>
        <input id="subject" name="subject" type="text" placeholder="Your Subject">
    </p>
    <p>
        <textarea id="messagebody" name="messagebody" rows="5" cols = "50">Stuff</textarea>
    </p>
    <p>
        <button type="submit" value"Send">Send</button>
    </p>
    <p>
        <label for="mailing_list">
            <input type="checkbox" id="save" name="save" value="yes">
            <label for="mailing_list">Save a copy to "Sent"</label>
        </label>
    </p>
</form>

<h2>Multiple Choice Test</h2>
<form>  
<p>What is the capital of Texas?</p>
<label>
    <input type="radio" id="q1a" name="q1" value="houston">
    Houston
</label>
<label>
    <input type="radio" id="q1b" name="q1" value="dallas">
    Dallas
</label>
<label>
    <input type="radio" id="q1c" name="q1" value="austin">
    Austin
</label>
<label>
    <input type="radio" id="q1d" name="q1" value="san antonio">
    San Antonio
</label>

<p>What is the capital of Texas?</p>
<label>
    <input type="radio" id="q2a" name="q2" value="houston">
    Houston
</label>
<label>
    <input type="radio" id="q2b" name="q2" value="dallas">
    Dallas
</label>
<label>
    <input type="radio" id="q2c" name="q2" value="austin">
    Austin
</label>
<label>
    <input type="radio" id="q2d" name="q2" value="san antonio">
    San Antonio
</label>

<p>
<button type="submit" value"Send">Send</button>
</p>
</form>


  
</body>
</html>