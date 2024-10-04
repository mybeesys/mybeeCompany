@extends('employee::layouts.master')

@section('title', __('employee::general.add_employee'))
@section('content')
    <form id="add_employee_form" class="form d-flex flex-column flex-lg-row" method="POST" enctype="multipart/form-data"
        action="{{ route('employees.store') }}">
        @csrf
        <x-employee::employees.form />
    </form>
@endsection

@section('script')
    @parent
    <script>
        datePicker();
        form('add_employee_form', "{{ route('employees.create.validation') }}",
            "{{ route('employees.generate.pin') }}")

    </script>
@endsection
