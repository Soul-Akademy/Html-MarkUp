<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Soul Academy</title>
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
<link rel="stylesheet" href="/assets/css/style.min.css">
<link href='https://fonts.googleapis.com/css?family=Lato:400,900,700,300' rel='stylesheet' type='text/css'>
</head>
<body> 
<div style="position: absolute; left: 10px; top: 400px; padding: 20px; background: rgba(0,0,0,.7); z-index: 100;">
  <?php
  $dir_open = opendir('.');

  while(false !== ($filename = readdir($dir_open))){
      if($filename != "." && $filename != ".."){
          $link = "<a href='./$filename'> $filename </a><br />";
          echo $link;
      }
  }

  closedir($dir_open);
  ?>
</div>  
<!-- Fixed navbar -->
 <nav class="navbar navbar-inverse">
   <div class="container">
     <div class="navbar-header">
       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
       <a class="soul" href="/">soul Akademy</a>
        <div class='tagline' style='font-size: 12px; color: #fff; font-weight: 100;'>
          A social network unifying the fitness &amp; wellness  culture
        </div>
     </div>
     <div id="navbar" class="navbar-collapse collapse">
       <ul class="nav navbar-nav navbar-right">
         <li><a href="#">Atrium</a></li>
         <li><a href="#friends">My Locker Room</a></li>
         <li><a href="#atrium">Friends</a></li>
         <li><a href="#channels">My Channels</a></li>
         <li><a href=""><span class="sa-icons icon-settings"></span></a></li>
       </ul>
     </div><!--/.nav-collapse -->
   </div>
 </nav>
