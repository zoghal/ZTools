<?php
declare(strict_types=1);

namespace Tools;

use Tools\Command\PhpiniCommand;
use Cake\Console\CommandScanner;
use Cake\Console\CommandCollection;
use Cake\Core\ConsoleApplicationInterface;
use Cake\Console\ConsoleIo;

class App implements ConsoleApplicationInterface
{
    /**
     * Load all the application configuration and bootstrap logic.
     *
     * @return void
     */
    public function bootstrap(): void
    {
        // Load configuration here. This is the first
        // method Cake\Console\CommandRunner will call on your application.
        $io = new ConsoleIo;
        $io->out("\r\n");
        $io->out("------------------------------------------------------");
        $io->out("Hello dear :)");
        $io->out("This is a custom utility tools for working <success>cPanel</success> & <success>Server configs</success> to checking secrity...");
        $io->out("------------------------------------------------------");
        $io->out("\r\n");
    }


    /**
     * Define the console commands for an application.
     *
     * @param \Cake\Console\CommandCollection $commands The CommandCollection to add commands into.
     * @return \Cake\Console\CommandCollection The updated collection.
     */
    public function console(CommandCollection $commands): CommandCollection
    {

        $scanner = new CommandScanner();
        $lists = $scanner->scanDir(__DIR__ . DS . 'Command' . DS, 'Tools\Command\\', '', []);
        $lists = $commands->resolveNames($lists);
        $commands->addMany($lists);

        return $commands;
    }
}
