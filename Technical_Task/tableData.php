<?php
include_once("config.php");
include_once("popup.php");
$getUsers = $conn->prepare("SELECT * FROM user_details ");
$getUsers->execute();
$users = $getUsers->get_result();?>
<div class = 'container'>
<div>
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
        </thead>
    <tbody><?php
    foreach($users as $row) {
      ?>
                <tr>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['mobile']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['address']?></td>
                <td><?php echo $row['role']?></td>
                <td><?php echo $row['designation']?></td>
                <td><?php echo $row['gender']?></td>
                <?php
                echo "<td><img src='upload/{$row['file']}' target='_blank'></img></td>";
                ?>
                <td><?php echo $row['status']?></td>
                <td><?php echo $row['age']?></td>
                <td><?php echo $row['marital_status']?></td>
                <td><?php echo $row['dob']?></td>
                <td>
               
                <button type='button' class='btn btn-success mb-3' data-bs-toggle='modal' 
                 data-bs-target='#updateModal'>
                 <a><i class='fas fa-edit'></i>
                 <form method="post" action="request.php">
                <button name="delete" value="<?php echo htmlspecialchars($row['id']); ?>" 
                        type="submit" class="btn btn-danger mb-3">
                    <i class="fas fa-trash"></i>
                </button>
                 </form>
                <?php

                echo "</td>
              </tr>";}
    echo"</tbody>
    </table>
  </div>
</div>";
?> 
