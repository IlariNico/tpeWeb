
<?php
    echo '
    <h1>Figuras</h1>

    <a href="lista.php">Ver todas las figuras geométricas</a>


    <h4> <h4>
    <form action="'.BASE_URL.'search/" method="GET">
        <label for="area">Buscar figuras con área menor a: </label>
        <input id="area" type="number" name="area" placeholder="Introduzca área...">
        <button type="submit">Buscar</button>
    </form>';
    
