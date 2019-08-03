<?php

use Illuminate\Support\Facades\Form;
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{URL::to('/')}}">Home</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{URL::to('siswa')}}">Data Siswa</a></li>
                <li><a href="{{URL::to('/create')}}">Create Siswa</a></li>
            </ul>
        </nav> 
