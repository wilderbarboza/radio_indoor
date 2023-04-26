<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    <title><?php echo('Rádio: Nome da Rádio')?></title>
</head>
<body>
   <div class="container_initial">
        <div class="aside_area">
            <div class="navigator">
                <nav>
                    <ul>
                        <li><a href="#" class="active"><i class="material-icons active">home</i>Início</a></li>
                        <li><a href="#"><i class="material-icons">search</i>Buscar</a></li>
                        <li><a href="#"><i class="material-icons">library_music</i>Sua Biblioteca</a></li>
                    </ul>
                </nav>
            </div>
            <div class="music_up">
                <ul>
                    <li><a href="#"><i class="material-icons">playlist_add</i>Criar Playlist</a></li>
                    <li><a href="#"><i class="material-icons">add_box</i>Adicionar Música</a></li>
                </ul>
            </div>
            <div class="music_list">
                <span>Tocadas Renentemente:</span>
                <div class="music">
                    <ul>
                        <li>Ballade Pour Adeline</li>
                        <li>Feelings</li>
                        <li>I Don't Know How To Love Him</li>
                        <li>Ballade Pour Adeline</li>
                        <li>Feelings</li>
                        <li>I Don't Know How To Love Him</li>
                        <li>Ballade Pour Adeline</li>
                        <li>Feelings</li>
                        <li>I Don't Know How To Love Him</li>
                        <li>Ballade Pour Adeline</li>
                        <li>Feelings</li>
                        <li>I Don't Know How To Love Him</li>
                        <li>Ballade Pour Adeline</li>
                        <li>Feelings</li>
                        <li>I Don't Know How To Love Him</li>
                        <li>Ballade Pour Adeline</li>
                        <li>Feelings</li>
                        <li>I Don't Know How To Love Him</li>
                        <li>Ballade Pour Adeline</li>
                        <li>Feelings</li>
                        <li>I Don't Know How To Love Him</li>
                        <li>Ballade Pour Adeline</li>
                        <li>Feelings</li>
                        <li>I Don't Know How To Love Him</li>
                        <li>Ballade Pour Adeline</li>
                        <li>Feelings</li>
                        <li>I Don't Know How To Love Him</li>
                        <li>Ballade Pour Adeline</li>
                        <li>Feelings</li>
                        <li>I Don't Know How To Love Him</li>
                        <li>Ballade Pour Adeline</li>
                        <li>Feelings</li>
                        <li>I Don't Know How To Love Him</li>
                    </ul>
                </div>

            </div>

        </div>
        <div class="main_area">
            <header>
                <div class="arrows">
                    <a href="#" class="btn-floating btn-small waves-effect black"><i class="material-icons">navigate_before</i></a>
                    <a href="#" class="btn-floating btn-small waves-effect black"><i class="material-icons">navigate_next</i></a>
                </div>
                <div class="user_profile">
                <div class="upgrade_area"><a href="#" class="upgrade">Faça upgrade</a></div>
                    <a href="#" class="profile"><img src="assets/profile_img/wilder.jpg" alt=""><?php echo('Wilder Barboza')?><i class="material-icons">arrow_drop_down</i></a>
                </div>
            </header>
            <H4 class="playlistDay"></H4>
                    <div class="albuns">
                    <table border = 1>
                        <thead>
                            <tr>
                                <th>
                                    <p>Nome da Música</p> 
                                </th>
                                <th>
                                    <p>Artista</p> 
                                </th>
                                <th>
                                    <p>Duração</p> 
                                </th>
                                <th>
                                    <p>Executada</p> 
                                </th>
                                <th>
                                    <p>Ações</p> 
                                </th>
                            </tr>
                        </thead>
                    <tbody>
                        <tr>
                            <td>
                                <p>Ballade Pour Adeline</p> 
                            </td>
                            <td>
                                <p>Richard Clayderman</p>
                            </td>  
                            <td>
                                <p>03:37</p>
                            </td>
                            <td>
                                <p>Sim</p>
                            </td>
                            <td>
                                <div class="actions">
                                <a href="#"><i class="material-icons play">play_arrow</i></a>
                                <a href="#"><i class="material-icons delete">delete</i></a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
   </div>
   <footer>
        <div class="first_area">
            <div class="image_area">
                <img src="assets/album_img/cover.jpg" id="img_album" alt="">
            </div>
            <div class="desc_area">
                <h5 id="music_name"><?php echo("I Don't Know How To Love Him") ?></h5>
                <span id="artist_name"><?php echo("Richard Clayderman") ?></span>
            </div>
            <div class="like_area">
                <i class="material-icons">favorite_border</i>
            </div>
        </div>
        <div class="second_area">
                <?php $MUSIC='01 - Ballade Pour Adeline.mp3'?>
             <audio src= "/music/<?php echo $MUSIC ?>" id="player" type="audio/mpeg"></audio>
            <div class="control_area">
                <i class="material-icons">low_priority</i>
                <i class="material-icons" id="previous">skip_previous</i>
                <i class="material-icons" id="play" >play_circle_filled</i>
                <i class="material-icons" id="next">skip_next</i>
                <i class="material-icons" id="repeat" >repeat</i>
            </div>
            <div class="time_bar">
                <div class="duration currentduration" style="margin-right:10px;">00:00</div><div class="range_area"><input type="range" name="local" min =0 max=0 step=1 id="local"></div><div class="duration totalduration" style="margin-left:10px;">00:00</div>
            </div>
        </div>
        <div class="third_area">
            <div class= "informations">
                <div>
                    <h4 id="actualDay">----</h4>
                    <h4 id="actualTime">----</h4>
                </div>
                <div>
                    <h4>Hora de Inicio: 07:00 h</h4>
                    <h4>Hora de Término: 19:00 h</h4>
                </div>
            </div>
            <div class="volume_area">
                <i class="material-icons" id='mute'>volume_up</i>
                <input type="range" name="volume_range" min=0 max=100 step=1 id="volume_range">
            </div>
        </div>
   </footer>
   <script src="/assets/script.js"></script>
</body>
</html>