@extends('components.master')
@section('content')

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            {{--            <li class="breadcrumb-item active" aria-current="page">Basic Tables</li>--}}
        </ol>
    </nav>
    <div class="container p-10">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body ">
                        <h6 class="card-title">Courses table</h6>
                        {{--                        <p class="text-muted mb-3">Add class <code>.table-bordered</code></p>--}}
                        <div class="row col-12 table-responsive overflow-visible pt-3">
                            <table class="table table-hover mb-0">
                                <thead>
                                <tr>
                                    <th class="pt-0">#</th>
                                    {{--                                    @if(auth()->user()->role->name == 'admin')--}}
                                    {{--                                        <th class="pt-0">Customer</th>--}}
                                    {{--                                    @endif--}}
                                    <th class="pt-0">service</th>
                                    <th class="pt-0">title</th>
                                    <th class="pt-0">description</th>
                                    <th class="pt-0">price</th>
                                    <th class="pt-0">discount</th>
                                    <th class="pt-0">created_at</th>
                                    <th class="pt-0">expire_at</th>
                                    <th class="pt-0">added_by</th>
{{--                                    <th class="pt-0">last_updated_by</th>--}}



                                </tr>
                                </thead>
                                <tbody>
                                @if($courses->count() == 0 )
                                    <tr>
                                        <td colspan="6"><div class="d-flex justify-content-center fw-bold ">There is no services</div></td>
                                    </tr>
                                @endif
                                @foreach($courses as $course)
                                    <tr>
                                        <td>{{$course->id}}</td>
                                        <td>{{$course->services->name}}</td>

                                        <td>{{$course->title}}</td>
                                        <td>{{$course->description}}</td>
                                        <td>{{$course->price}}</td>
                                        <td>{{$course->discount}}</td>
                                        <td>{{$course->created_at}}</td>
                                        <td>{{$course->expire_at}}</td>
                                        <td>{{$course->addedBy->name}}</td>
{{--                                        <td>{{$course->lastUpdatedBy->name}}</td>--}}



                                       </td>
                                        <td>

                                            <div class="dropdown mb-2">
                                                <button class="btn btn-link p-0" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-lg text-muted pb-3px"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                                    {{--                                                    <a href="{{route('course.show',$service->id)}}" class="dropdown-item d-flex align-items-center" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icon-sm me-2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg> <span class="">View</span></a>--}}
                                                    {{--                                                    @if(auth()->user()->role->name == 'admin')--}}
                                                    {{--                                                        <a href="{{route('order.edit',$order->id)}}" class="dropdown-item d-flex align-items-center" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 icon-sm me-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg> <span class="">Edit</span></a>--}}
                                                    <a class="dropdown-item delete_course d-flex" href="#" data-course-id="{{$course->id}}"><i class="iconify me-2 mt-1" data-icon="uil:trash"></i> Delete</a> <!-- "delete-ad" custom class used for jquery function -->
                                                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer icon-sm me-2"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg> <span class="">Print</span></a>
                                                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download icon-sm me-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> <span class="">Download</span></a>
                                                    {{--                                                    @endif--}}
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
<script
    src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
    crossorigin="anonymous">

</script>
<script>
    $(document).ready(function() {
        $('.delete_course').click(function() {
            var id = $(this).data('course-id');
            var url = "{{ route('courses.destroy', ':id') }}";
            url = url.replace(':id', id);
            var token = "{{ csrf_token() }}";
            Swal.fire({
                title: "Are you sure?",
                text: "You will not be able to recover the deleted record!",
                icon: 'warning',
                showCancelButton: true,
                focusConfirm: false,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "Cancel",
                customClass: {
                    confirmButton: 'btn btn-sm btn-primary mr-3 /*rounded-pill*/ mx-2',
                    cancelButton: 'btn btn-sm btn-secondary /*rounded-pill*/ mx-2'
                },
                showClass: {
                    popup: 'swal2-noanimation',
                    backdrop: 'swal2-noanimation'
                },
                buttonsStyling: false
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'POST',
                        url: url,
                        data: {
                            '_token': token,
                            '_method': 'DELETE'
                        },
                        success: function(data) {
                            if (data.status == 'success') {
                                location.reload();
                            }
                        },
                    });
                }
            });

        });

    });


</script>

