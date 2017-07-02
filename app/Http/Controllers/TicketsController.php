<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketFormRequest;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function create()
    {
        return view('tickets.create');
    }

    public function store(TicketFormRequest $request)
    {
        return $request->all();
    }
}
