<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GetPrice extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'price:get';

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
     * @return int
     */
    public function handle()
    {
        $price = new \App\Price;
        $price->name = time()."name";
        $price->email = time()."email";
        $price->save();
        echo "Price Saved Successfully";
    }
}
