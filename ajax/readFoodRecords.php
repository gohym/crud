<?php
    // include Database connection file
    include("db_connection.php");

    // Design initial table header
    $data = '<table class="table table-bordered table-striped">
                        <tr>
                            <th>No.</th>
                            <th>FOod Name</th>
                            <th>Weight</th>
                            <th>days to expiry</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>';

    $query = "SELECT * FROM currentfood";

    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }

// if query results contains rows then featch those rows
if(mysqli_num_rows($result) > 0)
{
    $number = 1;
    while($row = mysqli_fetch_assoc($result))
    {
        $data .= '<tr>
            <td>'.$number.'</td>
            <td>'.$row['foodItem'].'</td>
            <td>'.$row['weight'].'</td>
            <td id=exp >'.$row['expiry'].'</td>
            <td>
                <button onclick="GetUserDetails('.$row['id'].')" class="btn btn-warning">Update</button>
            </td>
            <td>
                <button onclick="DeleteUser('.$row['id'].')" class="btn btn-danger">Delete</button>
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