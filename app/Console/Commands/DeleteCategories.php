<?php

namespace App\Console\Commands;

use App\Models\Category;
use Illuminate\Console\Command;

class DeleteCategories extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:delete-categories';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $categories = Category::all();

        foreach ($categories as $category) {
            $category->delete();
        }
        $this->info('The command was successful!');
    }
}
