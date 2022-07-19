<!DOCTYPE html>
<html>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link href="css/main.css" rel="stylesheet">
 <head>
   <title>WEB_HTML</title>
   <meta charset="utf-8">
 </head>


 <?php
//HEADER//
  require "block/header.php"
//------//
   ?>

   <div class="col-md-4 p-lg-5 mx-auto my-5">
     <h1 class="display-4 font-weight-normal ">Ваши отзывов!!!</h1>
   </div>

<div class="container">
  <div class="d-flex flex-column">
    <?php
    $mysql = new mysqli('localhost', 'root', 'root', 'test');
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $us = $_POST['idotzv'];
    $result = mysqli_query($mysql, "SELECT * FROM `retest` WHERE `id` = $us");
    while($row = mysqli_fetch_assoc($result))
    {  $i++; ?>

  <form class="" action="../check/updateOtzv.php" method="post">
        <div class="col bg-y  border-primary border-2">
          <div class="card mt-2 mb-2 p-2  border-dark border-2">
            <img src="123.png" alt="" height="10%" width="10%"> <label class="m-2">Пользователь: <?php echo ($row['userid']) ?></label>
            <div class="card-body bg-dark">
            <input type="text" name="texttext" value=" <?php echo ($row['text']); ?>">   </p>
            <p style="background-color: Transparent;  background-repeat:no-repeat;  border: none;  cursor:pointer;  overflow: hidden;  color: white;text-transform: capitalize; float:right">  Дата публикации:  <?php echo ($row['date']); ?>  </p>


              <div class="form-floating">
                <INPUT TYPE="hidden" name="idotzv" class="form-control" VALUE="<?php echo ($row['id']); ?>" placeholder=""  style="padding: inherit" >
                    <button class="btn btn-outline-light me-2" "submit">Edit</button>

              </div>
              </form>

              <form class="" action="../check/delete.php" method="post">
                    <INPUT TYPE="hidden" name="idotzv" class="form-control" VALUE="<?php echo ($row['id']); ?>" placeholder=""  style="padding: inherit" >
                <button class="btn btn-outline-light me-2" "submit">Удалить</button>
              </form>
            </div>  </div> </div>

        <?php  }   $mysql->close();     ?>

       </div> </div>
</body>


 <?php
 //FOOTER//
  require "block/footer.php"
 //------//
  ?>


</html>
