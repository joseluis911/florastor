<?php /* Template Name: About */ ?>

<?php get_header('about'); ?>
<?php get_header(); ?>

<div id="about-hero"></div>

<div class="container-fluid">
<div class="row">
    <div class="bg-1 about-row col-sm-6">
        <br>
        <h1 class="gradient"><span class="gradient">What Is</span> <span class="gradient">Florastor<span class="gradient-sup">&reg;</span>?</span></h1>
        <p>Florastor<sup>&reg;</sup> is a daily<a href="/references/"><sup>*</sup></a> probiotic supplement that supports healthy digestion by promoting favorable gut flora.<a href="/references/"><sup>1</sup></a> As the only probiotic with <em>Saccharomyces boulardii</em> lyo CNCM I-745, a unique probiotic strain with over 60 years of use and research worldwide, Florastor offers many advantages to supporting your digestive health.</p>
        <br><br>
        <a href="/products/"><button class="btn-main">View Products</button></a>
    </div>
    <div class="bg-2 about-row col-sm-6">
        <br>
        <h1 class="gradient"><span class="gradient">What Are</span> <span class="gradient">Probiotics?</span></h1>
        <p>Health Canada and the World Health Organization define probiotics as "live microorganisms which, when administered in adequate amounts, confer a health benefit to the host."<sup><a href="/references/">8</a></sup> The human body hosts approximately 100 trillion microorganisms, also known as microbiota or microflora. When the flora in your digestive system becomes imbalanced due to antibiotics, viruses, or unfriendly bacteria, it can lead to abdominal discomfort and diarrhea. Probiotics help balance your gut flora to support a healthy digestive system.</p>
        <br><br>
    </div>
</div>
</div>
<div class="bg-0">
    <div class="container">
        <br>
        <h1 class="gradient"><span class="gradient">What Makes</span> <span class="gradient">Florastor<span class="gradient-sup">&reg;</span></span> <span class="gradient">Unique?</span></h1>
        <p>Florastor is the ONLY probiotic supplement with <em>Saccharomyces boulardii lyo</em> CNCM I-745, a unique probiotic strain naturally resistant to ALL antibiotics.<sup><a href="/references/">3</a></sup> When taken at recommended levels, Florastor has been shown to do the following:</p>
        <br><br>
        <div class="col-sm-12 col-md-8 col-md-offset-2">
            <ul class="checks benefit-list">
                <li>Help prevent antibiotic-associated diarrhea in adults<a href="/references/"><sup>4</sup></a></li>
                <li>Help reduce the risk of antibiotic-associated diarrhea in children<a href="/references/"><sup>5</sup></a></li>
                <li>Help reduce the symptoms related to acute infectious diarrhea in adults<a href="/references/"><sup>6</sup></a></li>
                <li>Help treat acute infectious diarrhea in children<a href="/references/"><sup>6</sup></a></li>
                <li>Promote a favorable gut flora for the support of gastrointestinal health<a href="/references/"><sup>1</sup></a></li>
            </ul> 
        </div>
        <br>
    </div>
</div>

<div class="bg-1">
    <div class="container">
        <br>
        <h1 class="gradient"><span class="gradient">The History of</span> <span class="gradient">Florastor<span class="gradient-sup">&reg;</span></span></h1>
        <br>
        <p>While traveling in Indochina in the early 1920s, Henri Boulard, a French microbiologist, noticed the locals drinking a special tea—made from lychee and mangosteen—to help with digestion. Fascinated by the healing properties of these two tropical fruits, Boulard conducted further research and discovered the active ingredient to be what he later called <em>Saccharomyces boulardii</em>. 
        <br><br>
        <em>S. boulardii</em> was first introduced to the market in 1953 by the French pharmaceutical company, Biocodex. Since then, it has become available in over 100 countries making it the #1 probiotic worldwide.
        <br><br>
        Florastor is the only probiotic in North America to contain <i>S. boulardii lyo</i> CNCM I- 745. With over 60 years of use and research, Florastor is the trusted probiotic of choice by families around the world.<a href="/references/"><sup>9</sup></a></p>
    </div>
    <br><br>
</div> 

<?php get_footer(); ?>

<script type="text/javascript">
    $('.collapse').on('show.bs.collapse', 
        function(){
            $(this).parent().find(".caret-right").removeClass("caret-right").addClass("caret-down");
    }).on('hide.bs.collapse', 
        function(){
            $(this).parent().find(".caret-down").removeClass("caret-down").addClass("caret-right");
    });
</script>
