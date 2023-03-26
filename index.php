<?php
  
 $pageName = $_GET['action'] ?? null;   
 

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

   <div id="container">

     <div id="logo">
        Linux
     </div>
     <div id="menu">
       <div class="option">
         <a style="color:white; text-decoration: none;" href="index.php">Strona główna</a>
       </div> 
       <div class="option">
         <a style="color:white; text-decoration: none;" href="?action=page2">Kategorie</a>
       </div>
       <div class="option">
         <a style="color:white; text-decoration: none;" href="?action=page3">O autorach</a>
       </div>
       <div style="clear:both;"></div>
    </div>
    <div id="topbar">
      <div id="topbarL">
        <img src="linux.png" />
      </div> 
      <div id="topbarR"> 
        <span class="bigtitle">O projekcie słów kilka</span>
          <div style="height: 15px;"></div>
        Kiedy mówisz: "Napisałem program, który wywalił Windows, ludzie gapią się na Ciebie głupkowato i mówią:
         Hej, ja dostałem to wraz z systemem, za darmo" - Linus Torvalds, twórca Linuxa :) Zapraszamy do 
         zapoznania się z witryną, dzięki której dowiesz się co to jest Linux i wybierzesz dystrybucję dla siebie!
      </div>
      <div style="clear:both;"></div> 
    </div>  
    <div id="bmenu">
        <div class="optionL">
          <a style="color:white; text-decoration: none;" href="index.php">Strona główna</a>
        </div> 
        <div class="optionL">
          <a style="color:white; text-decoration: none;" href="?action=page2">Kategorie</a>
        </div>
        <div class="optionL">
          <a style="color:white; text-decoration: none;" href="?action=page3">O autorach</a>
        </div>
        <div style="clear:both;"></div>
    </div>
    <div id="content">
        
        
    
        <?php if ($pageName === 'page2') : ?>
           <?php
               
              require("kategorie.html");
               
            ?>
       
        <?php elseif ($pageName === 'page3') : ?>
           
               
               
           
            
           <h2>echo3</h2>
           
         
         
        <?php endif; ?>        
    </div>
    <div id="footer">
        Linux - najlepszy darmowy program operacyjny.Strona w sieci od 2015r.
    </div>
      

   </div> 




    
</body>
</html>