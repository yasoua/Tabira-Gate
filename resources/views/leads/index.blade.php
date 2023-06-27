
@extends('components.master')
@section('content')

    <nav class="page-breadcrumb ml-40 mt-1">
        <ol class="breadcrumb">
            <li class="breadcrumb-item  bold"><a href="{{route('dashboard')}}">Dashboard</a></li>
            {{--            <li class="breadcrumb-item active" aria-current="page">Basic Tables</li>--}}
        </ol>
    </nav>
    <div class="container p-10">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body ">
                        <h6 class="card-title">Leads table</h6>
                        {{--                        <p class="text-muted mb-3">Add class <code>.table-bordered</code></p>--}}
                        <div class="row col-12 table-responsive overflow-visible pt-3">
                            <table class="table table-hover mb-0">
                                <thead>
                                <tr>
                                    <th class="pt-0">#</th>
                                    {{--                                    @if(auth()->user()->role->name == 'admin')--}}
                                    {{--                                        <th class="pt-0">Customer</th>--}}
                                    {{--                                    @endif--}}
                                    <th class="pt-0">Name</th>
                                    <th class="pt-0">Course title</th>
                                    <th class="pt-0">Email</th>
                                    <th class="pt-0">phone</th>
                                    <th class="pt-0">Gender</th>
                                    <th class="pt-0">age</th>
                                    <th class="pt-0">Course type</th>
                                    <th class="pt-0">Course language</th>



                                </tr>
                                </thead>
                                <tbody>
                                @if($leads->count() == 0 )
                                    <tr>
                                        <td colspan="6"><div class="d-flex justify-content-center fw-bold ">There is no services</div></td>
                                    </tr>
                                @endif
                                {{--                            @while() @endwhile--}}
                                @foreach($leads as $lead)
                                    {{--                                    @if(auth()->user()->role->name == 'admin')--}}
                                    {{--                                        @break(true)--}}
                                    {{--                                        @if($order->added_by !== auth()->user()->id && auth()->user()->role->name == 'customer' )--}}
                                    {{--                                            @continue(true)--}}
                                    {{--                                                    <tr>--}}
                                    {{--                                                    <td colspan="6"><div class="d-flex justify-content-center fw-bold ">There is no orders</div></td>--}}
                                    {{--                                                --}}{{--                                                    </tr>--}}
                                    {{--                                        @endif--}}
                                    <tr>
                                        {{--                                                    @break(true)--}}
                                        {{--                                            @endif--}}
                                        <td>{{$lead->id}}</td>
                                        {{--                                        @if(auth()->user()->role->name == 'admin')--}}
                                        {{--                                            <td>{{$order->user->name}}</td>--}}
                                        {{--                                        @endif--}}
                                        <td>{{$lead->name}}</td>

                                        <td>{{$lead->cources->title}}</td>
                                        <td>{{$lead->email}}</td>
                                        <td>{{$lead->phone}}</td>
                                        <td>{{$gender}}</td>
                                        <td>{{$lead->age}}</td>
                                        <td>{{$lead->types->name}}</td>
                                        <td>{{$lead->languages->name}}</td>





                                        {{--                                        <td>{{$order->created_at}}</td>--}}
                                        {{--                                        <td>--}}
                                        {{--                                                                                @if($order->status->name == 'pending')--}}
                                        {{--                                            <span class="badge {{$order->status->color}}">{{$order->status->name}}</span>--}}
                                        {{--                                                                                @elseif($order->status->name == 'proccessing')--}}
                                        {{--                                                                                    <span class=" badge " style="background-color: {{ $order->status->color }}">{{$order->status->name}}</span>--}}
                                        {{--                                                                                @endif--}}
                                        {{--                                        </td>--}}
                                        <td>

                                            <div class="dropdown mb-2">
                                                <button class="btn btn-link p-0" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-lg text-muted pb-3px"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                                    {{--                                                    <a href="{{route('course.show',$service->id)}}" class="dropdown-item d-flex align-items-center" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icon-sm me-2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg> <span class="">View</span></a>--}}
                                                    {{--                                                    @if(auth()->user()->role->name == 'admin')--}}
                                                    {{--                                                        <a href="{{route('order.edit',$order->id)}}" class="dropdown-item d-flex align-items-center" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 icon-sm me-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg> <span class="">Edit</span></a>--}}
                                                    <a class="dropdown-item delete_lead d-flex" href="#" data-lead-id="{{$lead->id}}"><i class="iconify me-2 mt-1" data-icon="uil:trash"></i> Delete</a> <!-- "delete-ad" custom class used for jquery function -->
                                                    <a class="dropdown-item Hellow d-flex align-items-center" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer icon-sm me-2"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg> <span class="">Print</span></a>
                                                    <a class="dropdown-item d-flex align-items-center" id="reloadButton" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download icon-sm me-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> <span class="">Download</span></a>
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
{{--<script src="{{ asset('assets/js/jquery-3-6-4.min.js') }}"></script>--}}

{{--<!-- bootstrap 5.3 -->--}}
{{--<script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>--}}

{{--<!-- sweet alert -->--}}
{{--<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>--}}

{{--<!-- iconify -->--}}
{{--<script src="{{ asset('assets/js/iconify.min.js') }}"></script>--}}
{{--<script src="js/jquery-3-6-4.min.js"></script>--}}
{{--<script src="js/sweetalert2.all.min.js"></script>--}}
<script
    src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
    crossorigin="anonymous">

</script>
<script>
    $(document).ready(function() {
        $('.delete_lead').click(function() {
            alert('clicked');
            var id = $(this).data('lead-id');
            var url = "{{ route('leads.destroy', ':id') }}";
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
