<?php 

include_once __DIR__ . '/connect.php';

if (isset($_POST['submit'])) {
        $code = mysqli_real_escape_string($conn, $_POST['code']);
        $description = mysqli_real_escape_string($conn, $_POST['description']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);

        $insert_sql = "INSERT INTO school (`code`, description, address)
                        VALUES ('$code', '$description', '$address')";

        if (mysqli_query($conn, $insert_sql)) {
            echo "<p>Record added successfully.</p>";
        } else {
            echo "<p>Error adding record: " . mysqli_error($conn) . "</p>";
        }
    }

if (isset($_GET['action']) &&
    $_GET['action'] === 'delete' &&
    isset($_GET['id'])) {

    $id = (int)$_GET['id'];

    $delete_sql = "DELETE FROM school WHERE id = $id";

    if (mysqli_query($conn, $delete_sql)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>