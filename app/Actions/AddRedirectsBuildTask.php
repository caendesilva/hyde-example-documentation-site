<?php
 
namespace App\Actions;
 
use Hyde\Framework\Features\BuildTasks\PostBuildTask;
use Hyde\Support\Models\Redirect;

class AddRedirectsBuildTask extends PostBuildTask
{
    public static string $description = 'Generate redirects for the index pages';
 
    public function run(): void
    {
        // $this->info('Hello World!');

        Redirect::make('docs/index', 'cover.html')->store();
        Redirect::make('index', 'docs/cover.html')->store();
    }
}
