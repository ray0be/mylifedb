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
        <div id="root">
            <header>
                <div class="container grid-xl">
                    <div id="title"><a href="">myLife db</a></div>
                </div>
                <div class="border bg-purple"></div>
            </header>

            <div class="container grid-xl">
                <div class="columns">
                    <nav id="nav" class="column col-3">
                        <div class="hidden-xs block">
                            <div class="title border-purple">My collections</div>
                            <div class="content">
                                <p>There are no collection. <a href="">Create</a></p>
                            </div>
                        </div>
                    </nav>
                    <div id="page" class="block column col-12 col-9">
                        <div id="page-header" class="content">
                            
                            <h2>Hi Jeanne&nbsp;!</h2>
                            <p>This is your dashboard.</p>

                        </div>
                        <div id="page-content" class="content">
                            <?php require 'app/html/test.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Javascript -->
        <script><?php require 'app/js/all_js.php'; ?></script>
    </body>
</html>