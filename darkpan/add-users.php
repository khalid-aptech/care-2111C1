<?php ob_start() ?>
    <?php include "sidebar.php" ?>
    <?php include "header.php" ?>
<br>
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 ">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Form</h6>
                    <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="text" class="form-label"> Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                    </div> -->
                        </div>
                        
                        <div class="mb-3">
                            <label for="text" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Password</label>
                            <input type="text" name="pass" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label> Role</label>
                            <select class="form-control" name="role" value="<?php echo $row['role']; ?>">
                              
                                <option value="admin">Admin</option>
                                <option value="doctor">Doctor</option>
                                <option value="employee">employe</option>
                            </select>

                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Choose Profile</label>
                            <input class="form-control bg-dark" name="fileToUpload" type="file" id="formFile">
                        </div>

                        <button type="submit" name="save" class="btn btn-primary" value="Save">ADD USER</button>
                    </form>
                </div>
            </div>




        </div>
    </div>
    <!-- Form End -->


    <?php

    if(isset($_POST["save"]))       

    {
        if(isset($_FILES["fileToUpload"])){

            $error = array();
            
            $filename = $_FILES['fileToUpload']["name"];
            $filesize = $_FILES['fileToUpload']["size"];
            $file_temp = $_FILES['fileToUpload']["tmp_name"];
            $file_type = $_FILES['fileToUpload']["type"];
            $file_ext = explode('.',"$filename");
            $file_ext = end($file_ext);
            $file_ext = strtolower($file_ext);
            $extension = array("jpg","jpeg","png");
            
            if(in_array($file_ext,$extension) === false)
            {
                $error[] = "File extension must be jpeg ,jpg ,png";
            }
            if($filesize > 2097152)
            {
            
                $error[] =  "file is must be less than 2 mb";
            }
            if(empty($error)==true)
            {
                move_uploaded_file($file_temp,"upload/".$filename);
            }
            }


        $name = $_POST["name"];
        // $profile = $_POST["profile"];
        $Email = $_POST["email"];
        $Password = $_POST["pass"];
        $role = $_POST["role"];
    
 
    
        include "config.php";
    
        $query1 = "SELECT * FROM `user` where 'NAME' = '{$name}'  ";
        $result = mysqli_query($conn, $query1);
        
            if (mysqli_num_rows($result) > 0) 
            {
                $result;
                echo "user  alredy exist";
            }
            else
            {
              
              $query = "INSERT INTO `user`(`NAME`, `EMAIL`, `PASSWORD`, `IMAGE`, `ROLE`) VALUES ('{$name}','{$Email}','{$Password}','{$filename}','{$role}')";
                mysqli_query($conn, $query);

                header("location:user.php");    
            }
            

    }



    ?>

    <?php include "footer.php" ?>