<?php

function carrega_pagina(){
    (isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina = 'home';
    if(file_exists('page_'.$pagina.'.php')):
        require_once('page_'.$pagina.'.php');
    else:
        require_once('page_clientes.php');
    endif;
}

function gera_titulos(){
    (isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina = 'home';
    switch ($pagina) :
        case 'home':
            $titulo = 'DMattos - Desenvolvimeno Web';
            break;

        case 'clientes':
                $titulo = 'Clientes - DMattos Desenvolvimeno Web';
                break;

        case 'servicos':
                $titulo = 'O que fazemos - DMattos Desenvolvimeno Web';
                break;
        
        case 'sobre':
                $titulo = 'Sobre mim - DMattos Desenvolvimeno Web';
                break;

        case 'contato':
            $titulo = 'FALE COMIGO- DMattos Desenvolvimeno Web';
            break;
                    
        default:
            $titulo = 'DMattos - Desenvolvimeno Web';
            break;
        endswitch;
        return $titulo;
}