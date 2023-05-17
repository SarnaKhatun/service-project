@extends('backend.layout.app')
@section('title')
   Admin Dashboard
@endsection

@section('body')

{{--    <span class="no_wrap language_change_section">--}}
{{--                            <img class="mri-5" src="{{ asset('images/icon/earth_icon_white.png') }}" alt="">--}}
{{--                            <span>{{ app()->getLocale() == 'en' ? 'English' : 'বাংলা' }}</span>--}}
{{--                            <img src="{{ asset('images/icon/arrow_icon_white.png') }}" alt="">--}}
{{--                        </span>--}}


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
                                    <input type="text" name="service_name" class="form-control">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label for="" class="col-md-4">Service Name Bangla:</label>
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
                                        <option value="short_ans"  id="short">Short answer</option>
                                        <option value="multiple_choice" id="">Multiple Choice</option>
                                        <option value="checkbox" id="checkbox">Checkbox</option>
                                        <option value="dropdown" id="">Dropdown</option>
                                        <option value="file_upload" id="">File Upload</option>
                                        <option value="date" id="">Date</option>
                                        <option value="time" id="">Time</option>
                                    </select>
                                </div>

                            </div>
                            <div >
                                <input type="text" id="show_only">
                                <input type="text" id="textt">
                                <input type="checkbox" id="box">
                            </div>



                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>






<script>
    var shortAns = document.getElementById('short');
    shortAns.onclick = function () {
        event.preventDefault();
        var textt = document.getElementById('textt');
        document.write(textt);
    }
</script>

<script>
    var checkBox = document.getElementById('checkbox');
    checkBox.onclick = function () {
        event.preventDefault();
        var box = document.getElementById('box');
        box.valueOf();
    }
</script>

    <script>
        $(document).ready(function () {
            $('#select_box').change(function() {
                $('#show_only').val(this.value);
            });
        });
    </script>
@endsection





