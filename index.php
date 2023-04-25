<?php require_once "header.php";
session_start();
$_SESSION['favcolor'] = 'green';
?>
<body id="Entry_1">

<?php echo $_SESSION['favcolor'] ?>

</body>
<?php require_once "footer.php"?>
