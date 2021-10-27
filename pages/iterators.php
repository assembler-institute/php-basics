<?php
    require_once("../config/config.php");
    include(ROOT_PATH . "includes/a_config.php");
?>
<!DOCTYPE html>
    <head>
        <?php include(ROOT_PATH . "includes/head-tag-contents.php");?>
    </head>

    <body>
        <?php include(ROOT_PATH . "includes/nav.php");?>
        <main class="main">
            <div class="container" id="main-content">
                <?php include(ROOT_PATH . "templates/views/iterators.php");?>
            </div>
        </main>
        <?php include(ROOT_PATH . "includes/footer.php");?>
    </body>
</html>