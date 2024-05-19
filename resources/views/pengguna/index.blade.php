@extends('temp.temp')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4><i class="fa fa-users"></i> Pengguna</h4>
        </div>
        <div class="card-body">
            <table class="table" id="users-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Avatar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('users.data') }}',
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'avatar',
                        name: 'avatar'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false,
                        render: function(data, type, row) {
                            return `<a href="/users/${row.id}/edit" class="btn btn-sm btn-primary">Edit</a>`;
                        }
                    }
                ]
            });
        });
    </script>
@endsection
