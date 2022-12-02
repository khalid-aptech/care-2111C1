

<?php ob_start() ?>
    <?php include "sidebar.php" ?>
    <?php include "header.php" ?>   


<?php


include "config.php";

$query = "SELECT * FROM `doctor` where `role` = 'doctor' ";

$result = mysqli_query($conn,$query);
                                            
if(mysqli_num_rows($result)>0)

{


?>



            <!-- Table Start -->
                <br> <br>
                    
                   
                    <div class="col-sm-12 ">
                        <div class="container ">
                            <h6 class="mb-4">DOCTOR DATA</h6>
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Doctor Name</th>
                                        <th scope="col">Profile</th>
                                        <th scope="col">Specialization</th>
                                        <th scope="col">City</th>
                                        <th scope="col">Timing</th>
                                        <th scope="col">Days</th>
                                        <th scope="col">Address</th>
                                       
                             
                                        <th>Edit</th>
                                        <th>Delete</th>

                                    </tr>
                                </thead>
                                <tbody>


                                <?php while($row = mysqli_fetch_assoc($result)) 
                        
                                    {
                                ?>
                     
                                    <tr>
                                    <td class='id'><?php echo $row["DID"];  ?></td>
                                    <td><?php echo $row["D-NAME"];  ?></td>
                                    <td><?php echo $row["PROFILE"];  ?></td>
                                    <td><?php echo $row["SPLST"]; ?></td>
                                    <td><?php echo $row["CITY"]; ?></td>
                                    <td><?php echo $row["TIMING"]; ?></td>
                                    <td><?php echo $row["A-DAYS"]; ?></td>
                                    <td><?php echo $row["ADDRESS"]; ?></td>
                                    
                         


                                    <td class='edit'><a href='update-doctor.php?id=<?php echo $row["DID"]; ?>'><i class='fa fa-edit'></i></a></td>
                                    <td class='delete'><a href='delete-doctor.php?id=<?php echo $row["DID"]; ?>'><i class='fa fa-trash'></i></a></td>
                                    </tr>
                                    <?php } ?>
                                     </tbody>
                            </table>
                        </div>
                    </div>
                    <?php } 
                   
                    
                    ?>
                    </div>
                    
                  
                </div>
                
           
            <!-- Table End -->

    <?php include "footer.php" ?>