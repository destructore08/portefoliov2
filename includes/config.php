<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'portefolio eric garnier',
        'site_url' => 'http://127.0.0.1/~csmp1/portefoliov2',
        'pretty_uri' => false,
        'nav_menu' => [
            '' => 'Home',
            'mes_infos' => 'mes infos',
            'mes_projects' => 'mes projects'
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'error404' => '404',
        'version' => 'v3.1',
        'mail' => 'e.garnier79400@gmail.com'
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
