@extends('admin.layouts.master')
@section('admin-content')


<main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Elements</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">General Form Elements</h5>

<!-- General Form Elements -->
<form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="row mb-3">
      <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
      <div class="col-sm-10">
          <input type="text" class="form-control" id="inputTitle" name="title" value="{{ old('title') }}">
      </div>
      @error('title')
          <div class="text-danger">{{ $message }}</div>
      @enderror
  </div>

  <div class="row mb-3">
      <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
      <div class="col-sm-10">
          <textarea class="form-control" id="inputDescription" name="description" style="height: 100px">{{ old('description') }}</textarea>
      </div>
      @error('description')
          <div class="text-danger">{{ $message }}</div>
      @enderror
  </div>

  <div class="row mb-3">
    <label for="inputImage" class="col-sm-2 col-form-label">Image</label>
    <div class="col-sm-10">
        <input type="file" class="form-control" id="inputImage" name="image">
    </div>
    @error('image')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>


  <div class="row mb-3">
      <label for="inputOrder" class="col-sm-2 col-form-label">Order</label>
      <div class="col-sm-10">
          <input type="number" class="form-control" id="inputOrder" name="order" value="{{ old('order') }}">
      </div>
      @error('order')
          <div class="text-danger">{{ $message }}</div>
      @enderror
  </div>

  <div class="row mb-3">
      <label for="inputStatus" class="col-sm-2 col-form-label">Status</label>
      <div class="col-sm-10">
          <select class="form-select" id="inputStatus" name="status">
              <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>Active</option>
              <option value="2" {{ old('status') == 2 ? 'selected' : '' }}>Inactive</option>
          </select>
      </div>
      @error('status')
          <div class="text-danger">{{ $message }}</div>
      @enderror
  </div>

  <div class="row mb-3">
      <div class="col-sm-10 offset-sm-2">
          <button type="submit" class="btn btn-primary">Submit Form</button>
      </div>
  </div>
</form>


      </div>
    </section>

  </main><!-- End #main -->
@endsection