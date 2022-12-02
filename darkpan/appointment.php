
<?php ob_start() ?>
    <?php include "sidebar.php" ?>
    <?php include "header.php" ?>

<?php


include "config.php";

$query = "SELECT * FROM `appointment` ";

$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0)

{


?>





            <!-- Table Start -->
            
                    
                   
                    <div class="col-sm-12 ">
                        <div class="container ">
                            <h6 class="mb-4">Appointments</h6>
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th> 
                                        <th scope="col"></th>  
                                        <th scope="col"></th>
                                        <th>Edit</th>
                                        <th>Delete</th>

                                    </tr>
                                </thead>
                                <tbody>


                                <?php while($row = mysqli_fetch_assoc($result)) 
                        
                                    {
                                ?>
                     
                                    <tr>
                                    <td class='id'><?php echo $row[""];  ?></td>
                                    <td><?php echo $row[""];  ?></td>
                                    <td><?php echo $row[""];  ?></td>
                                    <td><?php echo $row[""]; ?></td>
                                    <td><?php echo $row[""]; ?></td>
                                    
                            
                                   


                                    <td class='edit'><a href='update-user.php?id=<?php echo $row["AD"]; ?>'><i class='fa fa-edit'></i></a></td>
                                    <td class='delete'><a href='delete-user.php?id=<?php echo $row["AD"]; ?>'><i class='fa fa-trash'></i></a></td>
                                    </tr>
                                    <?php } ?>
                                     </tbody>
                            </table>
                        </div>
                    </div>
                    <?php } ?>
                    </div>
                    
                  
                </div>
           
            <!-- Table End -->

    <?php include "footer.php" ?>