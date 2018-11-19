<?php
  require_once('auth.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  lang="en">
<head>
<title>Automated RMS</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<!-- <link href="style.css" rel="stylesheet" type="text/css" /> -->

<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script> 

<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script> 
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" charset="utf-8">
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script> 
</head>
<style type="text/css">
  a{
    text-decoration: none;
  }
  body{
        padding-top: 50px;
      }
    
   .dropdown-menu>li>a:hover{
    background-color: transparent;
   }
   
.input-group-addon {
  background-color: #0e39c2;
  color: white;
  border-color: #0e39c2;
}
.glyphicon-plus{
  color: white;
}
.breadcrumb{
  background: transparent;
  text-align: right; 
}
.breadcrumb a{
text-decoration: none; 

}
.srch{
  border-color: #0e39c2;
}

</style>

<body>


<div class="container">

      <nav class="navbar navbar-default  navbar-fixed-top ">
        <div class="container"> 
          <div class="navbar-header navbar-success">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home.php">Automated RMS</a>
          </div>
          


            <ul class="nav navbar-nav navbar-right">

              <li><a href="home.php">Home</a></li>
          <li><a href="memo.php">Memo</a></li>
          <li><a href="commu.php">Communication </a></li>
          <li><a href="forms.php">Forms</a></li>
          <li><a href="research.php">Research</a></li>
          <li><a href="profile.php">Faculty Profile</a></li>
        


              <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Others<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="calendar.php">GS Calendar</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="syllabus.php">Syllabus</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="ppmp.php">PPMP</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="minute2.php">Minutes</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="extension.php">Extension</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="index.php">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
          </div><!-- /.navbar-collapse -->
      </nav>
    

