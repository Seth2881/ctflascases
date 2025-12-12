<?php require_once 'connection_bdd.php' ?>
<?php require_once 'session_check.php' ?>

<?php
function getUserIP()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    }

    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        // Peut contenir plusieurs IP séparées par des virgules
        return explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0];
    }

    return $_SERVER['REMOTE_ADDR'];
}

$ip = getUserIP();
$pseudo = htmlspecialchars($_POST['name']);

if ($isConnected) {
    $stmt = $mysqlConnection->prepare("SELECT ip FROM winners");
    $stmt->execute();
    $isWinner = $stmt->fetch(PDO::FETCH_ASSOC);
}

if (!$isWinner) {
    if ($isConnected) {
        $stmt = $mysqlConnection->prepare("INSERT INTO winners (ip,pseudo,date_win) VALUES (?,?,NOW())");
        $stmt->execute([$ip, $pseudo]);
    }
} else {

}

header('Location: ../win_zone.php');
?>