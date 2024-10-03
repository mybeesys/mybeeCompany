@extends('employee::layouts.master')

@section('title', __('employee::general.edit_employee'))
@section('content')
    <form id="edit_employee_form" class="form d-flex flex-column flex-lg-row" method="POST" enctype="multipart/form-data"
        action="{{ route('employees.update', ['employee' => $employee]) }}">
        @method('put')
        @csrf
        <x-employee::employees.form :employee=$employee />
    </form>
@endsection

@section('script')
    <script>
        new tempusDominus.TempusDominus($("#employmentStartDate")[0], {
            localization: {
                format: "yyyy/MM/dd",
            },
            restrictions: {
                maxDate: new Date(),
            },
            display: {
                viewMode: "calendar",
                components: {
                    decades: true,
                    year: true,
                    month: true,
                    date: true,
                    hours: false,
                    minutes: false,
                    seconds: false
                }
            }
        });

        $(document).ready(function() {
            let typingTimer;
            let doneTypingInterval = 1000;
            let hasError = false;
            let saveButton = $('#edit_employee_form_button');
            saveButton.prop('disabled', true);


            $('#isActive').change(function() {                
                if ($(this).is(':checked')) {
                    $(this).val(1);
                } else {
                    $(this).val(0);                    
                }
            });

            // On keyup, start the countdown
            $('#edit_employee_form input, #edit_employee_form input[type="file"]').on('change', function() {
                let input = $(this);
                validateField(input);
            });

            $('#generate_pin').on('click', function(e) {
                e.preventDefault();
                $.ajax({
                    url: "{{ route('employees.generate.pin') }}",
                    type: 'GET',
                    success: function(response) {
                        $('#PIN').val(response.data);
                    },
                    error: function(response) {
                        Swal.fire({
                            text: "{{ __('employee::responses.something_wrong_happened') }}",
                            icon: "error",
                            confirmButtonText: "{{ __('employee::general.try_again') }}",
                            customClass: {
                                confirmButton: "btn btn-danger"
                            }
                        });
                    }
                });
            });

            // Function to handle validation via AJAX
            function validateField(input) {
                let field = input.attr('name');
                let formData = new FormData();
                formData.append(field, input[0].files ? input[0].files[0] : input.val());
                formData.append("_token", "{{ csrf_token() }}");

                $.ajax({
                    url: "{{ route('employees.update.validation') }}",
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        input.siblings('.invalid-feedback ').remove();
                        input.removeClass('is-invalid');
                        $('#image_error').removeClass('d-block');
                        checkErrors();
                    },
                    error: function(response) {
                        input.siblings('.invalid-feedback').remove();
                        input.removeClass('is-invalid');
                        $('#image_error').removeClass('d-block');

                        let errorMsg = response.responseJSON.errors[field];
                        if (errorMsg) {
                            input.addClass('is-invalid');
                            if (input.attr('type') === 'file') {
                                input.closest('div').after(
                                    '<div class="invalid-feedback d-block" id="image_error">' +
                                    errorMsg[0] + '</div>');
                            } else {
                                input.after('<div class="invalid-feedback">' + errorMsg[0] + '</div>');
                            }
                        }
                        checkErrors();
                    }
                });
            }

            function checkErrors() {
                if ($('.is-invalid').length > 0) {
                    saveButton.prop('disabled', true);
                } else {
                    saveButton.prop('disabled', false);
                }
            }
        });
    </script>
@endsection
