<?php wp_head(); ?>
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
      <a class="navbar-brand" href="/"><img src="<?php bloginfo('template_directory');?>/images/Florastor_Logo.jpg"></a>
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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-74734002-1', 'auto');
  ga('send', 'pageview');
</script>