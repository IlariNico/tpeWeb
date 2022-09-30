<?php 

class movieView{
 
    
    function showHome(){
        require_once "./templates/header.php";
        require_once "./templates/index.php";
    }
    function showError(){
        echo "<h2>Error! Género no especificado.</h2>";
        die();
    }
    function showMovies($movies){
        require_once "./templates/header.php";
        echo "<a href='home'> Volver </a>";

        // imprime la tabla de peliculas
        echo "<table>
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Año</th>
                        <th>Estudio</th>
                    </tr>
                <thead>
                <tbody>
        ";
        foreach($movies as $movie) {
            echo "
                    <tr>
                        <td>$movie->title</td>
                        <td>$movie->year</td>
                        <td>$movie->studio</td>
                    </tr>
            ";
        }
        echo " </tbody>    
            </table>";
            }

}