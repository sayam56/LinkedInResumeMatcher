<?php
   /*DB connect*/
   try{
    $conn=new PDO("mysql:host=localhost;dbname=linkedin_resume;",'root','');
    echo "<script>console.log('connection successful');</script>";

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch(PDOException $e){
      echo "<script>window.alert('connection error');</script>";
  }
  
  $jobNumber = $_POST["jobID"];
  $jobDesc = '';
  try{
    $sql= "SELECT text FROM job_posting where id= '".$jobNumber."'";
    $obj = $conn->query($sql);
    $table = $obj->fetchAll();
    foreach ($table as $key) {
      $jobDesc = $key[0];
    }
  }catch(PDOException $e){
      echo $e;
    }

    // Start the session
    session_start();
    $_SESSION["jobDescription"] = $jobDesc;
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <title>LinkedIn Resume Upload</title>
  </head>
  <body>
    <section class="_form_05">
      <div class="container">
        <div class="">
          <div class="col-15">
            <div class="_form-05-box">
              <div class="row">
                <div class="col-sm-3 _lk_nb">
                  <div class="form-05-box-a">
                    <div class="_form_05_logo">
                      <h2>smart resume</h2>
                    </div>
                  </div>
                </div>
                <div class="col-sm-9 _nb-pl">
                  <div class="_mn_df">
                    <div class="main-head">
                      <h2>Please Enter Your Resume Details</h2>
                    </div>
                    <form action="upload.php" method="post">
                      <div class="form-group">
                        <textarea rows="5" cols="40" name="skills" class="form-control" placeholder="Enter Technical Skills Separated By A Comma." required></textarea>
                        <textarea rows="5" cols="40" name="experience" class="form-control" placeholder="Enter Experience Details" required></textarea>
                        <textarea  rows="5" cols="40" name="soft" class="form-control" placeholder="Enter Soft Skills Details" required></textarea>
                      </div>
                      <div class="form-group">
                        
                          <input type="submit" value="Submit" name="submit" class="_btn_04">
                        
                      </div>
                    </form>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>