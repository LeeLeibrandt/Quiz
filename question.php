<?php
    $totalcorrect = 0;
    $data = array(
        'Both Iron Man and Doctor Strange actors played which identical role outside the MCU?'=>[
        "Willie Wonka"=>"ans",
        "Dracula"=>"ans",
        "Jack the Ripper"=>"ans",
        "Sherlock Holmes"=>"ans1"
        ],

        'Before turning whitish-blonde, what was Natasha Romanoff original hair color?'=>[
            "Brown"=>"ans",
            "Black"=>"ans",
            "Red"=>"ans2",
            "Purple"=>"ans"
        ],

        'What do you call that gadget which Nick Fury used to contact Captain Marvel?'=>[
            "Walkie-Talkie"=>"ans",
            "I Pad"=>"ans",
            "Pager"=>"ans3",
            "Nokia Phone"=>"ans"
        ],

        'Can you recall which fallen hero said "I dont feel so good" during The Snap?'=>[
            "Doctor Strange"=>"ans",
            "Pete Quill"=>"ans",
            "Black Panther"=>"ans",
            "Spider Man"=>"ans4"
        ],

        'This Avenger ally originally belonged to the X-Men team. Do you know who?'=>[
            "J.A.R.V.I.S."=>"ans",
            "Peggy Carter"=>"ans",
            "Quicksilver"=>"ans5",
            "None of above"=>"ans"
        ],

        'Which Guardian of the Galaxy did Thor take the time to introduce to Captain America while they were already fighting enemies in "Avengers: Infinity War"?'=>[
            "Nebula"=>"ans",
            "Star-Lord"=>"ans",
            "Groot"=>"ans6",
            "Garmora"=>"ans"
        ],

        'Scarlett Johansson had a "special status" while shooting "Avengers: Age of Ultron." What state was she in at that time?'=>[
            "Recovering from an accident"=>"ans",
            "Pregnant"=>"ans7",
            "Had a major operation"=>"ans",
            "Getting a divorce"=>"ans"
        ],

        'Aside from Thor, who among the original Avengers gang was worthy of handling his hammer?'=>[
            "Captain America"=>"ans8",
            "The Hulk"=>"ans",
            "Vision"=>"ans",
            "Iron Man"=>"ans"
        ],
        
        'This Avenger friend "hid" in Wakanda. Which one did this in vibranium land?'=>[
            "Peter Quill"=>"ans",
            "Scott Lang"=>"ans",
            "Bucky Barnes"=>"ans9",
            "Sam Wilson"=>"ans"
        ],

        'Vision came from which of the Infinity Stones?'=>[
            "Mind Stone"=>"ans",
            "Time Stone"=>"ans",
            "Soul Stone"=>"ans10",
            "Power Stone"=>"ans"
        ],

        'If the reality stone is red and the power stone is purple, what colors are the soul and space stones?'=>[
            "Green and Pink"=>"ans",
            "Black and Green"=>"ans",
            "Orange and Blue"=>"ans11",
            "Brown and Grey"=>"ans"
        ],

        'Can you recall which 80s movie our heroes referenced when they traveled back in time in "Avengers: Endgame"?'=>[
            "Blade Runner"=>"ans",
            "Star Trek"=>"ans",
            "Star Wars"=>"ans",
            "Back to the future"=>"ans12"
        ],

        'She had an obvious haircut in one movie alone. Which hero is this?'=>[
            "Gamora"=>"ans",
            "Maria Hill"=>"ans",
            "Carol Danvers"=>"ans13",
            "Natasha Romanoff"=>"ans"
        ],

        'Can you guess which heavy metal band Tony Stark loves, in relation to being Iron Man?'=>[
            "Metallica"=>"ans",
            "KISS"=>"ans",
            "Black Sabbath"=>"ans14",
            "Def Leppard"=>"ans"
        ],

        'In the comics, this hero was part of the original Avengers but they rewrote this role in the MCU. Do you know who?'=>[
            "Black Panther"=>"ans",
            "Ant-Man"=>"ans15",
            "Doctor Strange"=>"ans",
            "Blade"=>"ans"
        ],

        'Was Thanos Infinity Gauntlet worn on the left hand or the right hand?'=>[
            "Left"=>"ans16",
            "Right"=>"ans",
            "It was ambidextrous"=>"ans",
            "It's unclear"=>"ans"
        ],

        'What is the name of Peter Quill’s alter-ego in Guardians of the Galaxy?'=>[
            "Yondu"=>"ans",
            "Drax"=>"ans",
            "Star Lord"=>"ans17",
            "Star Prince"=>"ans"
        ],

        'After the snap, Thanos "retired" in a garden with a prominent rice terraces landscape. Can you take a wild guess where that actual terraces are located?'=>[
            "New Zealanad"=>"ans",
            "Canada"=>"ans",
            "Philippines"=>"ans18",
            "Spain"=>"ans"
        ],

        'Whenever Thor is around, which person always reminded him of home?'=>[
            "Valkyrie"=>"ans",
            "Loki"=>"ans19",
            "Jane Foster"=>"ans",
            "Thanos"=>"ans"
        ],

        'What was the line Hulk used in this scene?'=>[
            "Cheese"=>"ans",
            "Hulk smash"=>"ans",
            "Green"=>"ans",
            "Time travel"=>"ans20"
        ]  
    ); 

   /* if (isset($_POST['submit']))
    {
        if ( $ans[0] == "ans1" ) {$totalCorrect++;}
        if ( $ans[1] == "ans2" ) {$totalCorrect++;}
        if ( $ans[2] == "ans3" ) {$totalCorrect++;}
        if ( $ans[3] == "ans4" ) {$totalCorrect++;}
        if ( $ans[4] == "ans5" ) {$totalCorrect++;}
        if ( $ans[5] == "ans6" ) {$totalCorrect++;}
        if ( $ans[6] == "ans7" ) {$totalCorrect++;}
        if ( $ans[7] == "ans8" ) {$totalCorrect++;}
        if ( $ans[8] == "ans9" ) {$totalCorrect++;}
        if ( $ans[9] == "ans10" ) {$totalCorrect++;}
    
        $ans[] = $_POST["ans11"];
        $ans[] = $_POST["ans12"];
        $ans[] = $_POST["ans13"];
        $ans[] = $_POST["ans14"];
        $ans[] = $_POST["ans15"];
        $ans[] = $_POST["ans16"];
        $ans[] = $_POST["ans17"];
        $ans[] = $_POST["ans18"];
        $ans[] = $_POST["ans19"];
        $ans[] = $_POST["ans20"];

        var_dump($ans);        
*/
    

    //if ($i == $_POST['$ans1'] ) { $totalcorrect++ ;}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
    <title>quiz</title>
    <meta charset ="utf-8">
    <link  rel="stylesheet" href="css/style.css" text="text/css"> 
    </head>

    <body>
        <center>
        <header>
            <div class="container">
                <h1>Questions are as follows:</h1>
            </div>
        </header>

        <br>
        <form action="question.php" method="post" id="quiz">
            <?php foreach ($data as $key => $value) : ?>

                <div class="container">
                    <h3 class="label"> <?php echo $key ?> </h3>
                    <?php foreach ($value as $ques => $attrName) : ?>

                        <input type="radio" name="<?php echo $attrName ?>" value="<?php echo $ques ?>"> 
                        <label for="radio"><?php echo $ques ?></label>
                        <br>

                    <?php endforeach ?> 
                </div>

            <?php endforeach ?> 

            <?php 
            $totalCorrect = 0;
                if($_POST)
                {
                    $ans[0] = $_POST['ans1'];
                    $ans[1] = $_POST['ans2'];
                    $ans[2] = $_POST['ans3'];
                    $ans[3] = $_POST['ans4'];
                    $ans[4] = $_POST['ans5'];
                    $ans[5] = $_POST['ans6'];
                    $ans[6] = $_POST['ans7'];
                    $ans[7] = $_POST['ans8'];
                    $ans[8] = $_POST['ans9'];
                    $ans[9] = $_POST['ans10'];
                    $ans[] = $_POST['ans'];
                }

                if($_POST)
                {
                    if ($ans[0] == $_POST['ans1']) 
                    {
                        $totalCorrect++;
                    } 
                    if ($ans[1] == $_POST['ans2'])
                    {
                        $totalCorrect++;
                    }
                    if ($ans[2] == $_POST['ans3'])
                    {
                        $totalCorrect++;
                    }
                    if ($ans[3] == $_POST['ans4'])
                    {
                        $totalCorrect++;
                    }if ($ans[4] == $_POST['ans5'])
                    {
                        $totalCorrect++;
                    }
                    if ($ans[5] == $_POST['ans6'])
                    {
                        $totalCorrect++;
                    }
                    if ($ans[6] == $_POST['ans7'])
                    {
                        $totalCorrect++;
                    }
                    if ($ans[7] == $_POST['ans8'])
                    {
                        $totalCorrect++;
                    }
                    if ($ans[8] == $_POST['ans'])
                    {
                        $totalCorrect++;
                    }
                    if ($ans[9] == $_POST['ans10'])
                    {
                        $totalCorrect++;
                    }
                }    
               
                $max = 15;
                $ave = 10;
                $min = 5;

                if (isset($_POST['submit']))
                {
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
                            echo "You failed! Retake test.";
                        }
                    }
                    else
                    {
                        echo "Retake test!";
                    }
                }
                
                echo "<div class='container'>Your final amount is: <br />$totalCorrect / 20 correct</div>";
                echo "<br>";
                echo "<br>"; 
            ?>

            <br>
                <input type="submit" value="Submit" class="submitbtn" />
            <br><br>
    
        </form>      
        
        <footer>
            <div class="container">
                Copyright &copy 2020, Lee Leibrandt.
            </div>
        </footer>
              
    </body>
</html>