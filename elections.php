<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elections</title>
    <script src="javascript/jquery-3.6.0.js" defer></script>
    <script src="javascript/script.js" defer></script>
    <script
  src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"
  integrity="sha256-xH4q8N0pEzrZMaRmd7gQVcTZiFei+HfRTBPJ1OGXC0k="
  crossorigin="anonymous" defer></script>
    <script src="javascript/modalElection.js" defer></script>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/cards.css">
    <link rel="stylesheet" href="css/election.css">
</head>
<body>
    <?php
        include 'navigationheader.php';
    ?>
    <section class="feedContainer">
    <a href= "election.php">
        <div class="feed-item">
            <img src="img/sg logo.jpg" class = "image">
            <div class="schedule">
                <p>Schedule: 28/05/22 8:00 PM</p>
            </div>
            <div class = "feed-description">
                <h3>BulSU Student Government Election 2022</h3>
                <p class = "intro">Lorem ipsum, dolor sit amet consectetur adipisicing elit. saddsasdaddassadsadsadsadfsadsad Fuga amet delectus non officiis consectetur!</p>
                <p class = "election-created-by">Created By: Kyle Ochoa</p>
            </div>
        </div>
        </a>
        <div class="feed-item">
            <img src="img/sg logo.jpg" class = "image">
            <div class="schedule">
                        <p>Schedule: 28/05/22 8:00 PM</p>
                </div>
            <div class = "feed-description">

                <h3>BulSU Student Government Election 2021</h3>
                <p class = "intro">Lorem ipsum, dolor sit amet consectetur  adipisicing elit. Fuga facilis amet delectus non officiis consectetur!</p>
                <p class = "election-created-by">Created By: Kyle Ochoa</p>
            </div>
        </div>
        <div class="feed-item">
            <img src="img/sg logo.jpg" class = "image">
            <div class="schedule">
                        <p>Schedule: 28/05/22 8:00 PM</p>
                </div>
            <div class = "feed-description">
                <h3>BulSU Student Government Election 2020</h3>
                <p class = "intro">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga facilis amet delectus non officiis consectetur!</p>
                <p class = "election-created-by">Created By: Kyle Ochoa</p>
            </div>
        </div>
        <div class="feed-item">
            <img src="img/sg logo.jpg" class = "image">
            <div class="schedule">
                        <p>Schedule: 28/05/22 8:00 PM</p>
                </div>
            <div class = "feed-description">
                <h3>BulSU Student Government Election 2019</h3>
                <p class = "intro">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga facilis amet delectus non officiis consectetur!</p>
                <p class = "election-created-by">Created By: Kyle Ochoa</p>
            </div>
        </div>
    </section>
    <?php include 'bottomnav.php'; ?>
</body>
</html>