<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Http\Requests\StoreApplicationRequest;
use App\Http\Requests\UpdatetApplicationRequest;

use App\Classes\ResponseClass;
use App\Http\Resources\ApplicationResource;
use Illuminate\Support\Facades\DB;
class ApplicationController extends Controller
{
    
    
    
    public function __construct()
    {
        
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Application::all();

        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreApplicationRequest $request)
    {
        $details =[
            'date' => $request->date,
            'position' => $request->position,
            'company' => $request->company,
            'location' => $request->location,
            'contact_email' => $request->contact_email,
            'contact_phone' => $request->contact_phone,
            'calls' => $request->calls,
            'interviews' => $request->interviews
        ];
       
        DB::beginTransaction();
        try{
             $application = $this->applicationRepositoryInterface->store($details);

             DB::commit();
             return ResponseClass::sendResponse(new ApplicationResource($product),'Application Create Successful',201);

        }catch(\Exception $ex){
            return ResponseClass::rollback($ex);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $application = $this->applicationRepositoryInterface->getById($id);

        return ResponseClass::sendResponse(new ApplicationResource($application),'',200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateApplicationRequest $request, $id)
    {
        $updateDetails =[
            'date' => $request->date,
            'position' => $request->position,
            'company' => $request->company,
            'location' => $request->location,
            'contact_email' => $request->contact_email,
            'contact_phone' => $request->contact_phone,
            'calls' => $request->calls,
            'interviews' => $request->interviews
        ];
        DB::beginTransaction();
        try{
             $application = $this->applicationRepositoryInterface->update($updateDetails,$id);

             DB::commit();
             return ResponseClass::sendResponse('Application Update Successful','',201);

        }catch(\Exception $ex){
            return ResponseClass::rollback($ex);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
         $this->applicationRepositoryInterface->delete($id);

        return ResponseClass::sendResponse('Application Delete Successful','',204);
    }
}