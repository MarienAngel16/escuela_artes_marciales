<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>listas deplegables</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <link rel="stylesheet" href="estilo.css">
  <body>
<!--acordeon desplegable-->

<div class="container accordion" id="accordionExample">

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="listado1 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Sede #1
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="cuerpo1 accordion-body">
      </div>
    </div>
  </div>
  
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="listado1 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Sede #2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="cuerpo1 accordion-body">
        <strong>Este es el cuerpo del acordeón del segundo elemento.</strong>
      </div>
    </div>
  </div>
  
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="listado1 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Sede #3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="cuerpo1 accordion-body">
        <strong>Este es el cuerpo del acordeón del tercer elemento.</strong>
      </div>
    </div>
  </div>
  
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="listado1 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        Sede #4
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="cuerpo1 accordion-body">
        <strong>Este es el cuerpo del acordeón del cuarto elemento.</strong>
      </div>
    </div>
  </div>
  
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFive">
      <button class="listado1 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        Sede #5
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
      <div class="cuerpo1 accordion-body">
        <strong>Este es el cuerpo del acordeón del cuarto elemento.</strong>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSix">
      <button class="listado1 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
        Sede #6
      </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
      <div class="cuerpo1 accordion-body">
        <strong>Este es el cuerpo del acordeón del cuarto elemento.</strong>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSeven">
      <button class="listado1 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
        Sede #7
      </button>
    </h2>
    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
      <div class="cuerpo1 accordion-body">
        <strong>Este es el cuerpo del acordeón del cuarto elemento.</strong>
      </div>
    </div>
  </div>

  </div>
<!--fin de acordeon-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>