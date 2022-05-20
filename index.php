<?php

$request = $_SERVER['REQUEST_URI'];
if(true){
    $request = substr($request,11);
}

echo $request;
/*
switch ($request) {
    case '/':
        require './src/views/index.php';
        break;
    case '':
        require './src/views/index.php';
        break;
    case '/phrasal-verb-tool':
        require './src/views/phrasal-verb-tool.php';
        break;
    case '/phrasal-verbs':
        require './src/views/phrasal-verbs.php';
        break;
    case '/phrasal-verbs/group-by-verb':
        require './src/views/phrasal-verbs-verb.php';
        break;
    case '/phrasal-verbs/group-by-preposition':
        require './src/views/phrasal-verbs-preposition.php';
        break;
    case '/irregular-verbs':
        require './src/views/irregular-verbs.php';
        break;
    case '/alternatives-for-very':
        require './src/views/very.php';
        break;
    case '/different-ways-to-say':
        require './src/views/different-ways-to-say.php';
        break;
    case '/double-letters':
        require './src/views/double-letters.php';
        break;
    case '/linkers':
        require './src/views/connectors.php';
        break;
    case '/false-friends':
        require './src/views/false-friends.php';
        break;
    case '/calculator':
        require './src/views/calculator.php';
        break;
    case '/reading-ex2':
        require './src/views/reading-ex2.php';
        break;
    case '/reading-ex3':
        require './src/views/reading-ex3.php';
        break;
    case '/generador':
        require './src/views/generador.html';
        break;
    case '/grammar':
        require './src/views/grammar.php';
        break;
    case '/idioms':
        require './src/views/idioms.php';
        break;
    case '/spy':
        require './src/php/spy.php';
        break;
    default:
        http_response_code(404);
        require './src/views/404.html';
        break;
}*/