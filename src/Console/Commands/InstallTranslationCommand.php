<?php

namespace WW\Countries\Console\Commands;

use Exception;
use Illuminate\Console\Command;

class InstallTranslationCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'countries:install-translation {locale}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install translations for countries';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $locale = $this->argument('locale');

        try {
            $content = file_get_contents(sprintf('https://raw.githubusercontent.com/umpirsky/country-list/master/data/%s/country.php', $locale));
        } catch( Exception ) {
            $this->error(sprintf('Could not download translations for locale "%s".', $locale));
            return Command::FAILURE;
        }

        $storagePath = lang_path($locale);
        $filePath = sprintf('%s/countries.php', $storagePath);

        try {
            if( ! file_exists($storagePath) ) {
                mkdir($storagePath, 0755, true);
            }
    
            file_put_contents($filePath, $content);
        } catch( Exception ) {
            $this->error(sprintf('Could not store translation file at: %s', $filePath));
            return Command::FAILURE;
        }

        return Command::SUCCESS;
    }
}
