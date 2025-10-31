<?php

namespace App\Traits\PxTraits\Policies;

use App\Traits\PxTraits\Policies\Items\MenuManagementPolicy;
use App\Traits\PxTraits\Policies\Items\SytemUserPolicyTrait;

trait BasePolicyTrait {

    use SytemUserPolicyTrait,MenuManagementPolicy;
    public function systemPolicies(){
        return [
            [
                'name' => 'Admin Panel',
                'policies' => [
                    [
                        ...$this->menuManagementPolicy()
                    ],
                    [
                        ...$this->systemUserPolicies()
                    ]
                ]
            ]
        ];
    }
}
