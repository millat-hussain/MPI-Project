  <div class="alert alert-dark mt-2" role="alert">
            <strong class="text-danger">Current News </strong>
            <marquee>

                        <?php

            $query ="SELECT * FROM notice ORDER BY id DESC LIMIT 1";
            $runqery =$db->select($query);
            if ($runqery) {

              $i=0;
             while ($rasult =$runqery->fetch_assoc()) {
              $i++;
            ?>
  <p><a href="">
  <?php echo $i ?>. <?php echo  $rasult['notice'];?></a> <strong class="text-danger"><?php echo $help->tfrom($rasult['time']);?>
  
  </strong></p> 

<?php
}}
?>
           



            </marquee>
    </div>