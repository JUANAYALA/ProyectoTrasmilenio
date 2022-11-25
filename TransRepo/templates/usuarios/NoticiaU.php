{% include 'usuarios/cabeceraUSU.php' %}



<div class="container">
  <div class="row">
    <div class="col-12">
      <div
        class="h-10 p-5  bg-primary border rounded-3">
        <h1>SECCION DE NOTICIAS</h1> 
        <br>
        <br>
      </div>
    </div>
  </div>
</div>
<br>
<br>


<div class="row">

  {% for Noticias in noticia %}
    <div class="col-md-6">
      <div class="card">
        <img  class="card-img-top" src="/img/{{ Noticias[12] }}" alt="Title">
        <div class="card-body">
          <h4 class="card-title">Nombre: {{ Noticias[1] }} {{ Noticias[2] }}</h4> Documento: {{ Noticias[3] }}
          <p class="card-title">Descripcion: {{ Noticias[5] }}</p>

          <p class="card-text">Estacion: {{ Noticias[6] }} <br>  Clasificacion: {{ Noticias[8] }}</p>
          <p class="card-text">Fecha: {{ Noticias[11] }}</p>
          
        </div>
      </div>
    </div>

  {% endfor %}
</div>


  
{% include 'admin/pieADM.php' %}