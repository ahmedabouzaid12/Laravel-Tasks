@extends('admin.layouts.master')

@section('admin-content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>General Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">General</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Default Table</h5>
              
                <a href="{{route('category.create')}}" class="btn btn-primary" style="background-color: #4152f0;">
                    Add Category
                </a>
            
            
              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
                    <th scope="col">Order</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                    @forelse ($categories as $category)
                    <tr>
                        <th scope="row">{{$category->id}}</th>
                        <td>{{$category->title}} </td>
                        <td>{{$category->description}} </td>
                        <td>{{$category->status}} </td>
                        <td>{{$category->order}} </td>
                        <td>
                            <a href="" style="color: #4152f0; margin-right: 10px;">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="" style="color: #4152f0;">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                      </tr>
                      @empty
                      <h1>There are no Categories</h1>
                    @endforelse

                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>

 

        </div>


      </div>
    </section>

  </main><!-- End #main -->

@endsection