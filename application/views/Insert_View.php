<!DOCTYPE html>
<html>
    <head>
         <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <title>Insert A Record</title>
    </head>

    <body>

      <nav class="navbar navbar-expand-sm bg-light navbar-light">
         <ul class="navbar-nav">
            <li class="nav-item active">
         <a style="font-size: 20px; margin-left: 10px;" class="nav-link" href="<?php echo site_url('Insert_controller/create/uri') ?>">Registration</a>
     </li>
    <li class="nav-item">
        <a style="font-size: 20px; margin-left: 15px;" class="nav-link" href="<?php echo site_url('View_controller/index/uri') ?>">Records</a>
    </li>
  </ul>
</nav>
     <div class="container">

            <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header" align="center" style="font-size: 24px;">Registration</div>
                            <div class="card-body">
        <form class="form-horizontal" method="post">
             <div class="form-group">
                <label class="col-md-4 control-label" for="fname">First Name</label>
                <div class="col-md-8">
                    <input type="text" name="fname" class="form-control input-md" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="fname">Second Name</label>
                <div class="col-md-8">
                    <input type="text" name="lname" class="form-control input-md" required="">
                </div>
            </div>
                <div class="form-group">
                <label class="col-md-4 control-label" for="age">Age</label>
                <div class="col-md-8">
                    <input type="number" name="age" class="form-control input-md" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="dob">Date of Birth</label>
                <div class="col-md-8">
                    <input type="Date" name="dob" class="form-control input-md" required="">
                </div>
            </div>
            <div class="form-group">
                 <div class="col-md-8">
                 <td><input type="submit" name="insert" class="btn btn-success" style="width: 240px; align-content: : center;margin-left: 30px;"></td>
                 
             </div>
             </div>
        </form>
    </div>
</div>
</div>
</div>
</div>

    </body>
</html>