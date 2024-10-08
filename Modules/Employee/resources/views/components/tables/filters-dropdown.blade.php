<div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
    <button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click"
        data-kt-menu-placement="{{ session()->get('locale') == 'ar' ? 'bottom-start' : 'bottom-end' }}">
        <i class="ki-outline ki-filter fs-2"></i>@lang('employee::general.filters')
    </button>

    <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">

        <div class="px-7 py-5">
            <div class="fs-5 text-gray-900 fw-bold">@lang('employee::general.filters')</div>
        </div>
        <div class="separator border-gray-200"></div>

        <div class="px-7 py-5" data-kt-filter="form">

            <div class="mb-10">
                <label class="form-label fs-6 fw-semibold">@lang('employee::general.deleted_records')</label>
                @php
                    $options = [
                        ['id' => 'with_deleted_records', 'name' => __('employee::general.with_deleted_records')],
                        ['id' => 'only_deleted_records', 'name' => __('employee::general.only_deleted_records')],
                    ];
                @endphp
                <x-employee::form.select :options=$options name="deleted_records" />
            </div>

            <div class="mb-10">
                <label class="form-label fs-6 fw-semibold">@lang('employee::fields.status')</label>
                @php
                    $options = [
                        ['id' => '1', 'name' => __('employee::fields.active')],
                        ['id' => '0', 'name' => __('employee::fields.inActive')],
                    ];
                @endphp
                <x-employee::form.select :options=$options name="status" />
            </div>

            <div class="d-flex justify-content-end">
                <button type="reset" class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6"
                    data-kt-menu-dismiss="true" data-kt-filter="reset">@lang('employee::general.reset')</button>
                <button type="submit" class="btn btn-primary fw-semibold px-6" data-kt-menu-dismiss="true"
                    data-kt-filter="filter">@lang('employee::general.apply')</button>
            </div>
        </div>
    </div>
</div>
