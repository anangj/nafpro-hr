
@extends('layouts.master')

@section('title',__('index.overtime'))

@section('page')
    <a href="{{ route('admin.overtime.index')}}">
        {{ __('index.overtime') }}
    </a>
@endsection

@section('sub_page','Create')

@section('main-content')

    <section class="content">

        @include('admin.section.flash_message')

        @include('admin.payrollSetting.common.breadcrumb')
        <div class="row">
            <div class="col-xl-2 col-lg-3 mb-4">
                @include('admin.payrollSetting.common.setting_menu')
            </div>
            <div class="col-xl-10 col-lg-9 mb-4">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" action="{{ route('admin.overtime.store') }}" method="POST">
                            @csrf

                            @include('admin.payrollSetting.overtime.common.form')

                        </form>
                    </div>
                </div>

            </div>
        </div>

    </section>
@endsection

@section('scripts')
    @include('admin.payrollSetting.overtime.common.scripts')
@endsection