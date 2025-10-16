<?php
include 'data.php';

//TODO: Ambil data dari form
$username = "";
$password = "";

$error = "";

if (/* cek kosong apa ngga fieldnya */) {

} else {
    $found = false;
    foreach ($users as $user) {
        if (/* Kondisi kalo nemu datanya */) {
            
        }
    }

    if (!$found) {
        
    } else {
        header("Location: "); // Arahin ke homepage
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <div class="">
        <h2>Login</h2>
        <form > <!-- jangan lupa method sama actionnya -->
            <div class="">
                <label>Username:</label>
                <input>
            </div>
            <div class="">
                <label>Password:</label>
                <input >
            </div>
            <div id="error-message" style="color:red;">
                <!-- Nah DOM JS nya di sini ya -->
            </div>
            <button type="">Login</button>
        </form>
    </div>
</body>
</html>
