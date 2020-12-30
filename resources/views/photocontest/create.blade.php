@extends('backend')

@section('content')
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
        <div class="tile">
          <h2>Photo Contest Create Form</h2>
          <form method="post" action="{{route('photocontest.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name:</label>
                    <div class="col-sm-10">
                      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                      @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>

            <div class="form-group row">
              <label for="photo" class="col-sm-2 col-form-label">Photo: (<small class="text-danger">* jpeg|bmp|png</small>)</label>
                    <div class="col-sm-10">
                    <input type="file" name="photo" class="form-control-file @error('photo') is-invalid @enderror">
                      @error('photo')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
            </div>

            <div class="form-group">
              <input type="submit" name="btnsubmit" value="Save" class="btn btn-success">
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
@endsection