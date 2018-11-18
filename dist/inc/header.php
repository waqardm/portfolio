<?php define('BASE_URL', 'http://localhost:8888/');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns"
        crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css"> 
    <title><?php echo $title ?></title>
</head>
<body <?php if($page === 'home'){ echo 'id="bg-img"';} ?>> 
    <header>
        <div class="menu-btn">
            <div class="btn-line"></div>
            <div class="btn-line"></div>
            <div class="btn-line"></div>
        </div>

        <nav class="menu">
            <div class="menu-branding">
                <div class="portrait"></div>
            </div>
            <ul class="menu-nav">
                <li <?php if($page === 'home'){ echo 'class="nav-item current"';} else { echo 'class="nav-item"';} ?>>
                    <a href="<?php echo BASE_URL; ?>" class="nav-link">Home</a>
                </li>
                <li <?php if($page === 'about'){ echo 'class="nav-item current"';} else { echo 'class="nav-item"';} ?>>
                    <a href="<?php echo BASE_URL; ?>/about" class="nav-link">About Me</a>
                </li>
                <li <?php if($page === 'blog'){ echo 'class="nav-item current"';} else { echo 'class="nav-item"';} ?>>
                    <a href="<?php echo BASE_URL; ?>/blog" class="nav-link">Blog</a>
                </li>
                <li <?php if($page === 'portfolio'){ echo 'class="nav-item current"';} else { echo 'class="nav-item"';} ?>>
                    <a href="<?php echo BASE_URL; ?>/portfolio" class="nav-link">Portfolio</a>
                </li>
                <li <?php if($page === 'contact'){ echo 'class="nav-item current"';} else { echo 'class="nav-item"';} ?>>
                    <a href="<?php echo BASE_URL; ?>/contact" class="nav-link">Contact Me</a>
                </li>
            </ul>
        </nav>
    </header>
    