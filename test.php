<?php
include("includes/database.php");

$run_profiles = mysqli_query($con, "SELECT * FROM profiles");

while($row_profiles = mysqli_fetch_array($run_profiles)) {
    $profile_id = $row_profiles['profile_id'];
    $profile_name = $row_profiles['profile_name'];
    $profile_img = $row_profiles['profile_img'];

   echo "
   <div class='animated revealIn fadeInUp col-lg-3 col-md-3 col-sm-4 col-xs-12'>
     <div class='djBox'>
       <img src='imgClients/$profile_img' class='img-responsive' alt='DJ IMG'>
       <h3>$profile_name</h3>
       <ul>
         <li><a href='dj1.html'><p>click for more</p></a></li>
       </ul>
     </div>
   </div>

   ";

}


?>
