<html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div class="container1">
      <p class="user">Joset Misael Abarca Aviles <br>Código de profesor: 328969 </p>
      <img src="https://epo34info.files.wordpress.com/2013/09/escudo-aniv.jpg" alt="logo" />
    </div>

    <div class="avisos">
      <h1>Avisos</h1>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus, quisquam. Porro sed voluptates ea atque qui. Atque voluptas eaque, cupiditate at illum ipsam quae? Eos corrupti minima magni deleniti id. Explicabo exercitationem nihil eligendi, officiis vel voluptatibus quidem cum accusantium earum assumenda. Autem tempore architecto eius impedit ullam asperiores repudiandae rem quibusdam dolorum consequatur. Earum deleniti quo est quasi debitis.</p>
    </div>


    <div class="lista">
      <fieldset><legend>Pendientes</legend><br>
        <div class="datos">
        <?php
            $arrFiles = array();
            $dirPath = "./pendientes";

            $files = scandir($dirPath);
            foreach ($files as $file){
                $filePath = $dirPath . '/' . $file;
                if(is_file($filePath)){
                    echo $file . "<br>";
                }
            }
        ?>
        </div>
      </fieldset>
    </div>

    </body>
</html>