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
                echo "User Details: <br /> $name $surname";
            }    
        ?>

       <main>
            <div class="container">
                <h2>You're Done!</h2>
                <p>You have complete the test.</p>
                <h1>Marvel | Results</h1>
            
                <?php

                    if (isset($_POST['answers']))
                    {
                        // submitted answers.
                        $Answers = $_POST['answers']; 
                        
                            $counter = 0;
                        
                        echo "<div class='container'>" ;
                            
                        if ($counter == $Answers) 
                        { 
                            $counter++;
                        echo $results = "Your score: $counter/20"; 
                        }
                        else 
                        { 
                            $counter++;
                            echo $results = "Your score: $counter/20"; 
                        }
                    }
                    echo "</div>" ;

                    $max = 15;
                    $ave = 10;
                    $min = 5;

                    if ($_POST)
                    {
                        if($counter)
                        {
                            if($counter >= $max)
                            {
                                echo "<h3><b>Outstanding performance!</b> You are a true marvel fan.</h3>";
                            }
                            elseif($counter >= $ave)
                            {
                                echo "<h3>Welldone!</h3>";
                            }
                            elseif ($counter <= $min)
                            {
                                echo "<h3>Retake quiz!</h3>";
                            }
                        }
                        else
                        {
                            echo "<h3>You <b><i>failed!</i></b> Retake test.</h3>";
                        }
                    }
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