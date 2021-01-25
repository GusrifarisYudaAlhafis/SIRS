<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoomRequest;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $room = Room::paginate(10);

        return view('rooms.index', [
            'item' => $room,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|void
     */
    public function create()
    {
        if (Auth::user()->roles !== 'NURSE') {
            return abort(403, 'Anda Tidak Punya Hak Akses');
        }
        return view('rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\RoomRequest  $request
     * @return \Illuminate\Http\RedirectResponse|void
     */
    public function store(RoomRequest $request)
    {
        if (Auth::user()->roles !== 'NURSE') {
            return abort(403, 'Anda Tidak Punya Hak Akses');
        }
        $data = $request->all();
        Room::create($data);
        Alert::success('Berhasil', 'Data berhasil ditambah');

        return redirect()->route('rooms.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|void
     */
    public function edit(Room $room)
    {
        if (Auth::user()->roles !== 'NURSE') {
            return abort(403, 'Anda Tidak Punya Hak Akses');
        }
        return view('rooms.edit', [
            'item' => $room,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\RoomRequest  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\RedirectResponse|void
     */
    public function update(RoomRequest $request, Room $room)
    {
        if (Auth::user()->roles !== 'NURSE') {
            return abort(403, 'Anda Tidak Punya Hak Akses');
        }
        $data = $request->all();
        $room->update($data);
        Alert::success('Berhasil', 'Data berhasil diubah');

        return redirect()->route('rooms.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\RedirectResponse|void
     */
    public function destroy(Room $room)
    {
        if (Auth::user()->roles !== 'NURSE') {
            return abort(403, 'Anda Tidak Punya Hak Akses');
        }
        $room->delete();
        Alert::success('Berhasil', 'Data berhasil dihapus');

        return redirect()->route('rooms.index');
    }
}
