<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right');
            bloginfo('name'); ?></title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Link para o script.js externo -->
    <script src="<?php echo get_template_directory_uri(); ?>./js/script.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Link para o arquivo style.css do tema -->
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class('min-h-screen'); ?>>
    <?php wp_body_open(); ?>

    <!-- Aqui pode ir o código do seu cabeçalho visual (menu, logo, etc.) -->