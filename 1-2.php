<html>
    <head>
        <title>TUTORIAL SQL_list</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="1-2.css">
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
                <h1>SQL TUTORIAL</h1>
                <p>There are many SQL syntax.</p>
            </div>

                <br>
                <br>

            <table class="table table-striped">
                <h5>This is example table</h5>
                <ul id="list">
                    <li>DateBase name : mydb</li>
                    <li>Table name : demo</li>
                </ul>

                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Firstname</th>
                        <th scope="col">Lastname</th>
                        <th scope="col">Age</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>Bird</td>
                        <td>25</td>
                    </tr>
                </tbody>
            </table>
            

            <br>
            <br>
            <br>
            <br>
            
            <h3>SQL list</h3>
            
            <div class="flex">
                <div class="box">
                    <h5>①　SHOW TABLES</h5>
                    <p>▶︎　This is used to express how many tables in the datebase .</p>
                    <div class="output">
                        <h6>Output</h6>
                        <p>demo</p>
                    </div>
                </div>

                <div class="box" id="1">
                    <h5>②　SELECT * FROM demo</h5>
                    <p>▶︎　This is used to pick up infomation which I want from datebase . </p>
                    <div class="output">
                        <h6>Output</h6>
                        <p>1,Mark Otto 20 </p>
                        <p>2,Jacob Thornton 30 </p>
                        <p>3,Larry Bird 25</p>
                    </div>
                </div>

                <div class="box" id="2">
                    <h5>③　SELECT Lastname FROM demo</h5>
                    <p>▶︎　This is picked up only Lastname from datebase .</p>
                    <div class="output">
                        <h6>Output</h6>
                        <p>Otto<br>
                            Thornton<br>
                            Bird</p>
                    </div>
                </div>
            </div>

            <div class="flex">

                <div class="box">
                    <h5>④　SELECT DISTINCT age FROM demo</h5>
                    <p>▶︎　This is used to count how many kaind of values included in culumn.<br>
                          So, duplicated one is not counted .</p>
                    <div class="output">
                        <h6>Output</h6>
                        <p>25<br>
                            30
                        </p>
                    </div>
                </div>

                <div class="box">
                    <h5>⑤　SELECT COUNT (DISTINCI Age )FROM demo</h5>
                    <p>▶︎　This is used to count how many different Age value's is stored.</p>
                    <div class="output">
                        <h6>Output</h6>
                        <p>2</p>

                    </div>
                </div>

                <div class="box">
                    <h5>⑥　SELECT * FROM demo WHERE Firstname = 'Larry'</h5>
                    <p>▶︎</p>
                    <div class="output">
                        <h6>Output</h6>
                        <br>
                        <table>
                            <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Age</th>
                            </tr>

                            <tr>
                                <td>Larry</td>
                                <td>Bird</td>
                                <td>25</td>
                            </tr>
                        </table>
                    </div>

                </div>
            </div>

            <div class="flex">
                
                <div class="box">
                    <h5>⑦　SELECT * FROM demo WHERE <br> id = 3 AND Lastname = 'Bird'</h5>
                    <p>▶︎This is used to distinguish duplicated values by making one more conditions.</p>
                    <div class="output">
                        <h6>Output</h6>
                        <table>
                            <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Age</th>
                            </tr>

                            <tr>
                                <td>Larry</td>
                                <td>Bird</td>
                                <td>25</td>
                            </tr>
                        </table>
                    </div>
                    
                </div>

                <div class="box">
                    <h5>⑧　SELECT * FROM demo WHERE NOT Firstname = 'Jacob'</h5>
                    <p>▶︎This is used to print values without Firstname = 'Jacob'</p>
                    <div class="output">
                        <h6>Output</h6>
                        <table>
                            <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Age</th>
                            </tr>

                            <tr>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>25</td>
                            </tr>

                            <tr>
                                <td>Larry</td>
                                <td>Bird</td>
                                <td>25</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="box">
                    <h5>⑨　SELECT * FROM demo ORDER BY Lastname</h5>
                    <p>▶︎This is used to line up values a to z.</p>
                    <div class="output">
                        <h6>Output</h6>
                            <p>Bird</p> 
                            <p>Ottor</p>
                            <p>Jacob</p>
                    </div>
                </div>
            </div>

            <div class="flex">
                <div class="box">
                    <h5>⑩　SELECT * FROM demo ORDER BY Lastname　DESC</h5>
                    <p>▶︎This is used to line up values z to a.</p>
                    <div class="output">
                        <h6>Output</h6>
                            <p>Jacob</p>
                            <p>Ottor</p>
                            <p>Bird</p> 
                    </div>
                </div>

                <div class="box">
                    <h5>⑪　UPDATE demo SET Lastname = 'Smith' WHERE id = 2</h5>
                    <p>▶︎　This is used to restore value .</p>
                    <div class="output">
                        <h6>Output</h6>
                        <table>
                            <tr>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Age</th>
                            </tr>

                            <tr>
                                <td>Jacob</td>
                                <td>Smith</td>
                                <td>30</td>
                            </tr>
                        </table>
                        <p></p>
                    </div>
                </div>
            </div>


        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>