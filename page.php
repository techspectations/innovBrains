<?php

$id=$_GET['id'];


$ch = curl_init('https://developer.manoramaonline.com/api/editions/en/articles/'.$id);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Content-Type: application/json',
'authorization:a6de5e31-1b52-5f47-936c-fdc35cb1e32f'
));

$result2 = curl_exec($ch); 
$array = json_decode($result2, true);
$title= $array['title'];
$date = $array['lastModified'];
$content = $array['content'];
$img = $array['imgWeb'];
$share= $array['shareURL'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1762912060645751";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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
        <div class="col s12 m12">
          <div class="card">
            <div class="card-image">
              <img src="<?php echo $img;?>" >
              <span class="card-title"><?php echo $title;?></span>
            </div>
            <div class="card-content">
              <p><?php echo $content;?></p>
            </div>
            <div class="card-action">
              <div class="fb-comments" id="danivijay.com"></div>
            </div>
          </div>
        </div>
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
