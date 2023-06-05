<!DOCTYPE html>
<html <?php language_attributes();  ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
    <title>Document</title>
</head>

<body <?php body_class('example'); ?>>
    <?php wp_body_open(); ?>
    
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, inventore doloremque! Aperiam quis ad ipsa deleniti iusto, nihil nobis saepe dolores molestiae debitis natus, quisquam, voluptatem quaerat commodi fuga. Sit.</p>

    <?php wp_footer(); ?>
</body>

</html>