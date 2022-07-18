<?php
    include 'head.php';
    include_once 'config.php';

    $sql = "SELECT * from images";

	$prep = $con->prepare($sql);

	$prep->execute();
	$datas = $prep->fetchAll();

    //$result = $db->query("SELECT `image` FROM images ORDER BY id DESC");
?>

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
        
      </ul>
      
    </div>
  </div>
</nav>
</nav>
    
    <div class="row">
    
        <div  class="col" Style=" Border-left: solid black 1px; background-color: lightblue;">
            <ul class="list-group" style="list-style:none; background-color: lightblue;">
                <li><h3 class="list-group-item" style="border: none; background-color: lightblue;">Food Types</h3></li>
                <li><a href="AlbanianFood.php" class="list-group-item" style="border: none; background-color: lightblue;">Albanian Food</a></li>
                <li><a href="#" class="list-group-item" style="border: none; background-color: lightblue;">Italian Food</a></li>
                <li><a href="#" class="list-group-item" style="border: none; background-color: lightblue;">Chinese Food</a></li>
                <li><a href="#" class="list-group-item" style="border: none; background-color: lightblue;">Mexican Food</a></li>
                <li><a href="#" class="list-group-item" style="border: none; background-color: lightblue;">......</a></li>
                <li><a href="#" class="list-group-item" style="border: none; background-color: lightblue;">......</a></li>
                <li><a href="#" class="list-group-item" style="border: none; background-color: lightblue;">......</a></li>
                <li><a href="#" class="list-group-item" style="border: none; background-color: lightblue;">......</a></li>
                <li><a href="#" class="list-group-item" style="border: none; background-color: lightblue;">......</a></li> 
                
            </ul>
        </div>
        <div class="col text-center">
          <div class="contanier">
            <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#myModal" >Add photo
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-image" viewBox="0 0 16 16">
              <path d="M6.502 7a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
              <path d="M14 14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5V14zM4 1a1 1 0 0 0-1 1v10l2.224-2.224a.5.5 0 0 1 .61-.075L8 11l2.157-3.02a.5.5 0 0 1 .76-.063L13 10V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4z"/>
              </svg>
            </button>
          </div>
          <div class="modal" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header" >
                  <h5>Add Photo</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                  <form action="UpImgLogic.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="foto" class="form-label">Add Photo</label>
                      <input type="file" class="form-control" name="image"  id="formFile"><br>
                      <button class="btn btn-success" type="submit" name="submit">Submit</button>  
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                </div>
              </div>
            </div>
          </div>
          <?php foreach($datas as $data): ?>
            <p Style="display:none;"><?php echo $data['id']; ?></p>
          <img Style="Margin-top:40px; Border: solid black 1px; padding:10px;"  src="upload/<?php echo $data['image']; ?>" width="500px" height="350px"  > 
          <?php endforeach; ?>
        </div>
        <div class="col text-start" style="background-color: lightblue;">
            
            <ul class="list-group" style="list-style:none">
                <li>
                  <a href="" class="list-group-item" style="border: none;
                   background-color: lightblue;
                   font-weight:bold;
                   font-size: 20px  ">
                  Profili
                </a>
                </li>
                <a href="signout.php" class="list-group-item" style="border: none;
                   background-color: lightblue;">
                  Sing out
                </a>
                </li>
            </ul>
        </div>
    </div>
</body>

<?php include 'footer.php'; ?>