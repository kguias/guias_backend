<!DOCTYPE html>
<html>
<head>
    <title>{{ $student->first_name }} {{ $student->last_name }}</title>
</head>
<body>
    <h1>{{ $student->first_name }} {{ $student->last_name }}</h1>
    <h3>Email: {{ $student->email }}</h3>
    <h3>Enrolled Courses:</h3>
    <ul>
    @forelse($student->courses as $course)
        <li>
            {{ $course->course_name }} ({{ $course->course_code }})
            <form method="POST" action="/unenroll/{{ $student->id }}/{{ $course->id }}" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" style="color:red;">Remove</button>
            </form>
        </li>
    @empty
        <li>No courses enrolled yet.</li>
    @endforelse
    </ul>
</body>
</html>
