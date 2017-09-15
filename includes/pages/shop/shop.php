<?php
    include("includes/functions/connectDB.php");
    
    $query = ("select * from products");
    
    $result = mysqli_query( $conn, $query );
    
    
    echo '<div class="row">';
    while ($row = mysqli_fetch_array( $result))
    {
        
        echo '<table class="col-6">';
        echo '<tr>';
        echo '<td class="col-6" id="name">'. $row["prod_name"]. '</td>';
        echo '<td class="col-6"></td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td class="col-6"></td>';
        echo '<td class="col-6" id="price">Preis: ' . $row["price"] . ' €</td></tr>';
        echo '<tr> <td class="col-12" id="notes">' . $row["notes"]. '</td></tr>';
        echo '<tr>';
        echo '<td class="col-7" id="amount"> Auf Lager: ' . $row["remaining"] .' Stück </td>';
        echo '<td class="col-5"> <button>In den Warenkorb</button> </td> </tr>';
        echo '</table>';
        

    }
    echo '</div>';
    
    mysqli_free_result($result);    

    include("includes/functions/closeDB.php");
?>