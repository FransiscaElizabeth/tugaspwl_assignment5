<?php
// $uploadPressed = filter_input(INPUT_POST, 'btnUpload');
// if (isset($uploadPressed)){
//     $fileName = filter_input(INPUT_POST, 'txtFileName');
//     $targetDirectory = 'upload/';
//     $fileExtension = pathinfo($_FILES['txtFile']['name'], PATHINFO_EXTENSION);
//     $fileUploadPath = $targetDirectory . $fileName . '.' . $fileExtension;
//     if($_FILES['txtFile']['size'] > 1024 * 2048){
//         echo '<div>Upload file exceed 2MB</div>';
//     }else {
//         move_uploaded_file($_FILES['txtFile']['tmp_name'], $fileUploadPath);
//     }
// }
?>
<!doctype html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <div class="container">
            <form method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>Upload Image</legend>
                    <input type="text" name="txtFileName" placeholder="Upload File Name">
                    <input type="file" name="txtFile" accept="image/*">
                    <div>
                        <input type="submit" name="btnUpload" value="Upload File to Server">
                    </div>
                </fieldset>
            </form>
        </div>
    </body>
</html>