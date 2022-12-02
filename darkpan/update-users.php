

<?php ob_start() ?>
    <?php include "sidebar.php" ?>
    <?php include "header.php" ?>



<?php 

include "config.php";

$ID = $_GET["id"];


$query  = "SELECT * FROM `user` WHERE `ID` = '{$ID}'";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result))
{

$row  = mysqli_fetch_assoc($result);



?>






    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 ">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">ADD DOCTOR FORM </h6>
                    <form action="" method="POST" autocomplete="off">
                    <div class="mb-3">
                           
                            <input type="hidden" name="id" class="form-control"  value="<?php echo $row["ID"]; ?>"  aria-describedby="emailHelp" >
                           
                                  
                        </div>
                    <div class="mb-3">
                            <label for="text" class="form-label"> Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $row["NAME"]; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                    </div> -->
                        </div>
                        
                        <div class="mb-3">
                            <label for="text" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" value="<?php echo $row["EMAIL"]; ?>" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Password</label>
                            <input type="text" name="pass" class="form-control" value="<?php echo $row["PASSWORD"]; ?>" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Choose Profile</label>
                            <input class="form-control bg-dark" name="fileToUpload" type="file" id="formFile">
                        </div>
                        <div class="mb-3">
                        <label> Role</label>
                        <select class="form-control" name="role" value="<?php echo $row['role']; ?>">
                              
                              <option value="admin">Admin</option>
                             
                              <option value="employe">employe</option>
                          </select>

                        <button type="submit" name="save" class="btn btn-primary" value="Save">Update</button>
                    </form>
                </div>
            </div>




        </div>
    </div>

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
                        $u_id = $_POST["id"];
                        $u_name = $_POST["name"];
                        $email = $_POST["email"];
                        $password= $_POST["pass"];
                        // $profile = $_POST["profile"];
                    
                        $u_role = $_POST["role"];



                        echo $query1 = "UPDATE `user` SET `NAME`='{$u_name}',`EMAIL`='{$email}',
                        `PASSWORD`='{$password}',`IMAGE`='{$filename},`ROLE`='{$u_role}' WHERE ID = {$u_id} ";

                        mysqli_query($conn,$query1);

                        header("Location:user.php");

                    }
                


                ?>
                        </div>

                        
  <?php  } ?>
<?php include "footer.php"; ?>
 
</body>
</html>