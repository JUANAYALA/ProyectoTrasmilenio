{% include 'admin/cabeceraADM.php' %}

<div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div
          class="h-10 p-5  bg-primary border rounded-3">
          <h1>MODIFICACION DE NOTICIAS</h1> 
          
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
            
            <form action="/admin/administracionN" method="post">  
                                  
              <div class="table-responsive">
                <table class="table">
                  <thead>                
                    <tr>
                      <th scope="row">Id</th>
                      <th scope="row">Nombre</th>
                      <th scope="row">Descripcion</th>
                      <th scope="row">Imagen</th>
                      <th scope="row">Clasificacion</th>
                      <th scope="row">Accion</th>
                    </tr>
                  </thead>
                  <tbody>
                    {% for Noticias in noticia %}
                    <tr>
                      <td>{{ Noticias[0] }}</td>
                      <td>{{ Noticias[1] }}</td>
                      <td>{{ Noticias[5] }}</td>
                      <td> 
                        
                        <img width="320" src="/img/{{ Noticias[12] }}" class="img-fluid rounded-top" alt="">  
                      </td> 
                      <td>{{ Noticias[8] }}</td>                       
                      <td>
                        <form action="/admin/Noticias/borrar" method="post">                        
                          <h6><input value="{{ Noticias[0] }}" type="text"  name="textId" id="textId"></h6>
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