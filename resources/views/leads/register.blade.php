<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Tabira Gate</title>

    <!-- bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

{{--    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">--}}

    <!-- sweet alert -->
{{--    <link rel="stylesheet" href="{{ asset('assets/css/sweetalert2.min.css') }}" />--}}

    <style>
        .swal2-html-container
        {
            direction:rtl;
        }
    </style>

</head>
<body style="background-color: #c6e0d9;">

    @if (session('register_success'))
        <div class="d-flex justify-content-center" style="width: 100%; height: 100vh;">
            <div class="align-self-center">
                <div class="card border rounded-5">
                    <div class="card-body  aligns-items-center justify-content-center text-center " dir="rtl">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="text-success ">لقد تم تسجيلك بنجاح</h3>
                            <h3 class="text-success ">سيقوم كادر مبيعات شركة Tabira Gate بالتواصل معك</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        @if($course->valid)

            <div class="row col-12 justify-content-center">
                <div class="col-md-12 col-xl-6 p-5">
                    <div class="card rounded-3 ">
                        <div class="card-body  aligns-items-center justify-content-center text-center" dir="rtl">

                            <img src="{{ asset('public/images') . '/' . $course->picture }}" class="card-img-top" alt="ad-picture" style="/*width: 516px; height: 516px;*/ max-width: 100%; height: auto; /*border: 1px solid black;*/">
                            <h5 class="card-title">{{$course->title}}</h5>
                            <p class="card-text">{{$course->description}}</p>
                            <p class="card-text" dir="rtl"><small class="text-muted">تاريخ الانتهاء : {{ $course->expire_at }}</small></p>
                            <div class="card-body p-4 p-md-5">
                                <h3 class="">معلومات التسجيل</h3>
                                <p class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2 ">املأ البيانات التالية وسيقوم كادر Tabira Gate بالتواصل معك</p>

                                <form id="register-form" enctype="multipart/form-data" class="px-md-2" method="post" action="{{ route('lead.publicStore') }}" >
                                    @csrf
                                    <input type="hidden" name="course_id" value="{{$course->id}}" />
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example1q"><span class="text-danger">*</span> يرجى ادخال الاسم الكامل</label>

                                        <input type="text" id="form3Example1q" class="form-control" name="name"/>
                                        @error('name')
                                        <p class="text-danger text-xs py-2">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example1q"><span class="text-danger">*</span> يرجى ادخال رقم هاتف صحيح</label>

                                        <input type="text" id="form3Example1q" class="form-control" name="phone"/>
                                        @error('phone')
                                        <p class="text-danger text-xs py-2">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-success btn-lg mb-1">تسجيل</button>

                                </form>

                            </div>
                        </div>
                        <p class="text-center" style="font-size: 12px" dir="rtl">Tabira Gate</p>
                    </div>
                </div>

            </div>

        @else
            <div class="d-flex justify-content-center" style="width: 100%; height: 100vh;">
                <div class="align-self-center">
                    <div class="card border rounded-5">
                        <div class="card-body  aligns-items-center justify-content-center text-center " dir="rtl">
                            <div class="card-body p-4 p-md-5">
                                <h3 class="text-danger ">!!!! !</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endif
</body>
</html>

<!-- jquery 3.6.4 -->
<script src="{{ asset('assets/js/jquery-3-6-4.min.js') }}"></script>

<!-- bootstrap 5.3 -->
<script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>

<!-- sweet alert -->
<script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>

<script>


    function swalMessage (ntficon,messagetoshow) // used to show the notification messages --- "ntficon" receives the icon that needed to show with the message --- "messagetoshow" receives the message itself.
    {
        Swal.fire({
            icon: ntficon,
            text: messagetoshow,
            toast: true,
            position: 'top-end',
            timer: 3000,
            timerProgressBar: true,
            showConfirmButton: false,
            customClass: {
                confirmButton: 'btn btn-primary',
            },
            showClass: {
                popup: 'swal2-noanimation',
                backdrop: 'swal2-noanimation'
            },

        })
    }

    @if(session()->has('flash_icon') && session()->has('flash_message'))
    swalMessage("{{ session('flash_icon') }}", "{{ session('flash_message') }}");
    {{ session()->forget('flash_icon') }}
    {{ session()->forget('flash_message') }}
    @endif


    @if(session()->get('errors'))
    swalMessage("error", "لقد حدث خطأ ما !");
    @endif
</script>
