<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "ajax/connect_db.php";
?>

<div class="biolab-admin-right-block biolab-admin-regions">
    <h1 class="">Users</h1>
    
    <div class="biolab-admin-pass biolab-admin-info_block">
        <h4 class="">Change password for Admin</h4>

        <input id="admin_pass" type="password" class="form-control" placeholder="Current password">
        <input id="admin_pass1" type="password" class="form-control" placeholder="New password">
        <input id="admin_pass2" type="password" class="form-control" placeholder="Confirm Password">
        <span class="biolab-admin-news-new-add" onclick="ChangePass()">Ok</span>
        
    </div>
  

    <div class="biolab-admin-info_block">
        <h4 class="">Add new user</h4>
        <table>
            <tr>
                <td><input id="user_login" class="form-control" placeholder="Login"></td>
                <td><input id="user_pass" type="password" class="form-control" placeholder="Pass"></td>

                <td><span  class="biolab-admin-news-new-add" onclick='addUser()'>Add</span></td>                                                                                                
            </tr>         
        </table>
    </div>
 
    <div class="biolab-admin-info_block">
        <h4 class="">All users</h4>
        <table>      
                    <?php 

                    $query = "SELECT * FROM users";
                    $regions = mysqli_query($link, $query);

                    while($myrow=mysqli_fetch_array($regions))
                            {                   
                                echo "<tr>";
                                echo "<td>".$myrow['user_login']."</td>";

                                if ($myrow['user_login']!="Admin"){
                                    echo "<td><span  class=\"biolab-admin-news-new-del\" onclick='delUser(".$myrow['user_id'].")'>Delete</span></td>";
                                }
                                echo "<td></td>";
                                echo "</tr>";
                            }
                ?>  
        </table>
    </div>
    
</div>