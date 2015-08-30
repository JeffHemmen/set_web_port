<html>
<head>
<title>execute ./set_web_port in /etc/ssh/</title>
</head>
<body>
The apache server is now going down and the sshd server is restarting on ports 22 and 80.<br />
> ssh MY_SERVER -p 80
<p>
Bye now.
<p>
<u>Output</u>:<br />
<textarea cols=70 rows=10>
<?php
exec("sudo /etc/ssh/set_web_port", $output);
foreach($output as $line)
	echo "> " . $line . "\n";
?>
</textarea>

</body>
</html>
