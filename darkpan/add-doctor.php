    <?php ob_start() ?>
    <?php include "sidebar.php" ?>
    <?php include "header.php" ?>
<br> 
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 ">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">ADD DOCTOR FORM </h6>
                    <form action="" method="POST" autocomplete="off">
                        <div class="mb-3">
                            <label for="text" class="form-label">Doctor Name</label>
                            <input type="text" name="d-name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                    </div> -->
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Choose Profile</label>
                            <input class="form-control bg-dark" type="file" id="formFile">
                        </div>
                        <div class="mb-3">
                        <label>Specialization</label>
                            <select class="form-control" name="role" value="<?php echo $row['splst']; ?>">
                              
                              <option value="Orthopedic">Orthopedic</option>
                              <option value="Physiotherapy">Physiotherapy</option>
                              <option value="Sonogram">Sonogram</option>
                              <option value="Physiotherapy">Physiotherapy</option>
                              <option value="X-Ray">X-Ray</option>
                              <option value="Diagnostic">Diagnostic</option>
                              <option value="Orthodontics">Orthodontics</option>
                              <option value="Pathalogist">Pathalogist</option>
                              <option value="Gynecologist">Gynecologist</option>
                          </select>
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">City</label>
                            <select class="form-control" name="role" value="<?php echo $row['city']; ?>">
                              
                              <option value="Karachi">Karachi</option>
                              <option value="Islamabad">Islamabad</option>
                              <option value="Lahore">Lahore</option>
                             
                          
                          </select>
                        </div>
                        <div class="mb-3">
                            <label for="datetime" class="form-label">Timing</label>
                            <input type="datetime-local" name="timing" class="form-control" id="datetime">

 
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Days</label>
                            <select class="form-control" name="role" value="<?php echo $row['days']; ?>">
                              
                              <option value="monday">Monday</option>
                              <option value="tuesday">Tuesday</option>
                              <option value="wednesday">Wednesday</option>
                              <option value="thursday">Thursday</option>
                              <option value="friday">Friday</option>
                              <option value="saturday">Saturday</option>
                              <option value="sunday">Sunday</option>
                             
                          
                          </select>
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Address</label>
                            <input type="text" name="address" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label> Role</label>
                            <select class="form-control" name="role" value="<?php echo $row['role']; ?>">
                              
                              <option value="admin">Admin</option>
                              <option value="doctor">Doctor</option>
                              <option value="employe">employe</option>
                          </select>

                        </div>

                        <button type="submit" name="save" class="btn btn-primary" value="Save">ADD DOCTOR</button>
                    </form>
                </div>
            </div>




        </div>
    </div>
    <!-- Form End -->


    <?php

    if(isset($_POST["save"]))

    {
        $doc_name = $_POST["d-name"];
        // $profile = $_POST["profile"];
        $doc_splst = $_POST["splst"];
        $doc_city = $_POST["city"];
        $doc_timing = $_POST["timing"];
        $doc_a_days = $_POST["a-days"];
        $doc_address = $_POST["address"];
        $doc_role = $_POST["role"];
    
 
    
        include "config.php";
    
        $query1 = "SELECT * FROM `doctor` where 'D-NAME' = '{$doc_name}'  ";
        $result = mysqli_query($conn, $query1);
        
            if (mysqli_num_rows($result) > 0) 
            {
                echo "doctor alredy exist";
            }
            else
            {
              
             $query = "INSERT INTO `doctor`(`D-NAME`, `PROFILE`, `SPLST`, `CITY`, `TIMING`, `A-DAYS`, `ADDRESS`, `ROLE`) 
             VALUES ('{$doc_name}','image','{$doc_splst}','{$doc_city}','{$doc_timing}','{$doc_a_days}','{$doc_address}','{$doc_role}')";
                mysqli_query($conn, $query);

                header("location:doctor.php");
            }
            

    }



    ?>

    <?php include "footer.php" ?>