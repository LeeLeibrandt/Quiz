<!DOCTYPE html>
<html lang="en">

    <head>
    <title>quiz</title>
    <meta charset ="utf-8">
    <link rel="stylesheet" href="css/page.css" text="text/css"> 
    </head>

    <body>
    
    <header>
        <div class="container">
            <h1>PHP Quiz</h1>
        </div>
    </header>

    <main>
        <div class="container">
           <h2>You're Done!</h2>
           <p>Congrats! You have complete the test.</p>
           <p>Final Score: 8</p>
           <a href="index.php?n-1" class="start">Take Again</a>
        </div>
    </main>

    <center><h1>Result | Webdevtrick.com</h1>
		
        <?php
            echo "<br>";

            echo "<div id='results'>$totalCorrect / 10 correct</div>";

            echo "<br>";
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
        
            $totalCorrect = 0;
            
            if ($answer1 == "D") { $totalCorrect++; }
            if ($answer2 == "D") { $totalCorrect++; }
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
            if ($answer18 == "B") { $totalCorrect++; }
            if ($answer19 == "B") { $totalCorrect++; }
            if ($answer20 == "D") { $totalCorrect++; }
            
            
        ?>

    <footer>
        <div class="container">
            Copyright &copy 2020, Lee Lebrandt.
        </div>
    </footer>
      
        
    </body>

</html>