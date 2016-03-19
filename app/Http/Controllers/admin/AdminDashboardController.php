<?php namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use View;
class AdminDashboardController extends Controller {
    public function getDashboard(){
        return $this->getIndex();
    }
    public function getIndex(){
        return View::make('admin.dashboard.index');
    }
}
