@extends('dashboard.layoutsAdmin.main')

@section('content')
      @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
      @endif
    <h4>Testimonial Setting</h4>
    <div class="row d-flex justify-content-center mt-5">
      <div class="col-lg-7 col-12 layout-spacing">
        <div class="statbox widget box box-shadow">
          <div class="widget-header">
              <div class="row">
                  <div class="col-md-12 mb-4">
                      <h4>Tambahkan Testimonial</h4>
                  </div>
              </div>
          </div>
          <form action="{{('/add-testimonial')}}" method="post" enctype="multipart/form-data">
            @csrf
              <div class="form-group mb-4">
                  <label for="exampleFormControlInput2">Nama</label>
                  <input type="text" class="form-control" name="nama" required>
              </div>
              <div class="form-group mb-4">
                  <label for="exampleFormControlInput2">Status</label>
                  <input type="text" class="form-control" name="status" required>
              </div>
              <div class="form-group mb-4">
                  <label for="exampleFormControlInput2">Description</label>
                  <input type="text" class="form-control" name="description" required>
              </div>
              <div class="form-group mb-4">
                  <label for="exampleFormControlInput2">Images</label>
                  <input type="file" class="form-control" name="images" required>
              </div>
              <div class="text-right">
                <button type="submit" class="mt-4 mb-4 btn btn-primary">Tambah</button>
              </div>
          </form>
        </div>
      </div>
    </div>

    <div class="row d-flex justify-content-center">
      <div class="col-lg-7 col-12 layout-spacing">
        <div class="statbox widget box box-shadow">
          <div class="widget-header">
              <div class="row">
                  <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                      <h4>List Testimonial</h4>
                  </div>
              </div>
          </div>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Status</th>
                  <th>Description</th>
                  <th>Images</th>
                  <th>Option</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($testimonial as $testimonial)
                <tr>
                  <td>{{$testimonial->nama}}</td>
                  <td>{{$testimonial->status}}</td>
                  <td>{{$testimonial->description}}</td>
                  <td> <img src="{{ asset('imagestestimonial/' . $testimonial->img) }}" width="50px" alt=""> </td>
                  <td>
                    <a href="/delete-testimonial/{{ $testimonial->id }}" class="btn btn-danger" onclick="return confirm('yakin untuk menghapus testimonial?')">Delete</a>
                  </td>
                </tr>
              @endforeach

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
@endsection