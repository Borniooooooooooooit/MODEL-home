<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\SubjectGrade;
use Illuminate\Http\Request;

class StudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return Student::all();

        // return Student::where('province', 'Hawaii')
        // ->get();

        // return  Student::where('province', 'Hawaii')
        // ->where('fname', 'Bria')
        // ->get();

        // return  Student::where('province', 'Hawaii')
        // ->orwhere('province', 'Maine')
        // ->orwhere('fname', 'Ella')
        // ->get();

        // return Student::where('province', 'like', '%t%')
        // ->get();

        // return Student::orderBy('fname')->get();

        // return Student::orderBy('fname', 'desc')->get();

        // return Student::limit(5)->get();

        // return Student::whereIn('id', [1,3,5,7,9,11,13,15,17,19,21,23,25,27,29])->get();
        // return Student::whereNotIn('id', [1,3,5,7,9,11,13,15,17,19,21,23,25,27,29])->get();

        // return Student::where('province', 'Maine')->first();

        // return Student::find($id);

        // return Student::with('grades')->get();

        // return Student::with(['grades' => function($query) {
        //     return $query->where('grade', '>=', 90);
        // }])->get();

        return Student::whereHas('grades', function($query){
            return $query->where('grade', '>=', 90);
        })->with('grades')->get();




         
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // return Student::find($id);

        $student = Student::find($id);
        // return $student->fname . ' ' . $student->lname;

        
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
