<!DOCTYPE html>
<html lang="en">

    <head>
    <title>quiz</title>
    <meta charset ="utf-8">
    <link rel="stylesheet" href="css/style.css" text="text/css"> 
    </head>

    <body>
    
        <center><header>
            <div class="container">
                <h1>Congrats Hero!!!</h1>
            </div>
        </header>
            <br><br>
        <div class="img">
            <img src="img/avengers-infinity-war-all-heroes-wallpaper-3840x1200-894_62.jpg" alt="avenger-logo">
        </div>
        <br><br>

        <?php

            $name = $_POST;
            $surname = $_POST;

            if(isset($_POST['name']) . isset($_POST['surname']))
            {
                echo "User Details: <br> $name $surname";
            }
            
        ?>

       <main>
            <div class="container">
                <h2>You're Done!</h2>
                <p>You have complete the test.</p>
                <h1>Marvel | Results</h1>
                    
                <?php
            
                    if($_POST)
                    {
                        $answer1 = $_POST['question-1-answers'];
                        $answer2 = $_POST['question-2-answers'];
                        $answer3 = $_POST['question-3-answers'];
                        $answer4 = $_POST['question-4-answers'];
                        $answer5 = $_POST['question-5-answers'];
                        $answer6 = $_POST['question-6-answers'];
                        $answer7 = $_POST['question-7-answers'];
                        $answer8 = $_POST['question-8-answers'];
                        $answer9 = $_POST['question-9-answers'];
                        $answer10 = $_POST['question-10-answers'];
                        $answer11 = $_POST['question-11-answers'];
                        $answer12 = $_POST['question-12-answers'];
                        $answer13 = $_POST['question-13-answers'];
                        $answer14 = $_POST['question-14-answers'];
                        $answer15 = $_POST['question-15-answers'];
                        $answer16 = $_POST['question-16-answers'];
                        $answer17 = $_POST['question-17-answers'];
                        $answer18 = $_POST['question-18-answers'];
                        $answer19 = $_POST['question-19-answers'];
                        $answer20 = $_POST['question-20-answers'];
                    }
                    
                    $totalCorrect = 0;
                    
                    if($_POST)
                    {
                        if ($answer1 == "D") { $totalCorrect++; }
                        if ($answer2 == "C") { $totalCorrect++; }
                        if ($answer3 == "C") { $totalCorrect++; }
                        if ($answer4 == "D") { $totalCorrect++; }
                        if ($answer5 == "C") { $totalCorrect++; }
                        if ($answer6 == "C") { $totalCorrect++; }
                        if ($answer7 == "B") { $totalCorrect++; }
                        if ($answer8 == "A") { $totalCorrect++; }
                        if ($answer9 == "C") { $totalCorrect++; }
                        if ($answer10 == "C") { $totalCorrect++; }
                        if ($answer11 == "C") { $totalCorrect++; }
                        if ($answer12 == "D") { $totalCorrect++; }
                        if ($answer13 == "C") { $totalCorrect++; }
                        if ($answer14 == "C") { $totalCorrect++; }
                        if ($answer15 == "B") { $totalCorrect++; }
                        if ($answer16 == "A") { $totalCorrect++; }
                        if ($answer17 == "C") { $totalCorrect++; }
                        if ($answer18 == "C") { $totalCorrect++; }
                        if ($answer19 == "B") { $totalCorrect++; }
                        if ($answer20 == "D") { $totalCorrect++; }
                    }

                    echo "<div id='results'>$totalCorrect / 20 correct</div>";
                    echo "<br>";

                    $max = 15;
                    $ave = 10;
                    $min = 5;

                    if($totalCorrect)
                    {
                        if($totalCorrect >= $max)
                        {
                            echo "Outstanding performance! You are a true marvel fan.";
                        }
                        elseif($totalCorrect >= $ave)
                        {
                            echo "Welldone!";
                        }
                        elseif($totalCorrect <= $ave)
                        {
                            echo "Please consider re-taking test.";
                        }
                    }
                    else
                    {
                        echo "Retake test!";
                    }

                    echo "<br>";
                    echo "<br>";      
                ?>

                <button><a href="index.php?n-1" class="start">Take Again</a></button>

            </div>
        </main>

        <footer>
            <div class="container">
                Copyright &copy 2020, Lee Lebrandt.
            </div>
        </footer>
      
        
    </body>

</html>