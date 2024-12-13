<?php
include_once("config.php");
include_once("popup.php");
$query = "SELECT * FROM user_details";
$getUsers = $conn->query($query);
echo "<div class = 'container'>";
echo "<div>
  <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Address</th>
                <th>Role</th>
                <th>Designation</th>
                <th>Gender</th>
                <th>Profile</th>
                <th>Status</th>
                <th>Age</th>
                <th>M.Status</th>
                <th>DOB</th>
                <th>Action</th>
            </tr>
        </thead>";
    echo "<tbody>";
    while ($row = $getUsers->fetch_assoc()) {
            $id = $row['id'];
            echo "<tr>
                <td>{$row['name']}</td>
                <td>{$row['mobile']}</td>
                <td>{$row['email']}</td>
                <td>{$row['address']}</td>
                <td>{$row['role']}</td>
                <td>{$row['designation']}</td>
                <td>{$row['gender']}</td>
                <td><a href='upload/{$row['file']}' target='_blank'>View File</a></td>
                <td>{$row['status']}</td>
                <td>{$row['age']}</td>
                <td>{$row['marital_status']}</td>
                <td>{$row['dob']}</td>
                <td>
                <button type='button' class='btn btn-success mb-3' data-bs-toggle='modal' 
                 data-bs-target='#updateModal'>
                 <a><i class='fas fa-edit'></i>
                </button>
                 <button type='button' class='btn btn-danger mb-3' data-bs-toggle='modal' 
                 data-bs-target='#deleteModal'>
                 <a><i class='fas fa-trash'></i>
                </button>
                </td>
              </tr>";}
    echo"</tbody>
    </table>
  </div>
</div>";

if (isset($_POST['delete'])) {
    print_r($_POST);
  $id = $_POST['delete'];
  $getUser = $conn->prepare("delete from user_details where id ='$id'");
  if ($getUser->execute()) {
    header("Location:index.php");
  }else{
    echo "<h1>Failed</h1>";
  }
}
?> 