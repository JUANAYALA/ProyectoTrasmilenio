{% include 'sitio/cabecera.php' %}

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">  
            REGISTRO          
          </div>
          <div class="card-body">

            <form action="/sitio/Registro/guardar" method="post" enctype="multipart/form-data">
              
              <div class="mb-3">
                <label for="textNom" class="form-label">Nombre</label>
                <input type="text"
                  class="form-control" name="textNom" id="textNom" aria-describedby="helpId" placeholder="Ingrese Su Nombre">                
              </div>
              <div class="mb-3">
                <label for="textApe" class="form-label">Apellido</label>
                <input type="text"
                  class="form-control" name="textApe" id="textApe" aria-describedby="helpId" placeholder="Ingrese Su Apellido">        
              </div>
              <div class="mb-3">
                <label for="textDoc" class="form-label">Documento</label>
                <input type="text"
                  class="form-control" name="textDoc" id="textDoc" aria-describedby="helpId" placeholder="Ingrese Su Numero De Documento">                
              </div>

              <div class="mb-3">
                <label for="textTel" class="form-label">Telefono</label>
                <input type="text"
                  class="form-control" name="textTel" id="TextTel" aria-describedby="helpId" placeholder="Ingrese su Numero telefonico">                
              </div>
              <div class="mb-3">
                <label for="textPs" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="textPs" id="textPs" placeholder="">
              </div>

              <button type="submit" class="btn btn-success"> INGRESAR </button>

            </form>


          </div>
          <div class="card-footer text-muted">
            
          </div>
        </div>
        
        
      </div>
      <div class="col-md-4">
        
      </div>
    </div>
  </div>
</body>




  

{% include 'sitio/pie.php' %}