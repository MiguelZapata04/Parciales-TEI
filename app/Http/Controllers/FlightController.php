<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class FlightController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Flights - Exam 1';
        $viewData['flights'] = Flight::orderBy('price', 'asc')->get();

        return view('flight.index')->with('viewData', $viewData);
    }

    public function show(string $id): View
    {
        $viewData = [];
        $flight = Flight::findOrFail($id);
        $viewData['title'] = 'View Flight';
        $viewData['flight'] = $flight;

        return view('flight.show')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData = [];
        $viewData['title'] = 'Add Flight';

        return view('flight.create')->with('viewData', $viewData);
    }

    public function save(Request $request): RedirectResponse
    {
        Flight::validate($request);

        Flight::create([
            'name' => $request->name,
            'type' => $request->type,
            'price' => $request->price
        ]);

        return back()->with('status', 'Successfully created');
    }


    public function statistics(): view
    {
        $viewData = [];
        $viewData['title'] = 'Flight - Statistics';
        $viewData['nationals'] = Flight::where('type', 'national')->count();
        $viewData['internationals'] = Flight::where('type', 'international')->count();
        $viewData['avg'] = Flight::where('type', 'national')->avg('price');
        return view('flight.statistics')->with('viewData', $viewData);
    }

    public function destroy(string $id): RedirectResponse
    {
        Flight::destroy($id);
        return redirect()->route('flight.index');
    }
}
