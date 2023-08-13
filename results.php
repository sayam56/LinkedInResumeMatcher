<?php
  $resultText;
  if ($file = fopen("result.txt", "r")) {
    while(!feof($file)) {
        $resultText = fgets($file);
        # do same stuff with the $line
    }
    fclose($file);
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

    <title>LinkedIn Resume Match Result</title>
  </head>
  <body>
    <section class="_form_05">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="result">
              <span class="header_title">Results</span>
              <span class="result_text"><?php echo $resultText;?></span>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>