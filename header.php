<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ficha.io</title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="site-header">
        <div class="contenedor">
            <div class="barra-navegacion">
                <?php
                $args = array(
                    'theme_location' => 'menu-principal',
                    'container' => 'nav',
                    'container_class' => 'menu-principal'
                );
                wp_nav_menu($args);
                ?>
            </div>
        </div>
        <div class="selector-pais">
            <select data-select-name>
                <option value="">País</option>
                <option value="/">México</option>
                <option value="/colombia">Colombia</option>
            </select>
        </div>
    </header>