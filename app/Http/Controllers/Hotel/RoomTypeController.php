<?php

namespace App\Http\Controllers\Hotel;

use App\Http\Controllers\Controller;
use App\Interfaces\hotel\RoomTypesInterface;
use App\Models\RoomTypes;
use Illuminate\Http\Request;

class RoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $roomTypesRepository;

    public function __construct(RoomTypesInterface $roomTypesRepository)
    {
        $this->roomTypesRepository=$roomTypesRepository;
    }

    public function index(RoomTypes $roomTypes)
    {
        $roomTypesLists=$roomTypes->getRoomTypes();
        return view('hotel.room-type.index',compact('roomTypesLists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hotel.room-type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd('hi');
        $this->roomTypesRepository->storeValidation();
        $this->roomTypesRepository->store();
        return redirect('hotels/room-types');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
