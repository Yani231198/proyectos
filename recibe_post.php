<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Datos post</title>
    <?php require_once "menu.php";
    $moneda="$";
    ?>
</head>
<body>
<br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-6 p-5 bg-white shadow-lg rounded">
            <from>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Costo</th>
      <th scope="col">Precio</th>
      <th scope="col">Stock</th>
      <th scope="col">Stock Minimo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $_POST['Nombre']?></td>
      <td><?php echo $moneda.''. $_POST['Costo']?></td>
      <td><?php echo $moneda.''.$_POST['Precio']?></td>
      <td><?php echo $_POST['Stock']?></td>
      <td><?php echo $_POST['StockMinimo']?></td>
    </tr>
    
  </tbody>
</table>
            </from>
        </div>
    </div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>