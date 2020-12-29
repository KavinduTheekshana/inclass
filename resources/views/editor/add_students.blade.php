@extends('layouts.editor')

@section('content')


<div class="container-fluid page__container page-section pb-0">
    <h1 class="h2 mb-0">ADD STUDENTS</h1>
    <ol class="breadcrumb p-0 m-0">
        <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
        <li class="breadcrumb-item active">
            ADD STUDENTS
        </li>
    </ol>
</div>


<div class="container-fluid page__container page-section">


    <form name="StudentForm" id="StudentForm" method="post" action="javascript:void(0)">
        @csrf

        <div class="row" style="margin-bottom: 10px;">

            <div class="col-lg-6 d-flex align-items-center">
                <div class="flex" style="max-width: 100%">

                    <div class="form-group">
                        <label class="form-label" for="exampleInputEmail1">Student Name:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Student Name">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 d-flex align-items-center">
                <div class="flex" style="max-width: 100%">
                    <div class="form-group">
                        <label class="form-label" for="exampleInputEmail1">Phone Number:</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter Student Phone Number">
                    </div>
                </div>
            </div>

            <div class="col-lg-8 d-flex align-items-center">
                <div class="flex" style="max-width: 100%">

                    <div class="form-group">
                        <label class="form-label" for="exampleInputEmail1">School :</label>
                        <input type="text" class="form-control" id="school" name="school" placeholder="Enter Student School">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 d-flex align-items-center">
                <div class="flex" style="max-width: 100%">

                    <div class="form-group">
                        <label class="form-label" for="exampleInputEmail1">Class :</label>
                        <select id="custom-select" class="form-control custom-select">
                            @foreach ($course as $courses)
                            <option value="{{$courses->name}}">{{$courses->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>


            <div class="col-lg-5 d-flex align-items-center">
                <div class="flex" style="max-width: 100%">
                    <div class="form-group">
                        <label class="form-label" for="exampleInputEmail1">Student User Name:</label>
                        <input type="text" oninput="emailgenarate()" class="form-control" id="username" name="username" placeholder="Enter User Name">
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-flex align-items-center">
                <div class="flex" style="max-width: 100%">
                    <div class="form-group">
                        <label class="form-label" for="exampleInputEmail1">Email Address:</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email Address" readonly>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 d-flex align-items-center">
                <div class="flex" style="max-width: 100%">

                    <div class="form-group">
                        <label class="form-label" for="exampleInputEmail1">Password:</label>
                        <input type="text" class="form-control" id="password" name="password" placeholder="Enter Password">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 d-flex align-items-center">
                <div class="flex" style="max-width: 100%">
                    <div class="form-group">
                        <label class="form-label" for="exampleInputEmail1">Confirm Password:</label>
                        <input type="text" class="form-control" id="confirm_password" name="confirm_password" placeholder="Enter Confirm Password">
                    </div>
                </div>
            </div>







        </div>

        <div class="row mb-32pt">
            <div class="col-lg-7 d-flex align-items-center">
                <button type="submit" onclick="savestudent()" id="submit" class="btn btn-primary btn-block float-right">Save Student</button>
            </div>

    </form>


    <div class="col-lg-5 d-flex align-items-center">
        <div class="flex" style="max-width: 100%">
            <div class="form-group">
                <button type="button" onclick="grnaratepassword()" class="btn btn-dark btn-block float-right">Genarate</button>
            </div>
        </div>
    </div>


</div>









</div>

<script>
    function emailgenarate() {
        var username = $('#username').val();
        var keyword = '{{ $keyword }}'
        $("#email").val(username + "@" + keyword + ".com");
        $("#exampleInputEmail1").val(username + "@" + keyword + ".com");
    }


    function grnaratepassword() {
        var password = Math.floor((Math.random() * 1000000));
        $("#password").val(password);
        $("#confirm_password").val(password);
        $("#exampleInputPassword1").val(password);
    }
</script>

<script>
    if ($("#StudentForm").length > 0) {
        $("#StudentForm").validate({
            rules: {
                name: {
                    required: true,
                    maxlength: 50
                },
                phone: {
                    required: true,
                    maxlength: 10
                },
                school: {
                    required: true,
                    maxlength: 300
                },
                username: {
                    required: true,
                    maxlength: 20
                },
                email: {
                    required: true,
                    maxlength: 130
                },
                password: {
                    required: true,
                    maxlength: 12
                },
                confirm_password: {
                    required: true,
                    equalTo: "#password",
                    maxlength: 12
                },

            },
            messages: {
                name: {
                    required: "Please Enter Name",
                    maxlength: "Your Name maxlength should be 50 characters long."
                },
                phone: {
                    required: "Please Enter Phone",
                    maxlength: "Your Phone Number maxlength should be 10 characters long."
                },
                school: {
                    required: "Please Enter School",
                    maxlength: "Your School maxlength should be 300 characters long."
                },
                username: {
                    required: "Please Enter User Name",
                    maxlength: "Your User Name maxlength should be 20 characters long."
                },
                email: {
                    required: "Please Enter Email Address",
                    maxlength: "Your Email maxlength should be 130 characters long."
                },
                password: {
                    required: "Please Enter Password",
                    maxlength: "Your Password maxlength should be 12 characters long."
                },
                confirm_password: {
                    required: "Please Enter Confirm Password",
                    maxlength: "Your Confirm Password maxlength should be 12 characters long."
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
                    url: "{{url('store-student')}}",
                    type: "post",
                    data: $('#StudentForm').serialize(),
                    success: function(response) {
                        $('#tbodynew').html(response);
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
        });

    };
</script>










@endsection