@extends('backend.layout.app')
@section('title')
   Add
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
                                <label for="" class="col-md-4">Service Name English:</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Service Icon:</label>
                                <div class="col-md-8">
                                    <input type="file" name="image">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-success" value="Create Service">
                                </div>
                            </div>
                        </form>


                        <hr>
                        <br>
                        <br>
                        <table>
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                           @foreach($services as $service)
                               <tr>
                                   <td>{{$loop->iteration}}</td>
                                   <td>{!! $service->name !!}</td>
                                   <td>
                                       <img src="{{asset($service->image)}}" alt="" style="height: 90px; width: 90px;">
                                   </td>
                                   <td>{!! $service->status == 'Active' ? 'Active' : 'Inactive' !!}</td>
                                   <td>
                                       <a href="{{route('edit.service', $service->id)}}" class="btn btn-secondary">Edit</a>
                                       <a href="" class="btn btn-success">Status</a>
                                       <a href="" class="btn btn-danger">Delete</a>
                                   </td>
                               </tr>
                           @endforeach
                            </tbody>

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection





