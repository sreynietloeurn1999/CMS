<!DOCTYPE html>
<html lang="en" <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title><?php bloginfo('name');?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
</head>


<!-- name of project,description and menu bar -->
<header>
        <h2 class="ml-5"> 
            Wordpressweba
        </h2>
           <p class="ml-5"><?php bloginfo('description');?></p>
    <?php wp_nav_menu()?>


<!-- form for searching -->
 <nav class="navbar navbar-expand-sm">
  <form class="form-inline" action="#">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
</nav>
</header>

<body>
