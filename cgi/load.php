<?php
    //підключаєм базові класи
    require_once("cgi/core/config.php");
    require_once("cgi/core/Route.php");
    require_once("cgi/core/Controller.php");
    require_once("cgi/core/Model.php");
    require_once("cgi/core/View.php");

    //запускаєм роутер
    Route::start();