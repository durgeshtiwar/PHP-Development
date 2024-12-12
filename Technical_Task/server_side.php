<?php
// Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handling Add, Update, and Delete Requests
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'add':
                $marital_status = $_POST['marital_status'];
                $dob = $_POST['dob'];
                $sql = "INSERT INTO users (marital_status, dob) VALUES ('$marital_status', '$dob')";
                $conn->query($sql);
                break;

            case 'update':
                $id = $_POST['id'];
                $marital_status = $_POST['marital_status'];
                $dob = $_POST['dob'];
                $sql = "UPDATE users SET marital_status='$marital_status', dob='$dob' WHERE id=$id";
                $conn->query($sql);
                break;

            case 'delete':
                $id = $_POST['id'];
                $sql = "DELETE FROM users WHERE id=$id";
                $conn->query($sql);
                break;
        }
    }
    exit;
}

// Fetching Data for Data Table
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $result = $conn->query("SELECT * FROM users");
    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode($data);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD Task</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-4">
    <h2>PHP CRUD Task</h2>
    <button class="btn btn-primary mb-3" onclick="showAddPopup()">Add</button>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Marital Status</th>
                <th>DOB</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="data-table"></tbody>
    </table>
</div>

<!-- Add/Edit Popup -->
<div class="modal" tabindex="-1" id="dataModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Add User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="dataForm">
                    <input type="hidden" name="id" id="userId">
                    <div class="mb-3">
                        <label>Marital Status</label><br>
                        <input type="radio" name="marital_status" value="Married" required> Married
                        <input type="radio" name="marital_status" value="Unmarried" required> Unmarried
                    </div>
                    <div class="mb-3">
                        <label for="dob">DOB</label>
                        <input type="date" id="dob" name="dob" class="form-control" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="saveData()">Save</button>
            </div>
        </div>
    </div>
</div>

<script>
function loadData() {
    $.get('', function(data) {
        const rows = JSON.parse(data).map(row => `
            <tr>
                <td>${row.id}</td>
                <td>${row.marital_status}</td>
                <td>${row.dob}</td>
                <td>
                    <button class="btn btn-warning btn-sm" onclick="showEditPopup(${row.id}, '${row.marital_status}', '${row.dob}')">Update</button>
                    <button class="btn btn-danger btn-sm" onclick="deleteData(${row.id})">Delete</button>
                </td>
            </tr>
        `);
        $('#data-table').html(rows.join(''));
    });
}

function showAddPopup() {
    $('#modalTitle').text('Add User');
    $('#dataForm')[0].reset();
    $('#userId').val('');
    $('#dataModal').modal('show');
}

function showEditPopup(id, marital_status, dob) {
    $('#modalTitle').text('Edit User');
    $('#userId').val(id);
    $(`[name=marital_status][value=${marital_status}]`).prop('checked', true);
    $('#dob').val(dob);
    $('#dataModal').modal('show');
}

function saveData() {
    const formData = $('#dataForm').serializeArray();
    formData.push({ name: 'action', value: $('#userId').val() ? 'update' : 'add' });
    $.post('', formData, loadData);
    $('#dataModal').modal('hide');
}

function deleteData(id) {
    if (confirm('Are you sure you want to delete this record?')) {
        $.post('', { action: 'delete', id }, loadData);
    }
}

$(document).ready(loadData);
</script>
</body>
</html>
