<?php
include "conn.php";

session_start();
if (!isset($_SESSION['AdminLoginId'])) {
    header("location: login.php");
    exit();
}

// Add new user
if (isset($_POST['add_user'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the email already exists
    $check_query = mysqli_query($conn, "SELECT * FROM `registration_form` WHERE `email` = '$email'");
    if (mysqli_num_rows($check_query) > 0) {
        echo '<script>alert("Email already exists. Please add a different email."); window.location.href = "manage_users.php";</script>';
        exit;
    } else {
        // Insert the new user into reg table
        $insert_query = "INSERT INTO `registration_form` (`fullname`, `email`, `password`) VALUES ('$fullname', '$email','$password')";
        mysqli_query($conn, $insert_query);
        header("Location: manage_users.php");
        exit;
    }
}

// Remove user
if (isset($_GET['remove_user'])) {
    $user_id = $_GET['remove_user'];

    // Delete user from the database
    $query = "DELETE FROM `registration_form` WHERE `id` = $user_id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("location: manage_users.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Update user
if (isset($_POST['update_user'])) {
    $user_id = $_POST['user_id'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the user ID is valid
    $check_query = mysqli_query($conn, "SELECT * FROM `registration_form` WHERE `id` = $user_id");
    if (mysqli_num_rows($check_query) == 0) {
        $message = "Invalid user ID.";
    } else {
        // Check if the new email already exists (excluding the current user being updated)
        $check_query = mysqli_query($conn, "SELECT * FROM `registration_form` WHERE `email` = '$email' AND `id` != $user_id");
        if (mysqli_num_rows($check_query) > 0) {
            $message = "Email already exists. Please update with a different email.";
        } else {
            // Escape the input values
            $fullname = mysqli_real_escape_string($conn, $fullname);
            $email = mysqli_real_escape_string($conn, $email);
            $password = mysqli_real_escape_string($conn, $password);

            // Update the user in the database
            $update_query = "UPDATE `registration_form` SET `fullname` = '$fullname', `email` = '$email', `password` = '$password' WHERE `id` = $user_id";
            $result = mysqli_query($conn, $update_query);

            if ($result) {
                header("Location: manage_users.php");
                exit;
            } else {
                $message = "Failed to update the user. Please try again.";
            }
        }
    }
}

// Fetch all users from the database
$query = "SELECT * FROM `registration_form`";
$result = mysqli_query($conn, $query);
?>


<?php include 'dash_header_or_nav.php'; ?>

<!-- HTML code for manage_users page -->

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h1 style="text-align: center;">Manage Users</h1>
                        <br>
                        <div class="row">
                            <div class="col-md-6">

                                <!-- Add User Form -->
                                <form action="manage_users.php" method="post">
                                    <div class="form-group">
                                        <label for="fullname">Full Name</label>
                                        <input type="text" class="form-control" id="fullname" name="fullname" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="add_user">Add User</button>
                                </form>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">

                                <!-- Users Table -->
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($row = mysqli_fetch_array($result)) { ?>
                                            <tr>
                                                <td><?= $row['fullname']; ?></td>
                                                <td><?= $row['email']; ?></td>
                                                <td>
                                                    <a class="b_edit_button" href="#" data-toggle="modal" data-target="#editModal<?= $row['id']; ?>">Edit</a> |
                                                    <a class="b_remove_button" href="manage_users.php?remove_user=<?= $row['id']; ?>" onclick="return confirm('Are you sure you want to remove this user?')">Remove</a>
                                                </td>
                                            </tr>
                                            <!-- Edit Modal -->
                                            <div class="modal fade" id="editModal<?= $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editModalLabel">Edit User</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="manage_users.php" method="post">
                                                                <input type="hidden" name="user_id" value="<?= $row['id']; ?>">
                                                                <div class="form-group">
                                                                    <label for="editFullname">Full Name</label>
                                                                    <input type="text" class="form-control" id="editFullname" name="fullname" value="<?= $row['fullname']; ?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="editEmail">Email</label>
                                                                    <input type="email" class="form-control" id="editEmail" name="email" value="<?= $row['email']; ?>" required>
                                                                </div>
                                                              
                                                                <div class="form-group">
                                                                    <label for="editPassword">Password</label>
                                                                    <input type="password" class="form-control" id="editPassword" name="password" value="<?= $row['password']; ?>" required>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary" name="update_user">Update</button>
                                                                    
                                                                    <?php if (isset($message)) { ?>
                                                                    <script>
                                                                        alert("<?php echo $message; ?>");
                                                                        window.location.href = "manage_users.php";
                                                                        </script>
                                                                        <?php } ?>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Edit Modal -->
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- js for logout-->
<script src="vendors/js/vendor.bundle.base.js"></script>
<!-- no need offooter -->

<?php mysqli_close($conn); ?>
