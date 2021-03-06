<?php namespace Bantenprov\TarifPelayananKesehatan\Console\Commands;

use Illuminate\Console\Command;

/**
 * The TarifPelayananKesehatanCommand class.
 *
 * @package Bantenprov\TarifPelayananKesehatan
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class TarifPelayananKesehatanCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bantenprov:tarif-pelayanan-kesehatan';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo command for Bantenprov\TarifPelayananKesehatan package';

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
     * @return mixed
     */
    public function handle()
    {
        $this->info('Welcome to command for Bantenprov\TarifPelayananKesehatan package');
    }
}
