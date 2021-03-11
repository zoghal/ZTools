<?php
namespace Tools\Command;

use Cake\Console\Arguments;
use Cake\Console\BaseCommand;
use Cake\Console\ConsoleIo;
use Cake\Console\ConsoleOptionParser;

class CleanerRen4SploitCommand extends BaseCommand
{
    public static function defaultName(): string
    {
        return 'cleaner Ren4Sploit';
    }
    protected function buildOptionParser(ConsoleOptionParser $parser): ConsoleOptionParser
    {
        $parser
            ->addArgument('name', [
                'required' => true,
                'help' => 'The name to say hello to',
            ])
            ->addOption('color', [
                'choices' => ['none', 'green'],
                'default' => 'none',
                'help' => 'The color to use.'
            ]);

        return $parser;
    }

    public function execute(Arguments $args, ConsoleIo $io): ?int
    {
        $color = $args->getOption('color');
        if ($color === 'none') {
            $io->out("Hello {$args->getArgument('name')}");
        } elseif ($color == 'green') {
            $io->out("<success>Hello {$args->getArgument('name')}</success>");
        }

        return static::CODE_SUCCESS;
    }
}