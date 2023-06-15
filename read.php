<?php   include_once('./template/headera.php'); ?>
<?php   include_once("./template/connection.php"); ?>

<section class="py-5 ood read1 ">
<div class="container-fluid ">
<br/><br/><br/>
				<div class="row text-center">
					<div class="col">
						<span class="fw-bold works2 mb-5">Read</span>
					</div>
				</div>
<div class="container mt-3">
    <div class="row">
        <div class="col-10 offset-1">
            <div class="card">
                <div class="card-body">
                    <table class="table  table-bordered col-12">
                        <tr class="table-warning">
                            <th>Id</th>
                            <th>Name</th>
                            <th>Menu</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Created_at</th>
                            <th>Updated & Delete</th>
                        </tr>
                     
                        <?php
                            $sql = "SELECT * FROM ordering";
                            $query = mysqli_query($connection, $sql);
                            $total = mysqli_num_rows($query);
                            while($row = mysqli_fetch_assoc($query)){
                                $time = date("d-M-Y(D)",strtotime($row['created_at']));
                                echo "
                                <tr>
                                    <td>{$row['id']}</td>
                                    <td>{$row['name']}</td>
                                    <td>{$row['menu']}</td>
                                    <td>{$row['address']}</td>
                                    <td>{$row['phone']}</td>
                                    <td>$time</td>
                                    <td>
                                        <a href='./update.php?userId={$row['id']}' class='btn btn-warning'>Update</a>
                                        <a href='./delete.php?userId={$row['id']}' class='btn btn-danger'>Delete</a>
                                    </td>
                                </tr>
                                ";
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
                        </div>
</section>

<?php include_once('./template/footer.php') ?>