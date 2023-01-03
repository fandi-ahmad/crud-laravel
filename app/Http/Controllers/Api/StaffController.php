<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiFormater;
use App\Models\Staff;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Staff::all();
        if ($datas) {
            return ApiFormater::createApi(200, 'Success', $datas);
        } else {
            return ApiFormater::createApi(400, 'Failed');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            $request->validate([
                'nama' => 'required',
                'tanggal_lahir' => 'required',
                'gelar' => 'nullable',
            ]);

            $staff = Staff::create([
                'nama' => $request->nama,
                'tanggal_lahir' => $request->tanggal_lahir,
                'gelar' => $request->gelar,
            ]);

            $datas = Staff::where('id', '=', $staff->id)->get();

            if ($datas) {
                return ApiFormater::createApi(200, 'Success', $datas);
            } else {
                return ApiFormater::createApi(400, 'Failed');
            }
            
        } catch (Exception $err) {
            return ApiFormater::createApi(400, $err);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datas = Staff::where('id', '=', $id)->get();

        if ($datas) {
            return ApiFormater::createApi(200, 'Success', $datas);
        } else {
            return ApiFormater::createApi(400, 'Failed');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'nama' => 'required',
                'tanggal_lahir' => 'required',
                'gelar' => 'nullable'
            ]);

            $staff = Staff::findOrFail($id);

            $staff->update([
                'nama' => $request->nama,
                'tanggal_lahir' => $request->tanggal_lahir,
                'gelar' => $request->gelar
            ]);

            $datas = Staff::where('id', '=', $staff->id)->get();

            if ($datas) {
                return ApiFormater::createApi(200, 'Success', $datas);
            } else {
                return ApiFormater::createApi(400, 'Failed');
            }
            
        } catch (Exception $err) {
            return ApiFormater::createApi(400, 'failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff = Staff::findOrFail($id);
        $datas = $staff->delete();

        if ($datas) {
            return ApiFormater::createApi(200, 'Success Delete Data');
        } else {
            return ApiFormater::createApi(400, 'Failed');
        }
    }
}
