<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elections</title>
    <script src="javascript/jquery-3.6.0.js" defer></script>
    <script src="javascript/script.js" defer></script>
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
        <div class="feed-item" id = "go-to-voting">
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
    <section class = "voting-page">
        <header class = "election-header">
            <button id = "back-to-election"> <img src="img/icons/back.png"> </button>
            <h2 class = "election-title">BulSU Student Government Election 2022</h2>
            <p class = "election-date">Date: 22/06/22 8:00PM - 26/05/22 8:00PM</p>
        </header>
        <div class = "election-graphs">
            <div class = "pie-chart">
                <h4>Voter's Live Turnout</h4>
                <div id = "pie-1"></div>
            </div>
            <div class = "legends">
                <div class = "legend-item">
                    <div class = "voted"></div>
                    <span>Voted</span><br>
                </div>
                <div class = "legend-item">
                    <div class="not-yet-voted"></div>
                    <span>Yet to vote</span>
                </div>
                <div class="legend-item">
                    <p>Number of Voters: 10,863</p>
                </div>
                <div class="legend-item">
                    <p>Total Votes Casted: 7,652</p>
                </div>
            </div>
            <div class = "pie-chart">
                <h4>Registered Voters</h4>
                <div id = "pie-2"></div>
            </div>
            <div class="legends">
                <div class="legend-item">
                    <div class="orange"></div>
                    <span>1st Year: 4500</span>
                </div>
                <div class="legend-item">
                    <div class="blue"></div>
                    <span>2nd Year: 1500</span>
                </div>
                <div class="legend-item">
                    <div class="red"></div>
                    <span>3nd Year: 2500</span>
                </div>
                <div class="legend-item">
                    <div class="light-blue"></div>
                    <span>4th Year: 1000</span>
                </div>
                <div class="legend-item">
                    <div class="yellow"></div>
                    <span>5th Year: 500</span>
                </div>
            </div>
        </div>
        <h2>Candidates</h2>
        <h3>President</h3>
        <div class="presidents">
            <div class="president">
                <div>
                    <img src="img/person.jpg" class = "person-image">
                </div>
                <div class = "president-description">
                    <h3>SANTIAGO</h3>
                    <p>Jimwell D.</p>
                    <p>(LPARTY)</p>
                    <p>BSIT - 3rd Year</p>
                </div>
            </div>
            <div class="president">
                <div>
                    <img src="img/person.jpg" class = "person-image">
                </div>
                <div class = "president-description">
                    <h3>SERVINO</h3>
                    <p>Jericho F.</p>
                    <p>(SPARTY)</p>
                    <p>BSIT - 3rd Year</p>
                </div>
            </div>
        </div>
        <h3>Vice-President</h3>
        <div class="vice-presidents">
            <div class="vice-president">
                <div>
                    <img src="img/person.jpg" class = "person-image">
                </div>
                <div class = "vice-president-description">
                    <h3>CULALA</h3>
                    <p>Marcus Dave C.</p>
                    <p>(SPARTY)</p>
                    <p>BSIT - 3rd Year</p>
                </div>
            </div>
            <div class="vice-president">
                <div>
                    <img src="img/person.jpg" class = "person-image">
                </div>
                <div class = "vice-president-description">
                    <h3>OCHOA</h3>
                    <p>Kyle Emmanuel F.</p>
                    <p>(LPARTY)</p>
                    <p>BSIT - 3rd Year</p>
                </div>
            </div>
        </div>
        <button data-modal-target = "#modal" class = "vote-now-button"><h2>VOTE NOW</h2></button>
        <div class="voting-section-modal" id = "modal">
            <form class = "voting-form" id = "voting-form" formaction = "">
                <h3 id = "president-ballot">PRESIDENT | Vote for 1</h3>
                <input type="radio" name="president" id="jimwell" value = "jimwell" required>
                <label for="jimwell">Santiago, Jimwellsad D.</label>
                <input type="radio" name="president" id="jericho" value = "jericho">
                <label for="jericho">Servino, Jericho F.</label>
                <h3 id = "vice-president-ballot">VICE-PRESIDENT | Vote for 1</h3>
                <input type="radio" name="vicePresident" id="marcus" value = "marcus" required>
                <label for="marcus">Culala, Marcus C.</label>
                <input type="radio" name="vicePresident" id="kyle" value = "kyle">
                <label for="kyle">Ochoa, Kyle Emmanuel F.</label><br>
                <input type="submit" value="SUBMIT VOTE" id = "submit-vote">
                <button data-close-button type = "button" id = "cancel-vote">CANCEL</button>
            </form>
        </div>
        <div id="overlay"></div>
    </section>
    <?php include 'bottomnav.php'; ?>
</body>
</html>