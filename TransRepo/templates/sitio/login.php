{% include 'sitio/cabecera.php' %}

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">            
          </div>
          <div class="card-body">
            <form action="/sitio/login" method="post">

              <div class="mb-3">
                <label for="textDoclo" class="form-label">Documento</label>
                <input type="text"
                  class="form-control" name="textDoclo" id="textDoclo" aria-describedby="helpId" placeholder="Ingrese Su Numero De Documento">                
              </div>
              <div class="mb-3">
                <label for="textpass" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="textpass" id="textpass" placeholder="">
              </div>
              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> Recordar
                  <br>
                  <a class="btn btn-outline-primary" href="/Registro">Registrarse</a>
                </label>
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