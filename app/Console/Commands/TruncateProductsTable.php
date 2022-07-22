<?php

namespace App\Console\Commands;


use App\Models\Product;
use Illuminate\Console\Command;
use Throwable;

class TruncateProductsTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product:truncate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle(): void
    {

        try {
            Product::truncate();
            $this->line("Success!");
        } catch (Throwable $e) {
            report($e);
            $this->error('Error message: '.$e->getMessage());
            $this->error('File: '.$e->getFile());
            $this->error('Line: '.$e->getLine());
        }

    }

}
