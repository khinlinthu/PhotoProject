@extends('backend')

@section('content')

<style>
    .userProfileImage {
        width: 120px!important;
        height: 120px!important;
        object-fit: cover;
    }
</style>
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> Blank Page</h1>
        <p>Start a beautiful journey here</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card bg-light table-border border-info">
                <div class="card-header bg-info text-light">
                    <h4 class="text-center">{{ $user->name }}'s Information</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="">
                        @csrf
                        {{-- name & phone number --}}
                        <div class="row col-md-12">
                        	<div class="form-group col-md-6">
                                <label for="photo">
                                    <h6>Photo</h6>
                                </label><br>
                        		<img src="{{asset($user->photo)}}" class="userProfileImage rounded-circle">

                            </div>

                            <div class="form-group col-md-6">
                                <label for="name">
                                    <h6>Name</h6>
                                </label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}"
                                    readonly>

                            </div>
                            
                        </div>

                        {{-- email & address --}}
                        <div class="row col-md-12">
                            <div class="form-group col-md-6">
                                <label for="email">
                                    <h6>E-mail</h6>
                                </label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}"
                                    readonly>

                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">
                                    <h6>Phone number</h6>
                                </label>
                                <input type="number" name="phone" id="phone" class="form-control" value="{{ $user->phone }}"
                                    readonly>

                            </div>
                        </div>

                        {{-- roles & created at --}}
                        <div class="row col-md-12">
                            <div class="form-group col-md-6">
                                <label for="role">
                                    <h6>Role</h6>
                                </label>
                                <input type="text" id="role" class="form-control" value="{{ $user->getRoleNames()[0] }}"
                                    readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="create">
                                    <h6>Created at</h6>
                                </label>
                                <input type="text" id="create" class="form-control"
                                    value="{{ $user->created_at->diffForHumans() }}" readonly>
                            </div>
                        </div>


                        {{-- buttons --}}
                        <div class="row col-md-12">
                            <div class="form-group col-md-4">
                                <a href="{{ route('user.index') }}" class="btn btn-block btn-outline-info">Go Back</a>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
      </div>
    </div>
  </main>
@endsection