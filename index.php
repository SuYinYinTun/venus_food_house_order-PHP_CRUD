<?php   include_once("./template/headera.php") ?>

<?php   include_once("./template/connection.php")?>




<!-- Start Order Section -->
<section class="py-5 ood">
	<br/><br/><br/>
			<div class="container-fluid">
				<div class="row text-center">
					<div class="col">
						<span class="fw-bold works2 mb-5">Order</span>
						<p class="mt-3 fw-bold lead">Here you can order the food you like.....</p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-5 col-sm-12 mx-0 bg2 ">
						<img src="./image/k3.png" class="bg1" />	
					</div>

					<div class="col-md-5 col-sm-12 mx-auto bg3">
				   		<h3 class="text-dark display-4 mb-4">Order Your Menu</h3>

				   		<form action="" method="post">

				   			<div class="form-group oo">
				   				<input type="text" name="userName" id="name" class="form-control inputs mb-4 inputs" placeholder="Enter Your Name" autocomplete="off">
				   			</div>
				   			
				   			<div class="form-group oo">
				   				<input type="text" name="userMenu" id="menu" class="form-control inputs mb-4 inputs" placeholder="Enter Your Menu" autocomplete="off">
				   			</div>

				   			<div class="form-group oo">
				   				<input type="address" name="userAddress" id="address" class="form-control inputs mb-4 inputs" placeholder="Enter Your Address" autocomplete="off">
				   			</div>

				   			<div class="form-group oo">
				   				<input type="text" name="userPhone" id="phone" class="form-control inputs mb-4 inputs" placeholder="Enter Your Phone Number" autocomplete="off">
				   			</div>

				   			<div class="bb mb-3">
				   				<button type="reset" class="btn text-uppercase rounded-0 fw-bold reset-btn">Cancel</button>
				   				<input type="submit" name="createBTN" value="Order Now >" class="btn text-uppercase rounded-0 fw-bold submit-btn">
				   			</div>
				   		</form>
				   	</div>
					
				</div>	
			</div>
			
		</section>


      
        <?php

        if(isset($_POST['createBTN'])){
            $name = htmlentities($_POST["userName"]);
            $menu = htmlentities($_POST["userMenu"]);
            $address = htmlentities($_POST["userAddress"]);
            $phone = htmlentities($_POST["userPhone"]);
    
            // $sql = "INSERT INTO user(name, phone) VALUES('$name', '$phone')";
            // $query = mysqli_query($connection, $sql);
            
            if($name == "" || $name == null || $menu == "" || $menu == null|| $address == "" || $address == null || $phone == "" || $phone == null){
                echo "<div class='alert alert-danger'>You need to fill the form.</div>";
            }else {
                $sql = "INSERT INTO ordering(name, menu, address, phone) VALUES(?,?,?,?)";
                // $query = mysqli_query($connection, $sql);
                $stmt = $connection->prepare($sql);
                $stmt->bind_param('ssss', $name, $menu, $address, $phone);
                $stmt->execute();
    
                if($stmt == true){
                    echo "<div class='alert alert-success'>Complete your ordering..</div>";
                }else {
                    echo "SQL query fail."; //. mysqli_error();
				}
            }
        }
		?>


		<?php   include_once("./template/footer.php") ?>