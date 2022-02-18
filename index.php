<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>PROYECTOS</title>

    
  </head>
  <body>
      <div class="container">
<div class="row justify-content-center">
<div class="col-6 p-5 bg-white shadow-lg rounded">
    <h3> NUEVO PRODUCTO con POST</h3>
    <hr>
    <form method="post" action="recibe_post.php">
        <div class="form-group">
            <label for="Nombre">Nombre</label>
            <input id="Nombre" class="form-control" type="text" Name="Nombre">
        </div>
        
         <div class="form-group">
         <label for="Costo">Costo</label>
          <input id="Costo" class="form-control" type="text" name="Costo">

         </div>
        
         <div class="form-group">
             <label for="Precio">Precio</label>
             <input id="Precio" class="form-control" type="text" name="Precio">
         </div>
        
         <div class="form-group">
             <label for="Stock">Stock</label>
             <input id="Stock" class="form-control" type="text" name="Stock">
         </div>
        
         <div class="form-group">
             <label for="StockMinimo">Stock Minimo</label>
             <input id="StockMinimo" class="form-control" type="text" name="StockMinimo">
         </div>
        
         <br>

         <button class="btn btn-primary" type="submit">enviar</button>
    </form>
</div>
              

 
                      
                 
                      </div>
                  </div>
              </div>

          </div>
      </div>
    </div> 
    
    

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>