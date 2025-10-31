<?php

namespace App\Http\Controllers\Admin\MenuManagement\MainMenu\Crud;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MenuManagement\MainMenu\Crud\ValidateStoreMainMenu;
use App\Repositories\Admin\MenuManagement\MainMenu\Crud\IMainMenuCrudRepository;
use App\Traits\BaseTrait;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
class MainMenuCrudController  extends Controller {

    use BaseTrait;
    public function __construct(private IMainMenuCrudRepository $iMainMenuCrudRepo) {
        $this->middleware(['auth:admin','HasAdminUserPassword','HasAdminUserAuth','SetAdminLanguage']);
        $this->lang= 'admin.menu-management.main-menu.crud';
        $this->middleware(function ($request, $next) {
            $request->merge(['lang' => $this->lang]);
            return $next($request);
        });

    }

    /**
     * Index page for mainmenu crud
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request) : View
    {
        $data = $this->iMainMenuCrudRepo->index($request);
        $data['lang'] = $this->lang;
        return view('admin.pages.menu-management.main-menu.crud.index',compact('data'));
    }

    /**
     * List items for yajra datatable for mainmenu crud
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function list(Request $request) : JsonResponse
    {
        return  $this->iMainMenuCrudRepo->list($request);
    }

    /**
     * Store procedure for comapany crud
     *
     * @param ValidateStoreMainMenu $request
     * @return JsonResponse
     */
    public function store(ValidateStoreMainMenu $request): JsonResponse
    {
        return $this->iMainMenuCrudRepo->store($request);
    }

    /**
     * Index page for view
     *
     * @param integer|string $id
     * @param Request $request
     * @return view
     */
    public function edit($id,Request $request) : view
    {
        $data = $this->iMainMenuCrudRepo->index($request,$id);
        $data['lang'] = $this->lang;
        return view('admin.pages.menu-management.main-menu.crud.index', compact('data'));
    }

    /**
     * Update procedure for mainmenu
     *
     * @param Request $request
     * @param integer|string $id
     * @return JsonResponse
     */
    public function update(Request $request, $id) : JsonResponse
    {
        return $this->iMainMenuCrudRepo->update($request,$id);
    }

    /**
     * Bulk delete list resources
     *
     * @param Request $request
     * @return JsonResponse
     */
     public function deleteList(Request $request) : JsonResponse
    {
       return $this->iMainMenuCrudRepo->deleteList($request);
    }


    /**
     * Bulk update list resources
     *
     * @param Request $request
     * @return JsonResponse
     */
     public function updateList(Request $request) : JsonResponse
    {
       return $this->iMainMenuCrudRepo->updateList($request);
    }

}
