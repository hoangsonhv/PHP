<?php
header("Content-type: text/css");
$font_family = 'Arial, Helvetica, sans-serif';
$font_size = '0.7em';
$border = '1px solid';
?>
.bbb{
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
    margin-left: 180px;
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

.aaa{
    max-width: 1167px;
    margin-left: 183px;
}


.form{
    text-align: center;
    height: 80px;
    display: flow-root;
    background-color: whitesmoke;
    box-shadow: 0 0 5px 5px #dcdcdc;
    margin-bottom: 25px;
    color: blue;
    border-radius: 4px;

}
.main-form{
    margin-top: 100px;
    margin-bottom: 100px;
    height: 725px;
}
.forms{
    background-color: whitesmoke;
    box-shadow: 0 0 5px 5px #dcdcdc;
    border-radius: 4px;
    height: 500px;
}
.forms h1{
    text-align: center;
    background-color: #79dfff;
    border-radius: 5px 5px 0 0;
    padding: 20px 0;
}

.forms-1{
    width: 660px;
    height: 410px;
    margin: auto;
    padding-top: 30px;
}
.main-form .form-group label{
    float: left;
    width: 70px;
}
.main-form .form-group input{
    height: 40px;
    width: 588px;
    border: 1px solid #b9b9b9;
    border-radius: 4px;
    outline: none;
margin-top: -10px;
}
.main-form .ipf {
    padding: 8px;
}
.main-form .form-group select{
    height: 35px;
    width: 90px;
    padding: 6px;
    border: 1px solid #b9b9b9;
    border-radius: 4px;
    outline: none;
margin-top: -10px;
}

.main-form .form1{
    margin-bottom: 25px;
}

.main-form button{
    color: white;
    width: 140px;
    background-color: red;
    margin-left: 44%;
    font-size: 18px;
    height: 50px;
    border-radius: 4px;
    outline: none;
    border: none;
    margin-top: 40px;
}