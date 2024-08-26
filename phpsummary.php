<!doctype html>
<html lang="en">
    <?php include 'includes/head.php' ?>

    <body>
        <?php include 'includes/menu.php' ?>

        <div class="container">
            <h1>PHP Summary</h1>
            <?php
                printf('<p>You are running PHP %s</p>', phpversion());

                echo '<h4>Loaded Extensions:</h4>';
                $ext = get_loaded_extensions();
                var_dump($ext);

                echo '<h4>Server Environmment</h4>';
                var_dump($_SERVER);

                $REMOTE_ADDR = 

                // coursework self study
                //information about client's request
                printf('<p>The IP address from which the you are viewing the current page is %s</p>', $_SERVER['REMOTE_ADDR']);

                // global variables defined

                printf('<p>The port being used on your machine to communicate with the web server is %s</p>', $_SERVER['REMOTE_PORT']);
                printf('<p>The request method used to access the page is %s</p>', $_SERVER['REQUEST_METHOD']);
                printf('<p>The timestamp of the start of the request is %s</p>', $_SERVER['REQUEST_TIME']);

                // to ask keith about other REQUEST & REMOTE variables bringing up an error

                // name of file
                printf('<p>The name of the file which you are currently viewing is %s</p>', $_SERVER['PHP_SELF']);
            ?>

        </div>

        <?php include 'includes/footer.php' ?>
    </body>
    
</html>