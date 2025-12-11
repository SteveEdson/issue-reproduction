<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ShowEntriesInDB extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:show-entries';

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
        $entries = DB::table('entries')->get();
        $this->info('There are ' . $entries->count() . ' entries in the database:');
        foreach ($entries as $entry) {
            $this->line('ID: ' . $entry->id . ', Slug: ' . $entry->slug . ', Collection: ' . $entry->collection . ', Site: ' . $entry->site . ', Origin: ' . $entry->origin_id);
        }   
    }
}
