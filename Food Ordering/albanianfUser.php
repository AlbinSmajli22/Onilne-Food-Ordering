<?php
    require 'config.php';



$sql = "SELECT * from albanianf";

	$prep = $con->prepare($sql);

	$prep->execute();
	$datas = $prep->fetchAll();
    ?>
<?php require 'head.php';?>
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
          <a class="nav-link active text-light" aria-current="page" href="index3.php">Home</a>
        </li>
       
      </ul>
      
    </div>
  </div>
</nav>
</nav>


<div style="display:flex; 
			flex-direction:row; 
			justify-content: space-between; 
			flex-wrap: wrap; padding:10px;">

			<?php foreach($datas as $data): ?>

    			<div style="height:170px;
							width:300px;
							Border: solid black 1px;
							Border-radius:20px;
							padding:5px;
							background-color:lightblue;
							margin-left:5px;
							margin-bottom:10px;">
							       
      				<h3 >
						  <?php echo $data['emriUshqimit']; ?>-
					</h3> 
      				<p >
						  <?php echo $data['permbajtja']; ?>-
					</p>
      				<span>
						  <?php echo $data['cmimi']; ?>€
					</span><br>	
      				<button  type="submit" name="submit" class="btn btn-success">Porosit</button>
					  		
				</div>

			<?php endforeach; ?>

		</div>

<?php require 'footer.php';?>
</body>