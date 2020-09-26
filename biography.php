  <?php include('includes/header.php'); ?>
  <!-- Home Page -->
 
    <div class="row">
  
     <h1> BIOGRAPHY </h1>
        
     
        <div class="timeline"></div>
		
<div class= left-preview>		
        
<!-- MAPS TEST -->
 
  
    <!--The div element for the map -->
    <div id="map"></div>
    <script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: -25.344, lng: 131.036};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script>

        
        
<!-- Article Preview -->        
        
        
        <div class="article-preview">
            
            <div class="bt-decor-line"></div>
        
            <?php echo $article[0][year]?> <br>
            <h3><?php echo $article[0][name]?></h3>
            
            <div class="ap_image"> 
            
            </div>
            
            <p style="margin-top: 200px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tellus mauris a diam maecenas sed enim. Vitae sapien pellentesque habitant morbi tristique senectus. 
            </p>
            
			<a href="biography_article.php"><h4>READ MORE</h4></a> 
        
        </div>
       
		</div>
		
		
		

 
    </div>
    
<?php include('includes/footer.php'); ?>
