<?php

namespace App\Http\Controllers;

use App\Models\Combo;
use Illuminate\Http\Request;

class ComboController extends Controller
{
    /**
     * Display a listing of the options in html select format.
     *
     * @return Array
     */
    public function optionsForSelect($type)
    {
        $options = Combo::where('type', '=', $type)->get();

        return $options;
        //return $options->pluck('option', 'value');
    }

    /**
     * Display a listing of the users in html select format.
     *
     * @return Array
     */
    public function usersForSelect()
    {
        return User::pluck('name', 'id')->all();
    }

}
