<?PHP
	if ($_POST['action'] == 'render-nearest-labs') {
		$clinics_addr = $_POST['clinics_addr'];
		$clinics_qty = $_POST['clinics_qty'];
		$arr_parts = $_POST['arr_parts'];
		$response = $_POST['response'];
		$k = 0;
		$clinics_array = array();
		for ($i = 0; $i <= $arr_parts; $i++) {
			$part_qty = count($response[$i]['rows'][0]['elements']);
			for ($j = 0; $j <= $part_qty-1; $j++) {
				$clinics_addr[$k] = array(
						'clinic_id' => $clinics_addr[$k]['id'],
						'clinic_address' => $clinics_addr[$k]['address'],
						'region_id' => $clinics_addr[$k]['region_id'],
						'clinic_person' => $clinics_addr[$k]['clinic_person'],
						'clinic_phone' => $clinics_addr[$k]['clinic_phone'],
						'clinic_fax' => $clinics_addr[$k]['clinic_fax'],
						'clinic_rasst_value' =>$response[$i]['rows'][0]['elements'][$j]['distance']['value']
					);
				$k=$k+1;
			}
		}
		
		$clinic_rasst_value = array();
		foreach ($clinics_addr as $key => $row){
			$clinic_rasst_value[$key] = $row['clinic_rasst_value'];
		}
		array_multisort($clinic_rasst_value, SORT_ASC, $clinics_addr);
		$out = '';
		foreach ($clinics_addr as $clinic){
			$distance = round($clinic['clinic_rasst_value']/1000, 2);
			$out .=  "<div onclick='showClinic(".$clinic['clinic_id'].")' class=\"biolab-laboratirie biolab-laboratirie-".$clinic['clinic_id']." biolab-laboratirie-region-".$clinic['region_id']."\">
                  <span><i class=\"fa fa-plus\"></i></span>
                   <h3>".$clinic['clinic_name']."</h3>
                   <p class=\"biolab-laboratirie-short-address\"><font class='distance'>".$distance ."km</font>".$clinic['clinic_address']."</p>
                   <div class=\"biolab-laboratirie-more_info\">
                  <p><i class=\"fa fa-user-md\"></i>&nbsp;&nbsp;&nbsp; ".$clinic['clinic_person']."</p>
                   <p><i class=\"fa fa-map-marker\"></i>&nbsp;&nbsp;&nbsp; ".$clinic['clinic_address']."</p>
                  <p><i class=\"fa fa-phone\"></i>&nbsp;&nbsp;&nbsp; ".$clinic['clinic_phone']."</p>";
                    if ($clinic['clinic_fax']){
                        $out .=  "<p><i class=\"fa fa-fax\"></i>&nbsp;&nbsp;&nbsp; ".$clinic['clinic_fax']."</p>";
                    }
                    $out .=  "</div>                   
                    </div>";
		}
		
		
		
		
		//print_r($response);
		echo ($out);
	}


?>