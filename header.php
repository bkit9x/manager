<?php if (!defined('ACCESS')) die('Not access'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="vi">
    <head>
        <title><?php echo $title; ?> - File Manager V<?php echo VERSION; ?> By DucVuPro</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css" media="all,handheld" />
        <link rel="icon" type="image/png" href="https://bkit9x.github.io/images/icon/favicon.ico">
        <link rel="icon" type="image/x-icon" href="https://bkit9x.github.io/images/icon/favicon.ico" />
        <link rel="shortcut icon" type="image/x-icon" href="https://bkit9x.github.io/images/icon/favicon.ico" />
    </head>
    <body>
        <div id="header">
            <ul><li style="float:left"><b style="color:#fff">HKIT9X</b></li>
                <li><a href="index.php"><img src="https://bkit9x.github.io/images/icon/home.png"/></a></li>
                <?php if (!IS_INSTALL_ROOT_DIRECTORY && isset($_SESSION[SESS])) { ?>
                    <?php if (!defined('IS_CONNECT')) { ?>
                        <li><a href="database.php"><img src="https://bkit9x.github.io/images/icon/database.png"/></a></li>
                    <?php } else { ?>
                        <li><a href="database_disconnect.php"><img src="https://bkit9x.github.io/images/icon/disconnect.png"/></a></li>
                    <?php } ?>
                    <li><a href="setting.php"><img src="https://bkit9x.github.io/images/icon/setting.png"/></a></li>
                    <li><a href="exit.php"><img src="https://bkit9x.github.io/images/icon/exit.png"/></a></li>
                <?php } ?>
            </ul>
        </div>
        <div id="container">
