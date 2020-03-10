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
                
                    if (isset($_POST['Answers'])){
                        // submitted answers.
                        $Answers = $_POST['Answers']; 

                        foreach ($Questions as $QuestionNo => $Value){  
                            // output the question
                            echo $Value['Question'].'<br />';

                            if ($Answers[$QuestionNo] != $Value['CorrectAnswer'])
                            { 
                                echo 'You answered: <span style="color: red;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span><br>';
                            } 
                            else
                            { 
                                echo 'Correct answer: <span style="color: green;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span><br>'; 
                            }
                            echo'<br />';
                        }  
                    }

                    if (isset($_POST['answers']))
                    {
                        // submitted answers.
                        $Answers = (isset($_POST['answers'])); 
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
                        echo "</div>";
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