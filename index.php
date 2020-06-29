<!DOCTYPE html>
<html>
    <head>
        <title>Cuestionario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap-4.3.1-dist/js/bootstrap.min.js" type="text/javascript"></script>
       

 </head>
   
    <div class="container">
        <h1>Encuesta</h1>
        <form action="lista.php" method="POST">
  
    <label >¿Cual es tu nombre?</label>
    <input  type="text" class="form-control col-5" name="nombre" id="nombre" placeholder="Ingrese Nombre" onkeyup="enviarNombre();">

  
  <div class="form-group">
      <label >¿Que edad tienes<input style="border: 0" value="" id="nombre2" disabled class="col-5"> ?</label> 
      <input name="edad" type="number" min="18"  id="edad" class="form-control col-5"  placeholder="Edad">
  </div>
  <div class="form-check">
      <label >¿Cual de las siguientes marcas conoces?</label>
      <br>
      <input type="checkbox" value="Nike" class="form-check-input" id="nike" >
    <label class="form-check-label">Nike</label>
    
      <br>
      <input type="checkbox" value="Adidas" class="form-check-input" id="adidas" >
    <label class="form-check-label">Adidas</label>
  
             <br>
             <input type="checkbox" value="Puma" class="form-check-input" id="puma">
    <label class="form-check-label">Puma</label>
  </div>
    <div class="form-check" id="preg" >
     
  </div>
     <div class="form-check" id="preg2" >
     
  </div>
      <div class="form-check" id="preg3" >
     
  </div>
     
    <button type="submit" class="btn btn-info">Guardar</button>
</form>
   </div>
    <script>
  
    </script>
    <script>
        function enviarNombre()
        {
           document.getElementById("nombre2").value= document.getElementById("nombre").value;              
    }
         function nikeon(){
    
      
           document.getElementById("preg").innerHTML=
                  " <label >¿Que te parece la marca Nike?</label>\n\
   <br><input type='radio' name='nike' value='Buena' class='form-check-input' id='Nbuena' >\n\
  <label class='form-check-label'>Buena</label>\n\
  <br><input type='radio' name='nike' value='Ni buena ni mala' class='form-check-input' id='NNbuena' >\n\
  <label class='form-check-label'>Ni buena ni mala</label>\n\
   <br><input type='radio' name='nike' value='Mala' class='form-check-input' id='Nmala' >\n\
<label class='form-check-label'>Mala</label>";
    
  
}
   function nikeoff()
   {
       document.getElementById("preg").innerHTML="";
   }
   var checkbox = document.getElementById('nike');
   checkbox.addEventListener("change", comprueba, false);

function comprueba(){
  if(document.getElementById("nike").checked){
      nikeon()
  }else{
     nikeoff();
  }
};
      function adidason(){
    
      
           document.getElementById("preg2").innerHTML=
                  " <label >¿Que te parece la marca Adidas?</label>\n\
   <br><input type='radio' name='adidas' value='Buena' class='form-check-input' id='Abuena' '>\n\
  <label class='form-check-label'>Buena</label>\n\
  <br><input type='radio' name='adidas' value='Ni buena ni mala' class='form-check-input' id='ANbuena' >\n\
  <label class='form-check-label'>Ni buena ni mala</label>\n\
   <br><input type='radio' name='adidas' value='Mala' class='form-check-input' id='Amala' >\n\
<label class='form-check-label'>Mala</label>";
    
  
}
   function adidasoff()
   {
       document.getElementById("preg2").innerHTML="";
   }
   var checkbox = document.getElementById('adidas');
   checkbox.addEventListener("change", comprueba2, false);

function comprueba2(){
  if(document.getElementById("adidas").checked){
      adidason();
  }else{
     adidasoff();
  }};
        function pumason(){
    
      
           document.getElementById("preg3").innerHTML=
                  " <label >¿Que te parece la marca Puma?</label>\n\
   <br><input type='radio' name='puma' value=' Buena' class='form-check-input' id='Pbuena' '>\n\
  <label class='form-check-label'>Buena</label>\n\
  <br><input type='radio' name='puma' value='Ni buena ni mala' class='form-check-input' id='PNbuena' >\n\
  <label class='form-check-label'>Ni buena ni mala</label>\n\
   <br><input type='radio'name='puma' value='Mala' class='form-check-input' id='Pmala' >\n\
<label class='form-check-label'>Mala</label>";
    
  
}
   function pumasoff()
   {
       document.getElementById("preg3").innerHTML="";
   }
   var checkbox = document.getElementById('puma');
   checkbox.addEventListener("change", comprueba3, false);

function comprueba3(){
  if(document.getElementById("puma").checked){
      pumason();
  }else{
     pumasoff();
  }}
 



       
    
        
    </script>

    </body>


  



              
    
</html>

