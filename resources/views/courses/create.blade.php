@extends('components.master')
@section('content')
    <section class="pt-4" style="padding-bottom: 100px">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-6">
                <form id="edit_form" enctype="multipart/form-data" action="{{route('courses.store')}}" method="POST" dir="rtl">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlSelect1" class="form-label">Service Type</label>
                        <select class="form-select"
                                name="service_id"
                            {{-- value="{{$leads->types->name}}"--}}
                        >
                            @foreach($services as $service)
                                <option   {{--@if($order->status_id == $statue->id) selected class="bg-white" @endif--}} selected value="{{$service->id}}" >{{$service->name}}</option>
                            @endforeach</select>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="fw-bold"> Title </label>
                        <input type="text" class="form-control mb-3" name="title" value="{{old('title')}}"/>
                        @error('title')
                        <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group col-md-12">
                        <label class="fw-bold"> Description </label>
                        <textarea class="form-control mb-3" name="description">{{old('description')}}</textarea>
                        @error('description')
                        <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group col-md-12" dir="ltr">
                        <label class="fw-bold"> Picture </label>
                        <input type="file" class="form-control mb-3" name="picture" value="{{old('picture')}}"/>
                        @error('picture')
                        <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group col-md-12">
                        <label class="fw-bold"> Price </label>
                        <input type="text" class="form-control mb-3" name="price" value="{{old('price')}}"/>
                        @error('price')
                        <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                        @enderror
                    </div>

{{--                    <div class="form-group col-md-12">--}}
{{--                        <label class="fw-bold"> Discount </label>--}}
{{--                        <input type="string" class="form-control mb-3" name="discount" value="{{old('discount')}}"/>--}}
{{--                        @error('discount')--}}
{{--                        <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>--}}
{{--                        @enderror--}}
{{--                    </div>--}}




{{--                    <div class="form-group col-md-12">--}}
{{--                        <label class="fw-bold"> Expair Date </label>--}}
{{--                        <input type="date" class="form-control mb-3" name="expire_at" value="{{old('expire_at')}}"/>--}}
{{--                        @error('expire_at')--}}
{{--                        <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>--}}
{{--                        @enderror--}}
{{--                    </div>--}}

{{--                    <div class="form-group col-md-12">--}}
{{--                        <div class="text-start d-inline-block">--}}
{{--                            <label class="fw-bold"> Status </label>--}}
{{--                             <br>--}}

{{--                            <div class="custom-control custom-radio custom-control-inline">--}}
{{--                                <input @if(old('status')!= null && old('status') == 1) checked @endif type="radio" id="customRadioInline1" name="status" value="1" class="custom-control-input" />--}}
{{--                                <label class="custom-control-label" for="customRadioInline1">active</label>--}}
{{--                            </div>--}}

{{--                            <div class="custom-control custom-radio custom-control-inline">--}}
{{--                                <input @if(old('status')!= null && old('status') == 0) checked @endif type="radio" id="customRadioInline2" name="status" value="0" class="custom-control-input" />--}}
{{--                                <label class="custom-control-label" for="customRadioInline2">inactive</label>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                        @error('status')--}}
{{--                        <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>--}}
{{--                        @enderror--}}
{{--                    </div>--}}

                    <div class="d-flex mt-5" dir="ltr">
                        <div class="col-6 d-flex justify-content-start">
                            <input type="submit" name="submit_button" id="submit_button"  class="btn btn-primary" style="width: 80%" value="Add" />
                        </div>
                        <div class="col-6 d-flex justify-content-end">
                            <a href="{{ route('dashboard') }}" type="button" class="btn btn-secondary" style="width: 80%">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection

<script>

    @if(session()->get('errors'))
    swalMessage("error", "Error Occured");
    @endif

</script>


