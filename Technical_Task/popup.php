<!-- Insert Data in Form -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Create New Account</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="form-container">
        <form action="request.php" method="post" enctype="multipart/form-data" >
        <div class="inform form-group">
            <div>
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" name="fullname" placeholder="Enter full name" required>
            </div>
            <div>
                <label for="mobile">Mobile No.</label>
                <input type="tel" id="mobile" name="mobile" placeholder="Enter mobile no." pattern="[0-9]{10}" required>
            </div>
            </div>
            <div class="inform form-group">
            <div>
                <label for="email">Email id</label>
                <input type="email" id="email" name="email" placeholder="Enter email id" required>
            </div>
            <div>
                <label for="address">Address</label>
                <input type="text" id="address" name="address" placeholder="Enter address" required>
            </div>
            </div>
            <div class="inform form-group">
            <div>
                <label for="role">Role</label>
                <select class = "form-control" id="role" name="role">
                <option value="" disabled selected>Role</option>
                <option value="admin">ADMIN</option>
                <option value="designer">DESIGNER</option>
                <option value="developer">DEVELOPER</option>
                </select>
            </div>
            <div>
                <label for="designation">Designation</label>
                <input type="text" id="text" name="designation" placeholder="Enter Designation" required>
            </div>
            <div>
                <label for="gender">Gender</label>
                <select class = "form-control" id="gender" name="gender">
                <option value="" disabled selected>Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
                </select>
            </div>
            </div>
            <div class="inform form-group">
            <div>
                <label for="file">Upload Profile</label>
                <input type="file" id="file" name="file" required>
            </div>
            <div>
                <label for="status">Status</label>
                <select class = "form-control" id="status" name="status">
                <option value="" disabled selected>Status</option>
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
                </select>
            </div>
            </div>
            <div class="inform self">
              <div>
              <label class="lev" for="age">Age:</label>
              <input class = "small-input" type="number" id="age" name="age" min="0" required>
              </div>
              <div>
                <label class="lev" for="marital_status">Marital Status</label>
                <label><input type="radio" name="marital_status" value="married" required> Married</label>
                <label><input type="radio" name="marital_status" value="unmarried"> Unmarried</label>
              </div>
              <div>
              <label class="lev" for="dob">Date of Birth:</label>
              <input type="date" id="dob" name="dob" required>
            </div>
            </div>
            <button type="submit" name="insert" class="submit-btn">Add Team</button>
        </form>
    </div>
      </div>
      
    </div>
  </div>
</div>

<!-- Update Data in Form -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Team Details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="form-container">
        <form action="request.php" method="post" enctype="multipart/form-data" >
        <div class="inform form-group">
            <div>
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" name="fullname" placeholder="Enter full name" required>
            </div>
            <div>
                <label for="mobile">Mobile No.</label>
                <input type="tel" id="mobile" name="mobile" placeholder="Enter mobile no." pattern="[0-9]{10}" required>
            </div>
            </div>
            <div class="inform form-group">
            <div>
                <label for="email">Email id</label>
                <input type="email" id="email" name="email" placeholder="Enter email id" required>
            </div>
            <div>
                <label for="address">Address</label>
                <input type="text" id="address" name="address" placeholder="Enter address" required>
            </div>
            </div>
            <div class="inform form-group">
            <div>
                <label for="role">Role</label>
                <select class = "form-control" id="role" name="role">
                <option value="" disabled selected>Role</option>
                <option value="admin">ADMIN</option>
                <option value="designer">DESIGNER</option>
                <option value="developer">DEVELOPER</option>
                </select>
            </div>
            <div>
                <label for="designation">Designation</label>
                <input type="text" id="text" name="designation" placeholder="Enter Designation" required>
            </div>
            <div>
                <label for="gender">Gender</label>
                <select class = "form-control" id="gender" name="gender">
                <option value="" disabled selected>Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
                </select>
            </div>
            </div>
            <div class="inform form-group">
            <div>
                <label for="file">Upload Profile</label>
                <input type="file" id="file" name="file" required>
            </div>
            <div>
                <label for="status">Status</label>
                <select class = "form-control" id="status" name="status">
                <option value="" disabled selected>Status</option>
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
                </select>
            </div>
            </div>
            <div class="inform self">
              <div>
              <label class="lev" for="age">Age:</label>
              <input class = "small-input" type="number" id="age" name="age" min="0" required>
              </div>
              <div>
                <label class="lev" for="marital_status">Marital Status</label>
                <label><input type="radio" name="marital_status" value="married" required> Married</label>
                <label><input type="radio" name="marital_status" value="unmarried"> Unmarried</label>
              </div>
              <div>
              <label class="lev" for="dob">Date of Birth:</label>
              <input type="date" id="dob" name="dob" required>
            </div>
            </div>
            <button type="submit" name ="update" class="submit-btn">Update</button>
        </form>
    </div>
      </div>
      
    </div>
  </div>
</div>

<!-- delete Data  -->

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Are You Sure For Delete This Record</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body delete">
      <button type="button" name = 'delete' value =".$row['id']." class="btn btn-danger">Delete</button>
      <button type="button" class="btn btn-info">Cancel</button>
      </div>
      
    </div>
  </div>
</div>