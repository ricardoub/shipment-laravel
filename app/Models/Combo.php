<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Combo extends Model
{
    /**
     * Display a listing of the users in html select format.
     *
     * @return Array
     */
    public function usersForSelect()
    {
        return User::pluck('name', 'id')->all();
    }

    /**
     * Display a listing of the options in html select format.
     *
     * @return Array
     */
    public function optionsForSelect($type)
    {
        $options = Combo::where('type', '=', $type)->get();

        return $options->pluck('option', 'value');
    }
}
