@extends('layouts.app')
@section('title')
All Checks
@endsection
@section('headTitle')
كل الفحوصات
@endsection
@section('content')
        <div class="container my-2 inspection-form">
            <h5 class="text-center">نموذج فحص السيارة -  {{ $check->vehicle_model_and_type }} </h5>
            <br>
            <div class="row mb-1">
                <div class="col-3">
                    <p>التاريخ: <span class="text text-secondary">{{ $check->date }}</span></p>
                </div>
                <div class="col-3">
                    <p> الفرع:<span class="text text-secondary"> {{ $check->branch }}</span></p>
                </div>
                <div class="col-2">
                    <p>ساعة الدخول: <span class="text text-secondary">{{ $check->entrance }}</span></p>
                </div>
                <div class="col-2">
                    <p>ساعة الخروج: <span class="text text-secondary">{{ $check->exit }}</span></p>
                </div>
                <div class="col-2">
                    <p>الفئة: <span class="text text-secondary">{{ $check->category }}</span></p>
                </div>
            </div>
            <div class="row mb-1">
                <div class="col-3">
                    <p>اسم المشرف: <span class="text text-secondary">{{ $check->supervisor_name }}</span></p>
                </div>
                <div class="col-3">
                    <p>اسم العميل: <span class="text text-secondary">{{ $check->customer_name }}</span> </p>
                </div>
                <div class="col-3">
                    <p>التليفون: <span class="text text-secondary">{{ $check->phone_no }}</span></p>
                </div>
                <div class="col-3">
                    <p>نوع وموديل السيارة: <span class="text text-secondary">{{ $check->vehicle_model_and_type }}</span></p>
                </div>
            </div>
            <div class="row mb-1">
                <div class="col-3">
                    <p>سنة الصنع: <span class="text text-secondary">{{ $check->manufacturing_year }}</span></p>
                </div>
                <div class="col-3">
                    <label>رقم السيارة: <span class="text text-secondary">{{ $check->vehicle_number }}</span> </label>
                </div>
                <div class="col-3">
                    <p>الكيلومترات: <span class="text text-secondary">{{ $check->kilometers }}</span></p>

                </div>
                <div class="col-3">
                    <p>رقم الشاسيه: <span class="text text-secondary">{{ $check->chassis_no }}</span></p>
                </div>
            </div>
            <div class="row mb-1">
                <div class="col-3">
                    <p>رقم الموتور: <span class="text text-secondary">{{ $check->engine_no }}</span></p>
                </div>
                <div class="col-3">
                    <p>لون السيارة: <span class="text text-secondary">{{ $check->car_color }}</span></p>
                </div>
                <div class="col-3">
                    <p>السعة  <span class="text text-secondary">: {{ $check->cc_capacity }}</span>CC</p>
                </div>
                <div class="col-3">
                    <p>ناقل الحركة: <span class="text text-secondary">{{ $check->transmission }}</span></p>
                </div>
            </div>
            <br>
            <h6 class="mt-4">الفحص الظاهرى (خارج السيارة)</h6>
            <br>
            <table class="table table-bordered inspection-table">
                <thead>
                <tr>
                    <th>البند</th>
                    <th>سليم</th>
                    <th>غير سليم</th>
                    <th>ملاحظات</th>
                    <th>البند</th>
                    <th>سليم</th>
                    <th>غير سليم</th>
                    <th>ملاحظات</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $counter = 0;
                @endphp

                @foreach($check_info as $check_information)
                    @if($counter == 22)
                        @break
                    @endif

                    @if($counter % 2 == 0)
                        <tr>
                            @endif

                            <td>{{ $check_information->item }}</td>

                            <td>
                                <input disabled type="radio" value="1"
                                       @if($check_information->fit == 1) checked @endif>
                            </td>

                            <td>
                                <input disabled type="radio" value="0"
                                       @if($check_information->fit == 0) checked @endif>
                            </td>

                            <td>{{ $check_information->note }}</td>

                            @php $counter++; @endphp

                            @if($counter % 2 == 0 || $loop->last)
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
            <br>
            <h6 class="mt-4">الفحص الظاهرى (ميكانيكا + عفشة)</h6>
            <br>
            <table class="table table-bordered inspection-table">
                <thead>
                <tr>
                    <th>البند</th>
                    <th>سليم</th>
                    <th>غير سليم</th>
                    <th>ملاحظات</th>
                    <th>البند</th>
                    <th>سليم</th>
                    <th>غير سليم</th>
                    <th>ملاحظات</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $counter = 22; // Start from 22 to continue from previous loop
                @endphp

                @foreach($check_info as $index => $check_information)
                    @if($counter == 32)
                        @break {{-- Stop the loop when counter reaches 32 --}}
                    @endif
                    @if($index < 22)
                        @continue {{-- Skip the first 22 elements --}}
                    @endif

                    @if(($counter - 22) % 2 == 0)
                        <tr> {{-- Start a new row every two records --}}
                            @endif

                            <td>{{ $check_information->item }}</td>

                            <td>
                                <input disabled type="radio" value="1"
                                       @if($check_information->fit == 1) checked @endif>
                            </td>

                            <td>
                                <input disabled type="radio" value="0"
                                       @if($check_information->fit == 0) checked @endif>
                            </td>

                            <td>{{ $check_information->note }}</td>

                            @php $counter++; @endphp

                            @if(($counter - 22) % 2 == 0 || $counter == 32 || $loop->last)
                        </tr> {{-- Close the row after two records or if limit reached --}}
                    @endif
                @endforeach

                </tbody>
            </table>
            <br>
            <h6 class="mt-4">الفحص الظاهرى (داخل السيارة)</h6>
            <br>
            <table class="table table-bordered inspection-table">
                <thead>
                <tr>
                    <th>البند</th>
                    <th>سليم</th>
                    <th>غير سليم</th>
                    <th>ملاحظات</th>
                    <th>البند</th>
                    <th>سليم</th>
                    <th>غير سليم</th>
                    <th>ملاحظات</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $counter = 32; // Start from 22 to continue from previous loop
                @endphp

                @foreach($check_info as $index => $check_information)
                    @if($counter == 44)
                        @break {{-- Stop the loop when counter reaches 32 --}}
                    @endif
                    @if($index < 32)
                        @continue {{-- Skip the first 22 elements --}}
                    @endif

                    @if(($counter - 32) % 2 == 0)
                        <tr> {{-- Start a new row every two records --}}
                            @endif

                            <td>{{ $check_information->item }}</td>

                            <td>
                                <input disabled type="radio" value="1"
                                       @if($check_information->fit == 1) checked @endif>
                            </td>

                            <td>
                                <input disabled type="radio" value="0"
                                       @if($check_information->fit == 0) checked @endif>
                            </td>

                            <td>{{ $check_information->note }}</td>

                            @php $counter++; @endphp

                            @if(($counter - 32) % 2 == 0 || $counter == 32 || $loop->last)
                        </tr> {{-- Close the row after two records or if limit reached --}}
                    @endif
                @endforeach
                </tbody>
            </table>

            <br>
            <h6 class="mt-4">الفحص الآلي</h6>
            <br>
            <table class="table table-bordered inspection-table">
                <thead>
                <tr>
                    <th>البند</th>
                    <th>سليم</th>
                    <th>غير سليم</th>
                    <th>ملاحظات</th>
                    <th>البند</th>
                    <th>سليم</th>
                    <th>غير سليم</th>
                    <th>ملاحظات</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $counter = 44; // Start from 22 to continue from previous loop
                @endphp

                @foreach($check_info as $index => $check_information)
                    @if($counter == 48)
                        @break
                    @endif
                    @if($index < 44)
                        @continue
                    @endif

                    @if(($counter - 44) % 2 == 0)
                        <tr>
                            @endif

                            <td>{{ $check_information->item }}</td>

                            <td>
                                <input disabled type="radio" value="1"
                                       @if($check_information->fit == 1) checked @endif>
                            </td>

                            <td>
                                <input disabled type="radio" value="0"
                                       @if($check_information->fit == 0) checked @endif>
                            </td>

                            <td>{{ $check_information->note }}</td>

                            @php $counter++; @endphp

                            @if(($counter - 44) % 2 == 0 || $counter == 32 || $loop->last)
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table>

            <br>
            <h6 class="mt-4 d-inline">حالة السيارة من الخارج </h6>    <small>*فحص الشاسية والدوكو ظاهرى فقط دو أدني
                مسئولية علي الشركة</small>
            <br>

        </div>

        <div class="mb-3">
            <label class="form-label">ملاحظات اخري</label>
            <p class="form-control" >{{ $check->additional_notes }}</p>
        </div>

@endsection
