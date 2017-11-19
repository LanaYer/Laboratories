<?php include 'admin/ajax/connect_db.php'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" version="XHTML+RDFa 1.0" >

<head profile="http://www.w3.org/1999/xhtml/vocab">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Biolab</title>


    <link type="text/css" rel="stylesheet" href="web/css/bootstrap.css" media="all" />
    
    <link type="text/css" rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" media="all" />
    <link type="text/css" rel="stylesheet" href="web/css/font-awesome.css" media="all" />
    <link type="text/css" rel="stylesheet" href="web/css/main.css" media="all" />
    <!-- HTML5 element support for IE6-8 -->

    <script type="text/javascript" src="web/js/jquery-3.0.0.min.js"></script>
    <script type="text/javascript" src="web/js/bootstrap.min.js"></script>
    
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDo34xP-Z-_G8q5MJ9x8SL1f86hpiErLPA&libraries=places"></script> 

    <script type="text/javascript" src="web/js/main.js"></script>


    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500"> 
</head>
    

<body>
<?php

include 'blocks/menu.php';

?>
    <div class="col-xs-12">
        <div class="biolab-header">
            <div class="biolab-button-show_menu">
            </div>
            <div class="biolab-header-h1">
                <h1>Nos Laboratoires</h1>
            </div>
        </div>
        <div class="biolab-labortiries-search">
            <div class="biolab-labortiries-search-box">
                <p  class="biolab-labortiries-search-box-select">Choisissez</p>
                <span  class="biolab-labortiries-search-box-chewron"><i class="fa fa-chevron-down"></i></span>
            </div>
            <div class="biolab-labortiries-search-items">
                
                <?php 
                    
                    $regions = mysqli_query($link, "SELECT * FROM regions");
    
                    while($myrow=mysqli_fetch_array($regions))
                        {
                        echo "<p  class=\"\" id=\"".$myrow['region_id']."\" >".$myrow['region_name']."</p>";
                        }
                ?>     

            </div>
          
            <h3 class="text-center">OU</h3>
            
            <div  id="locationField" class="biolab-labortiries-search-input">
                <i class="fa fa-2x fa-search"></i>
                <input id="autocomplete" type="text"  placeholder="indiquez un lieu" value="" ></input>
				<input id="street_number" type="hidden"></input>
				<input id="route" type="hidden"></input>
				<input id="locality" type="hidden"></input>
				<input id="administrative_area_level_1" type="hidden"></input>
				<input id="country" type="hidden"></input>
				<input id="postal_code" type="hidden"></input>
            </div>             
        </div>
		
		
        <div class="biolab-laboratiries"  id="biolab-laboratiries">
            <?php 
                
                $res = mysqli_query($link, "SELECT * FROM clinics");
				$clinics_addr = array();
                while($myrow = mysqli_fetch_assoc($res)){
					$clinics_addr[] = array(
						'id' => $myrow['clinic_id'],
						'address' => $myrow['clinic_address']	,					
						'region_id' => $myrow['region_id']	,					
						'clinic_person' => $myrow['clinic_person'],						
						'clinic_phone' => $myrow['clinic_phone'],					
						'clinic_fax' => $myrow['clinic_fax']						
					);
                    echo "<div onclick='showClinic(".$myrow['clinic_id'].")' class=\"biolab-laboratirie biolab-laboratirie-".$myrow['clinic_id']." biolab-laboratirie-region-".$myrow['region_id']."\">";
                    echo "<span><i class=\"fa fa-plus\"></i></span>";
                    echo "<h3>".$myrow['clinic_name']."</h3>";
                    echo "<p class=\"biolab-laboratirie-short-address\">".$myrow['clinic_address']."</p>";
                    echo "<div class=\"biolab-laboratirie-more_info\">";
                    echo "<p><i class=\"fa fa-user-md\"></i>&nbsp;&nbsp;&nbsp; ".$myrow['clinic_person']."</p>";
                    echo "<p><i class=\"fa fa-map-marker\"></i>&nbsp;&nbsp;&nbsp; ".$myrow['clinic_address']."</p>";
                    echo "<p><i class=\"fa fa-phone\"></i>&nbsp;&nbsp;&nbsp; ".$myrow['clinic_phone']."</p>";
                    if ($myrow['clinic_fax']){
                        echo "<p><i class=\"fa fa-fax\"></i>&nbsp;&nbsp;&nbsp; ".$myrow['clinic_fax']."</p>";
                    }
                    echo "</div>";                   
                    echo  "</div>";

                }
				
            ?>
        </div>
		
		
		<script>
			
				
				$(document).on( 'click', '#autocomplete', function (event) {
					initAutocomplete();	
					$('#locationField').addClass('active');
				});			
				var placeSearch, autocomplete;
				var componentForm = {
					street_number: 'short_name',
					route: 'long_name',
					locality: 'long_name',
					administrative_area_level_1: 'short_name',
					country: 'long_name',
					postal_code: 'short_name'
				};

				function initAutocomplete() {
					autocomplete = new google.maps.places.Autocomplete(
						/** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
						{types: ['geocode']});
					autocomplete.addListener('place_changed', fillInAddress);
				}

				function fillInAddress() {
					var place = autocomplete.getPlace();

					for (var component in componentForm) {
						document.getElementById(component).value = '';
						document.getElementById(component).disabled = false;
					}
					for (var i = 0; i < place.address_components.length; i++) {
						var addressType = place.address_components[i].types[0];
						if (componentForm[addressType]) {
							var val = place.address_components[i][componentForm[addressType]];
							document.getElementById(addressType).value = val;
					  }
					}
				  }
			  

//--------------------------------------------------Search----------------------------------------------------
 
           
				
			 var build = function () {
				var clinics_addr = <?php echo json_encode($clinics_addr); ?>;
				var clinics_qty = Object.keys(clinics_addr).length;
				console.log(Object.keys(clinics_addr).length);
				
				
                var liArray = document.getElementsByClassName('biolab-laboratirie-short-address');
                var my_destinations = [];
                var my_destinations_parts = [];
				var sort_arr = [];
				var deferreds = [];
				
				 

				var arr_parts = clinics_qty / 23;
				arr_parts = Math.floor(arr_parts);
				var arr_part = 0;
				for (var i = 0; i < clinics_qty; i++) {
					my_destinations_parts.push(clinics_addr[i].address);										
					if ((i > 0 ) && (i % 23 == 0)) {
						deferreds.push(calculateDistances(document.getElementById('autocomplete').value, my_destinations_parts));
						
						var my_destinations_parts = [];
						arr_part = arr_part +1;
					}
					else if ((arr_part == arr_parts) && (i == (clinics_qty - 1))) {	
						deferreds.push(calculateDistances(document.getElementById('autocomplete').value, my_destinations_parts));																
					}
				}	
				
				
				Promise.all(deferreds).then(function(response){
					$.ajax({
						type: 'POST',
		
						url: './admin/ajax/lab-google-func.php',
						data:{
							action				: 	'render-nearest-labs',
							clinics_qty			: 	clinics_qty,
							arr_parts			: 	arr_parts,
							clinics_addr		:	clinics_addr,
							response			:	response
							
						},
						success: function( data ) {	
							$( "#biolab-laboratiries" ).html(data);
							$('.biolab-laboratirie').css('display','block');
						}
					});
					console.log("Result: ", response);
				}).catch(function(status){
					console.error("Err: ", status);
				})			
													
            }			
			
			function calculateDistances(my_origins, my_destinations) {
				var service = new google.maps.DistanceMatrixService();
				var d = $.Deferred();
				service.getDistanceMatrix({
					origins: [my_origins],
					destinations: my_destinations,
					travelMode: google.maps.TravelMode.DRIVING,
					unitSystem: google.maps.UnitSystem.METRIC,
					avoidHighways: false,
					avoidTolls: false
				  }, 
					function(response, status){
						if (status != google.maps.DistanceMatrixStatus.OK) {
							d.reject(status);
						} else {
							d.resolve(response);
						}
					}							  
				  );	
				  
				return d.promise();			  
			}			
			
			function callback(response, status) {
				var origins = response.originAddresses;
				var destinations = response.destinationAddresses;
				var out_arr = [];
				for (var i = 0; i < origins.length; i++) {
					var results = response.rows[i].elements;
					for (var j = 0; j < results.length; j++) {
						var element = results[j];
						var distance = element.distance.text;
						var duration = element.duration.text;
						var from = origins[i];
						var to = destinations[j];
						out_arr.push({
							dest: to, 
							dist:  distance
						});
					}
				}				
				return out_arr;			
			}
			
			
    
            $('.biolab-labortiries-search-input .fa-search').on('click',function () {
				$('.biolab-labortiries-search-box-select').html("Choisissez");
				build();
             });	

    </script>
		
		
    </div>
</body>
</html>