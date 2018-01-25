<head>
    <title>PHP MVC LogIn</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mladen Milosavljevic">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="prettyPhoto.css" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="responsive.css" rel="stylesheet">
</head>

<div class="body">
    <div class="container">
        <div class="content">
            <div class="login">
                <section id="log">
                    <?php
                    if (@$_GET[log]) {
                        $url = $_GET['log'] . ".php";
                        if (is_file($url)) {
                            include $url;
                        } else {
                            echo "Fajl nije pronadjen";
                        }
                    }   else {
                        include './log.php';
                    }
                ?>

                
                </section>
            </div>
        </div>
    </div>
</div>