<html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div class="pag2">
      <p class="user">Joset Misael Abarca Aviles <br>Código de profesor: 328969 </p>
      <img src="https://epo34info.files.wordpress.com/2013/09/escudo-aniv.jpg" alt="logo" />
    </div>

    <div class="lista">
      <fieldset><legend>Pendientes</legend><br>
        <div>
          <table>
          <?php
            $arrFiles = array();
            $dirPath = "./pendientes";

            $files = scandir($dirPath);
            foreach ($files as $file){
                $filePath = $dirPath . '/' . $file;
                if(is_file($filePath)){
                    ?>
                      <tr>
                        <td><?php echo $file; ?></td>
                        <td><a href=<?php $file; ?>><button type="button">Ver</button></a></td>
                      </tr>
                    <?php
                }
            }
          ?>
          </table>
        </div>
      </fieldset>
    </div>

    <div class="prev">
      <iframe src= "pendientes\Oficio_201.pdf" width="100%" height="100%"></iframe>>  
    </div>

    </body>
</html>