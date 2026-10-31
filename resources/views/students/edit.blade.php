
<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h1>Edit Student</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Student ID:</label><br>
        <input type="text" name="student_id"
               value="{{ old('student_id', $student->student_id) }}" required>
        <br><br>

        <label>Name:</label><br>
        <input type="text" name="name"
               value="{{ old('name', $student->name) }}" required>
        <br><br>

        <label>Address:</label><br>
        <input type="text" name="address"
               value="{{ old('address', $student->address) }}">
        <br><br>

        <label>Contact Number:</label><br>
        <input type="text" name="contact_no"
               value="{{ old('contact_no', $student->contact_no) }}">
        <br><br>

        <button type="submit">Update Student</button>
    </form>

    <br>
    <a href="{{ route('students.index') }}">Back to Student List</a>
</body>
</html>
