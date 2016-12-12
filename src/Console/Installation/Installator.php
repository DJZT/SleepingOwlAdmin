<?php
namespace SleepingOwl\Admin\Console\Installation;

use Illuminate\Config\Repository;
use SleepingOwl\Admin\Contracts\Console\Installator as InstallatorContract;

abstract class Installator implements InstallatorContract
{

    /**
     * The console command instance.
     *
     * @var \Illuminate\Console\Command $command
     */
    protected $command;

    /**
     * @var Repository
     */
    protected $config;

    /**
     * Create a new installer instance.
     *
     * @param \SleepingOwl\Admin\Console\Commands\InstallCommand $command
     * @param Repository $config
     */
    public function __construct($command, Repository $config)
    {
        $this->command = $command;
        $this->config  = $config;
    }

    /**
     * При возврате методом true данный компонент будет пропущен
     *
     * @return bool
     */
    public function installed()
    {
        return false;
    }
}