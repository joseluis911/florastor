<?php /* Template Name: Products */ ?>

<?php get_header('products'); ?>
<?php get_header(); ?>

<div id="products-hero"></div>

<div class="bg-1">
    <div class="container">
        <br>
        <h1 class="gradient"><span class="gradient">Florastor<span class="gradient-sup">&reg;</span></span> <span class="gradient">Daily<a href="/references/""><span class="gradient-sup">*</span></a></span> <span class="gradient">Probiotics</span></h1>
        <p>Florastor is gluten-free and available in vegetarian capsules or powder sachets appropriate for children 1 year and older. Florastor is also convenient for active lifestyles because it does not require refrigeration and has a three-year shelf life. When taken as recommended, Florastor promotes favorable gut flora to support a healthy digestive balance.<a href="/references/"><sup>1</sup></a></p>
        <br>
        <br>
        <a class="banner-coupon" href="/coupons/">
            <div class="banner"></div>
	    </a> 
        <br>
    </div>
</div>

<!-- Caps -->    
<div class="bg-0">   
    <div class="container product-collapse" data-toggle="collapse" data-target="#fl-caps">
        <img class="product-logos" src="<?php bloginfo('template_directory');?>/images/CA-caps-logo.png">
        <span class="glyphicon glyphicon-chevron-down product-arrow" aria-hidden="true"></span>
    </div>
    <div id="fl-caps" class="container collapse product-info in">
        <div class="row">   
            <div class="col-sm-7" style="padding-top: 20px; margin-bottom: 40px;">
                <p>Florastor<sup>&reg;</sup> capsules are easy to take wherever you go. Swallow the capsules whole or mix the powder into your favorite food or beverage. Each capsule contains 250mg of our unique probiotic strain, <em>Saccharomyces boulardii lyo</em> CNCM I-745.</p><br>
                <p class="lead">Available in:</p>
                <p>• 20 Capsules • 50 Capsules</p>
            </div>
            <div class="col-xs-0 col-lg-1"></div>  
            <div class="col-xs-12 col-sm-5 col-sm-offset-0 col-lg-4">
                <div id="caps-caro" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active">
                          <img src="<?php bloginfo('template_directory');?>/images/CA-20cap.png" alt="20 Capsules" style="width:100%;">
                        </div>
                        <div class="item">
                          <img src="<?php bloginfo('template_directory');?>/images/CA-50cap.png" alt="30 Capsules" style="width:100%;">
                        </div>
                    </div>
                    <a class="left carousel-control" href="#caps-caro" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#caps-caro" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <ol class="carousel-indicators" style="margin-bottom: 20px;">
                        <li data-target="#caps-caro" data-slide-to="0" class="active"></li>
                        <li data-target="#caps-caro" data-slide-to="1"></li>
                    </ol>
                </div>
            </div>
        </div>
        <br><br><br>
    </div>
</div>

<!-- Kids -->
<div class="bg-1">   
    <div class="container product-collapse" data-toggle="collapse" data-target="#fl-kids">
        <img class="product-logos" src="<?php bloginfo('template_directory');?>/images/CA-kids-logo.png">
        <span class="glyphicon glyphicon-chevron-down product-arrow" aria-hidden="true"></span>
    </div>
    <div id="fl-kids" class="container collapse product-info in">
        <div class="row">   
          <div class="col-sm-7" style="padding-top: 15px; margin-bottom: 60px;">
            <p>FlorastorKids<sup>&reg;</sup> helps your children with healthy digestion while keeping their taste buds happy. Each powder sachet contains the same dose as one Florastor capsule and is naturally sweetened with tutti-frutti flavoring. FlorastorKids is also a great alternative for adults with difficulty swallowing capsules.</p><br>
            <p class="lead">Available in:</p>
            <p>• 20 Sachets</p>
          </div>
          <div class="col-sm-0 col-lg-1"></div>
          <div class="col-sm-5 col-lg-4">
              <img src="<?php bloginfo('template_directory');?>/images/CA-kids.png" class="img-responsive product-boxes" style="width: 100%;"/>
              <br><br>
          </div>
        </div>    
    </div> 
</div>

<!-- Max -->
<div class="bg-0">   
    <div class="container product-collapse" data-toggle="collapse" data-target="#fl-max">
        <img class="product-logos" src="<?php bloginfo('template_directory');?>/images/CA-max-logo.png">
        <span class="glyphicon glyphicon-chevron-down product-arrow" aria-hidden="true"></span>
    </div>
    <div id="fl-max" class="container collapse product-info in">
        <div class="row">   
          <div class="col-sm-7" style="padding-top: 15px; margin-bottom: 80px;">
            <p>FlorastorMax<sup>&reg;</sup> provides an extra strength serving of your daily probiotic needs in one convenient sachet. Each sachet contains 500 mg of our unique probiotic strain and is naturally sweetened with vanilla flavoring.</p><br>
            <p class="lead">Available in:</p>
            <p>• 30 Sachets</p>
          </div>
            <div class="col-sm-0 col-lg-1"></div>
            <div class="col-sm-5 col-lg-4">
                <img src="<?php bloginfo('template_directory');?>/images/CA-max.png" class="img-responsive product-boxes" style="width: 100%;"/>
                <br><br>
            </div>
        </div>    
    </div> 
</div>

<script>
    function togglePanel(){$(window).width()>=480?$(".product-info").addClass("in"):$(".product-info").removeClass("in")}$(".carousel").carousel({interval:!1}),$(window).width()<480&&$(".product-info").removeClass("in"),$('div[data-toggle="collapse"]').click(function(o){$(window).width()>=480&&o.stopPropagation()}),$(window).resize(function(){togglePanel()});
</script>

<script type="text/javascript">
    $('.carousel').carousel({
        interval: false
    });
    if ($(window).width() < 480) {
        $(".product-info").removeClass("in");
    }
    function togglePanel (){
       var w = $(window).width();
       if (w >= 480) {
          $('.product-info').addClass('in');
       } else {
          $('.product-info').removeClass('in');
       }
    }
    $('div[data-toggle="collapse"]').click(function(e){
      if ($(window).width() >= 480) {  
        e.stopPropagation();
      }    
    });
    $(window).resize(function(){
         togglePanel();
    });
</script>

<?php get_footer(); ?>