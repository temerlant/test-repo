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
     <h1 class="display-4 font-weight-normal ">Страница отзывов!!!</h1>
   </div>

<div class="container">
  <div class="d-flex flex-column">
    <?php
    $mysql = new mysqli('localhost', 'root', 'root', 'test');
    $more = 5;
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $result = mysqli_query($mysql, "SELECT * FROM `retest` ORDER BY `retest`.`id` DESC LIMIT $more");
    while($row = mysqli_fetch_assoc($result))
    {  $i++; ?>
        <div class="col bg-y  border-primary border-2">
          <div class="card mt-2 mb-2 p-2  border-dark border-2">
            <img src="123.png" alt="" height="10%" width="10%"> <label class="m-2">Пользователь: <?php echo ($row['userid']) ?></label>
            <div class="card-body bg-dark">
            <p style="background-color: Transparent;  background-repeat:no-repeat;  border: none;  cursor:pointer;  overflow: hidden;  color: white;text-transform: capitalize;">  Текст:  <?php echo ($row['text']); ?>  </p>
            <p style="background-color: Transparent;  background-repeat:no-repeat;  border: none;  cursor:pointer;  overflow: hidden;  color: white;text-transform: capitalize; float:right">  Дата публикации:  <?php echo ($row['date']); ?>  </p>

            </div>  </div> </div>

        <?php  }   $mysql->close();     ?>

       </div> </div>
 <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">  </footer>


 <div class="col-md-4 p-lg-5 mx-auto ">
   <h1 class="display-5 font-weight-normal ">Добавьте свой отзыв!!!</h1>
 </div>
 <div class="container">
<div class="d-flex flex-column">
<div class="col bg-y  border-primary border-2">
  <div class="card mt-2 mb-2 p-2  border-dark border-2 ">
    <img src="123.png" alt="" height="10%" width="10%"> <label class="m-2">Пользователь: <?php print_r($_COOKIE['user'])?></label>
    <div class="card-body bg-dark">

        <p style="background-color: Transparent;  background-repeat:no-repeat;  border: none;  cursor:pointer;  overflow: hidden;  color: white;text-transform: capitalize;">Введите текст: </p>


        <form class="" action="check/retest.php" method="post">
        <div class="mt-4 ">
        <div class="form-floating">
          <input type="text" class="form-control" name="textUs"  placeholder="" ><br>
        </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Отправить</button>
          </form>

    </div> </div> </div> </div> </div>
</body>


 <?php
 //FOOTER//
  require "block/footer.php"
 //------//
  ?>


</html>
