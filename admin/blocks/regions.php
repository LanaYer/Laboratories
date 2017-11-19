<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "ajax/connect_db.php";
?>

<div class="biolab-admin-right-block biolab-admin-regions">
    <h1 class="">Regions</h1>
    <table>
        <tr>
            <td></td>
            <td><input id="region_name" class="form-control" placeholder="Name"></td>          
            <td><span  class="biolab-admin-news-new-add" onclick='addRegion()'>Add</span></td>
            <td></td>
        </tr>        
                <?php 
            
                $query = "SELECT * FROM regions";
                $regions = mysqli_query($link, $query);
    
                while($myrow=mysqli_fetch_array($regions))
                        {                   
                            echo "<tr>";
                            echo "<td><p>".$myrow['region_id']."</p></td>";
                            echo "<td>"
                                    . "<p id=\"region_p-".$myrow['region_id']."\">".$myrow['region_name']."</p>"
                                    . "<input class=\"form-control biolab-admin-regions-update\" id=\"region_input-".$myrow['region_id']."\" value='".$myrow['region_name']."' class=\"form-control\">"
                               . "</td>";
                            echo "<td><span  class=\"biolab-admin-news-new-del\" onclick='delRegion(".$myrow['region_id'].")'>Delete</span></td>";
                            echo "<td>"
                                    . "<span  class=\"biolab-admin-news-new-del\" id=\"region_update-".$myrow['region_id']."\" onclick='updateRegion(".$myrow['region_id'].")'>Update</span>"
                                    . "<span  class=\"biolab-admin-news-new-del save\" id=\"region_save-".$myrow['region_id']."\" onclick='saveRegion(".$myrow['region_id'].")'>Save</span>"
                               . "</td>";
                            echo "</tr>";
                        }
            ?>  
    </table>
</div>