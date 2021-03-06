<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/0b6e958daa.js" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="css/recuperador.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet"> 
   
    <title>Document</title>
</head>
<body>
    
   <div class="container">
        <article>
            <h1>Si ha olvidado su contraseña de click en el botón siguiente</h1>

            <button class="btn-popup" id="btn-popup">Click para Recuperar contraseña</button>

         
        
        </article>

        <div class="overlay" id="overlay">
            <div class="popup" id="popup">
                <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup">
                    <i class="fas fa-times"></i>
                </a>
                <h3>Datos del usuario</h3>
                <h4>Ingrese correctamente sus datos</h4>

               <form action="">
                    <div class="container-input">
                        <input type="text" placeholder="Nombre">
                        <input type="text" placeholder="Correo">
                    </div>
                    <input type="submit" class="btn-submit" value="Recuperar">
               </form>
            </div>
        </div>
   </div>

   <script src="js/recuperador.js"></script>
</body>
</html>
