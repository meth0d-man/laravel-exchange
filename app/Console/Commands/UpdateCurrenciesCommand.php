<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Service\Currency\CurrencyService;
use App\Service\Currency\Provider\Repository\CurrencyRepository;

class UpdateCurrenciesCommand extends Command
{

    public function __construct(
        private readonly CurrencyService $service,
        private readonly CurrencyRepository $repository
    )
    {
        parent::__construct();
    }

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-currencies-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update currencies in db from API daily';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $updateData = $this->service->getCurrenciesData();

        $this->repository->updateCurrencies($updateData);

        $this->info('The command was successful!');
    }
}
