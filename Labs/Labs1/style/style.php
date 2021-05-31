<?php
header("Content-type: text/css");
$font_family = 'Arial, Helvetica, sans-serif';
$font_size = '0.7em';
$border = '1px solid';
?>
.aaa{
    padding-left: 0;
    padding-right: 0;
    max-width: 1230px;
    margin-left: 178px;
}
.abc{
    border: 1px solid burlywood;
    border-radius: 4px;
    box-shadow: 5px 5px 5px #afafaf;
    background-color: whitesmoke;
    text-align: center;
}
.abc table thead tr th{
    text-align: center;
}
#Header{
     height: 70px;
}
.header-main{
    padding: 5px;
    height: 70px;
    z-index: 1000;
    background-color: #446afd;
    width: 100%;
    position: fixed;
    display: block;
    transition: top 0.5s;
}
.sticky-top{
    left: 0;
}
.header-main .nav-nav{
    height: 80px;
}
.Navbar-header ul{
    margin-top: 16px;
    padding-left: 0;
}
.Navbar-header ul li{
    list-style: none;
    font-size: 20px;
    font-weight: 600;
    margin-right: 56px;
}
.Navbar-header ul li a{
    text-decoration: none;
    color: white;
    text-transform: uppercase;
}
.Navbar-header li a:hover{
    color: #66ff00;
}

/* Search*/
.form-search{
    float: right;
    margin-top: 8px;
}

form.example input[type=text] {
    padding: 10px;
    font-size: 15px;
    border: 1px solid grey;
    float: left;
    width: 300px;
    background: #f1f1f1;
}

/* Style the submit button */
form.example button {
    float: left;
    width: 50px;
    padding: 10px;
    background: #68ef69;
    color: white;
    font-size: 15px;
    border: 1px solid grey;
    border-left: none; /* Prevent double borders */
    cursor: pointer;
}

form.example button:hover {
    background: red;
}

/* Clear floats */
form.example::after {
    content: "";
    clear: both;
    display: table;
}
