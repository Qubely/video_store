<?php

namespace App\Http\Controllers\Home\Category;

use App\Http\Controllers\Controller;
use App\Repositories\Home\IHomeRepository;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function __construct(private IHomeRepository $iHomeRepo) {

    }
    /**
     * Index page for home
     *
     * @param Request $request
     * @return view
     */
    public function index(Request $request) : View
    {
        $data = $this->iHomeRepo->homeData($request);
        return view('site.pages.category.index',compact('data'));
    }
}
