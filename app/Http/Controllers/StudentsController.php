<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        return view('student/index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $student = new Student;
        // $student->nama = $request->nama;
        // $student->nim = $request->nim;
        // $student->email = $request->email;
        // $student->jurusan = $request->jurusan;

        // $student->save();

        // Student::create([
        //     'nama' -> $request-nama,
        //     'nim' -> $request-nim,
        //     'email' -> $request-email,
        //     'jurusan' -> $request-jurusan
        // ]);
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'email' => 'required',
            // 'gender' => 'required',
            'jurusan' => 'required',
        ]);

        Student::create($request->all());
        return redirect('/student')->with('status', 'Berhasil Hore');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('student/show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('student/edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {

        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'email' => 'required',
            // 'gender' => 'required',
            'jurusan' => 'required',
        ]);

        Student::where('id', $student->id)
                ->update([
                    'nama' => $request->nama,
                    'nim' => $request->nim,
                    'email' => $request->email,
                    // 'gender' => $request->gender,
                    'jurusan' => $request->jurusan
                ]);
        return redirect('/student')->with('status', 'Berhasil Hore');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/student')->with('status', 'Berhasil Hore');
    }
}
