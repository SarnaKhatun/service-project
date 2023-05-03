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
                        <hr>
                        <form action="">
                            <div class="row mt-3">
                                <label for="" class="col-md-4">
                                    <textarea name="question" id="" class="form-control"></textarea>
                                </label>
                                <div class="col-md-8">
                                    <select id="select_box">
                                        <option value="">Select One</option>
                                        <option value="short_ans" >Short answer</option>
                                        <option value="paragraph" id="ut">paragraph</option>
                                        <option value="multiple_choice">Multiple Choice</option>
                                        <option value="checkbox">Checkbox</option>
                                        <option value="dropdown">Dropdown</option>
                                        <option value="file_upload">File Upload</option>
                                        <option value="date">Date</option>
                                        <option value="time">Time</option>
                                    </select>
                                </div>

                            </div>
                           <input type="text" id="show_only">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function () {
            $('#select_box').change(function() {
                $('#show_only').val(this.value);
            });
        });
    </script>
@endsection
