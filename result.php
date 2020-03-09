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
                if($_POST)
                    {
                        $answer[0] = (isset($_POST['ans1']));
                        $answer[1] = (isset($_POST['ans2']));
                        $answer[2] = (isset($_POST['ans3']));
                        $answer[3] = (isset($_POST['ans4']));
                        $answer[4] = (isset($_POST['ans5']));
                        $answer[5] = (isset($_POST['ans6']));
                        $answer[6] = (isset($_POST['ans7']));
                        $answer[7] = (isset($_POST['ans8']));
                        $answer[8] = (isset($_POST['ans9']));
                        $answer[9] = (isset($_POST['ans10']));
                        $answer[10] = (isset($_POST['ans11']));
                        $answer[11] = (isset($_POST['ans12']));
                        $answer[12] = (isset($_POST['ans13']));
                        $answer[13] = (isset($_POST['ans14']));
                        $answer[14] = (isset($_POST['ans15']));
                        $answer[15] = (isset($_POST['ans16']));
                        $answer[16] = (isset($_POST['ans17']));
                        $answer[17] = (isset($_POST['ans18']));
                        $answer[18] = (isset($_POST['ans19']));
                        $answer[19] = (isset($_POST['ans20'])); 
                    }

                    $totalCorrect = 0;

                    if($_POST)
                    {
                        if ($answer[0]) 
                        {
                            $totalCorrect++;
                        } 
                        if ( $answer[1])
                        {
                            $totalCorrect++;
                        }
                        if ( $answer[2])
                        {
                            $totalCorrect++;
                        }
                        if ( $answer[3])
                        {
                            $totalCorrect++;
                        }
                        if ( $answer[4])
                        {
                            $totalCorrect++;
                        }
                        if ( $answer[5])
                        {
                            $totalCorrect++;
                        }
                        if ( $answer[6])
                        {
                            $totalCorrect++;
                        }
                        if ( $answer[7])
                        {
                            $totalCorrect++;
                        }
                        if ( $answer[8])
                        {
                            $totalCorrect++;
                        }
                        if ( $answer[9] )
                        {
                            $totalCorrect++;
                        }
                        if ( $answer[10] )
                        {
                            $totalCorrect++;
                        }
                        if ( $answer[11] )
                        {
                            $totalCorrect++;
                        }
                        if ( $answer[12] )
                        {
                            $totalCorrect++;
                        }
                        if ( $answer[13] )
                        { 
                            $totalCorrect++;
                        }
                        if ( $answer[14] )
                        {
                            $totalCorrect++;
                        }
                        if ( $answer[15] )
                        {
                            $totalCorrect++;
                        }
                        if ( $answer[16] )
                        {
                            $totalCorrect++;
                        }
                        if ( $answer[17] )
                        {
                            $totalCorrect++;
                        }
                        if ( $answer[18] )
                        {
                            $totalCorrect++;
                        }
                        if ( $answer[19] )
                        {
                            $totalCorrect++;
                        }
                    } 

                    $max = 15;
                    $ave = 10;
                    $min = 5;

                    if ($_POST)
                    {
                        if($totalCorrect)
                        {
                            if($totalCorrect >= $max)
                            {
                                echo "<h3><b>Outstanding performance!</b> You are a true marvel fan.</h3>";
                            }
                            elseif($totalCorrect >= $ave)
                            {
                                echo "<h3>Welldone!</h3>";
                            }
                        }
                        else
                        {
                            echo "<h3>You <b><i>failed!</i></b> Retake test.</h3>";
                        }
                    }

                    echo "<br>";
                    echo "<div class='container'>Your final amount is: <br />$totalCorrect / 20 correct</div>";
                ?>
                <pre> 
                <?php
                    if(isset($_POST))
                    {
                        print_r($_POST);
                    }
                ?>
                </pre>

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