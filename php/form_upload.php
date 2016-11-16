<?php
    if (isset($_POST) && isset($_FILES['files'])) {
        include('mysql_connect.php');
        include('class.uploader.php');

        $explode = explode('/', $_FILES['files']['type'][0]);

        $type = end($explode);
        $saveFileName = date('Y_m_d_h_i_s') . "_" . floor(microtime() * 1000);
        $fileName = date('Y_m_d_h_i_s') . "_" . floor(microtime() * 1000) . '.' . $type;

        $uploader = new Uploader();

        $data = $uploader->upload($_FILES['files'], array(
            'limit' => 10, //Maximum Limit of files. {null, Number}
            'maxSize' => 10, //Maximum Size of files {null, Number(in MB's)}
            'extensions' => array('jpg', 'png'), //Whitelist for file extension. {null, Array(ex: array('jpg', 'png'))}
            'required' => false, //Minimum one file is required for upload {Boolean}
            'uploadDir' => '../uploads/', //Upload directory {String}
            'title' => $saveFileName, //New file name {null, String, Array} *please read documentation in README.md
            'removeFiles' => true, //Enable file exclusion {Boolean(extra for jQuery.filer), String($_POST field name containing json data with file names)}
            'replace' => true, //Replace the file if it already exists  {Boolean}
            'perms' => null, //Uploaded file permisions {null, Number}
            'onCheck' => null, //A callback function name to be called by checking a file for errors (must return an array) | ($file) | Callback
            'onError' => null, //A callback function name to be called if an error occured (must return an array) | ($errors, $file) | Callback
            'onSuccess' => null, //A callback function name to be called if all files were successfully uploaded | ($files, $metas) | Callback
            'onUpload' => null, //A callback function name to be called if all files were successfully uploaded (must return an array) | ($file) | Callback
            'onComplete' => null, //A callback function name to be called when upload is complete | ($file) | Callback
            'onRemove' => null //A callback function name to be called by removing files (must return an array) | ($removed_files) | Callback
        ));

        if($data['isComplete']){
            $sql = "insert into user set name = '".$_POST['name']."', content = '".$_POST['content']."', image = '".$fileName."'";
            $result=$mysqli->query($sql);
            echo 'isComplete';
        }

        if($data['hasErrors']){
            $errors = $data['errors'];
            print_r($errors);
        }
    } else {
        echo 'no data';
    }
?>
