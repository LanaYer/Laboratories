<?php

include 'ajax/connect_db.php';

?>

<div class="biolab-admin-right-block">
    <h1 class="">Plateforme analytique</h1>
    
        <div class="biolab-admin-add_new biolab-admin-info_block">
            <h4 class="">Add news</h4>
            <input  id="new_header" type="text" placeholder="Header">
            <textarea id="new_text"  placeholder="Text"></textarea>
            
            <form id="analitique_file" action="upload.php" enctype="multipart/form-data" method="POST">
                <input id="file" type="file" name="userfile" id="userfile" placeholder="Select file">
            </form>          
            
            <span  class="biolab-admin-news-new-del" onclick="addNew()">Add</span>
        </div>
    
        <div class="biolab-admin-news">
                       
            <?php 
            
                $query = "SELECT * FROM news ORDER BY date DESC";
                $news = mysqli_query($link, $query);
    
                while($myrow=mysqli_fetch_array($news))
                        {                   
                            echo "<div class=\"biolab-admin-news-new biolab-admin-info_block\" id=\"".$myrow['new_id']."\">";
                            
                            echo "<h4 id=\"analitique_header-".$myrow['new_id']."\">".$myrow['new_name']."</h4>"
                                    . "<input class=\"form-control biolab-admin-regions-update\" id=\"analitique_header_input-".$myrow['new_id']."\" type=\"text\" value=\"".$myrow['new_name']."\">";
                            
                            echo "<p id=\"analitique_text-".$myrow['new_id']."\">".$myrow['new_text']."</p> "
                                    . "<textarea class=\"form-control biolab-admin-regions-update\" id=\"analitique_text_input-".$myrow['new_id']."\">".$myrow['new_text']."</textarea>";
                            
                            echo "<p><img src=\"../images/".$myrow['new_image']."\"/></p>";
                            
                            echo "<span  class=\"biolab-admin-news-new-del\" onclick='delNew(".$myrow['new_id'].")'>Delete</span> "
                                    . "<span  class=\"biolab-admin-news-new-del\" id=\"analitique_update-".$myrow['new_id']."\" onclick='updateAnalitique(".$myrow['new_id'].")'>Update</span>"
                                    . "<span  class=\"biolab-admin-news-new-del save\" id=\"analitique_save-".$myrow['new_id']."\" onclick='saveAnalitique(".$myrow['new_id'].")'>Save</span>";
                            echo "</div>";
                        }
            ?>  
            
        </div>
    
</div>