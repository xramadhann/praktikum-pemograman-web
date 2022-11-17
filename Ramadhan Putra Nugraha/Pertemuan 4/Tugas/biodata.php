<html lang="en">

<?php
error_reporting(false);
session_start();
?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>

<body>
    <form method="post">
        Masukan Nama:<br>
        <input type="text" name="nama"><br>
        Masukan Alamat:<br>
        <input type="text" name="alamat"><br>
        Masukan Nomor Telepon:<br>
        <input type="tel" name="telp"><br>
        Masukan Email:<br>
        <input type="email" name="email"><br><br>
        <input type="submit" name="kirim" value="Kirim">
    </form>

<?php
if (isset($_SESSION['tmptnama'])){
    $tmptnama = $_SESSION['tmptnama'];
}
if (isset($_SESSION['tmptalamat'])){
    $tmptalamat = $_SESSION['tmptalamat'];
}
if (isset($_SESSION['tmpttlp'])){
    $tmpttlp = $_SESSION['tmpttlp'];
}
if (isset($_SESSION['tmptemail'])){
    $tmptemail = $_SESSION['tmptemail'];
}

$tmptnama[]=$_POST['nama'];
$tmptalamat[]=$_POST['alamat'];
$tmpttlp[]=$_POST['telp'];
$tmptemail[]=$_POST['email'];

$_SESSION['tmptnama']=$tmptnama;
$_SESSION['tmptalamat']=$tmptalamat;
$_SESSION['tmpttlp']=$tmpttlp;
$_SESSION['tmptemail']=$tmptemail;

?>

<br>
<table>
    <tr>
        <td>No.<td></td>
        <td>Nama<td></td>
        <td>Alamat<td></td>
        <td>No. Tlp<td></td>
        <td>Email<td></td>
    </tr>
    <?php
    if (isset($_SESSION['tmptnama'])){
        $tmptnama = $_SESSION['tmptnama'];
    }
    if (isset($_SESSION['tmptalamat'])){
        $tmptalamat = $_SESSION['tmptalamat'];
    }
    if (isset($_SESSION['tmpttlp'])){
        $tmpttlp = $_SESSION['tmpttlp'];
    }
    if (isset($_SESSION['tmptemail'])){
        $tmptemail = $_SESSION['tmptemail'];
    }

    for ($i=0;$i<count($tmptnama); $i++){
        echo "<tr><td>";
        echo 1.+$i."<td><td>".$tmptnama[$i]."<td><td>".$tmptalamat[$i]."<td><td>".$tmpttlp[$i]."<td><td>".$tmptemail[$i]."<td><td>";
    }
    ?>
</table>
</body>
</html>