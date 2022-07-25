<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('student', compact('students'));
    }

    public function student_create(Request $request)
    {

        if (request()->has('student_image')) {

            $newImage = time() . '-' . $request->name . '.' . $request->student_image->extension();
            $request->student_image->extension();

            $request->student_image->move(public_path('images'), $newImage);

            $student = Student::create([
                'name' => $request->input('name'),
                'surname' => $request->input('surname'),
                'student_image' => $newImage
            ]);
        } else {
            $student = Student::create([
                'name' => $request->input('name'),
                'surname' => $request->input('surname'),

            ]);
        }


        return redirect('/students');
    }

    public function all_students()
    {
        $students = Student::all();
        return view('all_students', compact('students'));
    }

    public function student_find()
    {
        $this->validate(request(), [
            'ara' => 'required'
        ]);

        $value = request()->input('ara');
        $students = Student::where('name', 'like', "%$value%")
            ->orWhere('surname', 'like', "%$value%")
            ->get();

        return view('find_student', compact('students'));
    }

    public function show($id)
    {
        $student = Student::find($id);

        return view('show_student', compact('student'));
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('edit_student', compact('student'));
    }

    public function update($id)
    {
        $student = Student::find($id);
        $student->name = request()->input('name');
        $student->surname = request()->input('surname');

        if (request()->hasFile('student_image')) {
            $file = request()->file('student_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $student->student_image = $filename;
        }
        $student->save();

        return redirect('/students');
    }
}
