<?php

$var1 = "";

echo <<< HTML

<!--Navbarrfuncional-->

<div class="uk-position-relative col-sm-12-full-box">
    <img src="recur/predeterminada1.jpg">
    <div class="uk-position-top">
    <!--aqui empieza mi navbar-->
        <nav class="uk-navbar-container uk-navbar-transparent col-sm-12-full-box" uk-navbar>
            
            <!--aqui empieza un menu-->
            <div class="uk-navbar-left ">
                <ul class="uk-navbar-nav">
                <li class="uk-active"><a href="#"><img src="recur/logonankings.png"></a></li>
                </ul>
            </div>
            <!--aqui termina un menu-->
            <!--aqui empieza un menu-->
            <div class="uk-navbar-right col-sm-12-full-box">
                <ul class="uk-navbar-nav">
                    <!--<li class="uk-active"><a href="#">*ojo REVISAR ESTE MENU*</a></li>-->
                    <li><a href="#">ARTISTAS</a></li>
                    <li><a href="#">SERVICIOS</a></li>
                    <li><a href="#">CONTACTANOS</a></li>
                    <li><a href="#">JOIN TO CREW</a></li>
                </ul>
            </div>
            <!--aqui termina un menu-->

    <!--aqui termina el navbar-->
        </nav>

        
    </div>
</div>

$var1

HTML;

?>