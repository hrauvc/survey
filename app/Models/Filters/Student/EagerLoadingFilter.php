<?php

namespace App\Models\Filters\Student;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use App\Classes\Search\Utils\Order;

class EagerLoadingFilter
{

    public static function apply(Builder $query, Request $request)
    {
        /*

        if ($request->load_relation == 1 || $request->load_relation == true) {

            $query->with(['relation']);

        }

        */

        return $query;

    }

}
