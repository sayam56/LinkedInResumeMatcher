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

    <title>LinkedIn Resume - Jobs</title>
  </head>
  <body>
    <section class="_form_05">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="job_outer_box">
              <div id="jobTitle">Jobs List</div>
              <form action="resumeUpload.php" method="post">
              <table class="table" style="width: 100%; margin: auto;  ">
                <thead class="thead-dark" style="text-align: center;">
                  <tr>
                    <th width="5%">Job Id.</th>
                    <th width="80%">Job Desc Name</th>
                    <th width="15%">Select</th>
                  </tr>
                  
                </thead>
                <tbody class="table" style="color: black;">
              <?php
                try{
                  $sql= "SELECT * FROM job_posting";
                  $obj = $conn->query($sql);
                  $table = $obj->fetchAll();
                  foreach ($table as $key) {
                    ?>
                    <tr id="<?php echo $key[0];?>">
                      <input type="hidden" name="jobID" value="<?php echo $key[0];?>">
                      <td width="5%" class=""><?php echo $key[0];?></td>
                      <td width="80%"><?php echo $key[1];?></td>
                      <td width="15%" style="text-align: center; vertical-align: middle;">
                        <input type="submit" value="Select" name="job_select" class="_btn_04_job" />
                      </td>
                    </tr>
                      
                    <?php
                  }
                }catch(PDOException $e){
                  echo $e;
                }
              ?>
                </tbody>
              </table>
              </form>
              
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>