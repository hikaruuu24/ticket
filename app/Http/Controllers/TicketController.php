<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\UploadDocTicket;
use App\Models\UploadDocTrouble;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page_title'] = 'Ticket';
        $data['tickets'] = Ticket::orderBy('created_at', 'desc')->get();
        return view('ticket.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['page_title'] = 'Create Ticket';
        return view('ticket.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            Ticket::create([
                'tanggal' => $request->tanggal,
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'status' => $request->status,
                'user_id' => auth()->user()->id
            ]);

            $ticket = Ticket::orderBy('created_at', 'desc')->first();
            // save doc multiple
            if ($request->hasFile('docs')) {
                foreach ($request->file('docs') as $file) {
                    $name = $file->getClientOriginalName();
                    $file->move(public_path() . '/doc_troubles/', $name);

                    $upload = new UploadDocTrouble();
                    $upload->ticket_id = $ticket->id;
                    $upload->user_id = $ticket->user_id;
                    $upload->file_upload = $name;
                    $upload->save();
                }

            }

            return redirect()->route('tickets.index')->with('success', 'Ticket created successfully');
        } catch (\Throwable $th) {
            return redirect()->route('tickets.index')->with('error', 'Ticket failed to create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        $data['page_title'] = 'Detail Ticket';
        $data['ticket'] = $ticket;
        return view('ticket.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        $data['page_title'] = 'Edit Ticket';
        $data['ticket'] = $ticket;
        return view('ticket.edit', $data);
    }

    public function updateTicket($id)
    {
        $data['page_title'] = 'Update Ticket';
        $data['ticket'] = Ticket::find($id);
        return view('ticket.update', $data);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        try {
            $ticket->update([
                'tanggal' => $request->tanggal,
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'status' => $request->status,
                'user_id' => auth()->user()->id
            ]);
            return redirect()->route('tickets.index')->with('success', 'Ticket updated successfully');
        } catch (\Throwable $th) {
            return redirect()->route('tickets.index')->with('error', 'Ticket failed to update');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        try {
            $ticket->delete();
            return redirect()->route('tickets.index')->with('success', 'Ticket deleted successfully');
        } catch (\Throwable $th) {
            return redirect()->route('tickets.index')->with('error', 'Ticket failed to delete');
        }
    }

    public function uploadDoc(Request $request, $id)
    {
        try {
            // save doc multiple
            if ($request->hasFile('docs')) {
                foreach ($request->file('docs') as $file) {
                    $name = $file->getClientOriginalName();
                    $file->move(public_path() . '/docs/', $name);

                    $upload = new UploadDocTicket();
                    $upload->ticket_id = $id;
                    $upload->user_id = auth()->user()->id;
                    $upload->file_upload = $name;
                    $upload->save();
                }

            }
            
            return response()->json(['message' => 'Upload success']);
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()]);
        }

    }

    public function deleteDoc($id, $doc)
    {
        try {
            $upload = UploadDocTicket::where('ticket_id', $id)->where('file_upload', $doc)->first();
            if ($upload) {
                // Build the full path to the file
                $filePath = public_path('docs/' . $upload->file_upload);
                
                // Check if the file exists and delete it
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
    
                // Delete the record from the database
                $upload->delete();
            }

            return redirect()->route('tickets.update-ticket', $id)->with('success', 'Document deleted successfully');
        } catch (\Throwable $th) {
        }
    }

    public function uploadDocTrouble(Request $request, $id)
    {
        try {
            // save doc multiple
            if ($request->hasFile('docs')) {
                foreach ($request->file('docs') as $file) {
                    $name = $file->getClientOriginalName();
                    $file->move(public_path() . '/doc_troubles/', $name);

                    $upload = new UploadDocTrouble();
                    $upload->ticket_id = $id;
                    $upload->user_id = auth()->user()->id;
                    $upload->file_upload = $name;
                    $upload->save();
                }

            }
            
            return response()->json(['message' => 'Upload success']);
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()]);
        }

    }

    public function deleteDocTrouble($id, $doc)
    {
        try {
            $upload = UploadDocTrouble::where('ticket_id', $id)->where('file_upload', $doc)->first();
            if ($upload) {
                // Build the full path to the file
                $filePath = public_path('doc_troubles/' . $upload->file_upload);
                
                // Check if the file exists and delete it
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
    
                // Delete the record from the database
                $upload->delete();
            }

            return redirect()->route('tickets.update-ticket', $id)->with('success', 'Document deleted successfully');
        } catch (\Throwable $th) {
        }
    }

    public function updateStatus($id, Request $request)
    {
        try {
            $ticket = Ticket::find($id);
            $ticket->status = 'close';
            $ticket->closed_by = $request->closed_by;
            $ticket->save();

            return redirect()->route('tickets.index')->with('success', 'Status updated successfully');
        } catch (\Throwable $th) {
            return redirect()->route('tickets.index')->with('error', 'Status failed to update');
        }
    }
}
