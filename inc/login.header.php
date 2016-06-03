<?php $pageName = basename($_SERVER['PHP_SELF']); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Soul Academy</title>
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
<link rel="stylesheet" href="/assets/css/style.min.css">
<link href='https://fonts.googleapis.com/css?family=Lato:400,900,700,300' rel='stylesheet' type='text/css'>
</head>
<body class="login">
<!-- Fixed navbar -->
 <!-- <nav class="navbar navbar-inverse">
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
         <li><a href="#">Login</a></li>
         <li class="orange"><a href="#friends">Sign Up</a></li>
       </ul>
     </div>
   </div>
 </nav> -->
 <nav class='navbar navbar-inverse'>
   <div class='container'>
     <div class='navbar-header'>
       <button aria-controls='navbar' aria-expanded='false' class='navbar-toggle collapsed' data-target='#navbar' data-toggle='collapse' type='button'>
         <span class='sr-only'>Toggle navigation</span>
         <span class='icon-bar'></span>
         <span class='icon-bar'></span>
         <span class='icon-bar'></span>
       </button>
       <a class="soul" href="/">soul Akademy
       </a>
       <div class='tagline' style='font-size: 12px; color: #fff; font-weight: 100;'>
         A social network unifying the fitness &amp; wellness  culture
       </div>
     </div>
     <div class='navbar-collapse collapse' id='navbar'>
       <ul class='nav navbar-nav navbar-center'>
         <li>
           <a href="/atrium"><span class="translation_missing" title="translation missing: en.atrium">Atrium</span>
           </a>
         </li>
         <li>
           <a href="/atrium/profile/8">MyProfile
           </a>
         </li>
         <li>
           <a href="/atrium/profile/8/friends">MyFriends
           </a>
         </li>
         <li>
           <a href="/atrium/profile/8/videos">MyChannels
           </a>
         </li>
       </ul>
       <ul class='nav navbar-nav navbar-right'>
         <li class='dropdown'>
           <a aria-expanded='false' aria-haspopup='true' class='dropdown-toggle' data-toggle='dropdown' href='#' role='button'>
             <span class="glyphicon glyphicon-user"></span>
             <span class='caret'></span>
           </a>
           <ul class='dropdown-menu'>
             <li><a href="#">Victor Bustos</a></li>
             <li class='divider' role='separator'></li>
             <li>
               <a href="/atrium/create_profile_enthusiast">Edit Profile
               </a>
             </li>
             <li class='divider' role='separator'></li>
             <li>
               <a href="/users/sign_out"><span class="translation_missing" title="translation missing: en.sign_out">Sign Out</span>
               </a>
             </li>
           </ul>
         </li>
       </ul>
     </div>
   </div>
 </nav>
<div class="brand-gradient bar"></div>
<?php include("inc/pages-directory.php"); ?>
