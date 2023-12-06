<?php
session_start();
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'wallboard';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
    // If there is an error with the connection, stop the script and display the error.
    exit('Błąd połączenia MySQL: ' . mysqli_connect_error());
}


if ( !isset($_POST['username'], $_POST['password']) ) {

    exit('Uzupełnij oba pola!');
}


if ($stmt = $con->prepare('SELECT id, password, id_o FROM accounts WHERE username = ?')) {

    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();

    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password, $id_o);
        $stmt->fetch();

        if ($_POST['password'] === $password) {

            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            //$id_o = $_POST['id_o'];
            $query = $con->query("SELECT id_o FROM accounts WHERE username = \"{$_POST['username']}\"");
            $rekord = mysqli_fetch_array($query);
            $id_o = $rekord['id_o'];
            $przekierowanie = "../serwisowy?o={$id_o}";
            echo 'Welcome ' . $id_o . '!';
            header('Location: ' . $przekierowanie);
        } else {
            // Incorrect password
            echo 'Niepoprawny login i/lub hasło';
        }
    } else {
        // Incorrect username
        echo 'Niepoprawny login i/lub hasło';
    }

    $stmt->close();
}
?>