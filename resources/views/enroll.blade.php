<!DOCTYPE html>
<html>
<head>
    <title>Enroll Student</title>
</head>
<body>
    <h1>Enroll a Student in a Course</h1>

    @if(session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif

    @if(session('error'))
        <p style="color:red;">{{ session('error') }}</p>
    @endif

    <form method="POST" action="/enroll">
        @csrf
        <label for="student_id">Select Student:</label>
        <select name="student_id" id="student_id">
            @foreach(\App\Models\Student::all() as $student)
                <option value="{{ $student->id }}">
                    {{ $student->first_name }} {{ $student->last_name }}
                </option>
            @endforeach
        </select>
        <br><br>

        <label for="course_id">Select Course:</label>
        <select name="course_id" id="course_id">
            @foreach(\App\Models\Course::all() as $course)
                <option value="{{ $course->id }}">
                    {{ $course->course_name }} ({{ $course->course_code }})
                </option>
            @endforeach
        </select>
        <br><br>

        <button type="submit">Enroll</button>
    </form>
</body>
</html>
