@extends('layout.main')
@section('content')
    <div class="app-content-padding flex-grow-1 overflow-hidden" data-scrollbar="true" data-height="100%">

        <ol class="breadcrumb float-xl-end">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/users') }}">Users</a></li>
            <li class="breadcrumb-item active">Create</li>
        </ol>


        <h1 class="page-header">Create User </h1>


        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Create User</h4>
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
                <form method="POST" action="{{url('/users')}}">
                @csrf
                    <div class="row mb-15px">
                        <label class="form-label col-form-label col-md-3">Name</label>
                        <div class="col-md-9">
                            <input required type="text" name="name" class="form-control mb-5px" placeholder="Enter Name" />
    
                        </div>
                    </div>
                    <div class="row mb-15px">
                        <label class="form-label col-form-label col-md-3">Email address</label>
                        <div class="col-md-9">
                            <input required type="email" name="email" class="form-control mb-5px" placeholder="Enter email: name@example.com" />
                            <small class="fs-12px text-gray-500-darker">We'll never share your email with anyone
                                else.</small>
                        </div>
                    </div>
                    <div class="row mb-15px">
                        <label class="form-label col-form-label col-md-3">Choose Role</label>
                        <div class="col-md-9">
                            <select required class="form-select" name="role">
                                <option value="">Choose Role</option>
                                <option>Administrator</option>
                                <option>Supplier</option>
                                <option>Retailer</option>
                                <option>Farmer</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-15px">
                        <label class="form-label col-form-label col-md-3">Password</label>
                        <div class="col-md-9">
                            <input required type="password" name="password" class="form-control mb-5px" placeholder="Password" />

                        </div>
                    </div>

                    <div class="row mb-15px">
                        <label class="form-label col-form-label col-md-3">Confirm Password</label>
                        <div class="col-md-9">
                            <input required type="password" name="confirm_password" class="form-control mb-5px" placeholder="Confirm Password" />

                        </div>
                    </div>



                    <button type="submit" class="btn btn-primary w-100px me-5px">Create User</button>
                </form>
            </div>

        </div>

    </div>
@endsection
