<?php

$resumeText = $_POST['resume'];

// create txt file from resume input
$resumeFile = fopen("resume.txt", "w") or die("Unable to open file!");
fwrite($resumeFile, $resumeText);
fclose($resumeFile);

// running prerequisites
echo "<pre>";
$preReq = shell_exec("setup.bat");
echo $preReq;

// running research script
$research = shell_exec("python Research.py");
echo $research;
echo "</pre>";


header("Location: results.php");


?>