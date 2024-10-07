@props(['role' => null, 'departments' => null])
<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
    <x-employee::form.form-card :title="__('employee::general.role_details')">
        <div class="d-flex flex-wrap">
            <x-employee::form.input-div class="mb-10 w-100 px-2">
                <x-employee::form.input required :errors=$errors
                    placeholder="{{ __('employee::fields.name') }} ({{ __('employee::fields.required') }})"
                    value="{{ $role?->name }}" name="name" :label="__('employee::fields.name')" />
            </x-employee::form.input-div>
            <x-employee::form.input-div class="mb-10 w-100 px-2">
                <x-employee::form.input :errors=$errors placeholder="{{ __('employee::fields.department') }}"
                    name="department" :label="__('employee::fields.department')">
                    <x-slot:datalist>
                        <datalist id="departmentlist">
                            @isset($departments)
                                @foreach ($departments as $department)
                                    <option value="{{ $department }}">
                                @endforeach
                            @endisset
                        </datalist>
                    </x-slot:datalist>
                </x-employee::form.input>
            </x-employee::form.input-div>
            <x-employee::form.input-div class="mb-10 w-100 px-2">
                <x-employee::form.input required :errors=$errors placeholder="{{ __('employee::fields.rank') }} (1-999)"
                    value="{{ $role?->rank }}" name="rank" :label="__('employee::fields.rank')" />
            </x-employee::form.input-div>
        </div>
    </x-employee::form.form-card>
    <div class="table-responsive">
        <!--begin::Table-->
        <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
            <!--begin::Table head-->
            <thead>
                <tr class="fw-bold fs-6 text-gray-800 text-center border-0 bg-light">
                    <th class="rounded-start"></th>
                    <th class="">Regular</th>
                    <th class="">Multiple</th>
                    <th class="">Extended</th>
                    <th class="">Extended</th>
                    <th class="">Extended</th>
                    <th class=" rounded-end">Extended</th>
                </tr>
            </thead>
            <!--end::Table head-->
            <!--begin::Table body-->
            <tbody class="border-bottom border-dashed">
                <tr class="fw-semibold fs-6 text-gray-800 text-center">
                    <td class="text-start ps-6 fs-4">Number of end products or domains</td>
                    <td>
                        <div class="form-check form-check-custom justify-content-center">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-custom justify-content-center">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-custom justify-content-center">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-custom justify-content-center">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-custom justify-content-center">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-custom justify-content-center">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        </div>
                    </td>
                </tr>
                <tr class="text-center">
                    <td class="text-start ps-6">
                        <div class="fw-semibold fs-4 text-gray-800">End product with paid services</div>
                    </td>
                    <td>
                        <div class="form-check form-check-custom justify-content-center">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-custom justify-content-center">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-custom justify-content-center">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-custom justify-content-center">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-custom justify-content-center">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-custom justify-content-center">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        </div>
                    </td>
                </tr>
                <tr class="text-center">
                    <td class="text-start ps-6">
                        <div class="fw-semibold fs-4 text-gray-800">End product with paid services</div>
                    </td>
                    <td>
                        <div class="form-check form-check-custom justify-content-center">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-custom justify-content-center">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-custom justify-content-center">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-custom justify-content-center">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-custom justify-content-center">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-check-custom justify-content-center">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        </div>
                    </td>
                </tr>
            </tbody>
            <!--end::Table body-->
        </table>
        <!--end::Table-->
    </div>
    <x-employee::form.form-buttons cancelUrl="{{ url('/role') }}" />
</div>
