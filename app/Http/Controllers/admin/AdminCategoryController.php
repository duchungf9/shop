<?php namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use View;
class AdminCategoryController extends Controller {
    public function getList(){
        return View::make('admin.category.list');
    }

    public function getCreate(){
        return View::make('admin.category.create');
    }
}
