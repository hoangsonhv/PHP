<?php
session_start();
if(!$_SESSION["gh"])
    $_SESSION["gh"]=[];