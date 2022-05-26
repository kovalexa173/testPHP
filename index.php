<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>...</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>

<form class="row g-3"  method="POST">
  <div class="col-12">
    <label for="inputName" class="form-label">Имя</label>
    <input type="text" name="name" class="form-control" id="inputName"  placeholder="Иван">
  </div>
  <div class="col-12">
    <label for="inputSurname" class="form-label">Фамилия</label>
    <input type="text" name="surname" class="form-control" id="inputSurname"  placeholder="Иванов">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Отправить</button>
  </div>
</form>

<h1>
<?php
    if ($_POST["name"] != '' && $_POST["surname"] != '' && isset($_POST["name"]) && isset($_POST["surname"])) {
        echo "Привет " . $_POST['name'] ." ". $_POST['surname'];
    }
?>
 </h1>

 <?php
    if ($_POST["name"] != '' && $_POST["surname"] != '' && isset($_POST["name"]) && isset($_POST["surname"])) {
		$host = 'localhost';
		$user = 'root';
		$password = '';
		$db_name = 'users';

		$link = mysqli_connect($host, $user, $password, $db_name);
    if (!$link) {
      die("Ошибка :" . mysqli_connect_error());
    }
    $name = mysqli_real_escape_string($link, $_POST["name"]);
    $surname = mysqli_real_escape_string($link, $_POST["surname"]);
    $sql = "INSERT INTO users (NAME, SURNAME) VALUES ('$name', '$surname')";
      if(mysqli_query($link, $sql)){
        echo "Данные успешно добавлены";
    } else{
        echo "Ошибка: " . mysqli_error($link);
    }
    mysqli_close($link);
    
    }
?>
</body>
</html>
