<?php



/**
 * @param $fileName
 * @return mixed tra ve phan mo rong cua file
 */
function getFileExtension ($fileName) {
    return pathinfo($fileName)["extension"];
}

/**
 * @param $file // $_FILES["img"]
 * @param $path // './upload'
 * @param $allowType // array("jpg", "png")
 * @param $maxSize  // 3MB --> 3000000
 */
function uploadFile($file, $path, $allowType, $maxSize) {
    $fileName = $file['name'];
    $ext = getFileExtension($fileName);
    $fileSize = $file['size'];
    $tmpFile = $file['tmp_name'];

    $result = [
        "error" => [],
        "path" => ""
    ];

    if ($fileSize > $maxSize) {
        $result["error"][] = [
            "msg" => "Exceeded filesize limit (" . ($maxSize / 1000000) . "MB)"
        ];
    }

    if (!in_array($ext, $allowType)) {
        $result["error"][] = [
            "msg" => "File type not allowed"
        ];
    }

    if(count($result["error"]) == 0) {

        $fileName = time() . '_' . $fileName;  // time() 12248717644
        $path = $path . '/' . $fileName;
        if(move_uploaded_file($tmpFile, $path)) {
            $result["path"] = $path;
        }
    }
    return $result;
}
?>

<?php
                    //                    echo "<pre class='text-left'>";
                    //                    var_dump($_FILES);
                    //                    echo "</pre>";
                    $folder_to_upload = 'imgup';
                    $allowType = ['jpg','JPG','JPEG', 'png', 'jpeg', 'doc', 'docx', 'pdf'];
                    $maxSize  = 300000000;

                    $upload_result = uploadFile($_FILES["img"], $folder_to_upload, $allowType, $maxSize);


                    if(count($upload_result["error"]) > 0) {
                        $error = "";
                        foreach($upload_result["error"] as $err) $error .= $err["msg"] . ". ";

                        echo '<div class="alert alert-danger">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong> lỗi rồi a ê</strong> ' . $error . '
                            </div>';
                    } else {
                        echo '<div class="alert alert-success">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong> ok , thành công nhé. đm</strong> File path: <pre>' . $upload_result["path"] . '</pre>
                            </div>';
                    }
                    ?>
