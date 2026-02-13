<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;

class EnrollmentController extends Controller
{
    public function store(Request $request)
    {
        $student = Student::findOrFail($request->student_id);
        $course = Course::findOrFail($request->course_id);

        if($student->courses()->where('course_id', $course->id)->exists()){
            return redirect()->back()->with('error', 'Student already enrolled in this course.');
        }

        if($course->students()->count() >= $course->capacity){
            return redirect()->back()->with('error', 'Course is full.');
        }

        $student->courses()->attach($course->id);

        return redirect()->back()->with('success', 'Enrollment successful.');
    }

    public function destroy(Request $request, $student_id, $course_id)
    {
        $student = Student::findOrFail($student_id);

        $student->courses()->detach($course_id);

        return redirect()->back()->with('success', 'Enrollment removed successfully.');
    }
}
