@extends('backend.layout.app')
@section('title')
   Edit Service
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card-header">
                        <h4 class="text-center text-capitalize">Edit Service</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('update.service', $service->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Service Name English:</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-control" value="{!! $service->name !!}">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Service Icon:</label>
                                <div class="col-md-8">
                                    <input type="file" name="image">
                                    <img src="{{asset($service->image)}}" alt="" style="height: 90px; width: 90px;">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-success" value="Update Service">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection





