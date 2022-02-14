<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=QewEgAhc"></script>
</head>

<body>
    <input type="text" id="text_input">
    <button onclick="laygiongnoi()" type="button" value="Play">Play</button>
    <script>
        function laygiongnoi() {
            var textinput = $('#text_input').val();
            responsiveVoice.speak(textinput);
        }
    </script>
</body>

</html>