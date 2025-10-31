<?php

namespace App\Http\Controllers\Home\Preview;

use App\Http\Controllers\Controller;
use App\Repositories\Home\IHomeRepository;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PreviewController extends Controller
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
        return view('site.pages.preview.index',compact('data'));
    }
}
