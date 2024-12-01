@extends('layout.main')
@section('content')
    <div class="app-content-padding flex-grow-1 overflow-hidden" data-scrollbar="true" data-height="100%">

        <ol class="breadcrumb float-xl-end">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/users') }}">Users</a></li>
            <li class="breadcrumb-item active">List</li>
        </ol>

        <a class="btn btn-primary" href="{{ url('/users/create') }}">Create a User</a>
        <h1 class="page-header">List Users </h1>


        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">List of Users</h4>
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i
                            class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i
                            class="fa fa-redo"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i
                            class="fa fa-minus"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i
                            class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="panel-body">
                <table id="data-table-default" class="table table-striped table-bordered align-middle text-nowrap">
                    <thead>
                        <tr>

                            <th class="text-nowrap">Name</th>
                            <th class="text-nowrap">Email</th>
                            <th class="text-nowrap">Role</th>
                            <th class="text-nowrap">Actions</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($users as $user)
                            <tr class="odd gradeX">
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @foreach ($user->getRoleNames() as $role)
                                        {{ $role }}
                                    @endforeach
                                </td>
                                <td>
                                    <form action="{{ route('users.destroy', [$user]) }}" method="POST" style="float: left">
                                        @method('DELETE')
                                        @csrf
                                        <button title="Delete Resource" type="submit"
                                            class="fa fa-lg fa-trash text-danger border-0 deleteForm"></button>
                                    </form>

                                    <a title="View Resource" href="#"><i
                                            data-title="View User | {{$user->name}}"
                                            data-id="{{$user->id}}" data-url="{{ url('/users', [$user]) }}" class="fa fa-lg fa-eye text-success view-user"></i></a>


                                    <a title="Edit Resource" href="{{ route('users.edit', [$user]) }}"><i
                                            class="fa fa-lg fa-pencil-square text-primary"></i></a>


                                </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>

    </div>
@endsection


@push('css')
    <link href="{{ asset('assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}"
        rel="stylesheet" />
@endpush

@push('scripts')
    <script src="{{ asset('assets/plugins/datatables.net/js/dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('assets/js/demo/table-manage-default.demo.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/%40highlightjs/cdn-assets/highlight.min.js') }}" type="a0f12219dcbf79849f4628fa-text/javascript"></script>
    <script src="{{ asset('assets/js/demo/render.highlight.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $(".view-user").click(function(e){
            e.preventDefault();
            var title=$(this).attr('data-title');
            var id=$(this).attr('data-id');
            var url=$(this).attr('data-url');

            $("#modalHeader").text(title);

            $.get(url, function(data, status){
                $("#modalContent").html(data);
            });

            $('#modal-message').modal('show');
        });

    });
    </script>


@endpush
