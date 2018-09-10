// Add Record
function addRecord() {
    // get values
    var foodItem = $("#foodItem").val();
    var weight = $("#weight").val();
    var date = $("#date").val();

    // Add record
    $.post("ajax/addReceiptData.php", {
        foodItem: foodItem,
        weight: weight,
        date: date
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readReceipt();

        // clear fields from the popup
        $("foodItem").val("");
        $("#weight").val("");
        $("#date").val("");
    });
}

// send current receipt Data to fridge (not working yet )
function sendToFridge(foodItem) {
    // get values
    var foodItem = $("#foodItem").val();
    var weight = $("#weight").val();
    var expiry = $("#date").val();

    // Add record
    $.post("ajax/addCurrentFood.php", {
        foodItem: foodItem,
        weight: weight,
        expiry: expiry
    }, function (data, status) {
        // read records again
        readReceipt();
    });
}

// READ records
function readReceipt() {
    $.get("ajax/readReceiptData.php", {}, function (data, status) {
        $(".receipt_content").html(data);
    });
}



$(document).ready(function () {
    // READ recods on page load
    readReceipt(); // calling function
});
