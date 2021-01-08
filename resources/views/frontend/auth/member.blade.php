@extends('frontend')

@section('content')

<style >
    .reg{
        margin-left: 330px;
    }
    .bgcolour{
        background: #d3d3d3;
    }
</style>

<!-- Page Content -->
<div class="loginregistration-area pt-100 pb-100 bgcolour">
        <div class="container">
                <div class="row">
    				<div class="col-lg-6 col-md-6 col-sm-12 reg">
                        <div class="registration-area">
                            <h2>Registration</h2>
                            <div class="login-header">
                                    <h3><span class="text-muted">PhotoContest | </span>Member Register {{-- <br><a
                                            href="{{ route('user.player') }}">Are you a Player?</a> --}}
                                    </h3>
                                </div>
                            <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                                 @csrf
                                <fieldset>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Photo *</label>
                                            <input type="file" name="photo" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="user" class="label">Username *</label>
                                            <input id="user" type="text" class="input form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                <div class="form-control-feedback text-danger">
                                                  {{$errors->first('name')}}
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="email" class="label">Email *</label>
                                            <input id="pass" type="text" class="input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                                <div class="form-control-feedback text-danger">
                                                  {{$errors->first('email')}}
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="password" class="label">Password *</label>
                                            <input id="password" type="password" class="input form-control @error('password') is-invalid @enderror" data-type="password" name="password" required>
                                                <div class="form-control-feedback text-danger">
                                                  {{$errors->first('password')}}
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="password-confirm" class="label">Confirm Password *</label>
                                            <input id="cpassword" type="password" class="input form-control" data-type="password" name="cpassword" required>
                                            <span id="cerror"></span>
                                        <span class="text text-danger">{!! session()->get('error') !!}</span>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group form-focus">
                                        <label class="focus-label">Mobile Number *</label>
                                        <input type="text" name="phone" class="form-control floating"
                                            value="{{ old('phone') }}">                                       
                                        @error('phone')
                                            <span class="text text-danger">* {{ $message }}</span>
                                        @enderror
                                    </div>
                                    </div>
                                    
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <button class="btn-send" type="submit">Member</button>
                                           
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- /Page Content -->

    @endsection

    @section('script')
    <script>
        //password validate
        $("#password, #cpassword").on("keyup", function() {
            if ($("#password").val() == $("#cpassword").val()) {
                $("#cerror").html("Match").css("color", "green");
            } else
                $("#cerror").html("Not Match").css("color", "red");
        });

    </script>
@endsection