<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>booking</title> 
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>      

   </style>
   </head>
   <body> 
      <nav class="navbar navbar-expand-sm bg-light navbar-light">
         <ul class="navbar-nav">
            <li class="nav-item">
         <a style="font-size: 20px; margin-left: 10px;" class="nav-link" href="<?php echo site_url('Insert_controller/create/uri') ?>">Registration</a>
     </li>
    <li class="nav-item active">
        <a style="font-size: 20px; margin-left: 15px;" class="nav-link" href="<?php echo site_url('View_controller/index/uri') ?>">Records</a>
    </li>
  </ul>
</nav>
    
  <div class="container">
        <div class="row">
      <div class="col-sm-12">
        <table id="mydatatable" class ="table table-bordered" cellspacing="0" width="100%">

          
            <thead>
           
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th> 
            <th>Age</th>   
            <th>DOB</th>
            <th>created at</th> 
            </thead>

            <?php
            foreach($records as $r) { 
               echo "<tr>"; 
               echo "<td>".$r->id."</td>"; 
               echo "<td>".$r->fname."</td>"; 
               echo "<td>".$r->lname."</td>";
               echo "<td>".$r->age."</td>";
               echo "<td>".$r->dob."</td>";
               echo "<td>".$r->created_at."</td>";
               
               echo "</tr>"; 
            } 
         ?>
      </table> 
    </div>
  </div>
</div>
      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<script >
        $(document).ready(function() {
            $('#mydatatable').DataTable({
                "autoWidth": false,
                
                "pageLength": 5
            });
        } );
</script>
      
   </body>
   
</html>