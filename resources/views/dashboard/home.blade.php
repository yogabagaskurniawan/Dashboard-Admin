@extends('dashboard.layoutsAdmin.main')

@section('content')
      @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
      @endif
    <h4>Homepage Setting</h4>
    <div class="row d-flex justify-content-center mt-5">
      <div class="col-lg-7 col-12 layout-spacing">
        <div class="statbox widget box box-shadow">
          <div class="widget-header">
              <div class="row">
                  <div class="col-md-12 mb-4">
                      <h4>Update Content</h4>
                  </div>
              </div>
          </div>
          @foreach ($homepage as $page)
          <form method="POST" action="{{ '/update-homepage' }}">
            @csrf
            <input type="hidden" name="id" value="{{$page->id}}"> 
            <div class="form-group mb-4">
              <label for="exampleFormControlInput2">Nama Logo Navbar</label>
              <input type="text" class="form-control @error('navbarNama') is-invalid @enderror" name="navbarNama" id="navbarNama" required value="{{ $page->navbarNama }}">
              @error('navbarNama')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="textContent">Text Content</label>
              <textarea class="form-control @error('textContent') is-invalid @enderror" name="textContent" id="textContent" rows="5">{{ $page->textContent }}</textarea>
              @error('textContent')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Ubah</button>
          </form>
          @endforeach
        </div>
      </div>
    </div>
@endsection