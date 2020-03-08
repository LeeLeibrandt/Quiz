<?php
    $data = array(
        'Both Iron Man and Doctor Strange actors played which identical role outside the MCU?'=>[
        "Willie Wonka"=>"ans1",
        "Dracula"=>"ans1",
        "Jack the Ripper"=>"ans1",
        "Sherlock Holmes"=>"ans1"
        ],

        'Before turning whitish-blonde, what was Natasha Romanoff original hair color?'=>[
            "Brown"=>"ans2",
            "Black"=>"ans2",
            "Red"=>"ans2",
            "Purple"=>"ans2"
        ],

        'What do you call that gadget which Nick Fury used to contact Captain Marvel?'=>[
            "Walkie-Talkie"=>"ans3",
            "I Pad"=>"ans3",
            "Pager"=>"ans3",
            "Nokia Phone"=>"ans3"
        ],

        'Can you recall which fallen hero said "I dont feel so good" during The Snap?'=>[
            "Doctor Strange"=>"ans4",
            "Pete Quill"=>"ans4",
            "Black Panther"=>"ans4",
            "Spider Man"=>"ans4"
        ],

        'This Avenger ally originally belonged to the X-Men team. Do you know who?'=>[
            "J.A.R.V.I.S."=>"ans5",
            "Peggy Carter"=>"ans5",
            "Quicksilver"=>"ans5",
            "None of above"=>"ans5"
        ],

        'Which Guardian of the Galaxy did Thor take the time to introduce to Captain America while they were already fighting enemies in "Avengers: Infinity War"?'=>[
            "Nebula"=>"ans6",
            "Star-Lord"=>"ans6",
            "Groot"=>"ans6",
            "Garmora"=>"ans6"
        ],

        'Scarlett Johansson had a "special status" while shooting "Avengers: Age of Ultron." What state was she in at that time?'=>[
            "Recovering from an accident"=>"ans7",
            "Pregnant"=>"ans7",
            "Had a major operation"=>"ans7",
            "Getting a divorce"=>"ans7"
        ],

        'Aside from Thor, who among the original Avengers gang was worthy of handling his hammer?'=>[
            "Captain America"=>"ans8",
            "The Hulk"=>"ans8",
            "Vision"=>"ans8",
            "Iron Man"=>"ans8"
        ],
        
        'This Avenger friend "hid" in Wakanda. Which one did this in vibranium land?'=>[
            "Peter Quill"=>"ans9",
            "Scott Lang"=>"ans9",
            "Bucky Barnes"=>"ans9",
            "Sam Wilson"=>"ans9"
        ],

        'Vision came from which of the Infinity Stones?'=>[
            "Mind Stone"=>"ans10",
            "Time Stone"=>"ans10",
            "Soul Stone"=>"ans10",
            "Power Stone"=>"ans10"
        ],

        'If the reality stone is red and the power stone is purple, what colors are the soul and space stones?'=>[
            "Green and Pink"=>"ans11",
            "Black and Green"=>"ans11",
            "Orange and Blue"=>"ans11",
            "Brown and Grey"=>"ans11"
        ],

        'Can you recall which 80s movie our heroes referenced when they traveled back in time in "Avengers: Endgame"?'=>[
            "Blade Runner"=>"ans12",
            "Star Trek"=>"ans12",
            "Star Wars"=>"ans12",
            "Back to the future"=>"ans12"
        ],

        'She had an obvious haircut in one movie alone. Which hero is this?'=>[
            "Gamora"=>"ans13",
            "Maria Hill"=>"ans13",
            "Carol Danvers"=>"ans13",
            "Natasha Romanoff"=>"ans13"
        ],

        'Can you guess which heavy metal band Tony Stark loves, in relation to being Iron Man?'=>[
            "Metallica"=>"ans14",
            "KISS"=>"ans14",
            "Black Sabbath"=>"ans14",
            "Def Leppard"=>"ans14"
        ],

        'In the comics, this hero was part of the original Avengers but they rewrote this role in the MCU. Do you know who?'=>[
            "Black Panther"=>"ans15",
            "Ant-Man"=>"ans15",
            "Doctor Strange"=>"ans15",
            "Blade"=>"ans15"
        ],

        'Was Thanos Infinity Gauntlet worn on the left hand or the right hand?'=>[
            "Left"=>"ans16",
            "Right"=>"ans16",
            "It was ambidextrous"=>"ans16",
            "It's unclear"=>"ans16"
        ],

        'What is the name of Peter Quill’s alter-ego in Guardians of the Galaxy?'=>[
            "Yondu"=>"ans17",
            "Drax"=>"ans17",
            "Star Lord"=>"ans17",
            "Star Prince"=>"ans17"
        ],

        'After the snap, Thanos "retired" in a garden with a prominent rice terraces landscape. Can you take a wild guess where that actual terraces are located?'=>[
            "New Zealanad"=>"ans18",
            "Canada"=>"ans18",
            "Philippines"=>"ans18",
            "Spain"=>"ans18"
        ],

        'Whenever Thor is around, which person always reminded him of home?'=>[
            "Valkyrie"=>"ans19",
            "Loki"=>"ans19",
            "Jane Foster"=>"ans19",
            "Thanos"=>"ans19"
        ],

        'What was the line Hulk used in this scene?'=>[
            "Cheese"=>"ans20",
            "Hulk smash"=>"ans20",
            "Green"=>"ans20",
            "Time travel"=>"ans20"
        ]  
    ); 

   $answer = array(3,2,2,3,2,2,1,0,2,2,2,3,2,2,1,0,2,2,1,3);       

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
             
               if($_POST)
                {
                    $answer[0] = $_POST['ans1'];
                    $answer[1] = $_POST['ans2'];
                    $answer[2] = $_POST['ans3'];
                    $answer[3] = $_POST['ans4'];
                    $answer[4] = $_POST['ans5'];
                    $answer[5] = $_POST['ans6'];
                    $answer[6] = $_POST['ans7'];
                    $answer[7] = $_POST['ans8'];
                    $answer[8] = $_POST['an9'];
                    $answer[9] = $_POST['ans10'];
                    $answer[10] = $_POST['ans11'];
                    $answer[11] = $_POST['ans12'];
                    $answer[12] = $_POST['ans13'];
                    $answer[13] = $_POST['ans14'];
                    $answer[14] = $_POST['ans15'];
                    $answer[15] = $_POST['ans16'];
                    $answer[16] = $_POST['ans17'];
                    $answer[17] = $_POST['ans18'];
                    $answer[18] = $_POST['ans19'];
                    $answer[19] = $_POST['ans20']; 
                }

                $totalCorrect = 0;

                if($_POST)
                {
                    if ($answer[0] ) 
                    {
                        $totalCorrect++;
                    } 
                    if ($answer[1] == $data[1])
                    {
                        $totalCorrect++;
                    }
                    if ($answer[2] == $data[2])
                    {
                        $totalCorrect++;
                    }
                    if ($answer[3] == $data[3])
                    {
                        $totalCorrect++;
                    }
                    if ($answer[4] == $data[4] )
                    {
                        $totalCorrect++;
                    }
                    if ($answer[5] == $data[5])
                    {
                        $totalCorrect++;
                    }
                    if ($answer[6] == $data[6])
                    {
                        $totalCorrect++;
                    }
                    if ($answer[7] == $data[7])
                    {
                        $totalCorrect++;
                    }
                    if ($answer[8] == $data[8])
                    {
                        $totalCorrect++;
                    }
                    if ($answer[9] == $data[9])
                    {
                        $totalCorrect++;
                    }
                    if ($answer[10] == $data[10])
                    {
                        $totalCorrect++;
                    }
                    if ($answer[11] == $data[11])
                    {
                        $totalCorrect++;
                    }
                    if ($answer[12] == $data[12])
                    {
                        $totalCorrect++;
                    }
                    if ($answer[13] == $data[13])
                    { 
                        $totalCorrect++;
                    }
                    if ($answer[14] == $data[14])
                    {
                        $totalCorrect++;
                    }
                    if ($answer[15] == $data[15])
                    {
                        $totalCorrect++;
                    }
                    if ($answer[16] == $data[16])
                    {
                        $totalCorrect++;
                    }
                    if ($answer[17] == $data[17])
                    {
                        $totalCorrect++;
                    }
                    if ($answer[18] == $data[18])
                    {
                        $totalCorrect++;
                    }
                    if ($answer[19] == $data[19])
                    {
                        $totalCorrect++;
                    }
                } 

                $totalCorrect = 0;  
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
                        elseif($totalCorrect <= $ave)
                        {
                            echo "<h3>You<b><i>failed!</i></b> Retake test.</h3>";
                        }
                    }
                    else
                    {
                        echo "<h3>Retake test!</h3>";
                    }
                }

                echo "<br>";
                echo "<div class='container'>Your final amount is: <br />$totalCorrect / 20 correct</div>";
               
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