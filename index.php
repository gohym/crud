<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>CRUD Operations Demo</title>

<!-- Bootstrap CSS File -->
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">OptiFlo SmartFridge</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active" ><a href="index.php">Home</a></li>
      <li><a href = "receiptPage.php">Receipt Page</a></li>
      <li><a href="suggestRecipePage.php">Suggested Recipes</a></li>
      <li><a href="test.php">test</a></li>
    </ul>
  </div>
  </nav>

<!-- Content Section -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
    <h2>Current Food Test page</h2>
    <div class="pull-right">
    <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Add New Record</button>
    </div>
    <button id = "voltWarn" type="button" class="btn btn-default btn-lg">
    <span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> Voltage Low
    </button>
    <button id = "tempWarn" type="button" class="btn btn-default btn-lg">
    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> Temperature not Optimal
    </button>
  </div>
</div> 
<div class="row">
  <div class="col-md-12">
    <h4>Records:</h4>
    <div class="foodRecords_content"></div>
    </div>
  </div>
</div>
<!-- /Content Section -->

<!-- Modal -->
<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      <h4 class="modal-title" id="myModalLabel">Add New Record</h4>
      </div>
      <div class="modal-body">

        <div class="form-group">
        <label for="foodItem">Ffood</label>
        <input type="text" id="foodItem" placeholder="foodItem" class="form-control" />
        </div>

        <div class="form-group">
        <label for="weight">weight</label>
        <input type="text" id="weight" placeholder="weight" class="form-control" />
        </div>

        <div class="form-group">
        <label for="expiry">expirys</label>
        <input type="text" id="expiry" placeholder="expiry " class="form-control" />
        </div>

      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      <button type="button" class="btn btn-primary" onclick="addFoodRecord()">Add Record</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal - Update User details -->
<div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Update</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="update_foodItem">First Name</label>
                    <input type="text" id="update_foodItem" placeholder="First Name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_weight">Last Name</label>
                    <input type="text" id="update_weight" placeholder="Last Name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_expiry">expiry Address</label>
                    <input type="text" id="update_expiry" placeholder="expiry Address" class="form-control"/>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()" >Save Changes</button>
                <input type="hidden" id="hidden_user_id">
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- Jquery JS file -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

<!-- Bootstrap JS file -->
<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

<!-- Custom JS file -->
<script type="text/javascript" src="js/indexScript.js"></script>
</body>
</html>
