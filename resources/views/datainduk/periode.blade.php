@extends('temp.temp')

@section('content')
    <div class="container">
        <h1>Laravel 10 DataTables Example</h1>
        <table class="table table-bordered" id="products-table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>avatar</th>
                    <th width="100px">Action</th>
                </tr>
            </thead>
        </table>
    </div>

    <script type="text/javascript">
        $(function() {
            var table = $('#products-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('datainduk.get_user') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'id',
                        name: 'id'
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
                        searchable: false
                    },
                ]
            });
        });
    </script>
@endsection
