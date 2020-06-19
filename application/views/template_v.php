<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <title><?echo $title;?></title>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="http://localhost/newfeidathai/assetes/css/bootstrap.css">
  
  <!-- JS, Popper.js, and jQuery -->
  <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
  <script src="https://kit.fontawesome.com/fc7a325aeb.js" crossorigin="anonymous"></script><!--icon-->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  <style>
  .arrow[data-hide] {
  visibility: hidden;
}
p,h1,h2,h3,h4,h5,h6,b,li,ul,dd{
  font-family: 'Kanit', sans-serif;
 
}
/* adds some margin below the link sets  */
.navbar .dropdown-menu div[class*="col"] {
   margin-bottom:1rem;
}
.navbar .dropdown-menu {
  border:none;
  background-color:#fff!important;
}
/* breakpoint and up - mega dropdown styles */
@media screen and (min-width: 992px) {
/* remove the padding from the navbar so the dropdown hover state is not broken */
.navbar {
  padding-top:0px;
  padding-bottom:0px;
  color:#fff;
}
/* remove the padding from the nav-item and add some margin to give some breathing room on hovers */
.navbar .nav-item {
  padding:.5rem .5rem;
  margin:0 .25rem;
}
/* makes the dropdown full width  */
.navbar .dropdown {position:static;}
.navbar .dropdown-menu {
  width:100%;
  left:0;
  right:0;
/*  height of nav-item  */
  top:45px;
  
  display:block;
  visibility: hidden;
  opacity: 0;
  transition: visibility 0s, opacity 0.3s linear;
}
/* shows the dropdown menu on hover */
.navbar .dropdown:hover .dropdown-menu, .navbar .dropdown .dropdown-menu:hover {
  display:block;
  visibility: visible;
  opacity: 1;
  transition: visibility 0s, opacity 0.3s linear;
}
  
  .navbar .dropdown-menu {
    border: 1px solid rgba(0,0,0,.15);
    background-color: #fff;
  }

}


</style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-white nav-dark border-bottom fixed-top"> 
<?php $this->view('navigationbar');?>
</nav>
<div style="padding-top:4rem !important;background-color:#fff;">
	  <?php $this->view($content); ?>
</div>
<?php $this->view('footer');?>

</body>
</html>