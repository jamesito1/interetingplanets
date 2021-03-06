<?php include ("../../db.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interesting Planets</title>
    <link rel="shortcut icon" href="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/846a9086-8a40-43e0-aa10-2fc7d6d73730/dd4bz30-1d55fffc-6517-422f-9609-680cc512ef12.png/v1/fill/w_1280,h_1385,strp/avengers__endgame__2019__avengers_logo_png__by_mintmovi3_dd4bz30-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTM4NSIsInBhdGgiOiJcL2ZcLzg0NmE5MDg2LThhNDAtNDNlMC1hYTEwLTJmYzdkNmQ3MzczMFwvZGQ0YnozMC0xZDU1ZmZmYy02NTE3LTQyMmYtOTYwOS02ODBjYzUxMmVmMTIucG5nIiwid2lkdGgiOiI8PTEyODAifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.HSwQpmD6VQVxpTovHw2AfJBINQC5dmlYqKxjvTGP_Fo" type="image/x-icon">
    <script src="https://kit.fontawesome.com/719a26b655.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Css/Styles.css">
</head>
<body >
    <!--Video inicial -->
    <div class="video_inicial" id="video_inicial">
        <video class="video" autoplay="autoplay" muted defaultMuted playsinline  oncontextmenu="return false;"  preload="auto"  id="miVideo">
            <source src="../Img/big bang2.mp4" >
            </video>
            <button class="cerrar" onclick="video1()">
                <i class="fas fa-times"></i>
            </button>
    </div>
    <!--Fin de video inicial-->
    <div class="body">
         <header>
            <nav class="navegacion">
                <ul class="menu" >
                    <li class="ip" id="mouse_encima"><a href="pagina_principal.php">Interesting Planets</a> </li>
                    <li id="mouse_encima"><i class="fas fa-globe-americas"></i> Planetas
                        <ul class="submenu">
                            <li>
                                <a href=" Mercurio.html">Mercurio</a>
                            </li>
                            <li>
                                <a href=" venus.html">Venus</a>
                            </li>
                            <li>
                                <a href=" tierra.html">Tierra</a>
                            </li>
                            <li>
                                <a href=" marte.html">Marte</a>
                            </li>
                            <li>
                                <a href=" jupiter.html">Jupiter</a>
                            </li>
                            <li>
                                <a href=" saturno.html">Saturno</a>
                            </li>
                            <li>
                                <a href=" neptuno.html">Neptuno</a>
                            </li>
                            <li>
                                <a href=" urano.html">Urano</a>
                            </li>
                            <li>
                                <a href=" pluton.html">Pluton</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li id="mouse_encima">
                        <a href="extras.html">Extras</a>
                    </li>
                    <li id="mouse_encima">
                       <a href="../../resenas.php"> Rese??as</a>
                    </li>
            
                    <li id="mouse_encima"><a href="../../index.php">Salir</a></li>
                    <button class="boton" onclick="dark()" id="boton">
                        <div class="iconos">
                            <i class="fas fa-toggle-on"></i> 
                            
                         </div>
                    </button>
                </ul>


            </nav>
        </header>
    <div class="fondo">
    
            <video class="video" autoplay="autoplay" loop="loop" muted defaultMuted playsinline  oncontextmenu="return false;"  preload="auto"  id="miVideo">
                <source src="../Img/Interesti_p.mp4" >
                </video>
    
                
    </div>

    <div class="transparencia"></div>
        <div class="contenido">

        
        <h1 class="usuario"><?php if (isset($_SESSION['a'])) { ?>
                        
                        <?= $_SESSION['a']?>
                        
         <?php session_unset(); } ?></h1>
        <h1 class="fondo_h1">??C??mo se origin?? el Universo?</h1>
        <br>
        <p>

            Lo que acab??is de ver, es una peque??a animaci??n sobre la teor??a m??s apoyada por los cient??ficos, un cataclismo c??smico sin igual en la historia: el Big Bang. Esta teor??a surgi?? de la observaci??n del alejamiento a gran velocidad de otras galaxias respecto a la nuestra en todas direcciones, como si hubieran sido repelidas por una antigua fuerza explosiva.<br><br>
            Antes del Big Bang, seg??n los cient??ficos, la inmensidad del universo observable, incluida toda su materia y radiaci??n, estaba comprimida en una masa densa y caliente a tan solo unos pocos mil??metros de distancia. Este estado casi incomprensible se especula que existi?? tan s??lo una fracci??n del primer segundo de tiempo.<br><br>
            Los defensores del Big Bang sugieren que hace unos 10 000 o 20 000 millones de a??os, una onda expansiva masiva permiti?? que toda la energ??a y materia conocidas del universo (incluso el espacio y el tiempo) surgieran a partir de alg??n tipo de energ??a desconocido.<br><br>
            La teor??a mantiene que, en un instante (una trillon??sima parte de un segundo) tras el Big Bang, el universo se expandi?? con una velocidad incomprensible desde su origen del tama??o de un guijarro a un alcance astron??mico. La expansi??n aparentemente ha continuado, pero mucho m??s despacio, durante los siguientes miles de millones de a??os
            
            </p>
            <br>

            <h2>Nuestro sistema solar </h2>
            <br>
            <p>Ahora vamos a un lugar mas cercano tanto en tiempo como espacio, El Sistema Solar es un conjunto formado por el Sol y los ocho planetas que giran a su alrededor. De los ocho planetas, uno es donde vivimos: la Tierra.
                Adem??s de estos elementos hay otros cuerpos celestes que tambi??n orbitan alrededor de la gran estrella solar, como los sat??lites de cada planeta, los cometas o los asteroides.
                </p>
                <br>
            <h2>??D??nde est?? el Sistema Solar?</h2>
            <br>
            <p>En el universo hay millones de galaxias. Una de ellas es la que conocemos como V??a L??ctea.
                La V??a L??ctea, formada por estrellas, polvo y gas, tiene forma de espiral. Podr??a decirse que su aspecto es algo as?? como un remolino con varios brazos; pues bien, en uno de ellos, el llamado brazo de Ori??n, se encuentra el Sistema Solar.
                </p>    


    </div>

    </div>
    



    <script src="../Js/main.js"></script>
    
    </body>
</html>