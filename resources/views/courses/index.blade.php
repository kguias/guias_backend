<!DOCTYPE html>
<html>
<head>
    <title>Courses List</title>
</head>
<body>
    <h1>Course List</h1>
    <ul>
    @foreach($courses as $course)
        <li>
            <a href="/courses/{{ $course->id }}">
                {{ $course->course_name }} ({{ $course->course_code }})
            </a>
        </li>
    @endforeach
    </ul>
</body>
</html>
