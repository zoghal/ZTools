<?php
declare(strict_types=1);

namespace Tools\Core;

use Cake\Core\App;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Filesystem\Filesystem;
use Cake\Utility\Inflector;
use Cake\Console\CommandScanner;

class ToolsCommandScanner extends CommandScanner{
     /**
     * Scan a directory for .php files and return the class names that
     * should be within them.
     *
     * @param string $path The directory to read.
     * @param string $namespace The namespace the shells live in.
     * @param string $prefix The prefix to apply to commands for their full name.
     * @param string[] $hide A list of command names to hide as they are internal commands.
     * @return array The list of shell info arrays based on scanning the filesystem and inflection.
     */
    public function scanDir(string $path, string $namespace, string $prefix, array $hide): array
    {
       return parent::scanDir($path, $namespace,$prefix,$hide);
    }
}