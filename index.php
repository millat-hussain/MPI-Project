<?php 
require_once 'inc/header.php';
 ?>
 <?php 
require_once 'inc/slideshow.php';
  ?>
 <?php 
require_once 'inc/nav.php';
  ?>
  
    <!-- side bar and all  -->
    <div class="row">
      <div class="col-lg-8">
        <div class="headline">
<?php 
include"inc/newheadline.php";
 ?>

        </div>
        <div class="noticebord">
          <h4 class="text-primary">Notice Bord</h4>
          <div class="border p-2 text-dark">
            <marquee  behavior="scroll" direction="up" scrollamount="2">
            <?php

            $query ="SELECT * FROM notice ORDER BY id DESC LIMIT 5";
            $runqery =$db->select($query);
            if ($runqery) {

              $i=0;
             while ($rasult =$runqery->fetch_assoc()) {
              $i++;
            ?>
  <p><a href="">
  <?php echo $i ?>. <?php echo  $help->textSorten($rasult['notice']) ;?></a> <strong class="text-danger"><?php echo $help->tfrom($rasult['time']);?>
  
  </strong></p> 

<?php
}}
?>
            </marquee> 
          </div>
       <a href="notice.php" class="float-right btn btn-info mt-1 mb-1">See All</a>

        </div>
        <div class="event mt-3">
          <div class="modal-content">
            <div class="modal-header bg-success">
              <h5 class="modal-title"> News & Events</h5>
            </div>
            <div class="modal-body">
              <div class="row mb-2">
                <div class="col-lg-2">
                  <img class="img-fluid" src="img/calander.png">
                </div>
                <div class="col-lg-8">
                  <h3 class="h5">
                    <a href="">Documentary on the life of Bangabandhu</a>
                  </h3>
                  <p>An extraordinary work on Bangabandhu is the documentary 'Rahman, the Father of Bengal'. Bangladesh
                    is a popular name in the whole world due to the victory of our great liberation war. And no one else
                    is the head of this success</p>
                </div>
                <div class="col-lg-2">
                  <img src="img/bongobundu.jpg" class="img-fluid">
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-lg-2">
                  <img class="img-fluid" src="img/calander.png">
                </div>
                <div class="col-lg-8">
                  <h3 class="h5">
                    <a href="">Ananda Bailey</a>
                  </h3>
                  <p>An extraordinary work on Bangabandhu is the documentary 'Rahman, the Father of Bengal'. Bangladesh
                    is a popular name in the whole world due to the victory of our great liberation war. And no one else
                    is the head of this success</p>
                </div>
                <div class="col-lg-2">
                  <img src="img/bongobundu.jpg" class="img-fluid">
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-lg-2">
                  <img class="img-fluid" src="img/calander.png">
                </div>
                <div class="col-lg-8">
                  <h3 class="h5">
                    <a href="">MoU Signing ceremony between Creative IT & Mymensingh Polytechnic Institute</a>
                  </h3>
                  <p>An extraordinary work on Bangabandhu is the documentary 'Rahman, the Father of Bengal'. Bangladesh
                    is a popular name in the whole world due to the victory of our great liberation war. And no one else
                    is the head of this success</p>
                </div>
                <div class="col-lg-2">
                  <img src="img/bongobundu.jpg" class="img-fluid">
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-primary d-block">More Events</button>
          </div>
        </div>
     <!-- All Depertment Information -->

     <div class="d-flex  flex-wrap">

       <div class=" p-2 text-dark border mt-3 w-50">
         <div class="">
           <h3 >Computer Depertment</h3>
         </div>
           <hr>
         <div class="card-body">
          <div class="row">
            <div class="col-lg-4">
              <img src="img/computer.png" class="img-fluid w-25">
            </div>
            <div class="col-lg-8">
              <ul>
              <li><a href="">Teachers information</a> </li>
              <li><a href="">Student informationa </a></li>
              <li><a href="">The result </a></li>
              <li><a href="">Semester plana</a> </li>
              <li><a href="">Digital contenta </a></li>
              </ul>
            </div>
          </div>
           
         </div>
       </div>

        <div class=" p-2 text-dark border mt-3 w-50">
         <div class="">
           <h3>Civil Depertment</h3>
         </div>
           <hr>
         <div class="card-body">
          <div class="row">
            <div class="col-lg-4">
              <img src="img/civil.png" class="img-fluid w-50">
            </div>
            <div class="col-lg-8">
              <ul>
              <li><a href="">Teachers information</a> </li>
              <li><a href="">Student informationa </a></li>
              <li><a href="">The result </a></li>
              <li><a href="">Semester plana</a> </li>
              <li><a href="">Digital contenta </a></li>
              </ul>
            </div>
          </div>
         </div>
       </div>



        <div class=" p-2 text-dark border mt-3 w-50">
         <div class="">
           <h3>Mechanical Depertment</h3>
         </div>
           <hr>
         <div class="card-body">
          <div class="row">
            <div class="col-lg-4">
              <img src="img/mechanical.png" class="img-fluid w-50">
            </div>
            <div class="col-lg-8">
              <ul>
              <li><a href="">Teachers information</a> </li>
              <li><a href="">Student informationa </a></li>
              <li><a href="">The result </a></li>
              <li><a href="">Semester plana</a> </li>
              <li><a href="">Digital contenta </a></li>
              </ul>
            </div>
          </div>
         </div>
       </div>

          <div class=" p-2 text-dark border mt-3 w-50">
         <div class="">
           <h3>Electrical Depertment</h3>
         </div>
           <hr>
         <div class="card-body">
          <div class="row">
            <div class="col-lg-4">
              <img src="img/electrical.png" class="img-fluid w-50">
            </div>
            <div class="col-lg-8">
              <ul>
              <li><a href="">Teachers information</a> </li>
              <li><a href="">Student informationa </a></li>
              <li><a href="">The result </a></li>
              <li><a href="">Semester plana</a> </li>
              <li><a href="">Digital contenta </a></li>
              </ul>
            </div>
          </div>
         </div>
       </div>

        <div class=" p-2 text-dark border mt-3 w-50">
         <div class="">
           <h3>Electronics Depertment</h3>
         </div>
           <hr>
         <div class="card-body">
          <div class="row">
            <div class="col-lg-4">
              <img src="img/electronics.png" class="img-fluid w-50">
            </div>
            <div class="col-lg-8">
              <ul>
              <li><a href="">Teachers information</a> </li>
              <li><a href="">Student informationa </a></li>
              <li><a href="">The result </a></li>
              <li><a href="">Semester plana</a> </li>
              <li><a href="">Digital contenta </a></li>
              </ul>
            </div>
          </div>
         </div>
       </div>


        <div class=" p-2 text-dark border mt-3 w-50">
         <div class="">
           <h3>Power Depertment</h3>
         </div>
           <hr>
         <div class="card-body">
          <div class="row">
            <div class="col-lg-4">
              <img src="img/power.png" class="img-fluid w-50">
            </div>
            <div class="col-lg-8">
              <ul>
              <li><a href="">Teachers information</a> </li>
              <li><a href="">Student informationa </a></li>
              <li><a href="">The result </a></li>
              <li><a href="">Semester plana</a> </li>
              <li><a href="">Digital contenta </a></li>
              </ul>
            </div>
          </div>
         </div>
       </div>

           <div class=" p-2 text-dark border mt-3 w-50">
         <div class="">
           <h3>Electro-Medical </h3>
         </div>
           <hr>
         <div class="card-body">
          <div class="row">
            <div class="col-lg-4">
              <img src="img/electro-medical.png" class="img-fluid w-50">
            </div>
            <div class="col-lg-8">
              <ul>
              <li><a href="">Teachers information</a> </li>
              <li><a href="">Student informationa </a></li>
              <li><a href="">The result </a></li>
              <li><a href="">Semester plana</a> </li>
              <li><a href="">Digital contenta </a></li>
              </ul>
            </div>
          </div>
         </div>
       </div>


           <div class=" p-2 text-dark border mt-3 w-50">
         <div class="">
           <h3>RS Depertment</h3>
         </div>
           <hr>
         <div class="card-body">
          <div class="row">
            <div class="col-lg-4">
              <img src="img/rs.png" class="img-fluid w-50">
            </div>
            <div class="col-lg-8">
              <ul>
              <li><a href="">Teachers information</a> </li>
              <li><a href="">Student informationa </a></li>
              <li><a href="">The result </a></li>
              <li><a href="">Semester plana</a> </li>
              <li><a href="">Digital contenta </a></li>
              </ul>
            </div>
          </div>
         </div>
       </div>

     </div>






     <!-- All Depertment Information -->
      </div>



<!-- Side Bar  -->
 <?php 
include "inc/sidebar.php";
  ?>
<!-- Side Bar  -->


    </div>
  </div>

<?php 
include "inc/footer.php";

 ?>