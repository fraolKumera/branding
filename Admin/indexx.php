<?php
include 'functions.php';
 ?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    <title>Branding Assets 1</title>
    
    <link href="../assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="../assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="../assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="../assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="../assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="../assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="../assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="../assets/css/colors/default.css" rel="stylesheet">
  </head>
  <?=template_header('Poll Results')?>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="main">
        <section>
            <div class="row">
              <div class="col-sm-2">
                <h2 class="module-title font-alt">Primary Colors</h2>
                <div><img src="../assets/images/2/primary.png" alt="Portfolio Item" style="width:50%; height:50%"/></div>
              </div>
              <?php
                $servername = "db4free.net";
                $username = "php_poll";
                $password = "72766000000@f";
                $dbname = "php_poll";
                
                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                

                $result = mysqli_query($conn,"SELECT * FROM poll_answers WHERE id='1'");
                while($row = mysqli_fetch_array($result)) {
                  $sql1 = mysqli_query($conn,"SELECT * FROM poll_answers WHERE id=2 ");
                 $row2 = mysqli_fetch_array($sql1);
                 $total_votes = $row['votes'] +  $row2['votes'];
              ?>
              <div class="col-sm-4">
                <h2 class="module-title font-alt">Color Votes</h2>
                <div class="poll-result">
                  <div class="wrapper">
                    <div class="poll-question">
                      <p><span>(<?=$row['votes']?>Votes)</span></p>
                      <div class="result-bar" style= "width:<?=@round(($row['votes']/$total_votes)*100)?>%"><?=@round(($row['votes']/$total_votes)*100)?>%</div>
                      <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
              <?php
                 $re = mysqli_query($conn,"SELECT * FROM poll_answers WHERE id='3'");
                 while($r = mysqli_fetch_array($re)) {
                   $s = mysqli_query($conn,"SELECT * FROM poll_answers WHERE id=4 ");
                  $r2 = mysqli_fetch_array($s);
                  $s5 = mysqli_query($conn,"SELECT * FROM poll_answers WHERE id=5 ");
                  $r5 = mysqli_fetch_array($s5);
                  $total_votes = $r['votes'] +  $r2['votes'] + $r5['votes'];
               ?>
              <div class="col-sm-2">
                <h2 class="module-title font-alt">Logo Coices</h2>
                <div><img src="../assets/images/2/logoChoice.PNG" alt="Portfolio Item" style="width:50%; height:50%"/></div>
              </div>
              <div class="col-sm-4">
                <h2 class="module-title font-alt">Logo Vote Results</h2>
                <div class="poll-result">
                  <div class="wrapper">
                    <div class="poll-question">
                      <p><span>(<?=$r['votes']?>Votes)</span></p>
                      <div class="result-bar" style= "width:<?=@round(($r['votes']/$total_votes)*100)?>%"><?=@round(($r['votes']/$total_votes)*100)?>%</div>
                      <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <?php
                $result = mysqli_query($conn,"SELECT * FROM poll_answers WHERE id='2'");
                while($ro2 = mysqli_fetch_array($result)) {
                  $s1 = mysqli_query($conn,"SELECT * FROM poll_answers WHERE id=1 ");
                 $ro1= mysqli_fetch_array($s1);
                 $total_votes = $ro1['votes'] +  $ro2['votes'];
              ?>
              <div class="col-sm-2">
                <div><img src="../assets/images/1/primary.png" alt="Portfolio Item" style="width:50%; height:50%"/></div>
              </div>
              <div class="col-sm-4">
                <div class="poll-result">
                  <div class="wrapper">
                    <div class="poll-question">
                      <p><span>(<?=$ro2['votes']?>Votes)</span></p>
                      <div class="result-bar" style= "width:<?=@round(($ro2['votes']/$total_votes)*100)?>%"><?=@round(($ro2['votes']/$total_votes)*100)?>%</div>
                      <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
              <?php
                 $re4 = mysqli_query($conn,"SELECT * FROM poll_answers WHERE id='4'");
                 while($r4 = mysqli_fetch_array($re4)) {
                  $s3 = mysqli_query($conn,"SELECT * FROM poll_answers WHERE id=3 ");
                  $r3 = mysqli_fetch_array($s3);
                  $sl = mysqli_query($conn,"SELECT * FROM poll_answers WHERE id=5 ");
                  $rl = mysqli_fetch_array($sl);
                  $total_votes = $r4['votes'] +  $r3['votes'] + $rl['votes'];
               ?>
              <div class="col-sm-2">
                <div><img src="../assets/images/2/logoChoice2.PNG" alt="Portfolio Item" style="width:50%; height:50%"/></div>
              </div>
              <div class="col-sm-4">
                <div class="poll-result">
                  <div class="wrapper">
                    <div class="poll-question">
                      <p><span>(<?=$r4['votes']?>Votes)</span></p>
                      <div class="result-bar" style= "width:<?=@round(($r4['votes']/$total_votes)*100)?>%"><?=@round(($r4['votes']/$total_votes)*100)?>%</div>
                      <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-2">
               
              </div>
              <div class="col-sm-4">
               
              </div>
              <?php
                 $res = mysqli_query($conn,"SELECT * FROM poll_answers WHERE id='5'");
                 while($row5 = mysqli_fetch_array($res)) {
                  $sql3 = mysqli_query($conn,"SELECT * FROM poll_answers WHERE id=3 ");
                  $rw3 = mysqli_fetch_array($sql3);
                  $sql4 = mysqli_query($conn,"SELECT * FROM poll_answers WHERE id=4 ");
                  $row4 = mysqli_fetch_array($sql4);
                  $total_votes = $row5['votes'] +  $rw3['votes'] + $row4['votes'];
               ?>
              <div class="col-sm-2">
                <div><img src="../assets/images/2/logoChoice3.PNG" alt="Portfolio Item" style="width:50%; height:50%"/></div>
              </div>
              <div class="col-sm-4">
                <div class="poll-result">
                  <div class="wrapper">
                    <div class="poll-question">
                      <p><span>(<?=$row5['votes']?>Votes)</span></p>
                      <div class="result-bar" style= "width:<?=@round(($row5['votes']/$total_votes)*100)?>%"><?=@round(($row5['votes']/$total_votes)*100)?>%</div>
                      <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
      </div>
    </main>

    <script src="../assets/lib/jquery/dist/jquery.js"></script>
    <script src="../assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../assets/lib/wow/dist/wow.js"></script>
    <script src="../assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="../assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="../assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="../assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="../assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="../assets/lib/smoothscroll.js"></script>
    <script src="../assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="../assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script>

  </body>
</html>