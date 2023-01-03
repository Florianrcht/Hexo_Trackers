<?php
    include '../../includes/function.php';

    /*----- MASQUE LES ERREURS -----*/ 
    error_reporting('0');
    /*----- MASQUE LES ERREURS -----*/ 


/*-------------------------------------------- DEBUT DES FONCTIONS API --------------------------------------------------------------------*/

/*---------------- DEBUT DES SETTINGS --------------*/ 
    $platform = 'steam';

    if ($_POST['input_search_nickname'] === NULL){
        $CsgoNickname = '76561198806956853';
    } else {
        $CsgoNickname = $_POST['input_search_nickname'];
    }

    $segments = 'map';
/*---------------- FIN DES SETTINGS ----------------*/ 

/*---------------- DEBUT DES VARIABLES -------------*/ 
    $playerStats = getPlayerStats($platform, $CsgoNickname);

    $PlayerAvatar = $playerStats['data']['platformInfo']['avatarUrl'];

    $playerName = $playerStats['data']['platformInfo']['platformUserHandle'];

    $CsgoNickname = $_POST['input_search_nickname'];

    $NmbKill = $playerStats['data']['segments']['0']['stats']['kills']['displayValue'];

    $NmbDeatch = $playerStats['data']['segments']['0']['stats']['deaths']['displayValue'];

    $RatioKd = $playerStats['data']['segments']['0']['stats']['kd']['displayValue'];

    $playedTime = $playerStats['data']['segments']['0']['stats']['timePlayed']['displayValue'];

    $playedMatches = $playerStats['data']['segments']['0']['stats']['matchesPlayed']['displayValue'];

    $NmbWin = $playerStats['data']['segments']['0']['stats']['wins']['displayValue'];

    $NmbLoose = $playerStats['data']['segments']['0']['stats']['losses']['displayValue'];

    $RatioWin = $playerStats['data']['segments']['0']['stats']['wlPercentage']['displayValue'];

    $Headshot = $playerStats['data']['segments']['0']['stats']['headshots']['displayValue'];

    $Damage = $playerStats['data']['segments']['0']['stats']['damage']['displayValue'];

    $ShotFired = $playerStats['data']['segments']['0']['stats']['shotsFired']['displayValue'];

    $ShotHit = $playerStats['data']['segments']['0']['stats']['shotsHit']['displayValue'];

    $ShotAccuracy = $playerStats['data']['segments']['0']['stats']['shotsAccuracy']['displayValue'];

    $MVP = $playerStats['data']['segments']['0']['stats']['mvp']['displayValue'];

    $BombsPlanted = $playerStats['data']['segments']['0']['stats']['bombsPlanted']['displayValue'];

    $BombsDefused = $playerStats['data']['segments']['0']['stats']['bombsDefused']['displayValue'];

    $HostagesRescued = $playerStats['data']['segments']['0']['stats']['hostagesRescued']['displayValue'];

    $MoneyEarned = $playerStats['data']['segments']['0']['stats']['moneyEarned']['displayValue'];

    $Score = $playerStats['data']['segments']['0']['stats']['score']['displayValue'];


/*---------------- FIN DES VARIABLES ---------------*/


/*---------------- DEBUT DES FAVORIS ---------------*/
$PseudoFav1 = 'iriaisa';
/*---------------- FIN DES FAVORIS -----------------*/


/*---------------- DEBUT DES VARIABLES SEGMENTEES --*/ 
    $playerSegmentsStats = getPlayerSegmentsStats($platform, $CsgoNickname, $segments);
    $bestMap = 'XXX';
    $bestMapTotalPlayed = 'XXX';
    $bestWeapon = 'XXX';
    $bestWeaponTotalKill = 'XXX';
/*---------------- FIN DES VARIABLES SEGMENTEES ----*/ 

/*-------------------------------------------- FIN DES FONCTIONS API ----------------------------------------------------------------------*/
?>


<!-- ------------------------------------------ DEBUT DE LA NAV BARRE ------------------------------------------------------------------- -->

