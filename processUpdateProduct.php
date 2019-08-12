<?php

if (isset($_POST['btn_update_product'])) {
    /**
     * Setup db connection
     */
    $conn = mysqli_connect('localhost', 'root', '', 'multirich_db');
    
    if (!$conn) {
        die('Connection failed: '.mysqli_connect_error());
    }

    /**
     * Update product
     */
    $id = $_POST['id'];
    $name = $_POST['name'];
    $category = $_POST['category'];
    $description = $_POST['description'];

    if (!empty($id) || !empty($name) || !empty($category) || !empty($description)) {
        $sql = "UPDATE tbl_prod SET prod_name = ?, prod_categ = ?, prod_desc = ? WHERE prod_id = ?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header('Location: ./updateProducts.php?error=sqlerror');
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, 'ssss', $name, $category, $description, $id);
            mysqli_stmt_execute($stmt);

            // Upload image
            if ($_FILES['fileimage']) {
                uploadProductImage($conn, $id);
            } else {
                header('Location: ./updateProducts.php?success=prodcutUpdateV1');
                exit();
            }
            
        }
    } else {
        header('Location: ./updateProducts.php?error=emptyfields');
        exit();
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else {
    header('Location: ./updateProducts.php');
    exit();
}


# Upload player's profile photo
function uploadProductImage($connection, $id){
    /*steps
    1. get vars for file array elems
    2. explode filename "explode('.', $filename)"
    3. strlowercase the filename "strtolower(end($fileExtension))"
    4. list the allowed file type
    5. !check if the file is allowed
      5.1 check if there is no error
      5.2 check the file size limit
      5.3 make the new name for file. 
      5.4 file destination
      5.5 header for success  
    */
    $file = $_FILES['fileimage'];
    $strFileName = $file['name'];
    $strFileTmpName = $file['tmp_name'];
    $strFileSize = $file['size'];
    $strFileError = $file['error'];
    $strFileType = $file['type'];
    $strFileExt = explode('.', $strFileName);
    $strFileActualExt = strtolower(end($strFileExt));
    $arrAllowed = array('png', 'jpg', 'jpeg');
  
    if (in_array($strFileActualExt, $arrAllowed)) {
      if ($strFileError === 0) {
        // size limit is up to 10Mb
        if ($strFileSize < 10000000) {
            $dsn = 'mysql:host=localhost;dbname=multirich_db';
            $username = 'root';
            $password = '';
            $options = [];
            
            try {
            $connection = new PDO($dsn, $username, $password, $options);
            } catch(PDOException $e) {
            
            }
            // set the fetched data to object
            $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            // include 'db-connect2';
          //insert fileNameNew to product table
          $sql = "SELECT * FROM tbl_prod WHERE prod_id = '$id';";
          $stmt = $connection->prepare($sql);
          $stmt->execute();
          $product = $stmt->fetch();
          $strFileNameNew = "photo_".$product->prod_name."_".time().".".$strFileActualExt;
          $sqlUpdateImgName = "UPDATE tbl_prod SET prod_imagePath = '$strFileNameNew' WHERE prod_id = '$id';";
          $stmtUpdate = $connection->prepare($sqlUpdateImgName);
          $stmtUpdate->execute();
  
          $destination_path = getcwd().DIRECTORY_SEPARATOR;
  
          $strFileDestination = $destination_path.'/img/prods/'.$strFileNameNew;
          move_uploaded_file($strFileTmpName, $strFileDestination);
          header('Location: ./updateProducts.php?success=productUpdated');
          exit();
        }
        else {
          echo '<script type="text/javascript">alert("File size too large!");</script>';
        }
      }
      else {
          echo '<script type="text/javascript">alert("There was an error uploading your file.");</script>;';
      }
    }
    else {
          echo '<script type="text/javascript">alert("File error uploading!");</script>';
    }
  }