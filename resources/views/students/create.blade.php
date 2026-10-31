<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>
    <h1>Add Student</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <label for="student_id">Student ID:</label><br>
        <input type="text" id="student_id" name="student_id"
               value="{{ old('student_id') }}" required>
        <br><br>

        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"
               value="{{ old('name') }}" required>
        <br><br>

        <label for="address">Address:</label><br>
        <input type="text" id="address" name="address"
               value="{{ old('address') }}">
        <br><br>

        <label for="contact_no">Contact Number:</label><br>
        <input type="text" id="contact_no" name="contact_no"
               value="{{ old('contact_no') }}">
        <br><br>

        <button type="submit">Save Student</button>
    </form>

    <br>
    <a href="{{ route('students.index') }}">Back to Student List</a>
</body>
</html>