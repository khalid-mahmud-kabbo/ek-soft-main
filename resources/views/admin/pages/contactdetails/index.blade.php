@extends('admin.master', ['menu' => 'contactdetails'])
@section('title', isset($title) ? $title : '')
@section('content')

    <div id="table-url" data-url="{{ route('admin.contactdetails') }}"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{__('Contact Form Details')}}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('Home')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('Contact Form Details')}}</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="customers__area bg-style mb-30">
                <div class="customers__table">
                    <table id="ContactFormTable" class="row-border data-table-filter table-style">
                        <thead>
                        <tr>
                            <th>{{ __('User Name')}}</th>
                            <th>{{ __('User Email')}}</th>
                            <th>{{ __('Massage')}}</th>
                            <th>{{ __('Action')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--Row-->
    @push('post_scripts')
        <script src="{{asset('backend/js/admin/datatables/contactdetails.js')}}"></script>
        <!-- Page level custom scripts -->
    @endpush
@endsection
