<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFacilityRequest;
use App\Http\Requests\UpdateFacilityRequest;
use App\Models\Fasilitas;
use App\Models\Kategori;
use App\Services\FacilityService;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function __construct(
        private readonly FacilityService $facilityService
    ) {
    }

    public function index(Request $request)
    {
        $facilities = $this->facilityService->getAllFacilities(
            $request->only([
                'search',
                'category_id',
                'condition_status',
            ])
        );

        $categories = Kategori::orderBy('name')->get();

        return view('facilities.index', compact(
            'facilities',
            'categories'
        ));
    }

    public function create()
    {
        $categories = Kategori::orderBy('name')->get();

        return view('facilities.create', compact('categories'));
    }

    public function store(StoreFacilityRequest $request)
    {
        $this->facilityService->createFacility(
            $request->validated()
        );

        return redirect()
            ->route('admin.facilities.index')
            ->with('success', 'Fasilitas berhasil ditambahkan.');
    }

    public function edit(Fasilitas $facility)
    {
        $facility = $this->facilityService->getFacilityById(
            $facility->id
        );

        $categories = Kategori::orderBy('name')->get();

        return view('facilities.edit', compact(
            'facility',
            'categories'
        ));
    }

    public function update(
        UpdateFacilityRequest $request,
        Fasilitas $facility
    ) {
        $this->facilityService->updateFacility(
            $facility,
            $request->validated()
        );

        return redirect()
            ->route('admin.facilities.index')
            ->with('success', 'Data fasilitas berhasil diperbarui.');
    }

    public function destroy(Fasilitas $facility)
    {
        $this->facilityService->deleteFacility($facility);

        return redirect()
            ->route('admin.facilities.index')
            ->with('success', 'Fasilitas berhasil dihapus.');
    }
}
