<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once("./api/db/zollaTables.class.php");


?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test for Zolla</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/foundation-icons.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <div class="top-bar">
      <div class="top-bar-left">

        <ul class="dropdown menu" data-dropdown-menu>
          <li class="menu-text">Test for </li>
          <li><a href ="/"> <img src="/img/logo.png" style="height: 34px;margin-top: -12px;"></img></a></li>
          <li>
            <a href="/">Test #1</a>
            
          </li>
          <li><a href="/task2.php">Test #2</a></li>
          <li><a href="/task3.php">Test #3</a></li>
        </ul>
      </div>
    </div>



    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <h1></h1>
        </div>
      </div>
      <div class="grid-x grid-padding-x">
        <div class="large-4 cell">  
          <label>Select table
            <select>
              <?php
              echo $zolla->renderTablesList();
              ?>
            </select>
          </label>
        </div>
      </div>
      
      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <p>Table output</p>
        </div>

        <div class="large-12 cell">
          
            
           
              <?php
               echo $zolla->renderTable();
              ?>
          
          </table>
        </div>

      </div>


    </div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>

    <script>
      $.get( "/api/get_table.php", { table_id: 16 } , function( data ) {
          $( "#table-output" )
            .html( data );
      }, "html" ); 
      $('select').on('change', function() {
        $.get( "/api/get_table.php", { table_id: this.value } , function( data ) {
          $( "#table-output" )
            .html( data );
        }, "html" );        
      })



    </script>
  </body>
</html>
