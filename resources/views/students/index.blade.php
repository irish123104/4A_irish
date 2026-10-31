<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>

<body>
    <h1>Student List</h1>
    <p>List of Registered Students</p>

    @if (session('success'))
        <p style="color: green;">
            {{ session('success') }}
        </p>
    @endif

    <a href="{{ route('students.create') }}">
        <button type="button">Add Student</button>
    </a>

    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Contact No.</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($students as $student)
                <tr>
                    <td>{{ $student->student_id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->contact_no }}</td>

                    <td>
                        <a href="{{ route('students.edit', $student->id) }}">
                            <button type="button">Edit</button>
                        </a>

                        <form action="{{ route('students.destroy', $student->id) }}"
                              method="POST"
                              style="display: inline;"
                              onsubmit="return confirm('Are you sure you want to delete this student?');">
                            @csrf
                            @method('DELETE')

                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No student records found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>