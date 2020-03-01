
<!DOCTYPE html>
<html lang="en">

    <head>
    <title>quiz</title>
    <meta charset ="utf-8">
    <link rel="stylesheet" href="css/style.css" rel="stylesheet">
    </head>

    <center>
    <body>
        
        <header>
            <div class="container">
                <h1>For Marvel Fans</h1>
            </div>
        </header>

        <main>
            <div class="container">
                <h2>Test your knowlege.</h2>
                <img src="img/marvel studios.jpg" alt="Avengers">

                <h3>This is a mutiple choice quiz about the Marval Universe.</h3>
                <ul>
                    <strong>Type:</strong> Multiple choice <br>
                    <strong>Number of questions:</strong> 20 <br>
                    <strong>Estimated Time:</strong> 10 minutes <br>
                </ul>
                    <br>
                <form action="start.php" method="post" class="container">
                    <p>User Details:</p>
                    <input type="text" name="name" placeholder="name" required>
                    <input type="text" name="surname" placeholder="surname" required><br>
                    <button ><a href="question.php?n=1" class="start">Start Quiz</a></button>
                </form>
                <br><br>
            </div>
        </main>

        <footer>
            <div class="container">
                Copyright &copy 2020, Lee Leibrandt.
            </div>
        </footer>
    
    </body>

</html>