<?php
require_once('functions.php');
$metrologists = getMetrologistsList();
?>
<!DOCTYPE html>
<html lang="en" >
   <head>
      <meta charset="UTF-8">
      <title>Костыль 2.0</title>
      <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
      <link rel="stylesheet" href="./style.css">
      <link rel="stylesheet" href="./loader.css">
   </head>
   <body>
      <div><span id='help' class='pulse-help-button'>?</span></div>
      <div class="container">
         <div class='loader loader1 hidden'>
            <div>
               <div>
                  <div>
                     <div>
                        <div>
                           <div></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="form">
             <h1>Костыль 2.0</h1>
         <div class="input-wrapper">
            <input class="input" type="text" name="protocol" id="protocol" placeholder="Введите № протокола АРШИН" autocomplete="off">
            <div class="icons-container">
               <div class="icon enter-key hidden">
                  <svg>
                     <use xlink:href="#enter-key"></use>
                  </svg>
               </div>
            </div>
         </div>
         <div class="select-wrapper">
            <select class="select">
               <?php
               $counter = 0;
               foreach ($metrologists as $metrologist) {
                   echo '<option value="metrologist'.++$counter.'">'.$metrologist['LastName'].' '.$metrologist['FirstName'].'</option>';
               }
            ?>
            
            </select>
         </div>
         </div>
      </div>
      <svg class="icons">
         <symbol id="enter-key" viewBox="0 0 280.823 280.823">
            <path d="m250.734 40.137-90.265-.02v20.059h90.265c5.534 0 10.029 4.515 10.029 10.049v80.216c0 5.534-4.496
               10.029-10.029 10.029h-212.34l45.877-45.877-14.182-14.182-70.089 70.088 70.206 70.206
               14.182-14.182-45.994-45.994h212.341c16.592 0 30.088-13.497
               30.088-30.088v-80.216c0-16.592-13.497-30.088-30.089-30.088z" />
         </symbol>
      </svg>
      <script  src="./script.js"></script>
   </body>
</html>