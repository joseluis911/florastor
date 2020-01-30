<?php /* Template Name: Where To Buy */ ?>

<?php get_header('where-to-buy'); ?>
<?php get_header(); ?>

<div class="bg-1">
    <div class="container" onload="load()">
    <div class="col-sm-12">
        <br><br>
        <img id="be-biotic-buy" class="img-responsive" src="<?php bloginfo('template_directory');?>/images/be-biotic-glow-2.png"/>
        <br>
        <h1 class="gradient"><span class="gradient">Find</span> <span class="gradient">Florastor<span class="gradient-sup">&reg;</span> at</span> <span class="gradient">Your</span> <span class="gradient">Local</span> <span class="gradient">Store</span></h1>
	    <h2>Please Enter Your Postal Code or Address</h2>
        <br>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="form-group" id="textbox">
                <div class="row">
                    <div class="col-sm-9">
                        <label>Enter Address:</label>
                        <input id="addressInput" type="text" class="form-control" placeholder="Enter Postal Code or Address" required>
                    </div>
                    <div class="col-sm-3">
                        <label>Within:</label>
                        <select id="radiusSelect" class="form-control">
                          <option value="5" selected>5 kilometers</option>
                          <option value="10">10 kilometers</option>
                          <option value="15">15 kilometers</option>
                          <option value="25">25 kilometers</option>
                          <option value="35">35 kilometers</option>
                          <option value="50">50 kilometers</option>
                        </select>
                    </div><br>
                </div><!-- Row -->
                <br>
                <button id="submit-store" onclick="searchLocations()" class="btn-main">Submit</button>
                </div> <!--Form Group -->
            </div>
        </div>
        
	  	<br>
    	<div>
            <select style="display: none; visibility: hidden;" class="form-control" id="locationSelect"></select>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div id="map-box">
                </div>
            </div>
            <div class="col-md-4">
                <div class="list-group" id="storeList">

                </div>
            </div>
        </div><!-- Row -->
	    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4k68Ituli5nRgTEXmm-qdjWzOqn0W2mA&callback=load"></script>
		<br>
        <a class="banner-coupon" href="/coupons/">
            <div class="banner"></div>
	    </a> 
        <br>
    </div>
   	</div>
</div>

<div class="bg-0">
    <div class="container">
    <br>
        <h1 class="gradient"><span class="gradient">Find Florastor<span class="gradient-sup">&reg;</span></span> <span class="gradient">From</span> <span class="gradient">Online</span> <span class="gradient">Retailers</span></h1>
    <p>Get Florastor<sup>&reg;</sup> delivered directly to your home by purchasing online from one of these online retailers. Florastor doesn't require refrigeration which means the probiotic properties of our active ingredient will be preserved en route to your home.</p>
   	<br><br>
   		<div class="text-center">
   			<ul class="list-unstyled stores-row">
          <li><a id="costco-link" target="_blank" href="https://www.costco.ca/Florastor%C2%AE-Daily*-Probiotic-Supplement--250-mg----50-capsules.product.100278929.html?catalogId=11201&langId=-24&storeId=10302&krypto=jsOcWzjX9uA02b26MhJw%2FRLV8tSt4USDLFxt828NauRj%2BztOJHbAwPctgi2lrLKzpXJubu%2B8yOsM%0Al%2F5aJBEkZREmGG82RMOSZcIu7N%2B1RI4%3D" onclick="retailer_costco_ca();"></a></li>
          <li><a id="well-link" target="_blank" href="https://well.ca/searchresult.html?keyword=florastor" onclick="retailer_well_ca();"></a></li>
          <li><a id="london-drugs-link" target="_blank" href="http://www.londondrugs.com/search/?q=florastor&lang=default" onclick="retailer_london_drugs();"></a></li>
   			</ul>	
   		</div>	
    </div>
</div>

<?php get_footer(); ?>