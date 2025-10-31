<?php

namespace App\Providers;

use App\Repositories\BaseRepository;
use App\Repositories\IBaseRepository;
use Illuminate\Support\ServiceProvider;
//vpx_imports
use App\Repositories\Admin\MenuManagement\SubMenu\Crud\ISubMenuCrudRepository;
use App\Repositories\Admin\MenuManagement\SubMenu\Crud\SubMenuCrudRepository;
use App\Repositories\Admin\MenuManagement\MainMenu\Crud\IMainMenuCrudRepository;
use App\Repositories\Admin\MenuManagement\MainMenu\Crud\MainMenuCrudRepository;
use App\Repositories\Admin\System\User\Policy\IAdminUserPolicyRepository;
use App\Repositories\Admin\System\User\Policy\AdminUserPolicyRepository;
use App\Repositories\Admin\System\User\UserRole\Crud\IAdminUserRoleCrudRepository;
use App\Repositories\Admin\System\User\UserRole\Crud\AdminUserRoleCrudRepository;
use App\Repositories\Admin\System\User\Crud\IAdminUserCrudRepository;
use App\Repositories\Admin\System\User\Crud\AdminUserCrudRepository;
use App\Repositories\Home\HomeRepository;
use App\Repositories\Home\IHomeRepository;
class RepositoryServiceProvider extends ServiceProvider
{
        /**
         * Register any application services.
         */
        public function register(): void
        {
            $this->app->bind(abstract: IBaseRepository::class, concrete: BaseRepository::class);
            //vpx_attach
            $this->app->bind(abstract: ISubMenuCrudRepository::class, concrete: SubMenuCrudRepository::class);
            $this->app->bind(abstract: IMainMenuCrudRepository::class, concrete: MainMenuCrudRepository::class);
            $this->app->bind(abstract: IAdminUserPolicyRepository::class, concrete: AdminUserPolicyRepository::class);
            $this->app->bind(abstract: IAdminUserRoleCrudRepository::class, concrete: AdminUserRoleCrudRepository::class);
            $this->app->bind(abstract: IAdminUserCrudRepository::class, concrete: AdminUserCrudRepository::class);
            $this->app->bind(abstract: IHomeRepository::class, concrete: HomeRepository::class);

        }
}
