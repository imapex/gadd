<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NFVIS Deployment</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <style>
            P { text-align: center; }
	        p { font-family: "Arial", "Times", "serif"; }
            p.main { font-size: 120% }
     </style>
</head>
<body>
    <br>
    <p class="main"><strong>While we're turning up the FW at the branch, take a look at your Spark room for messages</p>
    <p><a href="gadd-h100-2.php"><IMG SRC="images/nfvisrun_opt.png" alt="Fighting Virus"></a></p>
    <script><?php exec("python ../../nfv_app.py"); ?></script>
</body>
</html>