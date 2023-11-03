<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
     
        <form action="generate-code.php" method="post">
              <div class="mb-3">

             <label for="data" class="form-label">Data</label>
       <input name="data" id='data' class="form-control"  required placeholder="PHP QR Code :)">
       </div>
          <div class="mb-3">
                  <label for="ecc" class="form-label">ECC</label>
        <select name="ecc" class="form-select" id='ecc'>
            <option value="L" selected=""  aria-label="Seleccionado por defecto">L - pequeño</option>
            <option value="M">M</option>
            <option value="Q">Q</option>
            <option value="H">H - grande</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="size" class="form-label">size</label>
       <select class="form-select" name="size" id='size'>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4" selected="" aria-label="Seleccionado por defecto">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
    </select>
        </div>
   
        <button class='btn btn-primary'  id="btnEnviar" type="button">
        Generar QR
            </button>
    </form>
       
<div id='respuesta'class="img-qr">

</div>

    </div>
    <script src="script.js"></script>
</body>
</html>