<?php
function display_content(){
?>
  
<?php
  if(isset($_SESSION['username'])){
     echo "<a href='#section1'><h2 class='techguru'>音楽図書館</h2></a>";
    echo "<h3 style='margin-top:0px'>Welcome Back </h3><h4 style='margin-top:0px'>".$_SESSION['role']." ".$_SESSION['username']."</h4>";
   
      echo "<a href='logout.php'><span>Logout</span></a>";
   
  
    } else {
      echo "<a href='#section1'><h2 class='techguru' style='margin-top:30px;'>音楽図書館</h2></a>";
      }
    ?>
  
  <br>
      <div class="searchbar" style="">
          <input type="text" name="search" placeholder="Search.." style="height: 40px;">
      </div>

<?php }
require_once('index2.php');
?>