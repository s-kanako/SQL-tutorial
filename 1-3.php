<html>
    <head>
        <title>TUTORIAL</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="1-3.css">
    </head>


    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="1-1.php">Create</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="1-2.php">SQL list</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="1-3.php">Included / require</a>
                    </li>
                </ul>
            </div>
        </nav>
        
        <div class="main">
            <div class="title">
                <h1>TUTORIAL</h1>
                <p>▶︎ This page explains how to connect a php file to another one .</p>
                <p>We have two way .</p>
            </div>
            
            <div class="flex">
                <div class="box">
                    <h5>1, Include</h5>
                    <p>▶︎ This is will only produce a warning and the script will continue </p>
                    <p>If somepart has error,the other part are executed normaly .</p>
                    <div class="output">
                        <p>How to write</p>
                        <p>include 'the name of php file' ;</p>
                    </div>
                </div>

                <div class="box">
                    <h5>2, Require</h5>
                    <p>▶︎ This will produce a fatal error and stop the script</p>
                    <p>If somepart has error,the other part are not  executed  .</p>

                    <div class="output">
                        <h6>How to write</h6>
                        <p>require 'the name of php file' ;</p>
                    </div>
                </div>
            </div>
            


        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>