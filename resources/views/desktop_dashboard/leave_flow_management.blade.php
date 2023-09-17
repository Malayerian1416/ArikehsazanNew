@extends('desktop_dashboard.d_dashboard')
@section('styles')
@endsection
@section('scripts')
@endsection
@section('page_title')
    مدیریت جریان درخواست مرخصی
@endsection
@section('content')
    <div class="flow_container">
        <h5 class="iran_yekan border-bottom p-3">پرسنل</h5>
        <img src="{{asset("/img/arrow-down.svg")}}" class="arrow" alt="arrow">
        <h5 class="iran_yekan border-bottom p-3">تایید کنندگان</h5>

        @forelse($leave_flow as $inductor)
            <div class="flow_container_inductor">
                <div class="rectangle inductor">
                    <span class="iran_yekan">{{$inductor->priority." - ".$inductor->role->name}}</span>
                </div>
            </div>
            @if(!$loop->last)
                <img src="{{asset("/img/arrow-down.svg")}}" class="arrow" alt="arrow">
            @endif
        @empty
            <span class="iran_yekan">اطلاعاتی ثبت نشده است</span>
        @endforelse
    </div>
@endsection
@section('page_footer')
    <div class="form-row m-0 d-flex flex-row justify-content-center">
        <a href="{{route("LeaveFlow.create")}}">
            <button form="create_form" class="btn btn-outline-primary iran_yekan mr-2">
                <i v-show="button_loading" class="button_loading fa fa-spinner fa-spin mr-2"></i>
                <i v-show="button_not_loading" class="fa fa-edit button_icon"></i>
                <span v-show="button_not_loading">ایجاد و ویرایش جریان</span>
            </button>
        </a>
{{--        <a href="{{route("LeaveFlow.permissions")}}">--}}
{{--            <button form="create_form" class="btn btn-outline-info iran_yekan mr-2">--}}
{{--                <i v-show="button_loading" class="button_loading fa fa-spinner fa-spin mr-2"></i>--}}
{{--                <i v-show="button_not_loading" class="fa fa-layer-group button_icon"></i>--}}
{{--                <span v-show="button_not_loading">تعیین مجوزهای ویرایش اتوماسیون مرخصی</span>--}}
{{--            </button>--}}
{{--        </a>--}}
        <a href="{{route("idle")}}">
            <button type="button" class="btn btn-outline-light iran_yekan">
                <i class="fa fa-backspace button_icon"></i>
                <span>خروج</span>
            </button>
        </a>
    </div>
@endsection
