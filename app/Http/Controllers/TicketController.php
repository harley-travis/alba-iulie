<?php

namespace App\Http\Controllers;

use Auth;
use App\User; 
use App\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        
        //$tickets = Ticket::all()->paginate(15);
        $tickets = User::leftJoin('tickets', 'users.id', '=', 'user_id')
            ->where('status', '<', '2')
            ->paginate(20);

        return view('tickets.overview', ['tickets' => $tickets]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('tickets.submit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        // validate 
        // $this->validate($request, [
		// 	'title'                 => 'required|min:5',
		// 	'compensationAmount'    => 'required|min:1'
        // ]);

        $user_id = Auth::user()->id;

        $ticket = new Ticket([
            'subject'              => $request->input('subject'), 
            'issue'                => $request->input('issue'), 
            'status'               => 0,
            'user_id'              => $user_id,
        ]);

        $ticket->save();            
        
		return redirect()
			->back()
			->with('info', 'Your ticket has been submitted! If we have any questions, we will contact you for more information.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket, $id) {
        $tickets = User::leftJoin('tickets', 'users.id', '=', 'user_id')
            ->where('tickets.id', '=', $id)
            ->get();
        return view('tickets.view', ['tickets' => $tickets]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
