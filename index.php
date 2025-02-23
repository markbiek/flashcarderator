<?php
/**
 * Entry point for the Flashcarderator application.
 * 
 * @category Application
 * @package  FCR
 * @author   Flashcarderator Team <team@flashcarderator.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/flashcarderator.
 */

require_once __DIR__ . '/vendor/autoload.php';

use FCR\Config\TwigConfig;

// Initialize Twig
$twig = TwigConfig::getInstance();

// Render a template
echo $twig->render(
    'layout.html.twig',
    [
        'pageTitle' => 'Welcome to Flashcarderator'
    ]
); 