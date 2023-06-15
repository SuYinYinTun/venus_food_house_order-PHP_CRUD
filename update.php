<?php   include_once("./template/headera.php"); ?>
<?php   include_once("./template/connection.php"); ?>
<?php
    $id = htmlentities($_GET['userId']);
    $sql = "SELECT * FROM ordering WHERE id = ?";
    //$query = mysqli_query($connection, $sql);
    $stmt = $connection->prepare($sql); 
    $stmt->bind_param('s', $id);
    $stmt->execute();

    $result  = $stmt->get_result();



    $data = mysqli_fetch_assoc($result);
    //var_dump ($data);
?>

<section class="py-5 ood mb-5">

<div class="container-fluid">
<br/><br/>
        <div class="row text-center">
					<div class="col">
						<span class="fw-bold works2 mb-5">Update</span>
					</div>
		</div>

        <div class="row">
            <div class="col-8 offset-2">
                <div class="mt-3">
               
                    
                    <h3 class="text-dark display-4 mb-2 text-center">Update Your Menu</h3>
                       
                        <form action="" method="post" class="mt-0">
                            <input type="hidden" name="userId" value="<?= $data['id'] ?>">

                            <div class="form-group oo">
				   				<input type="text" name="userName" id="name" class="form-control inputs mb-4 inputs" value="<?= $data['name'] ?>" placeholder="Enter Your Name" autocomplete="off">
				   			</div>
				   			
				   			<div class="form-group oo">
				   				<input type="text" name="userMenu" id="menu" class="form-control inputs mb-4 inputs" value="<?= $data['menu'] ?>" placeholder="Enter Your Menu" autocomplete="off">
				   			</div>

				   			<div class="form-group oo">
				   				<input type="address" name="userAddress" id="address" class="form-control inputs mb-4 inputs" value="<?= $data['address'] ?>" placeholder="Enter Your Address" autocomplete="off">
				   			</div>

				   			<div class="form-group oo">
				   				<input type="text" name="userPhone" id="phone" class="form-control inputs mb-4 inputs" value="<?= $data['phone'] ?>" placeholder="Enter Your Phone Number" autocomplete="off">
				   			</div>

                               
                           <div class="bb"> 
                           <button type="reset" class="btn text-uppercase rounded-0 fw-bold reset-btn">Cancel</button>
                           <button type="submit" name="updateBtn" class="btn text-uppercase rounded-0 fw-bold submit-btn">Update</button></div>
                        
                        </form>
                    
                </div>
            </div>
        </div>
    </div>

</section>

    <?php
       if(isset($_POST["updateBtn"])){
        $id = htmlentities($_POST['userId']);
        $name = htmlentities($_POST['userName']);
        $menu = htmlentities($_POST['userMenu']);
        $address= htmlentities($_POST['userAddress']);
        $phone = htmlentities($_POST['userPhone']);


        $updateSql = "UPDATE ordering SET name=?, menu=?, address=?, phone=? WHERE id=$id";
        $stmt = $connection->prepare($updateSql);
        $stmt->bind_param('ssss',$name,$menu,$address,$phone);
        $stmt->execute();

        // if($stmt){
        //     header("location: ./read.php");
        // }else{
        //     echo "Update error" . mysqli_error();
        // }


        
        if($stmt == true) {
            echo "<div class='alert alert-success'>Complete your update..<br/>You can go to the read page for show your update..</div>";
            
        }else {
            echo "SQL query fail." ;//. mysqli_error();
        }

       }
    ?>


<?php   include_once("./template/footer.php"); ?>