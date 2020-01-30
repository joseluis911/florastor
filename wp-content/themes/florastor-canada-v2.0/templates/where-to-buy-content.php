<?php /* Template Name: Where To Buy */ ?>

<?php get_header('where-to-buy'); ?>
<?php get_header(); ?>
<style>
    .translate {position: absolute; margin: 10px 0px 0px 10px;z-index: 1;font-size: 0.9em;}
</style>

<a class="translate" href="http://fr.florastor.ca/acheter/">Voir cette page en Français</a>
    <div class="container" onload="load()">
    <div class="col-sm-12">
    <br><br><br>
    <h1 id="header-img">Find Florastor<sup>&reg;</sup> at Your Local Store</h1>
	
	<h3>Please Enter Your Postal Code or Address</h3>

	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
	    	<div class="form-group">
	    	<div class="row">
	    		<div class="col-sm-9">
		    		<label>Enter Address:</label>
		      		<input id="addressInput" type="text" class="form-control" placeholder="Enter Postal Code or Address">
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
	    	</div> <!-- Row -->
	    	<br>
	    	<button onclick="searchLocations()" class="btn btn-block btn-primary" type="button">Submit</button>
	    	</div> <!--Form Group -->
	  	</div>
	</div>
	  	<br>
    	<div><select style="display: none; visibility: hidden;" class="form-control" id="locationSelect" "></select></div>

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
		
	    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkxKiPv4_WmAPgMThVphL2ZA5pdOOMvZI&callback=load"></script>
		<br><br>
		<div>
			<h1>Find Florastor<sup>&reg;</sup> Online</h1>
			<br>
			<p class="text-center">
				Get Florastor<sup>&reg;</sup> delivered directly to your home by purchasing online from one of these online retailers. Florastor doesn't require refrigeration which means the probiotic properties of our active ingredient will be preserved en route to your home.	
			</p>
		</div>

    </div><!-- Page Content -->
   	</div>

   	<br><br>
   	<div class="container">
   		<div class="text-center">
   			<ul class="list-unstyled stores-row">
   				<li><a id="costco-link" target="_blank" onclick="retailer_costco_ca()" href="https://www.costco.ca/Florastor%C2%AE-Daily*-Probiotic-Supplement--250-mg----50-capsules.product.100278929.html?catalogId=11201&langId=-24&storeId=10302&krypto=jsOcWzjX9uA02b26MhJw%2FRLV8tSt4USDLFxt828NauRj%2BztOJHbAwPctgi2lrLKzpXJubu%2B8yOsM%0Al%2F5aJBEkZREmGG82RMOSZcIu7N%2B1RI4%3D"></a></li>
   				<li><a id="well-link" target="_blank" onclick="retailer_well_ca()" href="https://well.ca/searchresult.html?keyword=florastor"></a></li>
   				<li><a id="london-drugs-link" target="_blank" onclick="retailer_london_drugs()" href="http://www.londondrugs.com/search/?q=florastor&lang=default"></a></li>   				
   			</ul>
   		</div>	
   	</div>


<?php get_footer(); ?>