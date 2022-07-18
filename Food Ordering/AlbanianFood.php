<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
<div class="container-fluid">
<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="white" class="bi bi-bricks" viewBox="0 0 16 16">
  <path d="M0 .5A.5.5 0 0 1 .5 0h15a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H14v2h1.5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H14v2h1.5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5H2v-2H.5a.5.5 0 0 1-.5-.5v-3A.5.5 0 0 1 .5 6H2V4H.5a.5.5 0 0 1-.5-.5v-3zM3 4v2h4.5V4H3zm5.5 0v2H13V4H8.5zM3 10v2h4.5v-2H3zm5.5 0v2H13v-2H8.5zM1 1v2h3.5V1H1zm4.5 0v2h5V1h-5zm6 0v2H15V1h-3.5zM1 7v2h3.5V7H1zm4.5 0v2h5V7h-5zm6 0v2H15V7h-3.5zM1 13v2h3.5v-2H1zm4.5 0v2h5v-2h-5zm6 0v2H15v-2h-3.5z"/>
</svg>
    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
   
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item text-light">
          <a class="nav-link active text-light" aria-current="page" href="index1.php">Home</a>
        </li>
        <li class="nav-item text-light">
          <a class="nav-link text-light" href="employes.php">Punëtorët</a>
        </li>
        <li class="nav-item text-light">
          <a class="nav-link text-light" href="employes.php">Porosit</a>
        </li>
        <li class=" nav-item text-light">
			<a class="nav-link text-light" href="signout.php"> Sign out</a>
		</li>
      </ul>
      
    </div>
  </div>
</nav>
</nav>
<?php
    require 'config.php';



$sql = "SELECT * from albanianf";

	$prep = $con->prepare($sql);

	$prep->execute();
	$datas = $prep->fetchAll();
    ?>
<?php require 'head.php';?>

	
			<main role="main" class="col-8 col-md-9 ml-sm-9 col-lg-7 px-4 ">
			<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-it-center pd-2 mb-3 border-bottom">
				<h1 class="h2">Albanian Food Menu</h1>
				<div>
					<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#employeModal">Add Food</button>
					<div class="modal" id="employeModal">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-center">
									<div class="modal-header">
										<h5>Add Employe</h5>
										<button type="button" class="btn btn-close" data-bs-dismiss="modal"></button>
									</div>
									<div class="modal-body">
										<form action="addFood.php" method="POST">
											<div class="input-group mb-3">
  												<input type="text" class="form-control" name="emriUshqimit" placeholder="Emri Ushqimit"  aria-describedby="basic-addon1">
											</div>
											<div class="input-group mb-3">
  												<input type="text" class="form-control" name="permbajtja" placeholder="Permbajtja"  aria-describedby="basic-addon1">
											</div>
											<div class="input-group mb-3">
  												<input type="text" class="form-control" name="cmimi" placeholder="Çmimi"  aria-describedby="basic-addon1">
											</div>
											<br>
                                            <button type="submt" name="submit" class="btn btn-success">Submit</button>
										</form>
										<div class="modal-footer">
										<button type="submt" name="submit" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
										</div>
									</div>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</main>
		<div style="display:flex; flex-direction:row; justify-content: space-between; flex-wrap: wrap; padding:10px;">
			<?php foreach($datas as $data): ?>
    			<div style="height:170px;
							width:300px;
							Border: solid black 1px;
							Border-radius:20px;
							padding:5px;
							background-color:lightblue;
							margin-left:5px;
							margin-bottom:10px;">        
      				<h3><?php echo $data['emriUshqimit']; ?></h3> 
      				<p><?php echo $data['permbajtja']; ?></p>
      				<span><?php echo $data['cmimi']; ?>€</span>
      				<button type="submit" name="submit" class="btn btn-success">Porosit</button>
    			</div>
			<?php endforeach; ?>
		</div>
	</body>	

<?php require 'footer.php';?>
</body>