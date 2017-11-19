<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "ajax/connect_db.php";
?>

<div class="biolab-admin-right-block  biolab-admin-clinics">
    <h1 class="">Clinics</h1>
    
    <table>
        <tr>
            <td></td>
            <td>
                <select  id="region_id" class="form-control" placeholder="Region">
                <?php 
            
                $query1 = "SELECT * FROM regions";
                $regions = mysqli_query($link, $query1);
    
                while($region=mysqli_fetch_array($regions))
                        {                   
                            echo "<option value='".$region['region_id']."'>".$region['region_name']."</option>";
                        }
                ?>  
                </select>           
            </td>
            <td><input id="clinic_name" class="form-control" placeholder="Name"></td>
            <td><input id="clinic_person" class="form-control" placeholder="Person"></td>
            <td><input id="clinic_address" class="form-control" placeholder="Address"></td>
            <td><input id="clinic_phone" class="form-control" placeholder="Phone"></td>
            <td><input id="clinic_fax" class="form-control" placeholder="Fax"></td>            
            <td><span  class="biolab-admin-news-new-add" onclick='addClinic()'>Add</span></td>                                                                                                
        </tr>
                <?php 
            
                $query = "SELECT * FROM clinics, regions WHERE clinics.region_id = regions.region_id ORDER BY clinics.region_id";
                $clinics = mysqli_query($link, $query);
    
                while($myrow=mysqli_fetch_array($clinics))
                        {                   
                            echo "<tr>";
                            echo "<td><p id=\"clinic_id\">".$myrow['clinic_id']."</p></td>";
                            echo "<td><p id=\"region_name\">".$myrow['region_name']."</p></td>";
                            echo "<td><p id=\"clinic_name-".$myrow['clinic_id']."\">".$myrow['clinic_name']."</p>"
                                    . "<input class=\"form-control biolab-admin-clinic-update\" id=\"clinic_name_input-".$myrow['clinic_id']."\" value='".$myrow['clinic_name']."' class=\"form-control\">"
                                    . "</td>";
                            echo "<td><p id=\"clinic_person-".$myrow['clinic_id']."\">".$myrow['clinic_person']."</p>"
                                    . "<input class=\"form-control biolab-admin-clinic-update\" id=\"clinic_person_input-".$myrow['clinic_id']."\" value='".$myrow['clinic_person']."' class=\"form-control\">"
                                    . "</td>";
                            echo "<td><p id=\"clinic_address-".$myrow['clinic_id']."\">".$myrow['clinic_address']."</p>"
                                    . "<input class=\"form-control biolab-admin-clinic-update\" id=\"clinic_address_input-".$myrow['clinic_id']."\" value='".$myrow['clinic_address']."' class=\"form-control\">"
                                    . "</td>";
                            echo "<td><p id=\"clinic_phone-".$myrow['clinic_id']."\">".$myrow['clinic_phone']."</p>"
                                    . "<input class=\"form-control biolab-admin-clinic-update\" id=\"clinic_phone_input-".$myrow['clinic_id']."\" value='".$myrow['clinic_phone']."' class=\"form-control\">"
                                    . "</td>";
                            echo "<td><p id=\"clinic_fax-".$myrow['clinic_id']."\">".$myrow['clinic_fax']."</p>"
                                    . "<input class=\"form-control biolab-admin-clinic-update\" id=\"clinic_fax_input-".$myrow['clinic_id']."\" value='".$myrow['clinic_fax']."' class=\"form-control\">"
                                    . "</td>";
                            
                            echo "<td><span  class=\"biolab-admin-news-new-del\" onclick='delClinic(".$myrow['clinic_id'].")'>Delete</span></td>";
                            
                            echo "<td><span  class=\"biolab-admin-news-new-del\" id = \"clinic_update-".$myrow['clinic_id']."\" onclick='updateClinic(".$myrow['clinic_id'].")'>Update</span>"
                                    . "<span  class=\"biolab-admin-news-new-del biolab-admin-clinic-save\" id = \"clinic_save-".$myrow['clinic_id']."\" onclick='saveClinic(".$myrow['clinic_id'].")'>Save</span></td>";
                                                        
                            echo "</tr>";
                        }
            ?>  
    </table>
    
</div>