<html>
    <head>
        <title>CS:GO Stats</title>
        <link rel='stylesheet' type='text/css' media='screen' href='../../assets/css/footer.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='../../assets/css/body.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='../../assets/css/header.css'>
    </head>

    <body>
        <div id="header_here">
            <?php include "../../view/header.php"; ?>
        </div>

  
        <div id="search_nickname">
            <div id="favori">
                <p id="fav_noneclick">Favoris</p>
                <p id="fav_onclick">Favoris</p>
            </div>
            
            <form method="POST" id="search_bar">
            <input type="text" id="input_search_nickname" name="input_search_nickname" placeholder="Steam pseudo/ID/URL">
            <button id="submit_search_nickname" type="submit">Chercher</button>
            </form>
        </div>
        <?php /*
            if (isset($_POST['input_search_nickname'])){
                $nickname = $_POST['input_search_nickname'];
            } else {
                echo ("non");
            } */
        ?>




            <div id="nav_onglet">
                    <div id="onglet_profil">
                        <p id="profil_noneclick">Profil</p>
                        <p id="profil_onclick">Profil</p>
                    </div>
                    <div id="onglet_lifetime">
                        <p id="lifetime_noneclick">Lifetime</p>
                        <p id="lifetime_onclick">Lifetime</p>
                    </div>
                    <div id="onglet_weapon">
                        <p id="weapon_noneclick">Weapon</p>
                        <p id="weapon_onclick">Weapon</p>
                    </div>
                    <div id="onglet_map">
                        <p id="map_noneclick">Map</p>
                        <p id="map_onclick">Map</p>
                </div>
            </div>

<!-- ----------------------------------------- DEBUT DE LA NAV BARRE -------------------------------------------------------------------- -->
<div id="page_favoris">
    <h3>Vos contacts favoris</h3>
        <ul>
            <li ><a href="#" onclick="fillForm()"> <?= $PseudoFav1 ?> </a></li>
        </ul>
</div>
<!-- --------------------------------------DEBUT DE LA PAGE PROFIL----------------------------------------------------------------------- -->

        <div id="page_profil">

            <div id="profil">

                <div id="pseudo">
                    <h3>Pseudo : <?= $playerName ?> </h3>
                    <h3> <?= $CsgoNickname ?> </h3>
                </div>

                <br>

                <div id="avatar">
                    <img id="img_avatar" src=" <?= $PlayerAvatar ?> ">
                    <br>
                    <br>
                </div>
            </div>

            <div id="data_profil">
                <div id="data_played">
                        <p id="playedTime">Temps de jeu : <?= $playedTime ?> </p> 
                        <br>
                        <p id="overall_kills">Kills : <?= $NmbKill ?> </p> 
                        <p id="overall_deaths">Deaths : <?= $NmbDeatch ?> </p> 
                        <p id="overall_ratioKd">Ratio K/D % : <?= $RatioKd ?> </p> 
                        <br>
                        <p id="bestMap">Map préferée : <?= $bestMap ?> </p> 
                        <p id="totalPlayed">Parties jouées : <?= $bestMapTotalPlayed ?> </p> 
                    </div>
                    <div id="overall_matches">
                        <p id="playedMatches">Parties jouées : <?= $playedMatches ?> </p> 
                        <br>
                        <p id="playedMatches">Win : <?= $NmbWin ?> </p> 
                        <p id="playedMatches">Loose : <?= $NmbLoose ?> </p> 
                        <p id="playedMatches">Win Rate % : <?= $RatioWin ?> </p> 
                        <br>
                        <p id="bestWeapon">Arme préferée : <?= $bestWeapon ?> </p> 
                        <p id="bestWeaponKill">Kill : <?= $bestWeaponTotalKill ?> </p>
                    </div>
                </div>
            </div>

        </div>

<!-- --------------------------------------FIN DE LA PAGE PROFIL------------------------------------------------------------------------- -->



<!-- --------------------------------------DEBUT DE LA PAGE LIFETIME--------------------------------------------------------------------- -->

        <div id="page_lifetime">

            <div id="profil">

                <div id="pseudo">
                    <h3>Pseudo : <?= $playerName ?> </h3>
                </div>

                <br>

                <div id="avatar">
                    <img id="img_avatar" src=" <?= $PlayerAvatar ?> ">
                    <br>
                    <br>
                </div>
            </div>

            <div id="data_profil">
                <div id="data_played">
                        <p id="playedTime">Temps de jeu : <?= $playedTime ?> </p> 
                        <br>
                        <p id="overall_kills">Kills : <?= $NmbKill ?> </p> 
                        <p id="overall_deaths">Deaths : <?= $NmbDeatch ?> </p> 
                        <p id="overall_ratioKd">Ratio K/D % : <?= $RatioKd ?> </p> 
                        <br>
                        <p id="bestMap">Headshot : <?= $Headshot ?> </p> 
                        <p id="totalPlayed">Damage : <?= $Damage ?> </p>
                        <p id="bestWeaponKill">MVP : <?= $MVP ?> </p>
                        <br>
                        <p id="bestMap">Shots Fired : <?= $ShotFired ?> </p> 
                        <p id="totalPlayed">Shots Hit : <?= $ShotHit ?> </p>
                        <p id="bestWeaponKill">Shots Accuracy % : <?= $ShotAccuracy ?> </p>    
                    </div>
                    <div id="overall_matches">
                        <p id="playedMatches">Parties jouées : <?= $playedMatches ?> </p> 
                        <br>
                        <p id="playedMatches">Win : <?= $NmbWin ?> </p> 
                        <p id="playedMatches">Loose : <?= $NmbLoose ?> </p> 
                        <p id="playedMatches">Win Rate % : <?= $RatioWin ?> </p> 
                        <br>
                        <p id="bestWeapon">Bombs Planted : <?= $BombsPlanted ?> </p> 
                        <p id="bestWeaponKill">Bombs defused : <?= $BombsDefused ?> </p>
                        <p id="bestWeaponKill">Hostages Rescued : <?= $HostagesRescued ?> </p> 
                        <p id="bestWeaponKill">Money Earned : <?= $MoneyEarned ?> </p> 
                        <p id="bestWeaponKill">Score : <?= $Score ?> </p> 

 
                    </div>
                </div>
            </div>

        </div>

