<?php
/**
 * Configuration class for Twig templating engine.
 * 
 * @category Configuration
 * @package  FCR\Config
 * @author   Flashcarderator Team <team@flashcarderator.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/flashcarderator.
 */

namespace FCR\Config;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

/**
 * Manages Twig environment configuration and provides singleton access.
 * 
 * @category Configuration
 * @package  FCR\Config
 * @author   Flashcarderator Team <team@flashcarderator.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/flashcarderator.
 */
class TwigConfig
{
    private static ?Environment $_instance = null;

    /**
     * Get the Twig environment instance.
     * 
     * @return Environment The Twig environment instance.
     */
    public static function getInstance(): Environment
    {
        if (self::$_instance === null) {
            $loader = new FilesystemLoader(
                __DIR__ . '/../../templates'
            );
            self::$_instance = new Environment(
                $loader,
                [
                    'cache' => __DIR__ . '/../../cache/twig',
                    'auto_reload' => true,
                    'debug' => true
                ]
            );
        }
        return self::$_instance;
    }
} 