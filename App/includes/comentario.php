<?php

    /*if(isset($_POST['enviar'])){

        $comentario = $_POST['comenta'];
        //  insert into comentarios (id, id_autor, contenido, fecha_publicacion, id_post) 
        //  values (1, 'L21550135', 'Comentario de prueba', '2023-05-01 00:00:0', 1);
        $sql = "Insert into comentarios (id, id_autor, contenido, fecha_publicacion, id_post) values ('"$_POST['comenta']."', '"$_SESSION["id"] = $row["no_control"]."', NOW())";
        header("location: index.php");

    }*/

    if(isset($_POST["enviar"])) {   
        
        //$comentario = $_POST['comenta'];
        //$query = "INSERT INTO comentarios(id, id_autor, contenido, fecha_publicacion, id_post) values(1, '21550135', 'hhj', '2023-06-02 00:00:0', 0)";
        mysqli_query($conn, "INSERT INTO comentarios(id, id_autor, contenido, fecha_publicacion, id_post) values(1, '21550135', 'kkelelele', '2023-06-02 00:00:0', 0)"); 
        if($result) {
            echo 'efsf';
        } else {
            die(mysql_error());
        }
    // if($query) { 
    //     echo "<script> alert('El comentario se ingreso')</script>";
        
    // }else{
    //     echo "<script> alert('El comentario no se ingreso')</script>";
    // }
}

?>

<form >
<div class="user_1">
    <img class="options__user hideElement" src="assets/icons/user-box.svg">
    <span>
        <div class="profilepic">
            <img src="assets/images/perroperfil.png" alt="profilepic">
        </div>
    </span>
    <div>
        <label class="comentario__usuario" for="usuario_1">Esteban Cote<i class="borrar_comentario_btn"><img class="detalles_opt" src="assets/icons/bote-basura.svg"></i></label><br>
        <p class="comentario__text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo labore, dolorem maxime ratione repellat voluptatem fugiat aspernatur deserunt omnis quaerat laborum ipsam tempore recusandae odit facere cum qui facilis quidem. 
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore asperiores suscipit libero sequi autem enim commodi aspernatur praesentium repellat.
        </p>
    </div>
</div>
</form>