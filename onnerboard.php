<?php 
   require_once 'inc/header.php';
    ?>
<?php 
   require_once 'inc/nav.php';
     ?>
<div class="row">
   <div class="col-lg-8">
<?php 
include"inc/newheadline.php";
 ?>


    <div class="row">
      <div class="col-lg-12 text-center">
      <h2>Mymensingh Polytechnic Institute</h2>
      <h3 class="text-danger">List of names of principals:</h3>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#Serial No.</th>
      <th scope="col">Name and surname</th>
      <th scope="col">Pictures</th>
      <th scope="col">Term begins</th>
      <th scope="col">Term is over</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
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
    </div>














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