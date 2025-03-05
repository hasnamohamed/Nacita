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
                    <label>رقم الشاسيه</label>
                    <input type="number" class="form-control inspection-input" name="chassis_no">
                </div>
            </div>
            <div class="row mb-1">
                <div class="col-3">
                    <label>رقم الموتور</label>
                    <input type="number" class="form-control inspection-input" name="engine_no">
                </div>
                <div class="col-3">
                    <label>لون السيارة</label>
                    <input type="text" class="form-control inspection-input" name="car_color">
                </div>
                <div class="col-3">
                    <label>السعة CC</label>
                    <input type="text" class="form-control inspection-input" name="cc_capacity">
                </div>
                <div class="col-3">
                    <label>ناقل الحركة</label>
                    <select class="form-select inspection-input" name="transmission">
                        <option value="manual">مانيوال</option>
                        <option value="automatic">أوتوماتيك</option>
                    </select>
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
                <tr>
                    <td>إكصدامات أمامي وخلفي </td>
                    <td><input type="radio" name="front_back_bumpers_fit" value="1"></td>
                    <td><input type="radio" name="front_back_bumpers_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="front_back_bumpers_note"></td>
                    <td>مرايات جاننبية</td>
                    <td><input type="radio" name="side_mirror_fit" value="1"></td>
                    <td><input type="radio"  name="side_mirror_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input"  name="side_mirror_note"></td>
                </tr>
                <tr>
                    <td>كبوت</td>
                    <td><input type="radio" name="hood_fit" value="1"></td>
                    <td><input type="radio" name="hood_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="hood_note"></td>
                    <td>ميكانزم المريات</td>
                    <td><input type="radio" name="mirror_mechanism_fit" value="1"></td>
                    <td><input type="radio" name="mirror_mechanism_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="mirror_mechanism_note"></td>
                </tr>
                <tr>
                    <td>سقف</td>
                    <td><input type="radio" name="roof_fit" value="1"></td>
                    <td><input type="radio" name="roof_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="roof_note"></td>
                    <td>زجاج أمامي وخلفي وأبواب</td>
                    <td><input type="radio" name="front_back_doors_mirror_fit" value="1"></td>
                    <td><input type="radio" name="front_back_doors_mirror_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="front_back_doors_mirror_note"></td>
                </tr>
                <tr>
                    <td>رفارف</td>
                    <td><input type="radio" name="fenders_fit" value="1"></td>
                    <td><input type="radio" name="fenders_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="fenders_note"></td>
                    <td>سنتر لوك / إنذار</td>
                    <td><input type="radio" name="alert_fit" value="1"></td>
                    <td><input type="radio" name="alert_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="alert_note"></td>
                </tr>
                <tr>
                    <td>أبواب</td>
                    <td><input type="radio" name="doors_fit" value="1"></td>
                    <td><input type="radio" name="doors_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="doors_note"></td>
                    <td>مراوح التبريد والبلاور</td>
                    <td><input type="radio" name="cooling_fans_blowers_fit" value="1"></td>
                    <td><input type="radio" name="cooling_fans_blowers_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="cooling_fans_blowers_note"></td>
                </tr>
                <tr>
                    <td>كوالين ابواب وشنطة</td>
                    <td><input type="radio" name="brakes_condition_fit" value="1"></td>
                    <td><input type="radio" name="brakes_condition_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="brakes_condition_note"></td>
                    <td>علبة الفيوزات </td>
                    <td><input type="radio" name="door_trunk_locks_fit" value="1"></td>
                    <td><input type="radio" name="door_trunk_locks_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="door_trunk_locks_note"></td>
                </tr>
                <tr>
                    <td>شنطة</td>
                    <td><input type="radio" name="bag_fit" value="1"></td>
                    <td><input type="radio" name="bag_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="bag_note"></td>
                    <td> إطار أمامي شمال (حالة النقشة - تاريخ الإنتاج - حالة الجنط)</td>
                    <td><input type="radio" name="front_tire_north_fit" value="1"></td>
                    <td><input type="radio" name="front_tire_north_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="front_tire_north_note"></td>
                </tr>
                <tr>
                    <td>عتب</td>
                    <td><input type="radio" name="reproach_fit" value="1"></td>
                    <td><input type="radio" name="reproach_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="reproach_note"></td>
                    <td> إطار أمامي يمين (حالة النقشة - تاريخ الإنتاج - حالة الجنط)</td>
                    <td><input type="radio" name="front_tire_right_fit" value="1"></td>
                    <td><input type="radio" name="front_tire_right_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="front_tire_right_note"></td>
                </tr>
                <tr>
                    <td>دهانات (دوكو ظاهرى)</td>
                    <td><input type="radio" name="paints_fit" value="1"></td>
                    <td><input type="radio" name="paints_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="paints_note"></td>
                    <td> إطار خلفي شمال (حالة النقشة - تاريخ الإنتاج - حالة الجنط)</td>
                    <td><input type="radio" name="back_tire_north_fit" value="1"></td>
                    <td><input type="radio" name="back_tire_north_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="back_tire_north_note"></td>
                </tr>
                <tr>
                    <td>فوانيس أمامي وخلفي وإشارة</td>
                    <td><input type="radio" name="front_back_lights_signal_fit" value="1"></td>
                    <td><input type="radio" name="front_back_lights_signal_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="front_back_lights_signal_note"></td>
                    <td> إطار خلفي يمين (حالة النقشة - تاريخ الإنتاج - حالة الجنط)</td>
                    <td><input type="radio" name="back_tire_right_fit" value="1"></td>
                    <td><input type="radio" name="back_tire_right_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="back_tire_right_note"></td>
                </tr>
                <tr>
                    <td>إضاءة خارجية</td>
                    <td><input type="radio" name="outdoor_lighting_fit" value="1"></td>
                    <td><input type="radio" name="outdoor_lighting_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="outdoor_lighting_note"></td>
                    <td> إطار إستبن (حالة النقشة - تاريخ الإنتاج - حالة الجنط)</td>
                    <td><input type="radio" name="spare_tire_fit" value="1"></td>
                    <td><input type="radio" name="spare_tire_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="spare_tire_note"></td>
                </tr>
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
                <tr>
                    <td>زيوت / سوائل</td>
                    <td><input type="radio" name="oils_liquids_fit" value="1"></td>
                    <td><input type="radio" name="oils_liquids_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="oils_liquids_note"
                               value="يلزم التغيير في الصيانة الدورية"></td>
                    <td> تيل + ديسكات فرامل أمامي وخلفي</td>
                    <td><input type="radio" name="front_back_brake_pads_and_discs_fit" value="1"></td>
                    <td><input type="radio" name="front_back_brake_pads_and_discs_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="front_back_brake_pads_and_discs_note"></td>
                </tr>
                <tr>
                    <td>بوجيهات</td>
                    <td><input type="radio" name="spark_plugs_fit" value="1"></td>
                    <td><input type="radio" name="spark_plugs_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="spark_plugs_note"
                               value="يلزم التغيير في الصيانة الدورية"></td>
                    <td>مستوي فرامل اليد</td>
                    <td><input type="radio" name="handbrake_level_fit" value="1"></td>
                    <td><input type="radio" name="handbrake_level_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="handbrake_level_note"></td>
                </tr>
                <tr>
                    <td>سيور</td>
                    <td><input type="radio" name="belts_fit" value="1"></td>
                    <td><input type="radio" name="belts_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="belts_note"
                               value="يلزم التغيير في الصيانة الدورية"></td>
                    <td>عفشة</td>
                    <td><input type="radio" name="furniture_fit" value="1"></td>
                    <td><input type="radio" name="furniture_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="furniture_note"></td>
                </tr>
                <tr>
                    <td>فلتر هواء / تكييف</td>
                    <td><input type="radio" name="air_filter_and_conditioning_fit" value="1"></td>
                    <td><input type="radio" name="air_filter_and_conditioning_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="air_filter_and_conditioning_note"></td>
                    <td>قواعد محرك</td>
                    <td><input type="radio" name="engine_rules_fit" value="1"></td>
                    <td><input type="radio" name="engine_rules_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="engine_rules_note"></td>
                </tr>
                <tr>
                    <td>شكمان</td>
                    <td><input type="radio" name="muffler_fit" value="1"></td>
                    <td><input type="radio" name="muffler_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="muffler_note"></td>
                    <td>شاسيه ( ظاهرى)</td>
                    <td><input type="radio" name="apparent_chassis_fit" value="1"></td>
                    <td><input type="radio" name="apparent_chassis_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="apparent_chassis_note"></td>
                </tr>
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
                <tr>
                    <td>فرش</td>
                    <td><input type="radio" name="furnishing_fit" value="1"></td>
                    <td><input type="radio" name="furnishing_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="furnishing_note"></td>
                    <td> التكييف</td>
                    <td><input type="radio" name="air_conditioning_fit" value="1"></td>
                    <td><input type="radio" name="air_conditioning_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="air_conditioning_note"></td>
                </tr>
                <tr>
                    <td>تابلوه</td>
                    <td><input type="radio" name="tableau_fit" value="1"></td>
                    <td><input type="radio" name="tableau_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="tableau_note"></td>
                    <td>الولاعة</td>
                    <td><input type="radio" name="lighter_fit" value="1"></td>
                    <td><input type="radio" name="lighter_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="lighter_note"></td>
                </tr>
                <tr>
                    <td>لمبات إنذار بلوحة العدادات</td>
                    <td><input type="radio" name="dashboard_warning_lights_fit" value="1"></td>
                    <td><input type="radio" name="dashboard_warning_lights_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="dashboard_warning_lights_note"></td>
                    <td>إنفجار الإيرباج</td>
                    <td><input type="radio" name="airbag_explosion_fit" value="1"></td>
                    <td><input type="radio" name="airbag_explosion_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="airbag_explosion_note"></td>
                </tr>
                <tr>
                    <td>عدادات</td>
                    <td><input type="radio" name="counters_fit" value="1"></td>
                    <td><input type="radio" name="counters_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="counters_note"></td>
                    <td>فرش السقف</td>
                    <td><input type="radio" name="ceiling_furnishing_fit" value="1"></td>
                    <td><input type="radio" name="ceiling_furnishing_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="ceiling_furnishing_note"></td>
                </tr>
                <tr>
                    <td>كاسيت وسماعات</td>
                    <td><input type="radio" name="cassette_headphones_fit" value="1"></td>
                    <td><input type="radio" name="cassette_headphones_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="cassette_headphones_note"></td>
                    <td>فتحة سقف</td>
                    <td><input type="radio" name="sunroof_fit" value="1"></td>
                    <td><input type="radio" name="sunroof_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="sunroof_note"></td>
                </tr>
                <tr>
                    <td>إضاءة داخلية</td>
                    <td><input type="radio" name="interior_lighting_fit" value="1"></td>
                    <td><input type="radio" name="interior_lighting_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="interior_lighting_note"></td>
                    <td>زجاج كهرباء</td>
                    <td><input type="radio" name="electric_glass_fit" value="1"></td>
                    <td><input type="radio" name="electric_glass_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="electric_glass_note"></td>
                </tr>
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
                <tr>
                    <td>تكييف</td>
                    <td><input type="radio" name="auto_air_conditioning_fit" value="1"></td>
                    <td><input type="radio" name="auto_air_conditioning_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="auto_air_conditioning_note"></td>
                    <td>كبس موتور (Bar)</td>
                    <td><input type="radio" name="motor_press_bar_fit" value="1"></td>
                    <td><input type="radio" name="motor_press_bar_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="motor_press_bar_note"></td>
                </tr>
                <tr>
                    <td>بطارية + دينامو</td>
                    <td><input type="radio" name="battery_dynamo_fit" value="1"></td>
                    <td><input type="radio" name="battery_dynamo_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="battery_dynamo_note"></td>
                    <td>الزوايا ( مرفق تقرير الجهاز )</td>
                    <td><input type="radio" name="angles_fit" value="1"></td>
                    <td><input type="radio" name="angles_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="angles_note"></td>
                </tr>
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
