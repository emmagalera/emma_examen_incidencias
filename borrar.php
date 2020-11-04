<?php
session_start();
include 'head.php';

if(isset($_REQUEST['borrar'])){
    $numero_incidencia=$_REQUEST['num_incidencia'];
    if(isset($_SESSION['incidencias'][$numero_incidencia])){ //Numero de Incidencia existe
        //echo 'Existe';
        unset($_SESSION['incidencias'][$numero_incidencia]);;
    } else{ //Numero de Incidencia no existe
        echo 'Lo siento, el numero de incidencia introducido no existe. <br>';
    }
    

}
                                             
 print' 
            <strong>INTRODUCE EL IDENTIFICADOR DE LA INCIDENCIA A BORRAR<BR><BR></strong>
                                     
        <div   class="postcontent"><form action="" method="post">
            <table align="center" class="content-layout">
              
              
              <tr><td align="right"><strong>Num Incidencia :</strong></td><td>
              <div align="left">
                    <input type="text" name="num_incidencia"/>
              </div></td></tr>
              
              <tr ><td colspan="2"><div align="center"><strong>
            <input name="borrar" type="submit" id="borrar" value="Dar de Baja"/>
            </strong></div></td></tr>
        </table>
    </form>
        </div>';
 include 'pie.php';