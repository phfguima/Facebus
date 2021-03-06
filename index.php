<?php
/**
 ** Exercício de programação - Soluções Web baseadas em Software Livre
 ** Professor Doutor Osvaldo Gogliano Sobrinho
 **
 ** Autores:
 ** Lucas Borelli Amaral - 9360951
 ** Mateus Angelo Castro - 9377532
 ** Paulo Henrique Freitas Guimarães - 9390361
 **
 ** Página principal
 **/

require_once './sptrans/authSptrans.php'
?>

<html>
    <head>
        <title>Facebus</title>

        <!-- Referências do MapBox -->
        <script src='https://api.mapbox.com/mapbox-gl-js/v0.46.0/mapbox-gl.js'></script>
        <link href='https://api.mapbox.com/mapbox-gl-js/v0.46.0/mapbox-gl.css' rel='stylesheet' />

        <!-- Referências do MapBox - Geocoder -->
        <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.2.0/mapbox-gl-geocoder.min.js'></script>
        <link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.2.0/mapbox-gl-geocoder.css' type='text/css' />

        <!-- JavaScript e CSS customizados -->
        <link rel='stylesheet' href='./Facebus/styles/index.css' type='text/css' />
        <script src='./Facebus/scripts/jquery-3.3.1.js'></script>
        <script src='./Facebus/scripts/mapa.js'></script>
    </head>
    <body>
        <!-- Caixa no topo contendo GeoCoder, opções, botão atualizar e nomes dos integrantes -->
        <div class='content_box'>
            <!-- Caixa contendo GeoCoder e opções -->
            <div style='float:left;'>
                <div id='geocoder' class='geocoder searchBox'></div>
                <div id='opcoes' class='opcoes'>
                    <div id='opcoes_left'>
                        <input type='checkbox' id='paradas' value='paradas' /><label for='paradas'>Paradas</label>
                        <input type='checkbox' id='onibus' value='onibus' /><label for='onibus'>Ônibus</label>
                    </div>
                </div>
            </div>
            <!-- Botão atualizar -->
            <div id='opcoes_center' class='btn_atualizar'>
                <input type='button' id='atualizar_onibus' value='Atualizar' style='visibility: hidden;' />
            </div>
            <!-- Nomes dos integrantes -->
            <div id='opcoes_right' class='nomes'>
                <p>Lucas Borelli Amaral - 9360951<br />
                Mateus Angelo Castro - 9377532<br/>
                Paulo Henrique Freitas Guimarães - 9390361</p>
            </div>
        </div>
        <div id='mapa' class='mapa'></div>
        <?php
            $token_map = file_get_contents('http://ec2-52-15-33-123.us-east-2.compute.amazonaws.com/Facebus/auth/mapbox.txt');
            echo "<script>showMap('" . $token_map ."');</script>";
        ?>
    </body>
</html>