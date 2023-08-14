<?php
/*DB connect*/
try {
    $conn = new PDO("mysql:host=localhost;dbname=linkedin_resume;", 'root', '');
    echo "<script>console.log('connection successful');</script>";

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "<script>window.alert('connection error');</script>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Job Openings</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }

        .job-card {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .job-title {
            font-size: 1.2rem;
            margin: 0;
            color: #333333;
        }

        .job-location {
            font-size: 0.9rem;
            color: #777777;
        }

        .job-description {
            font-size: 0.9rem;
            color: #444444;
        }
    </style>
    <link href="assets/css/style1.css" rel="stylesheet">
</head>

<body>
    <div class="container1 container">
        <h1>LinkedIn Resume - Jobs</h1>
        <?php
        try {
            $sql = "SELECT * FROM new_job_posting";
            $obj = $conn->query($sql);
            $table = $obj->fetchAll();
            foreach ($table as $key) {
                ?>
                <form action="resumeUpload.php" method="post">
                    <div class="job-card" value="<?php echo $key[0]; ?>">
                        <input type="hidden" name="jobID" value="<?php echo $key[0]; ?>">
                        <h2 class="job-title">
                            <?php echo $key[1]; ?>
                        </h2>
                        <p class="job-location">Location:
                            <?php echo $key[2]; ?>
                        </p>
                        <p class="job-description">
                            <?php echo $key[3]; ?>
                        </p>
                        <button type="submit" name="job_select_<?php echo $key[0]; ?>" class="_btn_04_job">Select</button>
                    </div>
                </form>

                <?php
            }
        } catch (PDOException $e) {
            echo $e;
        }
        ?>
    </div>
</body>

</html>