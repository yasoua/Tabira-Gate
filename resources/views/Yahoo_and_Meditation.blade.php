@extends('components.master')
@section('content')
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if($courses -> count() )
            {{--            <x-course-fetured-card :course="$courses[0]"/>--}}

            {{--            @include('components.course-fetured-card',['course'=>$courses->first()])--}}
            <div class="container">
                <div class="row">
                    @foreach($courses->get() as $course)
                        <div class="pt-2 col-12 col-md-6 col-lg-4">
                            <div class="card" {{--style="width: 18rem;"--}}>
                                <img src="{{ asset('images') . '/' . $course->picture }}" class="card-img-top" alt="...">
                                <div class="card-body">

                                    <h5 class="card-title">{{ $course->title}}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Type: {{ $course->services->name}}</h6>
                                    <div class="d-flex justify-content-between">
                                        <div>

                                            Published <time>{{$course->created_at->diffForHumans()}}</time>
                                        </div>
                                        {{--                                        <div>--}}
                                        {{--                                            Expire Date: <time>{{$course->expire_at}}</time>--}}
                                        {{--                                        </div>--}}
                                    </div>


                                    <p class="card-text">{{$course->description}}</p>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                Register here
                                            </button>

                                            {{--                                                <a href="{{route('course/public').'/'.$course->public_link}}" class="btn btn-primary">Register here</a>--}}
                                        </div>
                                        <div>
                                            <p>Price: {{$course->price}}$</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">{{$course->title}}</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="register-form" enctype="multipart/form-data" class="px-md-2" method="post" action="{{ route('leads.store') }}" >
                                            @csrf
                                            <input type="hidden" name="course_id" value="{{$course->id}}" />
                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="form3Example1q"><span class="text-danger">*</span>Name</label>

                                                <input type="text" id="form3Example1q" class="form-control" name="name"/>
                                                @error('name')
                                                <p class="text-danger text-xs py-2">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="form3Example1q"><span class="text-danger">*</span>Email</label>

                                                <input type="text" id="form3Example1q" class="form-control" name="email"/>
                                                @error('email')
                                                <p class="text-danger text-xs py-2">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="form3Example1q"><span class="text-danger">*</span>Phone</label>

                                                <input type="text" id="form3Example1q" class="form-control" name="phone"/>
                                                @error('phone')
                                                <p class="text-danger text-xs py-2">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <label class="form-label" for="form3Example1q"><span class="text-danger">*</span>Gender</label>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    male
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="0">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    female
                                                </label>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="form3Example1q"><span class="text-danger">*</span>Date of Perth</label>

                                                <input type="date" id="form3Example1q" class="form-control" name="age"/>
                                                @error('age')
                                                <p class="text-danger text-xs py-2">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleFormControlSelect1" class="form-label">Course Type</label>
                                                <select class="form-select"
                                                        name="type_id"
                                                    {{-- value="{{$leads->types->name}}"--}}
                                                >
                                                    @foreach($coursetype as $type)
                                                        <option   {{--@if($order->status_id == $statue->id) selected class="bg-white" @endif--}} selected value="{{$type->id}}" >{{$type->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleFormControlSelect1" class="form-label">Course Lamguage</label>
                                                <select class="form-select"
                                                        name="language_id"
                                                    {{-- value="{{$leads->types->name}}"--}}
                                                >
                                                    @foreach($courselanguage as $language)
                                                        <option   {{--@if($order->status_id == $statue->id) selected class="bg-white" @endif--}} selected value="{{$language->id}}" >{{$language->name}}</option>
                                                    @endforeach</select>
                                            </div>


                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-success">Confirm</button>

                                            </div>


                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>


        @else

            <p class="text-center"> There is no course </p>
        @endif
    </main>
    <!-- Modal -->



@endsection

<script>

    @if(session()->get('errors'))
    swalMessage("error", "Error Occured");
    @endif

</script>



@extends('components.master')
@section('content')
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if($courses -> count() )
            {{--            <x-course-fetured-card :course="$courses[0]"/>--}}

            {{--            @include('components.course-fetured-card',['course'=>$courses->first()])--}}
            <div class="container">
                <div class="row">
                    @foreach($courses->get() as $course)
                        <div class="pt-2 col-12 col-md-6 col-lg-4">
                            <div class="card" {{--style="width: 18rem;"--}}>
                                <img src="{{ asset('images') . '/' . $course->picture }}" class="card-img-top" alt="...">
                                <div class="card-body">

                                    <h5 class="card-title">{{ $course->title}}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Type: {{ $course->services->name}}</h6>
                                    <div class="d-flex justify-content-between">
                                        <div>

                                            Published <time>{{$course->created_at->diffForHumans()}}</time>
                                        </div>
                                        {{--                                        <div>--}}
                                        {{--                                            Expire Date: <time>{{$course->expire_at}}</time>--}}
                                        {{--                                        </div>--}}
                                    </div>


                                    <p class="card-text">{{$course->description}}</p>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                Register here
                                            </button>

                                            {{--                                                <a href="{{route('course/public').'/'.$course->public_link}}" class="btn btn-primary">Register here</a>--}}
                                        </div>
                                        <div>
                                            <p>Price: {{$course->price}}$</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">{{$course->title}}</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="register-form" enctype="multipart/form-data" class="px-md-2" method="post" action="{{ route('leads.store') }}" >
                                            @csrf
                                            <input type="hidden" name="course_id" value="{{$course->id}}" />
                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="form3Example1q"><span class="text-danger">*</span>Name</label>

                                                <input type="text" id="form3Example1q" class="form-control" name="name"/>
                                                @error('name')
                                                <p class="text-danger text-xs py-2">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="form3Example1q"><span class="text-danger">*</span>Email</label>

                                                <input type="text" id="form3Example1q" class="form-control" name="email"/>
                                                @error('email')
                                                <p class="text-danger text-xs py-2">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="form3Example1q"><span class="text-danger">*</span>Phone</label>

                                                <input type="text" id="form3Example1q" class="form-control" name="phone"/>
                                                @error('phone')
                                                <p class="text-danger text-xs py-2">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <label class="form-label" for="form3Example1q"><span class="text-danger">*</span>Gender</label>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    male
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="0">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    female
                                                </label>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="form3Example1q"><span class="text-danger">*</span>Date of Perth</label>

                                                <input type="date" id="form3Example1q" class="form-control" name="age"/>
                                                @error('age')
                                                <p class="text-danger text-xs py-2">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleFormControlSelect1" class="form-label">Course Type</label>
                                                <select class="form-select"
                                                        name="type_id"
                                                    {{-- value="{{$leads->types->name}}"--}}
                                                >
                                                    @foreach($coursetype as $type)
                                                        <option   {{--@if($order->status_id == $statue->id) selected class="bg-white" @endif--}} selected value="{{$type->id}}" >{{$type->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleFormControlSelect1" class="form-label">Course Lamguage</label>
                                                <select class="form-select"
                                                        name="language_id"
                                                    {{-- value="{{$leads->types->name}}"--}}
                                                >
                                                    @foreach($courselanguage as $language)
                                                        <option   {{--@if($order->status_id == $statue->id) selected class="bg-white" @endif--}} selected value="{{$language->id}}" >{{$language->name}}</option>
                                                    @endforeach</select>
                                            </div>


                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-success">Confirm</button>

                                            </div>


                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>


        @else

            <p class="text-center"> There is no course </p>
        @endif
    </main>
    <!-- Modal -->



@endsection

<script>

    @if(session()->get('errors'))
    swalMessage("error", "Error Occured");
    @endif

</script>



@extends('components.master')
@section('content')
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if($courses -> count() )
            {{--            <x-course-fetured-card :course="$courses[0]"/>--}}

            {{--            @include('components.course-fetured-card',['course'=>$courses->first()])--}}
            <div class="container">
                <div class="row">
                    @foreach($courses->get() as $course)
                        <div class="pt-2 col-12 col-md-6 col-lg-4">
                            <div class="card" {{--style="width: 18rem;"--}}>
                                <img src="{{ asset('images') . '/' . $course->picture }}" class="card-img-top" alt="...">
                                <div class="card-body">

                                    <h5 class="card-title">{{ $course->title}}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Type: {{ $course->services->name}}</h6>
                                    <div class="d-flex justify-content-between">
                                        <div>

                                            Published <time>{{$course->created_at->diffForHumans()}}</time>
                                        </div>
                                        {{--                                        <div>--}}
                                        {{--                                            Expire Date: <time>{{$course->expire_at}}</time>--}}
                                        {{--                                        </div>--}}
                                    </div>


                                    <p class="card-text">{{$course->description}}</p>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                Register here
                                            </button>

                                            {{--                                                <a href="{{route('course/public').'/'.$course->public_link}}" class="btn btn-primary">Register here</a>--}}
                                        </div>
                                        <div>
                                            <p>Price: {{$course->price}}$</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">{{$course->title}}</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="register-form" enctype="multipart/form-data" class="px-md-2" method="post" action="{{ route('leads.store') }}" >
                                            @csrf
                                            <input type="hidden" name="course_id" value="{{$course->id}}" />
                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="form3Example1q"><span class="text-danger">*</span>Name</label>

                                                <input type="text" id="form3Example1q" class="form-control" name="name"/>
                                                @error('name')
                                                <p class="text-danger text-xs py-2">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="form3Example1q"><span class="text-danger">*</span>Email</label>

                                                <input type="text" id="form3Example1q" class="form-control" name="email"/>
                                                @error('email')
                                                <p class="text-danger text-xs py-2">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="form3Example1q"><span class="text-danger">*</span>Phone</label>

                                                <input type="text" id="form3Example1q" class="form-control" name="phone"/>
                                                @error('phone')
                                                <p class="text-danger text-xs py-2">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <label class="form-label" for="form3Example1q"><span class="text-danger">*</span>Gender</label>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    male
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="0">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    female
                                                </label>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="form3Example1q"><span class="text-danger">*</span>Date of Perth</label>

                                                <input type="date" id="form3Example1q" class="form-control" name="age"/>
                                                @error('age')
                                                <p class="text-danger text-xs py-2">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleFormControlSelect1" class="form-label">Course Type</label>
                                                <select class="form-select"
                                                        name="type_id"
                                                    {{-- value="{{$leads->types->name}}"--}}
                                                >
                                                    @foreach($coursetype as $type)
                                                        <option   {{--@if($order->status_id == $statue->id) selected class="bg-white" @endif--}} selected value="{{$type->id}}" >{{$type->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleFormControlSelect1" class="form-label">Course Lamguage</label>
                                                <select class="form-select"
                                                        name="language_id"
                                                    {{-- value="{{$leads->types->name}}"--}}
                                                >
                                                    @foreach($courselanguage as $language)
                                                        <option   {{--@if($order->status_id == $statue->id) selected class="bg-white" @endif--}} selected value="{{$language->id}}" >{{$language->name}}</option>
                                                    @endforeach</select>
                                            </div>


                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-success">Confirm</button>

                                            </div>


                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>


        @else

            <p class="text-center"> There is no course </p>
        @endif
    </main>
    <!-- Modal -->



@endsection

<script>

    @if(session()->get('errors'))
    swalMessage("error", "Error Occured");
    @endif

</script>



@extends('components.master')
@section('content')
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if($courses -> count() )
            {{--            <x-course-fetured-card :course="$courses[0]"/>--}}

            {{--            @include('components.course-fetured-card',['course'=>$courses->first()])--}}
            <div class="container">
                <div class="row">
                    @foreach($courses->get() as $course)
                        <div class="pt-2 col-12 col-md-6 col-lg-4">
                            <div class="card" {{--style="width: 18rem;"--}}>
                                <img src="{{ asset('images') . '/' . $course->picture }}" class="card-img-top" alt="...">
                                <div class="card-body">

                                    <h5 class="card-title">{{ $course->title}}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Type: {{ $course->services->name}}</h6>
                                    <div class="d-flex justify-content-between">
                                        <div>

                                            Published <time>{{$course->created_at->diffForHumans()}}</time>
                                        </div>
                                        {{--                                        <div>--}}
                                        {{--                                            Expire Date: <time>{{$course->expire_at}}</time>--}}
                                        {{--                                        </div>--}}
                                    </div>


                                    <p class="card-text">{{$course->description}}</p>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                Register here
                                            </button>

                                            {{--                                                <a href="{{route('course/public').'/'.$course->public_link}}" class="btn btn-primary">Register here</a>--}}
                                        </div>
                                        <div>
                                            <p>Price: {{$course->price}}$</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">{{$course->title}}</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="register-form" enctype="multipart/form-data" class="px-md-2" method="post" action="{{ route('leads.store') }}" >
                                            @csrf
                                            <input type="hidden" name="course_id" value="{{$course->id}}" />
                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="form3Example1q"><span class="text-danger">*</span>Name</label>

                                                <input type="text" id="form3Example1q" class="form-control" name="name"/>
                                                @error('name')
                                                <p class="text-danger text-xs py-2">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="form3Example1q"><span class="text-danger">*</span>Email</label>

                                                <input type="text" id="form3Example1q" class="form-control" name="email"/>
                                                @error('email')
                                                <p class="text-danger text-xs py-2">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="form3Example1q"><span class="text-danger">*</span>Phone</label>

                                                <input type="text" id="form3Example1q" class="form-control" name="phone"/>
                                                @error('phone')
                                                <p class="text-danger text-xs py-2">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <label class="form-label" for="form3Example1q"><span class="text-danger">*</span>Gender</label>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    male
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="0">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    female
                                                </label>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="form3Example1q"><span class="text-danger">*</span>Date of Perth</label>

                                                <input type="date" id="form3Example1q" class="form-control" name="age"/>
                                                @error('age')
                                                <p class="text-danger text-xs py-2">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleFormControlSelect1" class="form-label">Course Type</label>
                                                <select class="form-select"
                                                        name="type_id"
                                                    {{-- value="{{$leads->types->name}}"--}}
                                                >
                                                    @foreach($coursetype as $type)
                                                        <option   {{--@if($order->status_id == $statue->id) selected class="bg-white" @endif--}} selected value="{{$type->id}}" >{{$type->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleFormControlSelect1" class="form-label">Course Lamguage</label>
                                                <select class="form-select"
                                                        name="language_id"
                                                    {{-- value="{{$leads->types->name}}"--}}
                                                >
                                                    @foreach($courselanguage as $language)
                                                        <option   {{--@if($order->status_id == $statue->id) selected class="bg-white" @endif--}} selected value="{{$language->id}}" >{{$language->name}}</option>
                                                    @endforeach</select>
                                            </div>


                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-success">Confirm</button>

                                            </div>


                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>


        @else

            <p class="text-center"> There is no course </p>
        @endif
    </main>
    <!-- Modal -->



@endsection

<script>

    @if(session()->get('errors'))
    swalMessage("error", "Error Occured");
    @endif

</script>



