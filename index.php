<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>All the projects</title>

<!-- <link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet"> -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">



<!-- Favicon / Icons -->
<!-- <link rel="apple-touch-icon" sizes="57x57" href="icons/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="icons/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="icons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="icons/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="icons/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="icons/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="icons/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="icons/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="icons/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="icons/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="icons/favicon-194x194.png" sizes="194x194">
<link rel="icon" type="image/png" href="icons/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="icons/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="icons/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="icons/manifest.json">
<link rel="mask-icon" href="icons/safari-pinned-tab.svg" color="#4c4b4b">
<link rel="shortcut icon" href="icons/favicon.ico">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-TileImage" content="icons/mstile-144x144.png">
<meta name="msapplication-config" content="icons/browserconfig.xml">
<meta name="theme-color" content="#ffffff"> -->

<style>
  body.theme-atom {
    background-color: #21252b;
    //font-family: 'Inconsolata', monospace;
    font-family: 'Open Sans', sans-serif;
    font-weight: 400;
  }
  .title {
    font-size: 16px;
    padding: 10px;
    display: inline-block;
  }
  .container {
    min-height: 100%;
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
  }
  .flex-column {
    display: flex;
    flex-basis: calc(50% - 40px);
    justify-content: center;
    flex-direction: column;
    text-align: center;
    text-decoration: none;
    transition-timing-function: ease-in-out;
    transition: 0.1s;
    transform: all;
  }
  .theme-atom .flex-column {
    background-color: #30353e;
    color: #727883;
    margin: 4px;
    border-radius: 3px;
    border: 1px solid #1b1c22;
    -moz-box-shadow:    inset 0 1px 1px rgba(255,255,255,0.1);
    -webkit-box-shadow: inset 0 1px 1px rgba(255,255,255,0.1);
    box-shadow:         inset 0 1px 1px rgba(255,255,255,0.1);
  }
  .theme-atom .flex-column:hover {
    background-color: #3c424f;
    color: #d7dae0;
  }
</style>


</head>
<body class="theme-atom">

<section id="main">
  <div class="container">

    <?php

    $directory = getcwd();

    $projects = scandir($directory);

    //print_r($projects);


    foreach ($projects as $project) {
      ?>
      <a href="<?php echo  $project; ?>" class="flex-column">
        <div class="">

        <span class="title"><?php echo $project; ?></span>

      </div>
      </a>

      <?php
    }

    ?>

  </div>
</section>




<!-- Copyright -->
<!-- <section id="copyright">
	<div class="container">
   		<div class="row">
        	<div class="col-md-12">
            	<p>&copy; 2016 New Wine Church. Designed by <a href="http://www.creativelyblind.com/" target="_blank">Creatively Blind</a>.</p>
            </div>
        </div>
    </div>
</section> -->
<!-- End Copyright -->


</body>
</html>
