<?php

namespace App\Console\Commands;


use App\Plan;
use App\Company;
use App\DataCenter;

use App\Vps\LinodeVps;

use Illuminate\Console\Command;

class CreateVPS extends Command
{
    protected $company;
    protected $data_center;
    protected $plan;
    protected $errors;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'vps:create {company_name} {data_center_api_id} {plan_api_id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a VPS';

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
        $this->setCompany($this->argument('company_name'));
        $this->setDataCenter($this->argument('data_center_api_id'));
        $this->setPlan($this->argument('plan_api_id'));

        $this->setErrors();
        if(count($this->errors) > 0) {
            $this->printErrors();
            return false;
        }

        if($this->company->name == 'Linode') {
            $this->createLinode($this->data_center, $this->plan);
        }

    }

    protected function createLinode($data_center, $plan)
    {
        $vps = new LinodeVps($data_center->api_id, $plan->api_id);
        $vps->create();
    }

    protected function setCompany($provider_name)
    {
        $this->company = Company::where('name', $provider_name)
            ->first();
    }

    protected function setDataCenter($data_center_api_id)
    {
        $this->data_center = DataCenter::where('api_id', $data_center_api_id)
            ->first();
    }

    protected function setPlan($plan_api_id)
    {
        $this->plan = Plan::where('api_id', $plan_api_id)
            ->first();
    }

    protected function setErrors()
    {
        $errors = [];

        if(! $this->company) {
            $errors[] = 'Company could not be found.';
        }

        if(! $this->data_center) {
            $errors[] = 'Data center could not be found.';
        }

        if(! $this->plan) {
            $errors[] = 'Plan could not be found.';
        }

        $this->errors = $errors;
    }

    protected function printErrors()
    {
        foreach($this->errors as $error) {
            $this->error($error);
        }
    }
}
