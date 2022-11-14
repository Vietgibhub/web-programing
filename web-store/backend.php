<?php
    $username = $_POST["username"];
    $password = $_POST["password"];
    $short = $_POST["short"];
    $shirt = $_POST["shirt"];
    $hat = $_POST["hat"];
    $shipping = $_POST["shipping"];

    $shortcost = 15 * $short;
    $shirtcost = 10 * $shirt;
    $hatcost = 5 * $hat;

    echo "<p> THANK YOU FOR YOUR SHOPPING </p><br>";
    echo "username".$username. "<br>";
    echo "password" .$password. "<br>";

    echo "<table border=1 id=\"receipt\">";
        echo "<tr>";
            echo "<td> </td>";
            echo "<td> Quantity </td>";
            echo "<td> Cost Per Item</td>";
            echo "<td> Sub Total</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td> Short </td>";
            echo "<td>" .$short. "</td>";
            echo "<td> $15.00 </td>";
            echo "<td> $" .$shortcost. "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<th> Shirt </th>";
            echo "<td>" . $shirt . "</td>";
            echo "<td> $10.00 </td>";
            echo "<td> $" . $shirtcost . "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<th> Hat </th>";
            echo "<td>" . $hat . "</td>";
            echo "<td> $5.00 </td>";
            echo "<td> $" . $hatcost . "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<th> Shipping </th>";
            echo "<td>" .$shipping.  "</td>";
            if ($shipping == "Overnight"){
                echo "<td> $50.00 </td>";
                $shippingcost = 50;
            }
            else if ($shipping == "3 days"){
                echo "<td> $5.00 </td>";
                $shippingcost = 5;
            }
            else {
                echo "<td> Free </td>";
                $shippingcost = 0;
            }
        echo "</tr>";
        $total = $shirtcost + $shortcost + $hatcost + $shippingcost;
        echo "<tr>";
            echo "<td> Total Cost </td>";
            echo "<td> $" . $total . "</td>";
        echo "</tr>";
    echo "</table>";
    echo "<link rel=stylesheet type=text/css href=style.css>";
?>