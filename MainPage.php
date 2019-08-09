<?php
    require('db_connect.php');
    require('functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cash Register Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/d31c89c165.js"></script>
    <link rel="stylesheet" href="Assets/css/main.css">
    <script src="Assets/js/dropdown.js"></script>

</head>
<body style="background-color: #EDEDED">

<!-- ### NAVIGATION BAR ### -->
<nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-between" style="background-color: #FCCC12; padding:0.2rem 1.5rem">
    <a class="navbar-brand" href="#"><img src="Assets/logo.png" style="width:70px"></a>
    <div class="btn-group">
        <button type="button" class="btn btn-secondary dropdown-toggle font-weight-bold dropdown-account" style="background-color:rgb(252, 143, 18)" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">
        <?php
            session_start();
            if (isset($_SESSION["loggedid"])) {
                $s_user = $_SESSION["loggedid"];
                $s_self = $_SERVER["PHP_SELF"];
                echo $s_user;
            } else {
                echo "placeholder";
                header('Location: index.php');
            }
        ?>
        </button>
        <div class="dropdown-menu dropdown-menu-right">
            <button class="dropdown-item" type="button" href="#">Profile</button>
            <div class="dropdown-divider"></div>
            <button class="dropdown-item" type="button" onclick="location.href='logout.php'">Sign Out</button>
        </div>
    </div>
</nav>

<!-- ### CONTENT ### -->
<div class="container" style="max-width: 100%; margin:0%;">
    <div class="row">
        <div class="col-lg-5" style="background-color: #EDEDED; padding:0%">
            <!-- $$$ MENU $$$ -->
            <div class="border5">
                <div class="tab">
                    <div class="col-lg-12 d-flex flex-wrap justify-content-around">
                        <button type="button" class="btn btn-nav tablinks" onclick="myFunction(event,'ala carte')" id="defaultopen"> ALA CARTE</button>
                        <button type="button" class="btn btn-nav tablinks" onclick="myFunction(event,'combo')"> COMBO</button>
                        <button type="button" class="btn btn-nav tablinks" onclick="myFunction(event,'snack')"> SNACK</button>
                        <button type="button" class="btn btn-nav tablinks" onclick="myFunction(event,'drinks')"> DRINKS</button>
                        <button type="button" class="btn btn-nav tablinks" onclick="myFunction(event,'dessert')"> DESSERT</button>
                    </div>
                </div>
                <hr/>

                <div id="ala carte" class="tabcontent">
                    <?php
                        $menus = query($connection, "SELECT * FROM menu WHERE kategori='a la carte'");
                        $i = 0;
                        echo '<div class="col-lg-12 d-flex flex-wrap justify-content-around">';
                        while ($i < count($menus)) {
                            echo '<div class="card-container" onclick="neworder(' . $menus[$i]["id"] . ', \'' . $menus[$i]["nama"] . '\', ' . $menus[$i]["harga"] . ', 1)">
                                    <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                                    <div class="card-alacarte">' . $menus[$i]["nama"] . '</div>
                                </div>';
                            $i++;
                        }
                        echo '</div>'
                    ?>
                    
                </div>

                <div id="combo" class="tabcontent">
                    <?php
                        $menus = query($connection, "SELECT * FROM menu WHERE kategori='combo'");
                        $i = 0;
                        echo '<div class="col-lg-12 d-flex flex-wrap justify-content-around">';
                        while ($i < count($menus)) {
                            echo '<div class="card-container" onclick="neworder(' . $menus[$i]["id"] . ', \'' . $menus[$i]["nama"] . '\', ' . $menus[$i]["harga"] . ', 1)">
                                    <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                                    <div class="card-combo">' . $menus[$i]["nama"] . '</div>
                                </div>';
                            $i++;
                        }
                        echo '</div>'
                    ?>
                </div>

                <div id="snack" class="tabcontent">
                    <?php
                        $menus = query($connection, "SELECT * FROM menu WHERE kategori='snack'");
                        $i = 0;
                        echo '<div class="col-lg-12 d-flex flex-wrap justify-content-around">';
                        while ($i < count($menus)) {
                            echo '<div class="card-container" onclick="neworder(' . $menus[$i]["id"] . ', \'' . $menus[$i]["nama"] . '\', ' . $menus[$i]["harga"] . ', 1)">
                                    <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                                    <div class="card-snack">' . $menus[$i]["nama"] . '</div>
                                </div>';
                            $i++;
                        }
                        echo '</div>'
                    ?>
                </div>

                <div id="drinks" class="tabcontent">
                    <div class="col-lg-12 d-flex flex-wrap justify-content-around">
                        <?php
                        $menus = query($connection, "SELECT * FROM menu WHERE kategori='drink'");
                        $i = 0;
                        echo '<div class="col-lg-12 d-flex flex-wrap justify-content-around">';
                        while ($i < count($menus)) {
                            echo '<div class="card-container" onclick="neworder(' . $menus[$i]["id"] . ', \'' . $menus[$i]["nama"] . '\', ' . $menus[$i]["harga"] . ', 1)">
                                    <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                                    <div class="card-drink">' . $menus[$i]["nama"] . '</div>
                                </div>';
                            $i++;
                        }
                        echo '</div>'
                    ?>
                    </div>
                </div>

                <div id="dessert" class="tabcontent">   
                    <?php
                        $menus = query($connection, "SELECT * FROM menu WHERE kategori='dessert'");
                        $i = 0;
                        echo '<div class="col-lg-12 d-flex flex-wrap justify-content-around">';
                        while ($i < count($menus)) {
                            echo '<div class="card-container" onclick="neworder(' . $menus[$i]["id"] . ', \'' . $menus[$i]["nama"] . '\', ' . $menus[$i]["harga"] . ', 1)">
                                    <div class="card-image"><img src="Assets/kabobs.png" style="width:100%"></div>
                                    <div class="card-dessert">' . $menus[$i]["nama"] . '</div>
                                </div>';
                            $i++;
                        }
                        echo '</div>'
                    ?>
                </div>
            </div>
        </div>
        <div class="col-lg-2 d-flex flex-wrap justify-content-center" style="background-color:#EDEDED; padding:0%">
            <!-- $$$ VARIAN, TOPPING, KEPEDASAN $$$ -->
            <div class="border5">
                <b>VARIAN</b>
                    <button type="button" class="btn btn-var">BIG</button>
                    <button type="button" class="btn btn-var">SMALL</button>       
                <hr/>
                <b>TOPPING</b>
                    <button type="button" class="btn btn-topping">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">PILIH<b class="caret"></b></a>
                        <ul class="dropdown-menu checkbox-menu allow-focus">
                            <li> <div class="checkbox">
                                    <label><input type="checkbox">EGG</label>
                            </div> </li>
                            <li>
                            <li> <div class="checkbox">
                                    <label><input type="checkbox">VEGGIES</label>
                            </div> </li>
                            <li>
                            <li> <div class="checkbox">
                                    <label><input type="checkbox">MUSHROOM</label>
                            </div> </li>
                            <li>
                            <li> <div class="checkbox">
                                    <label><input type="checkbox">EXTRA MEAT</label>
                            </div> </li>
                            <li>
                            <li> <div class="checkbox">
                                    <label><input type="checkbox">BBQ SCE</label>
                            </div> </li>
                            <li>
                            <li> <div class="checkbox">
                                    <label><input type="checkbox">BLKPPR SCE</label>
                            </div> </li>
                            <li>
                            <li> <div class="checkbox">
                                    <label><input type="checkbox">CHEESE</label>
                            </div> </li>
                            <li>
                            <li> <div class="checkbox">
                                    <label><input type="checkbox">SMK BEEF</label>
                            </div> </li>
                            <li>
                            <li> <div class="checkbox">
                                    <label><input type="checkbox">CHEESE MAYO</label>
                            </div> </li>
                            <li>
                            <li> <div class="checkbox">
                                    <label><input type="checkbox">GRL ONION</label>
                            </div> </li>
                            <li>
                        </ul>
                    </button>
                <hr/>
                <b>KEPEDASAN</b>
                <button type="button" class="btn btn-pedas">NOT SPICY</button>
                <button type="button" class="btn btn-pedas">MEDIUM SPICY</button>
                <button type="button" class="btn btn-pedas">SPICY</button>
            </div>
        </div> 
        <div class="col-lg-5" style="background-color:#EDEDED; padding:0%">
            <!-- $$$ ORDER $$$ -->
            <!-- $$$ ORDER $$$ -->
            <div class="border5">
                <div class="row d-flex justify-content-between" style="padding:0 1rem">
                        <button type="button" class="btn btn-order btn-success">+</button>
                        <b class="align-middle" style="font-size: 20px">ORDER</b>
                        <button type="button" class="btn btn-order btn-danger">-</button>
                </div>
                <hr/>
                <div class="border5" style="max-height:24em; overflow-y: scroll">
                    <table class="table-striped">
                        <thead style="height: 1.25em; border-bottom-color: #EDEDED">
                            <tr>
                                 <th class="header-kasir" style="wodth: 40px"><h6">ID</h6></th>
                                <th class="header-kasir" style="width: 300px"><h6>Menu</h6></th>
                                <th class="header-kasir"><h6">Harga</h6></th>
                                <th class="header-kasir"><h6">Jumlah</h6></th>
                                <th class="header-kasir"><h6">Total</h6></th>
                            </tr>
                        </thead>
                        <tbody id="tbod">
                        </tbody>
                    </table>
                </div>
                <div class="border5" style="margin: 0">
                    <div class="row d-flex justify-content-end">
                        <button type="button" class="btn btn-kasir" style="background-color: dodgerblue">PROSES</button>
                        <button type="button" class="btn btn-kasir" style="background-color: firebrick">CLEAR</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    

<script>
function myFunction(evt, namamenu) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(namamenu).style.display = "block";
    evt.currentTarget.className += " active";
}
    function neworder(id, menu, harga, jumlah) {
        var tbod = document.getElementById('tbod');
        var row = document.createElement('TR');
        var c1 = document.createElement('TD');
        c1.appendChild(document.createTextNode(id));
        var c2 = document.createElement('TD');
        c2.appendChild(document.createTextNode(menu));
        var c3 = document.createElement('TD');
        c3.appendChild(document.createTextNode(harga));
        var c4 = document.createElement('TD');
        c4.appendChild(document.createTextNode(jumlah));
        var c5 = document.createElement('TD');
        c5.appendChild(document.createTextNode(jumlah * harga));
        row.appendChild(c1);
        row.appendChild(c2);
        row.appendChild(c3);
        row.appendChild(c4);
        row.appendChild(c5);
        tbod.appendChild(row);
    }
    document.getElementById("defaultopen").click()
</script>

</body>
</html>
