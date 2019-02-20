<?php

$var1 = "";

echo <<< HTML

<div class="uk-position-relative">



<div class="uk-animation-fade">
<div id="carouselExampleControls " class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img class="d-block w-100 uk-animation-kenburns" src="recur/img3.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
      <div class="uk-animation-slide-top-medium">
            <h1>FOR CREATORS!</h><br>
            <a href="#"><button type="binicio2" class="btn btn-outline-warning">Crea una cuenta.</button></a>
        </div>
      </div>
    </div>
    <div class="carousel-item">
    <img class="d-block w-100 uk-animation-kenburns" src="recur/img1.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
        <div class="uk-animation-slide-top-medium">
            <h1>Desarrollo Multimedia y Distribución digital.</h1>
        </div>
        </div>

    </div>
    <div class="carousel-item">
        <img class="d-block w-100 uk-animation-kenburns" src="recur/img2.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
        <div class="uk-animation-slide-top-medium">
                <h1> Music Managment</h1>
        </div>
    </div>
    </div>
  </div>
  
</div>
</div>
     


    <div class="uk-position-top">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
        <div class="uk-animation-slide-bottom">
            <div class="uk-navbar-left">
                <ul class="uk-navbar-nav">
                    <li class="logo"><a href="#"><img src="recur/logonankings.png"></a></li>
                </ul>
            </div>
        </div>
    <div class="uk-animation-slide-bottom">
        <div class="uk-navbar-right">
        <div>
            <ul class="uk-navbar-nav">

            <li><a href="#"><iframe width="100%" height="20" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/341006096&color=ff5500&inverse=false&auto_play=false&show_user=true"></iframe></a> </li>
            <li><a href="pages/login.php"><button type="binicio1" class="btn btn-outline-warning btn-sm">Inicia sesion.</button></a> </li>
            <li><a href="#"><button type="binicio2" class="btn btn-outline-warning btn-sm">Crea una cuenta.</button></a> </li>
                
            <li>
                    <a class="uk-navbar-toggle" uk-navbar-toggle-icon href="">
                    
                    </a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-active"><a href="#">Active</a></li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                        </div>
                </li>
            </ul>
        </div>
    </div>
            </div>
        </nav>
    </div>
</div>


$var1

HTML;

?>