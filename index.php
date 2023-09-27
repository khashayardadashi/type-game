<!doctype html>
<html lang="fa" dir="rtl">
<head>
<?php  
      if(isset($_POST['btn'])){
        $username=$_POST['inputName'];
        $score=$_POST['inputTime'];
        $mysql=mysqli_connect('localhost:3306','root','','php');
        $function=mysqli_prepare($mysql,"INSERT INTO GAME (username , score) VALUES (?,?)");
        $type='ss';
        mysqli_stmt_bind_param($function,$type, $username,$score);
        mysqli_stmt_execute($function);
        }
?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>type</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-PJsj/BTMqILvmcej7ulplguok8ag4xFTPryRq8xevL7eBYSmpXKcbNVuy+P0RMgq" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="bg-light">
    <div class="container">
        <div class="row  d-flex  justify-content-center mt-3">
            <div class="card border-primary border-2 mb-3 shadow " style="max-width: 80vw;">
                <div class="card-header bg-transparent border-2 border-primary text-center text-danger my-2">
                    <span id="s10">00</span> :
                    <span id="s">00</span> :
                    <span id="m">00</span>
                </div>
                <div class="card-body">
                    <p class="mb-3 text-muted text-center " id="text"></p>
                    <input class="form-control f-i" type="text" id="input">
                </div>
                <div class="card-footer bg-transparent border-2 border-primary my-2">
                    <button type="button" class="btn btn-success mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal" id="btn" style="width: 100%">پایان</button>
                    <button type="button" class=" btn btn-warning mt-3" onclick="res()" style="width: 100%;">دوباره</button>
                </div>
            </div>
        </div>
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">ارسال رکورد</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="#">
        <input class="form-control" type="text" name="inputName" placeholder="نام خود را وارد کنید" aria-label=".form-control-sm example">
        <input class="form-control mt-2" type="text" name="inputTime"  id ="input-1" aria-label=".form-control-sm example" readonly>
        <button name="btn" type="submit" class="btn btn-success mt-4" style="width:100%">ارسال</button>
        </form>
      </div>
    </div>
  </div>
</div>
        <div class="row justify-content-center my-2">
            <div class="card border-primary border-2 mb-3 shadow" style="max-width: 80vw;">
                <div class="card-header bg-transparent border-2 border-primary text-center text-danger my-2">
                    <span>قوانین بازی</span>
                </div>
                <div class="card-body">
                    <div class="alert alert-primary" role="alert">
                        با وارد کردن کلمه در کادر تایم شروع می شود
                      </div>
                      <div class="alert alert-primary" role="alert">
                        متن بالا کادر را در کادر مشحص شده تایپ کنید
                      </div>
                      <div class="alert alert-primary" role="alert">
                        متن با خط فاصله هایش وارد کادر شود
                      </div>
                      <div class="alert alert-primary" role="alert">
                        پس از اتمام تایپ بر روی دکمه پایان کلیک کنید
                      </div>
                      <div class="alert alert-danger" role="alert">
                        اسم وارد شده در قسمت رکورد باید حقیقی باشد
                      </div>
                </div>
            </div>
        <div class="row justify-content-center my-2">
            <div class="card border-primary border-2 mb-3 shadow" style="max-width: 80vw;">
                <div class="card-header bg-transparent border-2 border-primary text-center text-danger my-2">
                    <span>نفرات برتر</span>
                </div>
                <div class="card-body">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">رتبه</th>
      <th scope="col">اسم</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>
    </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td> 

      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>

      </td>
    </tr>
  </tbody>
</table> 
<div class="d-flex align-items-center">
<div class="spinner-border text-primary" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
  <span class="ms-3 text-primary sp">آپدیت تا یک ساعت آینده</span>
</div>

                </div>
            </div>
    </div>
    <footer class="py-2">
        <div class="container d-flex justify-content-center">
              <i class="bi bi-telegram fs-3 me-2"></i>
              <i class="bi bi-instagram fs-3"></i>
        </div>
        <div class="container d-flex justify-content-center">
          <p class="text-dark" style="font-size: 0.8rem;">تمام حقوق مربوط به خشایار داداشی است</p>
        </div>
        <div class="container d-flex justify-content-center">
    </footer>
</body>
<script src="./app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>