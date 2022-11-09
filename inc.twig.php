<?php
    //Appeler, initialiser, mettre à disposition les dépendances installées par composer
    require_once 'vendor/autoload.php'; 
    
    //Lier les templates au moteur de templates
    $loader = new \Twig\Loader\FilesystemLoader('templates'); 
    $twig = new \Twig\Environment($loader);