<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="javascript/jquery-3.6.0.js"></script>
    <script src="javascript/script.js"></script>
    <script
  src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"
  integrity="sha256-xH4q8N0pEzrZMaRmd7gQVcTZiFei+HfRTBPJ1OGXC0k="
  crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/createLive.css">
</head>
<body>
    <?php
        include 'navigationheader.php';
    ?>
    <section class = "container">
        <div class = "select-live">
            <div class = "h2-live">
                <h2 class = "h2 not-red" >CREATE LIVE</h2>
            </div>
            <div class = "go-live">
                <button class = "go-live-button">
                <h2 class = "h2" >Go Live</h2>
                <p>People can watch, add reactions, and comment on your live</p>
                </button>
            </div>
            <div class = "schedule-live">
                <button class = "schedule-live-button">
                <h2 class = "h2" >Schedule a Live</h2>
                <p>Let people know your live campaign date and time through this app</p>
                </button>
            </div>
            <a href = "live.php"><button class = "cancel" type = "button">CANCEL</button></a>
        </div>
        <div class="go-live-container">
            <div class = "h2-live">
                <h2 class = "h2 not-red" >GO LIVE NOW!</h2>
            </div>
            <form class = "go-live-form">
                <input type="text" name="live-title" placeholder = "Enter your LIVE title here" required>
                <textarea class = "live-description" type="text" name="live-description" placeholder = "Enter some description here"required></textarea>
                <select name="camera" id = "camera"required>
                    <option value="camera">Camera</option>
                </select>
                <select name="microphone" id = "microphone" required>
                    <option value="microphone">Microphone</option>
                </select>
                <input id = "go-live-submit" type="submit" value="GO LIVE!">
                <button type = "button" class = "cancel back-from-go-live-button">BACK</button>
            </form>
        </div>
        <div class="schedule-live-container">
            <div class = "h2-live">
                <h2 class = "h2 not-red" >POST YOUR SCHEDULES LIVE</h2>
            </div>
            <form class = "schedule-live-form">
                <input type="text" name="schedule-title" placeholder = "Enter your post title here" required>
                <textarea class = "live-description" type="text" name="live-description" placeholder = "Enter some description here"required></textarea>
                <input type="date" name="date" id="date" required>
                <input type="time" name="time" id="time" required>
                <input id = "schedule-live-submit" type="submit" value="POST NOW">
                <button type = "button" class = "cancel back-from-schedule-live-button">BACK</button>
            </form>
        </div>
    </section>
    <?php include 'bottomnav.php'; ?>
</body>
</html>