<?php

namespace App\Vps;

use App\Plan;
use App\DataCenter;

use Linode\Batch;
use Linode\AvailApi;
use Linode\LinodeApi;
use Linode\PaymentTerm;

class LinodeVps extends Vps {

    protected $key;
    protected $data_center;
    protected $plan;
    protected $linode_id;

    public $api;
    public $avail;

    public function __construct()
    {
        $this->key = config('vps.linode.api_key');
        $this->avail = new AvailApi($this->key);
        $this->api = new LinodeAPI($this->key);
    }

    /**
     * Create a VPS.
     * 
     * @param  int $data_center_id the API id of the data center
     * @param  int $plan_id        the API id of the plan
     * @return mixed               Identifier object from company.
     */
    public function create($data_center_id, $plan_id)
    {
        $this->setDataCenter($data_center_id);
        $this->setPlan($plan_id);

        if(! $this->data_center) {
            return 'You must set a data center.';
        }

        if(! $this->plan) {
            return 'You must set a plan.';
        }

        return $this->sendCreateRequest();
    }

    /**
     * Destoy a VPS.
     * 
     * @param  int $linode_id      The ID of the Linode VPS
     * @return mixed               Response from company.
     */
    public function destroy($linode_id)
    {
        $this->setLinodeId($linode_id);
        return $this->sendDestroyRequest();
    }

    /**
     * Send request to company to create the VPS.
     * 
     * @return int Linode ID
     */
    public function sendCreateRequest()
    {
        $creation_request = $this->api
            ->create($this->data_center->api_id, $this->plan->api_id);

        $this->linode_id = $creation_request['LinodeID'];

        return $this->linode_id;
    }

    /**
     * Send request to company to destroy a VPS.
     * 
     * @return int Linode ID
     */
    public function sendDestroyRequest()
    {
        $destroy_request = $this->api->delete($this->linode_id);
        return $destroy_request;
    }

    /**
     * Set the data center.
     * 
     * @param int $id Linode ID
     */
    public function setDataCenter($id)
    {
        $this->data_center = DataCenter::where('api_id', $data_center_id)->first();
    }

    /**
     * Set the Linode ID.
     * 
     * @param int $id Linode ID
     */
    public function setLinodeId($id)
    {
        $this->linode_id = $id;
    }

    /**
     * Set the plan.
     * 
     * @param int $id The plan API id
     */
    public function setPlan($id)
    {
        $this->plan = Plan::where('api_id', $plan_id)->first();
    }

}