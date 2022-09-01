<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo PAGE_NAME; ?>
    </title>
    <link rel="stylesheet" href="public/css/flex.css">
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <header>
        <div class="page">
            <nav class=" menu flex flex-justify-space-between ">
                <ul class="flex aling-items-center">
                    <li>
                        <a href="?route=home">Home</a>
                    </li>
                    <li>
                        <a href="?route=about">Sobre Nós</a>
                    </li>
                    <li>
                        <a href="?route=contact">Contacto</a>
                    </li>
                </ul>
                <ul class="flex aling-items-center">
                    <li>
                        <?php if (is_authenticated()) { ?>

                            <a href="?route=dashboard">Dashboard</a>

                        <?php
                        } ?>
                    </li>
                    <li>
                        <?php if (is_authenticated()) { ?>
                            <a href="?route=logout">Logout</a>
                        <?php
                        } else { ?>

                            <a href="?route=login">Login</a>
                        <?php
                        } ?>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <?php if (get_flash_message()) { ?>
        <div class="page">
            <div class=" flash-messages">
                <p> <?php echo get_flash_message(); ?> </p>
            </div>
        </div>
    <?php } ?>