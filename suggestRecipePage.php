
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>OptiFlo Suggested Recipes</title>

<!-- Bootstrap CSS File -->
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css" />
</head>
<body>

<!-- Content Section -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
    <h2>Recipe Suggestions</h2>
    <div class="pull-right">
    <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Add New Record</button>
    </div>

  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <h4>Suggested Recipes:</h4>
    <div class="recipe_content"></div>
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
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" placeholder="First Name" class="form-control" />
        </div>

        <div class="form-group">
        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" placeholder="Last Name" class="form-control" />
        </div>

        <div class="form-group">
        <label for="email">Email Address</label>
        <input type="text" id="email" placeholder="Email Address" class="form-control" />
        </div>

      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      <button type="button" class="btn btn-primary" onclick="addRecord()">Add Record</button>
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
                    <label for="update_first_name">First Name</label>
                    <input type="text" id="update_first_name" placeholder="First Name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_last_name">Last Name</label>
                    <input type="text" id="update_last_name" placeholder="Last Name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_email">Email Address</label>
                    <input type="text" id="update_email" placeholder="Email Address" class="form-control"/>
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
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
