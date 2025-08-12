@extends('adminlte::page')

@section('title', 'Location Table')

@section('content_header')
    <div class="d-flex justify-content-between mx-4">
        <h1>Food Table</h1>
        <div>
            <form action="{{ route('location.create') }}" method="GET" style="display: inline;">
                <button type="submit" class="btn btn-dark">
                    Create New
                </button>
            </form>
        </div>
    </div>
@stop

@section('content')
    <div class="">
        <div class="card-body">
            <table id="example" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Name</th>
                        <th>City</th>
                        <th>Link</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($locations as $index)
                        <tr>
                            <td>
                                <div style="display: flex; justify-content: center; align-items: center; height: 100px;" >
                                    {{ $loop->iteration }}
                                </div>
                            </td>
                            <td>
                                <div style="display: flex; justify-content: center; align-items: center; height: 100px;" >
                                    {{ $index->name }}
                                </div>
                            </td>
                            <td>
                                <div style="display: flex; justify-content: center; align-items: center; height: 100px;" >
                                    {{ $index->city }}
                                </div>
                            </td>
                            <td>
                                <div style="display: flex; justify-content: center; align-items: center; height: 100px;" >
                                    {{ $index->link }}
                                </div>
                            </td>
                            <td>
                                <div style="display: flex; align-items: center; height: 100px;">
                                    <a href="{{ route('location.edit', $index->id) }}" class="btn btn-secondary btn-sm mr-4">Update</a>
                                    <form action="{{ route('location.destroy', $index->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this food item?');">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pagination Links -->
    <div class="pagination-container mt-5 mb-5 d-flex justify-content-end">
        {{ $locations->links('pagination::bootstrap-4') }}
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap4.min.css">
@stop

@section('js')
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@stop
