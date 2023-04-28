@extends('backend.layout.app')
@section('title')
   Admin Dashboard
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card-header">
                        <h4 class="text-center text-capitalize">Add Service</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('store.service')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Service Name:</label>
                                <div class="col-md-8">
                                    <input type="text" name="service_name" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Service Icon:</label>
                                <div class="col-md-8">
                                    <input type="file" name="service_icon">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Service Description:</label>
                                <div class="col-md-8">
                                    <textarea name="description" class="summernote form-control"></textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-success" value="Create Service">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
