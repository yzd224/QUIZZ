<?php
   define("URL_ASSETS","http://localhost/Examenliage-Quizz/Quizz/assets");

  require_once('./libs/Router.php');
   $router=new Router();
   //controller/methode=>UC
   $router->getRoute();
   /*
   $sec=new Security();
   $sec->showPage();
   $obj->{$method}()
   */
?>