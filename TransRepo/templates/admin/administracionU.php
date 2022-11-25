{% include 'admin/cabeceraADM.php' %}


<div class="container">
  <div class="row">
    <div class="col-12">
      <div
        class="h-10 p-5  bg-primary border rounded-3">
        <h1>MODIFICACION DE USUARIOS</h1>         
      </div>
    </div>
  </div>
</div>
<br>


<div class="container">
  <div class="row">
    <div class="col-12">
      <div
        class="h-10 p-5  bg-primary border rounded-3">
        <div
          class="h-100 p-5 text-white bg-primary border rounded-3">
          
          <form action="/admin/administracionU" method="post">  
                                
            <div class="table-responsive">
              <table class="table">
                <thead>                
                  <tr>
                    <th scope="row">Id</th>
                    <th scope="row">Nombre</th>
                    <th scope="row">Apellido</th>
                    <th scope="row">Documento</th>
                    <th scope="row">Telefono</th>
                    <th scope="row">Accion</th>
                  </tr>
                </thead>
                <tbody>
                  {% for administracion in usuario %}
                    <tr>
                      <td>{{ administracion[0] }}</td>
                      <td>{{ administracion[1] }}</td>
                      <td>{{ administracion[2] }}</td>                    
                      <td>{{ administracion[3] }}</td> 
                      <td>{{ administracion[4] }}</td>                       
                      <td>
                        <form action="/admin/Noticias/borrar" method="post">                        
                          <h6><input value="{{ administracion[0] }}" type="text"  name="textId" id="textId"></h6>
                          <button  type="submit" class="btn btn-danger">ELIMINAR</button>                        
                          </form>              
                        
                      </td>
                    </tr>
                  {% endfor %}
                  
                </tbody>
              </table>
            </div>
            
          </form>
        </div>               
     </div>
    </div>
        
  </div>
</div>



  
</div>
  
{% include 'admin/pieADM.php' %}