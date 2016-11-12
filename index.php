<?php
$ch = curl_init('https://developer.manoramaonline.com/api/editions/en/sections/top-stories/articles');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Content-Type: application/json',
'authorization:a6de5e31-1b52-5f47-936c-fdc35cb1e32f'
));

$result2 = curl_exec($ch); 

$array = json_decode($result2, true);
$top = $array['articleSummary'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "template/head.php"; ?>
</head>
<body>
  <?php include "template/nav.php"; ?>
  <div class="section no-pad-bot" id="index-banner">
    <!--<div class="container">
      <br><br>
      <h1 class="header center orange-text">Media Man</h1>
      <div class="row center">
        <h5 class="header col s12 light">#Desc</h5>
      </div>
      <div class="row center">
        <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light orange">Get Started</a>
      </div>
      <br><br>

    </div>-->
  </div>
  <div class="container">
    <div class="section">
      <div class="row">

<?php
foreach ($top as $value) {

  $title= $value['title'];
  $articleURL= $value['articleURL'];
  $id= $value['articleID'];
  $thumbnail= $value['thumbnail'];
  $imgWeb= $value['imgWeb'];
  $lastModified= $value['lastModified'];
  $aurl="page.php?id=".$id;
  ?>
  
        <div class="col s12 m6 l4">
          <div class="card">
            <div class="card-image">
              <img src="<?php echo $imgWeb;?>" >
              <span class="card-title"></span>
            </div>
            <div class="card-content">
              <p><?php echo $title;?></p>
            </div>
            <div class="card-action">
              <a href="<?php echo $aurl; ?>">Read More</a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
        
      <!--   Icon Section   -->
      <!--<div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Help</h5>

            <p class="light">This is what to do</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Something Else</h5>

            <p class="light">This is something else</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Easy to work with</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div>-->

    </div>
    <br><br>

    <div class="section">

    </div>
  </div>

  <footer class="page-footer orange">
    <!--<div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>-->
    <?php include "template/footnote.php"; ?>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