<!-- --------------------------------------FIN DE LA PAGE LIFETIME----------------------------------------------------------------------- -->


<!-- --------------------------------------DEBUT DE LA PAGE WEAPON----------------------------------------------------------------------- -->

        <div id="page_weapon">

            <div id="profil">

            <div id="pseudo">
                    <h3>Pseudo : <?= $playerName ?> </h3>
                </div>

                <br>

                <div id="avatar">
                    <img id="img_avatar" src=" <?= $PlayerAvatar ?> ">
                    <br>
                    <br>
                </div>
            </div>

            <div id="data_profil">
                <div id="data_played">
                        <p id="playedTime">Temps de jeu : <?= $playedTime ?> </p> 
                        <br>
                        <p id="overall_kills">Kills : <?= $NmbKill ?> </p> 
                        <p id="overall_deaths">Deaths : <?= $NmbDeatch ?> </p> 
                        <p id="overall_ratioKd">Ratio K/D % : <?= $RatioKd ?> </p> 
                        <br>
                        <p id="bestMap">Map préferée : <?= $bestMap ?> </p> 
                        <p id="totalPlayed">Parties jouées : <?= $bestMapTotalPlayed ?> </p> 
                    </div>
                    <div id="overall_matches">
                        <p id="playedMatches">Parties jouées : <?= $playedMatches ?> </p> 
                        <br>
                        <p id="playedMatches">Win : <?= $NmbWin ?> </p> 
                        <p id="playedMatches">Loose : <?= $NmbLoose ?> </p> 
                        <p id="playedMatches">Win Rate % : <?= $RatioWin ?> </p> 
                        <br>
                        <p id="bestWeapon">Arme préferée : <?= $bestWeapon ?> </p> 
                        <p id="bestWeaponKill">Kill : <?= $bestWeaponTotalKill ?> </p> 
                    </div>
                </div>
            </div>

        </div>

<!-- --------------------------------------FIN DE LA PAGE WEAPON------------------------------------------------------------------------- -->


<!-- --------------------------------------DEBUT DE LA PAGE MAP-------------------------------------------------------------------------- -->

        <div id="page_map">

            <div id="profil">

            <div id="pseudo">
                    <h3>Pseudo : <?= $playerName ?> </h3>
                </div>

                <br>

                <div id="avatar">
                    <img id="img_avatar" src=" <?= $PlayerAvatar ?> ">
                    <br>
                    <br>
                </div>
            </div>

            <div id="data_profil">
                <div id="data_played">
                        <p id="playedTime">Temps de jeu : <?= $playedTime ?> </p> 
                        <br>
                        <p id="overall_kills">Kills : <?= $NmbKill ?> </p> 
                        <p id="overall_deaths">Deaths : <?= $NmbDeatch ?> </p> 
                        <p id="overall_ratioKd">Ratio K/D % : <?= $RatioKd ?> </p> 
                        <br>
                        <p id="bestMap">Map préferée : <?= $bestMap ?> </p> 
                        <p id="totalPlayed">Parties jouées : <?= $bestMapTotalPlayed ?> </p> 
                    </div>
                    <div id="overall_matches">
                        <p id="playedMatches">Parties jouées : <?= $playedMatches ?> </p> 
                        <br>
                        <p id="playedMatches">Win : <?= $NmbWin ?> </p> 
                        <p id="playedMatches">Loose : <?= $NmbLoose ?> </p> 
                        <p id="playedMatches">Win Rate % : <?= $RatioWin ?> </p> 
                        <br>
                        <p id="bestWeapon">Arme préferée : <?= $bestWeapon ?> </p> 
                        <p id="bestWeaponKill">Kill : <?= $bestWeaponTotalKill ?> </p> 
                    </div>
                </div>
            </div>

        </div>

<!-- --------------------------------------FIN DE LA PAGE MAP---------------------------------------------------------------------------- -->


        <div id="footer_here">
            <?php include "../../view/footer.php"; ?>
        </div>

        <script src="../../assets/js/body.js"></script>
    </body>

</html>