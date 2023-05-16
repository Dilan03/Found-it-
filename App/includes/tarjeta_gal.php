<?php
   //echo "Nombre ".($row_posts['nombre_objeto'])."";
   echo '<div class="tarjeta">
       <div class="tarjeta__etiquetas">';
       if (($row_posts['ancient']) == 'ancient') {
           echo '<div class="etiquetaEST etiquetaEST--ancient"><span>#Ancient</span></div>';
       }
       if (($row_posts['found']) == 'found') {
           echo '<div class="etiquetaEST etiquetaEST--found"><span>#found</span></div>';
       }
       if (($row_posts['lost']) == 'lost') {
           echo '<div class="etiquetaEST etiquetaEST--lost"><span>#Lost</span></div>';
       }
       if (($row_posts['gathered']) == 'gathered') {
           echo '<div class="etiquetaEST etiquetaEST--gathered"><span>#Gathered</span></div>';
       }
    echo '</div>
       <div class="tarjeta__image">
           <img src=data:image;base64,'.$row_posts['imagen'].' alt="imagen_objeto"/>
       </div>
       <div class="tarjeta__detalles">
           <h4 class="tarjeta__nombre">'.($row_posts['nombre_objeto']).'</h4>
           <span>
               <p class="etiquetaCAT">'.($row_posts['nombre']).'</p>
               <button class="boton boton__tarjeta"><a href="detailobject.php">Informacion</a></button>
           </span>
           <span class="tarjeta__fecha">Perdido: '.(substr($row_posts['fecha_publicacion'], 0,10)).'</span>
       </div>
   </div>';