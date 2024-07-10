@extends('frontend.master')
@section('title')
    Blogs
@endsection
@section('content')

    <!-- Main content Start -->
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-img">
                <img src="{{asset($banner->image)}}" alt="Breadcrumbs Image">
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">Blogs</h1>
                <ul>
                    <li>
                        <a class="active" href="{{route('front.page')}}">Home</a>
                    </li>
                    <li>Blogs</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Popular Courses Section Start -->
        <div class="container my-5">
            <div class="row mt-2">
                <div class="col-lg-12 ">
                    <div class="card mt-3">
                        @if(session('message'))
                            <div class="alert alert-success" role="alert">
                                {{session('message')}}
                            </div>
                        @endif
                        <div class="card-body">
                            <h3 class="text-center">@if(session()->get('language')=='bangla') তথ্য  @else Publish Your Post @endif </h3>
                            <form class="form-horizontal" action="{{route('blogs.page.store')}}" enctype="multipart/form-data" method="POST">
                                @csrf
                                {{-- <input type="hidden" name="id" value="{{$user->id}}"> --}}
                                <div class="form-group">
                                    <label>Blogs Title</label>
                                    <input type="text" class="form-control" rows="5" name="title" id="title" placeholder="Blogs Title">
                                </div>
                                <div class="form-group">
                                    <label>Blogs Image</label>
                                    <input type="file" name="main_image" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Blog short Details</label>
                                    <textarea  id="tinymces" class="editor form-control" col="10" row="3" name="short_details"></textarea>
                                </div>
                                <h3>Details page information</h3>
                                <div class="form-group">
                                    <label>banner Image</label>
                                    <input type="file" name="banner_image" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Details Image one</label>
                                    <input type="file" name="details_image1" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Details Image two</label>
                                    <input type="file" name="details_image2" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Details Image three</label>
                                    <input type="file" name="details_image3" class="form-control">
                                </div>



                                <div class="form-group">
                                    <label>Blog Long Details one</label>
                                    <textarea id="tinymces" class="editor form-control" row="3" name="details1"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Blog Long Details two</label>
                                    <textarea id="tinymces" class="editor form-control" row="3" name="details2"></textarea>
                                </div>


                                {{-- <div class="form-group">
                                    <label>Add to Homepage</label>
                                    <select class="form-control" name="add_home">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div> --}}





                                {{-- <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="image"  class="form-control">
                                    <img src="{{$user->image??null}}" class="my-4" height="100" width="100" alt="">
                                </div> --}}
                                <div class="table-responsive">
                                    <button type="submit" class="btn btn-info">@if(session()->get('language')=='bangla') সাবমিট @else Submit @endif </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Popular Courses Section End -->


    </div>
    <!-- Main content End -->
@endsection
