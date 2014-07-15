<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//var_dump('http://'.$_SERVER['HTTP_HOST']);exit;
header('Location: http://'.$_SERVER['HTTP_HOST'].'/', true, 301);
exit;