@extends('dashboard.layoutsAdmin.main')

@section('content')
      @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
      @endif
    <h4>Portfolio Setting</h4>
    <div class="row d-flex justify-content-center mt-5">
      <div class="col-lg-7 col-12 layout-spacing">
        <div class="statbox widget box box-shadow">
          <div class="widget-header">
              <div class="row">
                  <div class="col-md-12 mb-4">
                      <h4>Tambahkan Portfolio</h4>
                  </div>
              </div>
          </div>
          <form action="{{('/add-portfolio')}}" method="post" enctype="multipart/form-data">
            @csrf
              <div class="form-group mb-4">
                  <label for="exampleFormControlInput2">Tittle</label>
                  <input type="text" class="form-control" name="tittle" required>
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
                      <h4>List Portfolio</h4>
                  </div>
              </div>
          </div>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Tittle</th>
                  <th>Description</th>
                  <th>Images</th>
                  <th>Option</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($portfolio as $portfolio)
                <tr>
                  <td>{{$portfolio->tittle}}</td>
                  <td>{{$portfolio->description}}</td>
                  <td> <img src="{{ asset('imagesPortfolio/' . $portfolio->img) }}" width="50px" alt=""> </td>
                  <td>
                    <a href="/delete-portfolio/{{ $portfolio->id }}" class="btn btn-danger" onclick="return confirm('yakin untuk menghapus portfolio?')">Delete</a>
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