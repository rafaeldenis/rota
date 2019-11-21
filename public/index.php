<?php



//var_dump($_SERVER);

switch  ($_SERVER['PATH_INFO']){

    case '/and':
        echo "LISTAR CURSO ANDD";     
        break;
    case '/batata':
       ECHO "NOVO CURSOOOOOO 2";
        break;
   
    default:
        echo "erro 404";
        break;
    



}
/*if($_SERVER['PATH_INFO']==='/listar-cursos'){

    require 'listar-cursos.php';
}elseif($_SERVER['PATH_INFO']==='/novo-curso'){
    require 'formulario-novo-curso.php';
} 
if($_SERVER['PATH_INFO']==='/sobre'){
    require 'sobre.php';

}
*/

?>


