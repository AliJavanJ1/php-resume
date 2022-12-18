<?php

switch ($_SERVER['REQUEST_URI']) {
    case '/':
    case '/introduction':
        require __DIR__ . '/site/introduction.html';
        break;
    case '/skills':
        require __DIR__ . '/site/skills.html';
        break;
    case '/honors':
        require __DIR__ . '/site/honors.html';
        break;
    case '/contact-me':
        require __DIR__ . '/site/contact-me.html';
        break;
    case '/sources':
        require __DIR__ . '/site/sources.html';
        break;
    case '/server':
        require __DIR__ . '/site/server.html';
        break;
    case '/style.css':
        require __DIR__ . '/site/style.css';
        break;
    case '/avatar.jpg':
        require __DIR__ . '/site/avatar.jpg';
        break;
    case '/text-include.js':
        require __DIR__ . '/site/text-include.js';
        break;
    case '/server.php':
        require __DIR__ . '/site/server.php';
        break;
}

?>