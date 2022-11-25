{% include 'usuarios/cabeceraUSU.php' %}

  <div class="container">
    <div class="row">
      <div class="col-10">
        <div
        class="h-100 p-5 text-white bg-primary border rounded-3">
        <h2>FORMULARIO</h2>
        <p>En el siguiente espacio puede ingresar la peticion que desea informar por eso se usa este formulario recuerde que puede realizar
          acciones como lo son informar a los usuraios de las estaciones de trasmilenio, reportar hurtos, reportar peleas en las estaciones de trasmilenio,
          puede hacer una sugerencia de las estaciones de trasmilenio
        </p>      
      </div>   
      </div>      
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-10">
        <div
        class="h-100 p-5 text-white bg-primary border rounded-3">
        <h2>Datos Personales</h2>
        <form action="/usuarios/Noticias/guardar" method="post" enctype="multipart/form-data">
                
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
              class="form-control" name="textTel" id="textTel" aria-describedby="helpId" placeholder="Ingrese Su Numero Telefonico">                
          </div>
          <div class="mb-3">
            <label for="textDes" class="form-label">Descripcion</label>
            <input type="text"
              class="form-control" name="textDes" id="textDes" aria-describedby="helpId" placeholder="Describa El Suceso">                
          </div>
          <h2>Datos Estacion </h2>
          <br>
          <div class="mb-3">
            <label for="textNomE" class="form-label">Nombre De La Estacion</label>
            <input type="text"
              class="form-control" name="textNomE" id="textNomE" aria-describedby="helpId" placeholder="Ingrese El Nombre De La Estacion">                
          </div>
          <div class="mb-3">
            <label for="textDir" class="form-label">Direccion: (No Obligatorio)</label>
            <input type="text"
              class="form-control" name="textDir" id="textDir" aria-describedby="helpId" placeholder="Ingrese La Direccion">        
          </div>
          <div class="mb-3">
            <label for="textCla" class="form-label">Clasificacion: Pelea, Hurto, Omicidio, Vias En Mal Estado, Demoras en el transporte</label>
            <input type="text"
              class="form-control" name="textCla" id="textCla" aria-describedby="helpId" placeholder="Ingrese La Clasificacion ">  
            </div>
          <div class="mb-3">
            <label for="textCor" class="form-label">Correo Electronico</label>
            <input type="email" class="form-control" name="textCor" id="textCor" aria-describedby="emailHelpId" placeholder="abc@mail.com">            
          </div>

          <div class="mb-3">
            <label for="textNot" class="form-label">Notificacion: (No Obligatorio)</label>
            <input type="text"
              class="form-control" name="textNot" id="textNot" aria-describedby="helpId" placeholder="Ingrese Si Hubo Un Agente de Policia O Servidor De Trasmilenio">                
          </div>
          <div class="mb-3">
            <label for="textFe" class="form-label">Ingrese La Fecha</label>
            <input type="text"
              class="form-control" name="textFe" id="textFe" aria-describedby="helpId" placeholder="AAAA-MM-DD">                
          </div>
          
          
          <div class="mb-3">
            <label for="textEvi" class="form-label">Evidencia</label>
            <input type="file"
              class="form-control" name="textEvi" id="textEvi" aria-describedby="helpId" placeholder="Seleccione un Archivo">                
          </div>
        

          <button type="submit" class="btn btn-success"> ENVIAR FORMULARIO </button>          
          

        </form> 
      </div>   
      </div>      
    </div>
  </div>




  
{% include 'admin/pieADM.php' %}