<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadania php
        https://github.com/TEB-DK/Domena_aplikacji_internetowych/blob/J%C4%99zyk-PHP/1.%20Podstawowa%20sk%C5%82adnia.md
    </title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            margin: 100px 20px;
            font-family: 'Trebuchet MS', sans-serif;
        }

        .wraper {
            margin: 0px 100px;

        }

        h1 {
            margin: 0;
        }

        .divv {
            display: flex;
            margin: 0px;
        }

        p {
            margin: 25px 2px;
        }
    </style>
</head>

<body>
    <div class="wraper">
        <h1>1. Zadania Tablice</h1>
        <?php
        $fruits = ["jabłko", "banan", "gruszka"];
        $colors = ['red', 'blue', 'green'];
        $numbers = [1, 2, 3, 4];
        $user = [
            'name' => 'Jan',
            'age' => 28,
            'city' => 'Warszawa'
        ];
        echo "<h2>1.$colors[0]</h2> ";
        echo "<div class='divv'><h2>2.    $ product = [
        'name' => 'Jan',
        'price' => 28,
        'in_stock' => true
    ];
    </h2></div>";
        $product = [
            'name' => 'Jan',
            'price' => 28,
            'in_stock' => true
        ];


        array_push($numbers, '5');


        echo "<div class='divv'><h2>3. Nowy Element </h2><p>$numbers[4]</p></div>";

        if (in_array("banan", $fruits)) {
            echo "<div class='divv'><h2>4. znaleziono ' banan ' w tablicy fruits</h2></div>";
        } else {
            echo "4. nie znaleziono";
        }

        ?>
        <div class="divv">
            <h2>
                <?php
                echo "5. ";
                $keys = array_keys($user);
                print_r($keys);
                ?>
            </h2>
        </div>
        <h1>2. Zadania Funkcje</h1>
        <div class="divv">

            <?php
            function sayHello()
            {
                print_r("Witaj!");
            }
            echo "<h2>1. </h2>";
            sayHello();
            ?>
        </div>
        <div class="divv">

            <?php
            function multiply($a, $b)
            {
                return $a * $b;

            }
            $wynik = multiply(5, 20);
            echo "<h2>2. </h2>";
            echo $wynik;
            ?>
        </div>
        <div class="divv">

            <?php
            function isEven($n)
            {
                if ($n & 2) {
                    echo 'True';
                } else {
                    echo 'nieparzysta';
                }
            }
            echo "<h2>3. </h2>";
            isEven(5);
            ?>
        </div>
        <div class="divv">

            <?php

            function formatPrice($price)
            {
                $price = number_format($price, 2, ".", "");
                return $price;
            }
            echo "<h2>4. </h2>";
            echo formatPrice(5);
            ?>
        </div>
        <div class="divv">

            <?php
            echo "<h2>5. </h2>";
            function greetUser($name, $age)
            {
                echo "Witaj $name lat $age";

            }
            greetUser("Marcin", "14");
            ?>
        </div>
        <h1 id="z3">3. Zadania Ciasteczka</h1>
        <div class="divv">
            <h2>1. Ustawiono ciasteczka imienia </h2>
            <?php
            setcookie("username", "Jan", time() + (86400 * 7), "/");
            ?>

        </div>
        <div class="divv">
            <h2>2. </h2>
            <?php


            if (isset($_COOKIE["username"])) {
                echo "Witaj, " . $_COOKIE["username"];
            } else {
                echo "cześć bezimienny";
            }

            ?>

        </div>
        <div class="divv">
            <?php

            setcookie("background_theme", "black", time() + (86400 * 30), "/");
            echo "<h2>3. Ustawiono ciasteczka koloru</h2>" . $_COOKIE["background_theme"];
            ?>

        </div>
        <div class="divv">
            <?php
            setcookie("session_id", "2", time() + 3600, "/");
            setcookie("session_id", "", time() - 3600, "/");
            if (isset($_COOKIE["session_id"])) {
                echo "id_sesji " . $_COOKIE["session_id"];
            } else {
                echo "<h2>4. ciasteczka sesji zostały usunięte</h2>";
            }
            ?>

        </div>
        <div class="divv">
            <?php
            echo "<h2>5. ciastka na stronie </h2>";
            echo var_dump($_COOKIE);
            ?>

        </div>
        <h1>4. Zadania Sesje</h1>
        <div class="divv">
            <?php
            session_start();
            $_SESSION["ID"] = "1";
            $_SESSION["imie"] = "Marcin";
            $_SESSION["email"] = "marcin.w@gmail.com";
            ?>

        </div>
    </div>
</body>

</html>