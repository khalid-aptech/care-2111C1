
<?php ob_start() ?>
    <?php include "sidebar.php" ?>
    <?php include "header.php" ?>


<?php 

include "config.php";

$DID = $_GET["id"];


$query  = "SELECT * FROM `doctor` WHERE `DID` = '{$DID}'";

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
                            <label for="text" class="form-label">Doctor Name</label>
                            <input type="hidden" name="d-id" class="form-control"  value="<?php echo $row["DID"]; ?>"  aria-describedby="emailHelp" >
                            <input type="text" name="d-name" class="form-control"  value="<?php echo $row["D-NAME"]; ?>"  aria-describedby="emailHelp" >
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                    </div> -->
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Choose Profile</label>
                            <input class="form-control bg-dark" type="file" id="formFile">
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Specializtion</label>
                            <input type="text" name="splst" class="form-control" value="<?php echo $row["SPLST"]; ?>" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">City</label>
                            <input type="text" name="city" class="form-control" value="<?php echo $row["CITY"]; ?>" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Timing</label>
                            <input type="text" name="timing" class="form-control" value="<?php echo $row["TIMING"]; ?>" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Days</label>
                            <input type="text" name="a-days" class="form-control" value="<?php echo $row["A-DAYS"]; ?>" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Address</label>
                            <input type="text" name="address" class="form-control" value="<?php echo $row["ADDRESS"]; ?>" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                      
                        
                        <button type="submit" name="save" class="btn btn-primary" value="Save">Update</button>
                    </form>
                </div>
            </div>




        </div>
    </div>

    <?php

                    if(isset($_POST["save"]))
                    {
                        $doc_name = $_POST["d-name"];
                        $doc_id = $_POST["d-id"];
                        // $profile = $_POST["profile"];
                        $doc_splst = $_POST["splst"];
                        $doc_city = $_POST["city"];
                        $doc_timing = $_POST["timing"];
                        $doc_a_days = $_POST["a-days"];
                        $doc_address = $_POST["address"];
                        $doc_role = $_POST["role"];



                        echo $query1 = "UPDATE `doctor` SET `D-NAME`='{$doc_name }',`SPLST`='{$doc_splst}',
                        `CITY`='{$doc_city}',`TIMING`='{$doc_timing}',`A-DAYS`='{$doc_a_days}',`ADDRESS`='{$doc_address}',`ROLE`='{$doc_role}' Where `DID` = '{$doc_id}'  ";

                        mysqli_query($conn,$query1);

                        header("location:doctor.php");

                    }
                


                ?>
                        </div>

                        
  <?php  } ?>

  
<?php include "footer.php"; ?>
 
</body>
</html>