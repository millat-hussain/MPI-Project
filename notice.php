<?php 
require_once 'inc/header.php';
 ?>
 <?php 
require_once 'inc/nav.php';
  ?>

   <div class="row mt-2 mb-2">
      <div class="col-lg-8">

     

         <div class="row">
      <div class="col-lg-12 text-center">

     <h1>All Notice Board </h1>
     <hr>
</div>
</div>





      <!-- Data Tables -->
      <div class="row mt-2 mb-2">
        <div class="col-lg-6">
         <h3>All Notice Here</h3>
        </div>
        <div class="col-lg-6">
        <div class="md-form mt-0">
        <form action="" method="POST">

          <input class="form-control" type="text" placeholder="Search" aria-label="Search">


        </form>
       
        </div>
        </div>
    
      
      </div>
<table id="example" class="table  table-hover text-center" style="width:100%">
        <thead>
            <tr>
                <th>Serial </th>
                <th>Title </th>
                <th>Date</th>
                <th>PDF</th>
           
            </tr>
        </thead>
        <tbody>
        

             <?php

            $query ="SELECT * FROM notice ORDER BY id DESC LIMIT 5";
            $runqery =$db->select($query);
            if ($runqery) {

              $i=0;
             while ($rasult =$runqery->fetch_assoc()) {
              $i++;
            ?>
        
        

            <tr>
                <td><?php  echo $i?></td>
                <td><?php echo $rasult['notice'] ?></td>
                <td> <?php echo $help->tfrom($rasult['time']);?></td>
                <td>
                <a href="">Download</a>
                </td>
              
            </tr>

             <?php }}?>
           
      
        </tbody>
 
    </table>
<!--  -->
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>





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