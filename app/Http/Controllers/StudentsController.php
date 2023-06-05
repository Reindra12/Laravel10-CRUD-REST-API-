<?php

namespace App\Http\Controllers;

use App\Models\students;
use App\Http\Requests\StorestudentsRequest;
use App\Http\Requests\UpdatestudentsRequest;
use App\Http\Resources\StudentsResource;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = students::latest()->paginate(5);
        return new StudentsResource(true, 'List Data Mahasiswa', $students);
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
    public function store(StorestudentsRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nim' => 'required',
            'kode_kelas' => 'required',
            'nama_mahasiswa' => 'required',
            'email' => 'required',
            'password' => 'required',
            'username' => 'required',
            'jk' => 'required', Rule::in(['L', 'P']),
            'alamat' => 'required',
            'no_hp' => 'required',

        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $foto = $request->file('foto');
        $foto->storeAs('public/students', $foto->hashName());

        $students = students::create([
            'foto' => $foto->hashName(),
            'nim' => $request->nim,
            'kode_kelas' => $request->kode_kelas,
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp
        ]);

        return new StudentsResource(true, 'Data Mahasiswa berhasil ditambahkan', $students);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $students = students::find($id);
        return new StudentsResource(true, 'Detail Data Mahasiswa', $students);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(students $students)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatestudentsRequest $request, students $students)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(students $students)
    {
        //
    }
}
