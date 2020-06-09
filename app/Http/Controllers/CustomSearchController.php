<?php

namespace App\Http\Controllers;

use DeepCopy\Filter\Filter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomSearchController extends Controller
{
    function index(Request $request)
    {
        $filter = Filter::where('marke', true);

        if ($request == ('volvo')) {
            $filter->where('marke');
        }

        if ($request == ('VAZ')) {
            $filter->where('marke');
        }

        if ($request == ('mercedes')) {
            $filter->where('marke');
        }

        if ($request == ('GAZ')) {
            $filter->where('marke');
        }

        return $filter->get();

        return redirect('filter', ['filter' => $filter]);

    }
}
