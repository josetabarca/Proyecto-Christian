<html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
    </head>

    <body>
    
    <div class="pag2">
      <p class="user">Joset Misael Abarca Aviles <br>Código de profesor: 328969 </p>
      <img src="https://epo34info.files.wordpress.com/2013/09/escudo-aniv.jpg" alt="logo" class="logo" />
    </div>

  <div>

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
                        <td><a href="<?php $filePath ?>"><button>Ver</button></a></td> 
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
      <iframe src= "pendientes\Oficio_201.pdf" width="100%" height="100%"></iframe>
    </div>

    <div class="firma">
      <fieldset><legend>Firma digital</legend><br>
        <img src="Imagenes/signature.png" alt="firma de docente">
        <p>Joset Misael Abarca Aviles</p>
          <form method="POST">
        <button type='button'>Firmar</button>
          </form>
      </fieldset><br><br>
    </div>

    </div>

    <div class="firma_documento">
            <form method="POST">
        <button>Enviar</button>
          </form>
    </div>

    <?php
    if(isset($_POST['button'])){
      
    $fecha = date('d-m-Y H:i:s A');

    require_once ('tcpdf/tcpdf.php');
    
    class MYPDF extends TCPDF {
      public function Header(){
        $bMargin = $this->getBreakMargin();
        $auto_page_break = $this->AutoPageBreak;
        $this->SetAutoPageBreak (false, 0);
        $img_file = 'Imagenes/signature.png';
        $this->Image($img_file, 10, 10, 25, 25, '', '', '', false, 300, '', false, false, 0);
        $this->SetAutoPageBreak ($auto_page_break, $bMargin);
        $this->setPageMark();
      }
    }

 
        $pdf = new MYPDF (PDF_PAGE_ORIENTATION, 'mm', 'Letter', true, 'UTF-8', false);

        //establecer margenes
        $pdf->SetMargins (25, 35, 25);
        $pdf->SetHeaderMargin (20);
        $pdf->setPrintFooter(false);
        $pdf->setPrintHeader(true);
        $pdf->SetAutoPageBreak (false);


          ob_end_clean();
          $pdf->Output($file, "D");
        }


    ?>

    </body>
</html>