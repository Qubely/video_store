<?php

namespace App\Http\Controllers\Admin\MenuManagement\SubMenu\Crud;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MenuManagement\SubMenu\Crud\ValidateStoreSubMenu;
use App\Models\MainMenu;
use App\Repositories\Admin\MenuManagement\SubMenu\Crud\ISubMenuCrudRepository;
use App\Traits\BaseTrait;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
class SubMenuCrudController  extends Controller {

    use BaseTrait;
    public function __construct(private ISubMenuCrudRepository $iSubMenuCrudRepo) {
        $this->middleware(['auth:admin','HasAdminUserPassword','HasAdminUserAuth','SetAdminLanguage']);
        $this->lang= 'admin.menu-management.sub-menu.crud';
        $this->middleware(function ($request, $next) {
            $request->merge(['lang' => $this->lang]);
            return $next($request);
        });
        $this->mainMenus = MainMenu::select(['id','name'])->get();

    }

    /**
     * Index page for submenu crud
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request) : View
    {
        $data = $this->iSubMenuCrudRepo->index($request);
        $data['lang'] = $this->lang;
        $data['mainMenus'] = $this->mainMenus;
        return view('admin.pages.menu-management.sub-menu.crud.index',compact('data'));
    }

    /**
     * List items for yajra datatable for submenu crud
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function list(Request $request) : JsonResponse
    {
        return  $this->iSubMenuCrudRepo->list($request);
    }

    /**
     * Store procedure for comapany crud
     *
     * @param ValidateStoreSubMenu $request
     * @return JsonResponse
     */
    public function store(ValidateStoreSubMenu $request): JsonResponse
    {
        return $this->iSubMenuCrudRepo->store($request);
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
        $data = $this->iSubMenuCrudRepo->index($request,$id);
        $data['lang'] = $this->lang;
        $data['mainMenus'] = $this->mainMenus;
        return view('admin.pages.menu-management.sub-menu.crud.index', compact('data'));
    }

    /**
     * Update procedure for submenu
     *
     * @param Request $request
     * @param integer|string $id
     * @return JsonResponse
     */
    public function update(Request $request, $id) : JsonResponse
    {
        return $this->iSubMenuCrudRepo->update($request,$id);
    }

    /**
     * Bulk delete list resources
     *
     * @param Request $request
     * @return JsonResponse
     */
     public function deleteList(Request $request) : JsonResponse
    {
       return $this->iSubMenuCrudRepo->deleteList($request);
    }


    /**
     * Bulk update list resources
     *
     * @param Request $request
     * @return JsonResponse
     */
     public function updateList(Request $request) : JsonResponse
    {
       return $this->iSubMenuCrudRepo->updateList($request);
    }

}
