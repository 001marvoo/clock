<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript Digital Clock</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="clock" id="clock"></div>

    <script>
        function updateClock() {
            // Create a new Date object
            let now = new Date();

            // Get hours, minutes, and seconds
            let hours = now.getHours();
            let minutes = now.getMinutes();
            let seconds = now.getSeconds();

            // Format time to add leading zeros if needed
            hours = hours < 10 ? "0" + hours : hours;
            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            // Display the time in "HH:MM:SS" format
            document.getElementById("clock").textContent = hours + ":" + minutes + ":" + seconds;
        }

        // Update the clock every second
        setInterval(updateClock, 1000);

        // Initial call to display the clock immediately
        updateClock();
    </script>
</body>
</html>


    
</body>
</html>