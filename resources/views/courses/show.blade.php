<!DOCTYPE html>
<html>
<head>
    <title>{{ $course->course_name }}</title>
</head>
<body>
    <h1>{{ $course->course_name }} ({{ $course->course_code }})</h1>
    <h3>Capacity: {{ $course->capacity }}</h3>
    <h3>Enrolled Students:</h3>
    <ul>
    @forelse($course->students as $student)
        <li>
            {{ $student->first_name }} {{ $student->last_name }}
            <form method="POST" action="/unenroll/{{ $student->id }}/{{ $course->id }}" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" style="color:red;">Remove</button>
            </form>
        </li>
    @empty
        <li>No students enrolled yet.</li>
    @endforelse
    </ul>
</body>
</html>
