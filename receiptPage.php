
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>CRUD  Demo</title>

<!-- Bootstrap CSS File -->
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="#">OptiFlo SmartFridge</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li class="active"><a href = "receiptPage.php">Receipt Page</a></li>
      <li><a href="suggestRecipePage.php">Suggested Recipes</a></li>
      <li><a href="test.php">test</a></li>
    </ul>
    </div>
  </nav>

<!-- Content Section -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
    <h2>Receipt</h2>
    <div class="pull-right">
    <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Add New Record</button>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <h4>Records:</h4>
    <div class="receipt_content"></div>
    </div>
  </div>
</div>
<!-- /Content Section -->

<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      <h4 class="modal-title" id="myModalLabel">Add New Food Purchase</h4>
      </div>
      <div class="modal-body">

        <div class="form-group">
        <label for="first_name">Food Name</label>
        <input type="text" id="foodItem" placeholder="Food Name" class="form-control" />
        </div>

        <div class="form-group">
        <label for="last_name">Weight Estimate</label>
        <input type="text" id="weight" placeholder="weight" class="form-control" />
        </div>

        <div class="form-group">
        <label for="email">Date of Purchase</label>
        <input type="text" id="date" placeholder="date" class="form-control" />
        </div>

      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      <button type="button" class="btn btn-primary" onclick="addRecord()">Add Receipt Record</button>
      </div>
    </div>
  </div>
</div>



<!-- Jquery JS file -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

<!-- Bootstrap JS file -->
<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

<!-- Custom JS file -->
<script type="text/javascript" src="js/receiptScript.js"></script>
</body>
</html>
