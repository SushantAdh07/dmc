@extends('admin.admin_dashboard')
@section('admin')
    <div class="container mt-3">
        <h2>Table Head Colors</h2>
        <p>You can use any of the contextual classes to only add a color to the table header:</p>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>


                @foreach ($contacts as $index => $item)
                    <tr>
                        <td>{{ $item->contactname }}</td>
                        <td>{{ $item->contactemail }}</td>
                        <td><a data-bs-toggle="collapse" data-bs-target="#demo{{ $index }}">Read More</a>
                            <div id="demo{{ $index }}" class="collapse">
                                {{ $item->contacttext }}
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
@endsection
