<!DOCTYPE HTML>
<html>
    <head>
        <title>myLife db</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Favicon -->
        <link rel="shortcut icon" href="data:image/png;base64,<?= base64_encode(file_get_contents('app/img/favicon.png')) ?>">

        <!-- CSS -->
        <style><?php require 'app/css/all_css.php'; ?></style>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,600,900">
    </head>
    <body>
        <!-- Vue.js -->
        <script>
        <?php require 'app/js/js_before.php'; ?>
        </script>

        <div id="root" v-bind:class="'links-' + db.settings.color">
            <?php include 'app/html/header.html'; ?>

            <div class="container grid-xl">
                <div class="columns">
                    <?php include 'app/html/nav.html'; ?>

                    <div class="column col-md-12 col-9">
                        <div id="page" class="block">
                            <?php include 'app/html/pages.php'; ?>
                            
                            <router-view></router-view>
                        </div>
                        <?php include 'app/html/footer.html'; ?>
                    </div>
                </div>
            </div>
        </div>

        <script>
        "use strict";
        <?php require 'app/js/js_after.php'; ?>
        </script>
    </body>
</html>
