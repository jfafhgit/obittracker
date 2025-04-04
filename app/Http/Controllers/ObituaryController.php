<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\FuneralHome;
use App\Models\Church;
use App\Models\Cemetery;
use App\Models\HealthFacility;
use App\Models\Hospice;
use App\Models\Director;
use App\Models\Obituary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ObituaryController extends Controller
{
    public function create()
    {
        $user = auth()->user();
        $area = $user->area;

        $funeralHomes = FuneralHome::where('area_id', $area->id)->get();
        $churches = Church::where('area_id', $area->id)->get();
        $cemeteries = Cemetery::where('area_id', $area->id)->get();
        $healthFacilities = HealthFacility::where('area_id', $area->id)->get();
        $hospices = Hospice::where('area_id', $area->id)->get();
        $directors = Director::where('area_id', $area->id)->get();

        return view('dashboard.obituary', compact('funeralHomes', 'churches', 'cemeteries', 'healthFacilities', 'hospices', 'directors'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'source' => 'required|integer',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'dod' => 'required|date',
            'zipCode' => 'nullable|string|max:10',
            'city' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:2',
            'disposition' => 'nullable|integer',
            'funeralHome' => 'nullable|exists:funeral_homes,id',
            'church' => 'nullable|exists:churches,id',
            'cemetery' => 'nullable|exists:cemeteries,id',
            'healthFacility' => 'nullable|exists:health_facilities,id',
            'hospice' => 'nullable|exists:hospices,id',
            'director' => 'nullable|exists:directors,id',
            'campaign' => 'nullable|integer',
        ]);

        $obituary = new Obituary();
        $obituary->source = $validatedData['source'];
        $obituary->first_name = $validatedData['first_name'];
        $obituary->last_name = $validatedData['last_name'];
        $obituary->dod = $validatedData['dod'];
        $obituary->zip_code = $validatedData['zipCode'];
        $obituary->city = $validatedData['city'];
        $obituary->state = $validatedData['state'];
        $obituary->disposition = $validatedData['disposition'];
        $obituary->funeral_home_id = $validatedData['funeralHome'];
        $obituary->church_id = $validatedData['church'];
        $obituary->cemetery_id = $validatedData['cemetery'];
        $obituary->health_facility_id = $validatedData['healthFacility'];
        $obituary->hospice_id = $validatedData['hospice'];
        $obituary->director_id = $validatedData['director'];
        $obituary->campaign = $validatedData['campaign'];
        $obituary->user_id = auth()->id();
        $obituary->area_id = auth()->user()->area_id;
        $obituary->save();

        return Redirect::route('obituary')->with('success', 'Obituary information saved successfully!');
    }
}
