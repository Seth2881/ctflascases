<?php require_once 'connection_bdd.php' ?>
<?php require_once 'session_check.php' ?>

<?php
$content = "<ul class=\"classement\">";
$position = "<ul class=\"a\">"
            ."<h4>"
                ."Position"
            ."</h4>";
$pseudo = "<ul class=\"a\">"
            ."<h4>"
                ."Pseudo"
            ."</h4>";
$date_win = "<ul class=\"a\">"
            ."<h4>"
                ."Date victoire"
            ."</h4>";

if ($isConnected) {
    $stmt = $mysqlConnection->prepare("SELECT ip,pseudo,date_win FROM winners");
    $stmt->execute();
    $list_winner = $stmt->fetchAll();
}
for ($i=0 ; $i<count($list_winner) ; $i++){
    $position .= "<li>"
                    .$i+1
                ."</li>";
    $pseudo .= "<li>"
                    .$list_winner[$i][1]
                ."</li>";
    $date_win .= "<li>"
                    .$list_winner[$i][2]
                ."</li>";
}
$content .= $position."</ul>".$pseudo."</ul>".$date_win."</ul>"."</ul>";

echo $content;
?>