<?php
 
namespace App\Actions;
 
use Hyde\Framework\Concerns\AbstractBuildTask;
use Hyde\Framework\Helpers\Redirect;

class AddRedirectsBuildTask extends AbstractBuildTask
{
    public static string $description = 'Generate redirects for the index pages';
 
    public function run(): void
    {
        // $this->info('Hello World!');

        Redirect::make('docs/index', 'cover.html')->store();
        Redirect::make('index', 'docs/cover.html')->store();
    }
}
