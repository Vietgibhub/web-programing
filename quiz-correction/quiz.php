<?php
    $correct = 0;
    $score = $correct * 20;
    $a = $_POST['A'];
    $b = $_POST['B'];
    $c = $_POST['C'];
    $d = $_POST['D'];
    $e = $_POST['E'];

    if(!EMPTY($_POST)){
        if( $a == "Lisbon" ){
            $correct++;
        }
        if( $b == "Rio de Janeiro" ){
            $correct++;
        }
        if( $c == "Tokyo" ){
            $correct++;
        }
        if( $d == "Beijing" ){
            $correct++;
        }
        if( $e == "Hanoi" ){
            $correct++;
        }
    } 
    else {
    echo "<p>Take quiz!</p>";
    }
    echo "<p>Question 1: What is the capital of Portugal?</p><br>";
    echo "<p>Answered: " . $a . "</p><br>";
    echo "<p>Correct Answer: Lisbon</p><br>";
    echo "<p>Question 2: What is the capital of Brazil?</p><br>";
    echo "<p>Answered: " . $b . "</p><br>";
    echo "<p>Correct Answer: Rio de Janeiro</p><br>";
    echo "<p>Question 3: What is the capital of Japan?</p><br>";
    echo "<p>Answered: " . $c . "</p><br>";
    echo "<p>Correct Answer: Tokyo</p><br>";
    echo "<p>Question 4: What is the capital of China?</p><br>";
    echo "<p>Answered: " . $d . "</p><br>";
    echo "<p>Correct Answer: Beijing</p><br>";
    echo "<p>Question 5: What is the capital of Vietnam?</p><br>";
    echo "<p>Answered: " . $e . "</p><br>";
    echo "<p>Correct Answer: Hanoi</p><br>";
?>