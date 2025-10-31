<?php

namespace App\Traits\PxTraits\Policies\Items;

trait MenuManagementPolicy {

    public function menuManagementPolicy(){
        return [
            'name' => 'Menu Management',
            'policies' => [
                [
                    'name' => 'Main Menu Crud',
                    'keys' => ['view','store','bulk_update','delete','pdf','excel','edit']
                ],
                [
                    'name' => 'Sub Menu Crud',
                    'keys' => ['view','store','bulk_update','delete','pdf','excel','edit']
                ]
            ]
        ];
    }
}
