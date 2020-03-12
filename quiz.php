<!DOCTYPE html>
<html lang="en">
    <head>
        <title>quiz</title>
        <meta charset ="utf-8">
        <link rel="stylesheet" href="css/style.css" text="text/css">
    </head>

    <body>

    <?php 
        $Question = array
        (

            1 =>array(
                'Question' => '1. Both Iron Man and Doctor Strange actors played which identical role outside the MCU?',
                'Answers' => array(
                    'A' => 'Willie Wonka',
                    'B' => 'Dracula',
                    'C' => 'Jack the Ripper',
                    'D' => 'Sherlock Holmes'
                ),
                'CorrectAnswer' => 'D'
            ),

            2 =>array(
                'Question' => '2. Before turning whitish-blonde, what was Natasha Romanoff original hair color?',
                'Answers' => array(
                    'A' => 'Brown',
                    'B' => 'Black',
                    'C' => 'Red',
                    'D' => 'Purple'
                ),
                'CorrectAnswer' => 'C'
            ),

            3 =>array(
                'Question' => '3. What do you call that gadget which Nick Fury used to contact Captain Marvel?',
                'Answers' => array(
                    'A' => 'Walkie-Talkie',
                    'B' => 'I-Pad',
                    'C' => 'Pager',
                    'D' => 'Nokia Phone'
                ),
                'CorrectAnswer' => 'C'
            ),
            
            4 =>array(
                'Question' => '4. Can you recall which fallen hero said "I dont feel so good" during The Snap?',
                'Answers' => array(
                    'A' => 'Doctor Strange',
                    'B' => 'Pete Quill',
                    'C' => 'Black Panther',
                    'D' => 'Spider Man'
                ),
                'CorrectAnswer' => 'D'
            ),

            5 =>array(
                'Question' => '5. This Avenger ally originally belonged to the X-Men team. Do you know who?',
                'Answers' => array(
                    'A' => 'J.A.R.V.I.S.',
                    'B' => 'Peggy Carter',
                    'C' => 'Quicksilver',
                    'D' => 'None of above'
                ),
                'CorrectAnswer' => 'C'
            ),

            6 =>array(
                'Question' => '6. Which Guardian of the Galaxy did Thor take the time to introduce to Captain America while they were already fighting enemies in "Avengers: Infinity War"?',
                'Answers' => array(
                    'A' => 'Nebula',
                    'B' => 'Star-Lord',
                    'C' => 'Groot',
                    'D' => 'Garmora'
                ),
                'CorrectAnswer' => 'C'
            ),

            7 =>array(
                'Question' => '7. Scarlett Johansson had a "special status" while shooting "Avengers: Age of Ultron." What state was she in at that time?',
                'Answers' => array(
                    'A' => 'Recovering from an accident',
                    'B' => 'Pregnant',
                    'C' => 'Had a major operation',
                    'D' => 'Getting a divorce'
                ),
                'CorrectAnswer' => 'B'
            ),

            8 =>array(
                'Question' => '8. Aside from Thor, who among the original Avengers gang was worthy of handling his hammer?',
                'Answers' => array(
                    'A' => 'Captain America',
                    'B' => 'The Hulk',
                    'C' => 'Vision',
                    'D' => 'Iron Man'
                ),
                'CorrectAnswer' => 'A'
            ),

            9 =>array(
                'Question' => '9. This Avenger friend "hid" in Wakanda. Which one did this in vibranium land?',
                'Answers' => array(
                    'A' => 'Peter Quill',
                    'B' => 'Scott Lang',
                    'C' => 'Bucky Barnes',
                    'D' => 'Sam Wilson'
                ),
                'CorrectAnswer' => 'C'
            ),
            
            10 =>array(
                'Question' => '10. Vision came from which of the Infinity Stones?',
                'Answers' => array(
                    'A' => 'Mind Stone ',
                    'B' => 'Time Stone',
                    'C' => 'Soul Stone',
                    'D' => 'Power Stone'
                ),
                'CorrectAnswer' => 'C'
            ),

            11 =>array(
                'Question' => '11. If the reality stone is red and the power stone is purple, what colors are the soul and space stones?',
                'Answers' => array(
                    'A' => 'Green and Pink',
                    'B' => 'Black and Green',
                    'C' => 'Orange and Blue',
                    'D' => 'Brown and Grey'
                ),
                'CorrectAnswer' => 'C'
            ),

            12 =>array(
                'Question' => '12. Can you recall which 80s movie our heroes referenced when they traveled back in time in "Avengers: Endgame"?',
                'Answers' => array(
                    'A' => 'Blade Runner',
                    'B' => 'Star Trek',
                    'C' => 'Star Wars',
                    'D' => 'Back to the future'
                ),
                'CorrectAnswer' => 'D'
            ),

            13 =>array(
                'Question' => '13. She had an obvious haircut in one movie alone. Which hero is this?',
                'Answers' => array(
                    'A' => 'Gamora',
                    'B' => 'Maria Hill',
                    'C' => 'Carol Danvers',
                    'D' => 'Natasha Romanoff'
                ),
                'CorrectAnswer' => 'C'
            ),

            14 =>array(
                'Question' => '14. Can you guess which heavy metal band Tony Stark loves, in relation to being Iron Man?',
                'Answers' => array(
                    'A' => 'Metallica ',
                    'B' => 'KISS',
                    'C' => 'Black Sabbath',
                    'D' => 'Def Leppard'
                ),
                'CorrectAnswer' => 'C'
            ),

            15 =>array(
                'Question' => '15. In the comics, this hero was part of the original Avengers but they rewrote this role in the MCU. Do you know who?',
                'Answers' => array(
                    'A' => 'Black Panther',
                    'B' => 'Ant-Man',
                    'C' => 'Doctor Strange',
                    'D' => 'Blade'
                ),
                'CorrectAnswer' => 'B'
            ),

            16 =>array(
                'Question' => '16. Was Thanos Infinity Gauntlet worn on the left hand or the right hand?',
                'Answers' => array(
                    'A' => 'Left',
                    'B' => 'Right',
                    'C' => 'It was ambidextrous',
                    'D' => 'Its unclear'
                ),
                'CorrectAnswer' => 'A'
            ),

            17 =>array(
                'Question' => '17. What is the name of Peter Quill’s alter-ego in Guardians of the Galaxy?',
                'Answers' => array(
                    'A' => 'Yondu',
                    'B' => 'Drax',
                    'C' => 'Star Lord',
                    'D' => 'Star Prince'
                ),
                'CorrectAnswer' => 'C'
            ),

            18 =>array(
                'Question' => '18. After the snap, Thanos "retired" in a garden with a prominent rice terraces landscape. Can you take a wild guess where that actual terraces are located?',
                'Answers' => array(
                    'A' => 'New Zealanad ',
                    'B' => 'Canada ',
                    'C' => 'Philippines',
                    'D' => 'Spain'
                ),
                'CorrectAnswer' => 'C'
            ),

            19 =>array(
                'Question' => '19. Whenever Thor is around, which person always reminded him of home?',
                'Answers' => array(
                    'A' => 'Valkyrie',
                    'B' => 'Loki ',
                    'C' => 'Jane Foster',
                    'D' => 'Thanos'
                ),
                'CorrectAnswer' => 'B'
            ),

            20 =>array(
                'Question' => '20. Who is the strongest avenger?',
                'Answers' => array(
                    'A' => 'Iron man',
                    'B' => 'Hulk ',
                    'C' => 'Thor',
                    'D' => 'Captain America'
                ),
                'CorrectAnswer' => 'B'
            )
        );

        if (isset($_POST['answers']))
        {
            $Answers = $_POST['answers'];
            $correct = 0; 

            echo "<center>";
            echo "<div class='container'>
                     <h1>Congrats Hero!!!</h1>
                 </div>";  
            echo "<div class ='container'> <div class='img'>
                        <img src='img/avengers-infinity-war-all-heroes-wallpaper-3840x1200-894_62.jpg' alt='avenger-logo'>
                    </div> </div>";
            echo "<br>";        
            echo "<div class='container'>
                  <h2>You're Done!</h2>
                  <p>You have complete the test.</p>
                  <h1>Marvel | Results</h1>";      

                foreach ($Question as $QuestionNo => $Value){
                    echo "<div class='cotainer'>";
                    // Echo the question
                    echo $Value['Question'].'<br />';

                    if ($Answers[$QuestionNo] != $Value['CorrectAnswer'])
                    {
                        echo 'You answered: <span style = "color: red; ">' . $Value['Answers'] [$Answers[$QuestionNo]] . '</span><br>';
                        echo 'Correct answer: <span style = "color: green; ">' . $Value['Answers'] [$Value['CorrectAnswer']] . '</span>';
                    } 
                    else 
                    {
                        echo 'Correct answer: <span style="color: green;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span><br>';
                        echo 'You are correct: <span style="color: green;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span>'; 
                        $correct++;
                    }
                    echo "<div>";
                    echo '<br />';
                    
                    if ($correct == 0) 
                    {                          
                        $results = "<h3>Your score: $correct/20</h3>"; 
                    }
                    else 
                    { 
                        $results = "<h3>Your score: $correct/20</h3>"; 
                    }
                }

                $min = 5;
                $ave = 10;
                $max = 15;
                $ultra = 17;

                if ($correct)
                {
                    if ($ultra <= $correct)
                    {
                        echo "<span style = 'color: purple;'><h3>Outstanding performance! You are a true marvel fan.</span></h3>";
                    }
                    elseif ($correct >= $max)
                    {
                        echo "<span style = 'color: green;'> <h3>Welldone Hero!.</span></h3>";
                    }
                    elseif($max <= $ave)
                    {
                        echo "<span style = 'color: green;'> <h3>Welldone Hero!</span></h3>";
                    }
                    elseif ($correct >= $ave)
                    {
                        echo "<span style = 'color: orange;'><h3>You scroed averaged.</span></h3>";
                    }
                    elseif ($min <= $correct)
                    {
                        echo "<span style = 'color: red;'> <h3>You performed poorly! Retake test.</span></h3>";
                    }
                }
                else
                {
                    echo "<span style = 'color: red;'> <h3>Retake test.</span></h3>";
                }
            
                echo "<br>";
                echo $results;
                echo "<button><a href='index.php?n-1' class='start'>Take Again</a></button>";
        } 
        else
        {  
            ?>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="quiz">
                    <?php foreach ($Question as $QuestionNo => $Value){ ?>

                        <center><div class = 'container'>
                            <img src="img/AVENGERS LOGO VERSION 2.png" alt="">
                            <h3><?php echo $Value['Question']; ?></h3>
                            <?php 
                                foreach ($Value['Answers'] as $Letter => $Answer){ 
                                $Label = 'question-'.$QuestionNo.'-answers-'.$Letter;
                            ?>
                            <div>
                                <input type="radio" name="answers[<?php echo $QuestionNo; ?>]" id="<?php echo $Label; ?>" value="<?php echo $Letter; ?>" required/>
                                <label for="<?php echo $Label; ?>"><?php echo $Letter; ?>) <?php echo $Answer; ?> </label>
                            </div>
                            <?php } ?>
                        </div>

                    <?php } ?><br><br>
                    <input type="submit" value="Process" />
                    <br><br>
                </form>

                <footer>
                    <div class="container">
                        Copyright &copy 2020, Lee Leibrandt.
                    </div>
                </footer>
            <?php 
        }
    ?>   
    </body>
</html>