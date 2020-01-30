<!DOCTYPE html>
<html>
<head>
    <title>Florastor® Canada - Search Results</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="<?php bloginfo('template_directory');?>/tipuesearch/tipuesearch.css" rel="stylesheet">
    <script src="<?php bloginfo('template_directory');?>/tipuesearch/tipuesearch_content.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Tipue-Search/5.0.0/tipuesearch.min.js"></script> -->
    <script src="<?php bloginfo('template_directory');?>/tipuesearch/tipuesearch.js"></script>
    <script src="<?php bloginfo('template_directory');?>/tipuesearch/tipuesearch_set.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/master-style.css?version=<?php echo date('Y-m-d-H-i-s', filemtime("wp-content/themes/florastor-ca-v3/css/master-style.css")) ?>">
</head>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container col-xs-12 col-lg-10 col-lg-offset-1"> 
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"><img src="<?php bloginfo('template_directory');?>/images/CA-Florastor-logo.svg" width="200"></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <form role="search" method="get" class="navbar-form navbar-right" action="/search">
        <label>
            <span>
                <input type="text" id="tipue_search" class="search-field" placeholder="Search" name="q" autocomplete="off" required>
                <i class="glyphicon glyphicon-search"></i>
            </span>
        </label>
            <input type="submit" class="search-submit" value="Search">
      </form>
      <ul class="nav navbar-nav navbar-right">
            <li id="about"><a href="/about/">About</a></li>
            <li id="products"><a href="/products/">Products</a></li> 
            <li id="coupons"><a href="/coupons/">Coupons</a></li>
            <li id="where-to-buy"><a href="/where-to-buy/">Where To Buy</a></li>
            <li id="faq"><a href="/faqs/">FAQs</a></li>
      </ul>  
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<body>