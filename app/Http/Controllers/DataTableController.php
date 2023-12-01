<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelasx;
use Yajra\DataTables\Facades\DataTables;

class DataTableController extends Controller
{
    public function index (Request $request){
        return DataTables::of(Kelasx::query())->make(true);
    }
}
