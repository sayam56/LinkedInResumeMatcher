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
    <title>Interview Questions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .container {
            max-width: 800px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        .question {
            font-size: 1.4rem;
            color: #333333;
            margin-bottom: 10px;
        }

        .answer {
            font-size: 1.1rem;
            color: #555555;
        }

        .question-container {
            border-top: 1px solid #dddddd;
            padding-top: 20px;
            margin-top: 20px;
        }

        .question-container:first-child {
            border-top: none;
            margin-top: 0;
        }

        .btn-container {
            text-align: center;
            margin-top: 30px;
        }

        .btn-next {
            padding: 10px 20px;
            font-size: 1rem;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .homeButton {
            margin: 15px 25px;
            padding: 25px;
            height: 20px;
            width: 225px;
            color: white;
            background-color: #01cc66;
            position: relative;
            display: flex;
            z-index: 3;
            font-size: 26px;
            justify-content: center;
            align-items: center;
        }

        .btn-container {
            text-align: -webkit-center;
        }
    </style>

    <link href="assets/css/style1.css" rel="stylesheet">
</head>

<body class="picture-add">
    <div class="container front">
        <div>Interview Questions:</div>
        <?php
        try {
            $sql = "SELECT * FROM questions";
            $obj = $conn->query($sql);
            $table = $obj->fetchAll();
            foreach ($table as $key) {
                ?>
                <div class="question-container">
                    <div class="question">Question
                        <?php echo $key[0]; ?>:
                        <?php echo $key[1]; ?>
                    </div>
                    <div class="answer">
                        <?php echo $key[2]; ?>
                    </div>
                </div>
                <?php
            }
        } catch (PDOException $e) {
            echo $e;
        }
        ?>

        <!-- Add more questions and answers as needed -->

        <div class="btn-container">
            <!-- Include your button or link to navigate to the next page or perform an action -->
            <a class="homeButton" href="index.php">Return To Job View</a>
        </div>
    </div>
</body>

</html>