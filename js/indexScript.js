// Add Record
function addFoodRecord() {
    // get values
    var foodItem = $("#foodItem").val();
    var weight = $("#weight").val();
    var expiry = $("#expiry").val();

    // Add record
    $.post("ajax/addCurrentFood.php", {
        foodItem: foodItem,
        weight: weight,
        expiry: expiry
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#foodItem").val("");
        $("#weight").val("");
        $("#expiry").val("");
    });
}

function GetUserDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(id);
    $.post("ajax/readFoodDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_foodItem").val(user.foodItem);
            $("#update_weight").val(user.weight);
            $("#update_expiry").val(user.expiry);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}


function UpdateUserDetails() {
    // get values
    var foodItem = $("#update_foodItem").val();
    var weight = $("#update_weight").val();
    var expiry = $("#update_expiry").val();

    // get hidden field value
    var id = $("#hidden_user_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateFoodDetails.php", {
            id: id,
            foodItem: foodItem,
            weight: weight,
            expiry: expiry
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload Users by using readRecords();
            readRecords();
        }
    );
}


// says function not defined?
function DeleteUser(id) {
var conf = confirm("Are you sure, do you really want to remove Food from Fridge?");
if (conf == true) {
    $.post("ajax/deleteFood.php", {
            id: id
        },
        function (data, status) {
            // reload Users by using readRecords();
            readRecords();
        }
    );
}
}

// READ records
function readRecords() {
    $.get("ajax/readFoodRecords.php", {}, function (data, status) {
        $(".foodRecords_content").html(data);
    });
}


$(document).ready(function () {
    // READ recods on page load
    readRecords(); // calling function
    // testing on warning displays
    console.log($("#exp").text());
    if ($("#exp").text() <= 2)
    {
      $("#exp").css('color', "red");
    }

    $("#voltWarn").click(function(){
    $("#voltWarn").css('color', "red");
    });
    $("#tempWarn").click(function(){
    $("#tempWarn").hide();

    //alert("Text: " + $("#exp").text());
    if ($("#exp").text() <= 2) {
      $("#exp").css('color', "red");
      console.log($("#exp").text());
    }


    });
});
