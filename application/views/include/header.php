<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>ListenUP</title>
    <link rel="stylesheet" href="<?php echo base_url('node_modules/bootstrap/dist/css/bootstrap.min.css'); ?>">    
    <link rel="stylesheet" href="<?php echo base_url('assets/css/estilo.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/audioplayer.css'); ?>">        
    <link rel="stylesheet" href="<?php echo base_url('assets/css/open-iconic-bootstrap.min.css'); ?>">        
    
</head>
<header>
    <div class="pos-f-t">

        <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">            
            <span class="navbar-toggler-icon"></span>
            </button>
            <form class="form-inline my-2 my-lg-0" id="form-buscar-site" action="<?=base_url('index.php/search')?>">
                <input class="form-control mr-sm-2 col-8" type="search" name="txtSearch" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0 col-3 ml-1" type="submit">OK</button>
            </form>            
        </nav>
        <div class="collapse" id="navbarToggleExternalContent">
        
            <div class="bg-dark p-4">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="text-white nav-link" href="<?php echo base_url();?>">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-white nav-link" href="<?php echo base_url('index.php/musica') ?>">Músicas</a>
                    </li>                    
                </ul>
            </div>            
        </div>
    </div>
</header>
<div class="container">
    <h1 class="text-center mt-2 text-white project-name">ListenUP <img src="<?php echo base_url("assets/img/kisspng-headphones-beats-electronics-monster-cable-sound-l-headphone-5ad7d5c28ea3b6.5474471715240944025843.png")?>" alt="Logo ListenUP" width="60" height="60"></h1>
</div>
