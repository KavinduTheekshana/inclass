@extends('layouts.editor')

@section('content')


<div class="container-fluid page__container page-section pb-0">
    <h1 class="h2 mb-0">COURSES</h1>
    <ol class="breadcrumb p-0 m-0">
        <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
        <li class="breadcrumb-item active">
            Courses
        </li>
    </ol>
</div>


<div class="container-fluid page__container page-section">




    <div class="row mb-32pt">
        <div class="col-lg-4">
            <div class="page-separator">
                <div class="page-separator__text">Course Name Form</div>
            </div>



            <p class="card-subtitle text-70 mb-16pt mb-lg-0">
                Huma supports all of Bootstrap's default form styling in addition to a handful of new input types and features. Please <a href="https://getbootstrap.com/docs/4.1/components/forms/" target="_blank">read the official documentation</a> for a full list of options from Bootstrap's core library.
            </p>
        </div>
        <div class="col-lg-8 d-flex align-items-center">
            <div class="flex" style="max-width: 100%">

                <div class="alert bg-success text-white border-0 d-none" id="successMessage" role="alert">
                    <div class="d-flex flex-wrap align-items-start">
                        <div class="mr-8pt">
                            <i class="material-icons">check</i>
                        </div>
                        <div class="flex" style="min-width: 180px">
                            <small>
                                <strong>Great</strong> New Course Added successfully.
                            </small>
                        </div>
                    </div>
                </div>



                <form name="courseForm" id="courseForm" method="post" action="javascript:void(0)">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="exampleInputEmail1">Course Name:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Course Name">
                    </div>
                    <button type="submit" id="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    if ($("#courseForm").length > 0) {
        $("#courseForm").validate({
            rules: {
                name: {
                    required: true,
                    maxlength: 50
                },

            },
            messages: {
                name: {
                    required: "Please enter name",
                    maxlength: "Your name maxlength should be 50 characters long."
                },

            },
            submitHandler: function(form) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $('#submit').html('Please Wait...');
                $("#submit").attr("disabled", true);
                $.ajax({
                    url: "{{url('store-data')}}",
                    type: "POST",
                    data: $('#courseForm').serialize(),
                    success: function(response) {
                        $('#submit').html('Submit');
                        $("#submit").attr("disabled", false);
                        $('#successMessage').removeClass("d-none");
                        setTimeout(function() {
                            $('#successMessage').addClass('d-none');
                        }, 5000);
                        document.getElementById("courseForm").reset();
                    }
                });
            }
        })
    }
</script>

<!-- <div class="container-fluid page__container page-section pb-0">
    <h1 class="h2 mb-0">Courses List</h1>
</div> -->

<div class="container-fluid page__container page-section">
    <div class="page-separator">
        <div class="page-separator__text">Courses List</div>
    </div>

    <div class="card mb-lg-32pt">

        <div class="table-responsive" style="padding: 30px;" data-toggle="lists" data-lists-sort-by="js-lists-values-from" data-lists-sort-desc="true" data-lists-values='["js-lists-values-name", "js-lists-values-status", "js-lists-values-policy", "js-lists-values-reason", "js-lists-values-days", "js-lists-values-available", "js-lists-values-from", "js-lists-values-to"]'>



            <table id="data-table" class="table mb-0 thead-border-top-0 table-nowrap">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>


                    </tr>
                </thead>

            </table>


            <script>
                $(document).ready(function() {
                    $('#data-table').DataTable({
                        processing: true,
                        serverSide: true,
                        ajax: {
                            url: "{{route('get-data')}}",
                            type: 'GET',
                        },
                        columns: [{

                                data: 'id',
                                name: 'id'
                            },

                            {
                                data: 'name',
                                name: 'name'
                            },

                        ]
                    });
                });
            </script>



        </div>

        <!-- <div class="card-footer p-8pt">

            <ul class="pagination justify-content-start pagination-xsm m-0">
                <li class="page-item disabled">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true" class="material-icons">chevron_left</span>
                        <span>Prev</span>
                    </a>
                </li>
                <li class="page-item dropdown">
                    <a class="page-link dropdown-toggle" data-toggle="dropdown" href="#" aria-label="Page">
                        <span>1</span>
                    </a>
                    <div class="dropdown-menu">
                        <a href="" class="dropdown-item active">1</a>
                        <a href="" class="dropdown-item">2</a>
                        <a href="" class="dropdown-item">3</a>
                        <a href="" class="dropdown-item">4</a>
                        <a href="" class="dropdown-item">5</a>
                    </div>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span>Next</span>
                        <span aria-hidden="true" class="material-icons">chevron_right</span>
                    </a>
                </li>
            </ul>

        </div> -->
        <!-- <div class="card-body bordet-top text-right">
  15 <span class="text-50">of 1,430</span> <a href="#" class="text-50"><i class="material-icons ml-1">arrow_forward</i></a>
</div> -->

    </div>
</div>





@endsection