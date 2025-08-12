@extends('adminlte::page')

@section('title', 'Drinks Table')

@section('content_header')
    <div class="d-flex justify-content-between mx-4">
        <h1>Drinks Table</h1>
        <div>
            <form action="{{ route('pc_hardware.create') }}" method="GET" style="display: inline;">
                <button type="submit" class="btn btn-dark">
                    Create New
                </button>
            </form>
        </div>
    </div>
@stop

@section('content')
    <div class="">
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pcHardwares as $index)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $index->name }}</td>
                            <td>{{ ucwords($index->type) }}</td>
                            <td>
                                <img src="{{ asset('' . $index->image) }}" alt="Drink Image" style="max-width: 100px; max-height: 100px;">
                            </td>
                            <td>{{ ucwords($index->price) }}</td>
                            <td>
                                <a href="{{ route('pc_hardware.edit', $index->id) }}" class="btn btn-secondary btn-sm">Update</a>
                                <!-- Delete Form -->
                                <form action="{{ route('pc_hardware.destroy', $index->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this drink?');">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

    <!-- Pagination Links -->
    <div class="pagination-container mt-5 mb-5 d-flex justify-content-end">
        {{ $pcHardwares->links('pagination::bootstrap-4') }}
    </div>
@stop

@section('css')
    <!-- DataTables CSS -->
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

            // Confirmation dialog for delete
            $('.delete-form').on('submit', function(e) {
                e.preventDefault(); // Prevent form submission
                if (confirm('Are you sure you want to delete this record?')) {
                    this.submit(); // Submit the form if confirmed
                }
            });
        });
    </script>
@stop
