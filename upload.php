<?php
session_start();
$jobDescription = $_SESSION["jobDescription"];

// echo $jobDescription;

// create txt file from job desc
$jobFile = fopen("job.txt", "w") or die("Unable to open file!");
fwrite($jobFile, $jobDescription);
fclose($jobFile);

$resumeText = $_POST['skills'] . ' ' . $_POST['experience'] . ' ' . $_POST['soft'];

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