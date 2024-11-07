<?php
// index.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music in the Background</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- The clickable link in the center of the page -->
    <div class="content">
        <a href="https://t.me/LunarsTLOs" target="_blank">Channel</a>
    </div>

    <!-- Hidden audio player that plays the music in the background -->
    <audio id="backgroundMusic" autoplay loop>
        <source src="music/song.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
</body>
</html>