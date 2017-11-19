<?php

include 'ajax/connect_db.php';

?>

<div class="biolab-admin-right-block">
    <h1 class="">Démarche qualité</h1>
    
        <div class="biolab-admin-add_new biolab-admin-info_block">
            <h4 class="">Add news</h4>
            <input  id="new_header" type="text" placeholder="Header">
            <textarea id="new_text"  placeholder="Text"></textarea>
            <span  class="biolab-admin-news-new-del" onclick="addNew2()">Add</span>
        </div>
    
        <div class="biolab-admin-news">
            
            <?php 
            
                $query = "SELECT * FROM news2 ORDER BY date DESC";
                $news = mysqli_query($link, $query);
    
                while($myrow=mysqli_fetch_array($news))
                        {                   
                            echo "<div class=\"biolab-admin-news-new biolab-admin-info_block\" id=\"".$myrow['new2_id']."\">";
                            
                            echo "<h4 id=\"qualite_header-".$myrow['new2_id']."\">".$myrow['new2_name']."</h4>"
                                    . "<input class=\"form-control biolab-admin-regions-update\" id=\"qualite_header_input-".$myrow['new2_id']."\" type=\"text\" value=\"".$myrow['new2_name']."\">";
                            
                            echo "<p id=\"qualite_text-".$myrow['new2_id']."\">".$myrow['new2_text']."</p> "
                                    . "<textarea class=\"form-control biolab-admin-regions-update\" id=\"qualite_text_input-".$myrow['new2_id']."\">".$myrow['new2_text']."</textarea>";
                            
                            echo "<span  class=\"biolab-admin-news-new-del\" onclick='delNew2(".$myrow['new2_id'].")'>Delete</span> "
                                    . "<span  class=\"biolab-admin-news-new-del\" id=\"qualite_update-".$myrow['new2_id']."\" onclick='updateQualite(".$myrow['new2_id'].")'>Update</span>"
                                    . "<span  class=\"biolab-admin-news-new-del save\" id=\"qualite_save-".$myrow['new2_id']."\" onclick='saveQualite(".$myrow['new2_id'].")'>Save</span>";
                            echo "</div>";
                        }
            ?>  

        </div>
    
</div>