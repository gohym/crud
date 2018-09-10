<?php
    // include Database connection file
    include("db_connection.php");

    // Design initial table header
    $data = '<table class="table table-bordered table-striped">
                        <tr>
                            <th>No.</th>
                            <th>foodItem</th>
                            <th>weight</th>
                            <th>Date</th>
                            <th>Update</th>
                        </tr>';

    $query = "SELECT * FROM receipt";

    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }

// if query results contains rows then featch those rows
// trying to have a send to fridge function to add receipt data "manually" to fridge 
if(mysqli_num_rows($result) > 0)
{
    $number = 1;
    while($row = mysqli_fetch_assoc($result))
    {
        $data .= '<tr>
            <td>'.$number.'</td>
            <td>'.$row['foodItem'].'</td>
            <td>'.$row['weight'].'</td>
            <td>'.$row['date'].'</td>
            <td>
                <button onclick="sendToFridge('.$row['id'].')" class="btn btn-warning">Add to Current Food List</button>
            </td>
        </tr>';
        $number++;
    }
}
else
{
    // records now found
    $data .= '<tr><td colspan="6">Records not found!</td></tr>';
}

$data .= '</table>';

echo $data;
?>
