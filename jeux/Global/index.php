
<html>
    <head>
        <title>Accueil</title>
        <link rel='stylesheet' type='text/css' media='screen' href='../../assets/css/footer.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='../../assets/css/body.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='../../assets/css/header.css'>
    </head>

    <body>
        <div id="header_here">
            <?php include "../../view/header.php"; ?>
        </div>


        <div id="search_nickname">
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



        <div id="footer_here">
            <?php include "../../view/footer.php"; ?>
        </div>

        <script src="../../assets/js/body.js"></script>
    </body>

</html>