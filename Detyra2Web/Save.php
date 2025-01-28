<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $emri = trim($_POST['emri'] ?? '');
    $mbiemri = trim($_POST['mbiemri'] ?? '');
    $qyteti = trim($_POST['qyteti'] ?? '');
    $adresa = trim($_POST['adresa'] ?? '');

    // Validimi në server
    if (empty($emri) || empty($mbiemri) || empty($qyteti) || empty($adresa)) {
        http_response_code(400);
        echo "Ju lutemi plotësoni të gjitha fushat!";
        exit;
    }

    // Simulimi i ruajtjes së të dhënave
    // Në një aplikacion real, këtu mund të ruani të dhënat në bazën e të dhënave.
    echo "Të dhënat u ruajtën me sukses!";
}
?>
</body>
</html>