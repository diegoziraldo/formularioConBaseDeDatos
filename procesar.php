<?php

    // Conexión a la base de datos
    $connect = mysqli_connect('localhost', 'root', '', 'baseDeDatosDiego'); //("localhost", "usuario", "contraseña", "basedatos");


    // Verificar la conexión
    if (!$connect) {
        echo "Error de conección: " . mysqli_connect_error();
    }
    else {
        echo "Coneccion Correcta";
    }

    // Obtener los datos del formulario
    // La variable '$_POST' va a contener todos los valores del formulario, lo que tenga entre los corchetes es lo que vamos a querer obtener
    // En este caso con la funcion isset(), vamos a comprobar si register tiene algun valor.
    if(isset($_POST['register'])){
        if(strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && is_string($_POST['nombre']) && is_string($_POST['apellido'])){
            //Aca estamos guardando en una variable el valor que obtenemos de el formulario
            $name = ($_POST['nombre']);
            $lastName = ($_POST['apellido']);
            
            //Aca estamos guardando en la tabla usuarios lo que tenemos guardado en las variables, que obtuvimos en el formulario
            $consulta = "INSERT INTO usuarios(nombre, apellido) VALUES('$name', '$lastName')";
            
            //Aca estamos comprobando si si se guardo correctamente los datos en la base,
            //esta funcion devolvera un booleano, 
            //en este caso si la coneccion fue exitosa y si la consulta fue exitosa entonces devolvera un true
            $resultado = mysqli_query($connect,$consulta);
            
            if($resultado){
                echo "Registro guardado correctamente";
            }   
            else{
                echo "Error al guardar el registro";
            }    
        }       
        else{
            echo "Complete todos los campos";
        }
    }
    
?>


