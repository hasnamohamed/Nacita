@extends('layouts.app')
@section('stylesheets')
    .inspection-form { font-size: 14px; }
    .inspection-form .form-control,
    .inspection-form .form-select {
    height: 30px;
    padding: 2px;
    font-size: 14px;
    }
    .inspection-form label {
    font-weight: bold;
    font-size: 13px;
    }
    .inspection-form .table th,
    .inspection-form .table td {
    padding: 4px;
    font-size: 13px;
    text-align: center;
    }
@endsection
@section('title')
    Create full checks
@endsection
@section('headTitle')
    إنشاء نموذج فحص السيارة
@endsection
@section('content')
    <form>
        <div class="container my-2 inspection-form">
            <h5 class="text-center">نموذج فحص السيارة - ناسيتا أوتو كير</h5>
            <br>
            <div class="row mb-1">
                <div class="col-3">
                    <label>التاريخ</label>
                    <input type="date" class="form-control inspection-input" name="inspection_date">
                </div>
                <div class="col-3">
                    <label>الفرع</label>
                    <input type="text" class="form-control inspection-input" name="branch">
                </div>
                <div class="col-3">
                    <label>ساعة الدخول</label>
                    <input type="time" class="form-control inspection-input" name="entry_time">
                </div>
                <div class="col-3">
                    <label>ساعة الخروج</label>
                    <input type="time" class="form-control inspection-input" name="exit_time">
                </div>
            </div>
            <div class="row mb-1">
                <div class="col-3">
                    <label>اسم المشرف</label>
                    <input type="text" class="form-control inspection-input" name="supervisor_name">
                </div>
                <div class="col-3">
                    <label>اسم العميل</label>
                    <input type="text" class="form-control inspection-input" name="customer_name">
                </div>
                <div class="col-3">
                    <label>التليفون</label>
                    <input type="text" class="form-control inspection-input" name="phone">
                </div>
                <div class="col-3">
                    <label>نوع وموديل السيارة</label>
                    <input type="text" class="form-control inspection-input" name="vehicle_model">
                </div>
            </div>
            <div class="row mb-1">
                <div class="col-3">
                    <label>سنة الصنع</label>
                    <input type="text" class="form-control inspection-input" name="manufacturing_year">
                </div>
                <div class="col-3">
                    <label>رقم السيارة</label>
                    <input type="text" class="form-control inspection-input" name="plate_number">
                </div>
                <div class="col-3">
                    <label>الكيلومترات</label>
                    <input type="text" class="form-control inspection-input" name="odometer">
                </div>
                <div class="col-3">
                    <label>رقم الشاسيه</label>
                    <input type="text" class="form-control inspection-input" name="chassis_number">
                </div>
            </div>
            <div class="row mb-1">
                <div class="col-3">
                    <label>رقم الموتور</label>
                    <input type="text" class="form-control inspection-input" name="engine_number">
                </div>
                <div class="col-3">
                    <label>لون السيارة</label>
                    <input type="text" class="form-control inspection-input" name="car_color">
                </div>
                <div class="col-3">
                    <label>السعة CC</label>
                    <input type="text" class="form-control inspection-input" name="engine_capacity">
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
                    <td><input type="checkbox" name="front_back_bumpers_fit" value="سليم"></td>
                    <td><input type="checkbox" name="front_back_bumpers_unfit" value="غير سليم"></td>
                    <td><input type="text" class="form-control inspection-input" name="front_back_bumpers_note"></td>
                    <td>مرايات جاننبية</td>
                    <td><input type="checkbox" name="side_mirror_fit" value="سليم"></td>
                    <td><input type="checkbox"  name="side_mirror_unfit" value="غير سليم"></td>
                    <td><input type="text" class="form-control inspection-input"  name="side_mirror_note"></td>
                </tr>
                <tr>
                    <td>كبوت</td>
                    <td><input type="checkbox" name="hood_fit" value="سليم"></td>
                    <td><input type="checkbox" name="hood_unfit" value="غير سليم"></td>
                    <td><input type="text" class="form-control inspection-input" name="hood_note"></td>
                    <td>ميكانزم المريات</td>
                    <td><input type="checkbox" name="mirror_mechanism_fit" value="سليم"></td>
                    <td><input type="checkbox" name="mirror_mechanism_unfit" value="غير سليم"></td>
                    <td><input type="text" class="form-control inspection-input" name="mirror_mechanism_note"></td>
                </tr>
                <tr>
                    <td>سقف</td>
                    <td><input type="checkbox" name="roof_fit" value="سليم"></td>
                    <td><input type="checkbox" name="roof_unfit" value="غير سليم"></td>
                    <td><input type="text" class="form-control inspection-input" name="roof_note"></td>
                    <td>زجاج أمامي وخلفي وأبواب</td>
                    <td><input type="checkbox" name="front_back_doors_mirror_fit" value="سليم"></td>
                    <td><input type="checkbox" name="front_back_doors_mirror_unfit" value="غير سليم"></td>
                    <td><input type="text" class="form-control inspection-input" name="front_back_doors_mirror_note"></td>
                </tr>
                <tr>
                    <td>رفارف</td>
                    <td><input type="checkbox" name="fenders_fit" value="1"></td>
                    <td><input type="checkbox" name="fenders_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="fenders_note"></td>
                    <td>سنتر لوك / إنذار</td>
                    <td><input type="checkbox" name="alert_fit" value="1"></td>
                    <td><input type="checkbox" name="alert_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="alert_note"></td>
                </tr>
                <tr>
                    <td>أبواب</td>
                    <td><input type="checkbox" name="doors_fit" value="1"></td>
                    <td><input type="checkbox" name="doors_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="doors_note"></td>
                    <td>مراوح التبريد والبلاور</td>
                    <td><input type="checkbox" name="cooling_fans_blowers_fit" value="1"></td>
                    <td><input type="checkbox" name="cooling_fans_blowers_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="cooling_fans_blowers_note"></td>
                </tr>
                <tr>
                    <td>كوالين ابواب وشنطة</td>
                    <td><input type="checkbox" name="brakes_condition" value="سليم"></td>
                    <td><input type="checkbox" name="brakes_condition" value="غير سليم"></td>
                    <td><input type="text" class="form-control inspection-input" name="brakes_notes"></td>
                    <td> علبة الفيوزات</td>
                    <td><input type="checkbox" name="door_trunk_locks_fit" value="1"></td>
                    <td><input type="checkbox" name="door_trunk_locks_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="door_trunk_locks_note"></td>
                </tr>
                <tr>
                    <td>شنطة</td>
                    <td><input type="checkbox" name="bag_fit" value="1"></td>
                    <td><input type="checkbox" name="bag_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="bag_note"></td>
                    <td> إطار أمامي شمال (حالة النقشة - تاريخ الإنتاج - حالة الجنط)</td>
                    <td><input type="checkbox" name="front_tire_north_fit" value="1"></td>
                    <td><input type="checkbox" name="front_tire_north_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="front_tire_north_note"></td>
                </tr>
                <tr>
                    <td>عتب</td>
                    <td><input type="checkbox" name="reproach_fit" value="1"></td>
                    <td><input type="checkbox" name="reproach_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="reproach_note"></td>
                    <td> إطار أمامي يمين (حالة النقشة - تاريخ الإنتاج - حالة الجنط)</td>
                    <td><input type="checkbox" name="front_tire_right_fit" value="1"></td>
                    <td><input type="checkbox" name="front_tire_right_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="front_tire_right_note"></td>
                </tr>
                <tr>
                    <td>دهانات (دوكو ظاهرى)</td>
                    <td><input type="checkbox" name="paints_fit" value="1"></td>
                    <td><input type="checkbox" name="paints_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="paints_note"></td>
                    <td> إطار خلفي شمال (حالة النقشة - تاريخ الإنتاج - حالة الجنط)</td>
                    <td><input type="checkbox" name="back_tire_north_fit" value="1"></td>
                    <td><input type="checkbox" name="back_tire_north_fit" value="0"></td>
                    <td><input type="text" class="form-control inspection-input" name="back_tire_north_note"></td>
                </tr>
                <tr>
                    <td>فوانيس أمامي وخلفي وإشارة</td>
                    <td><input type="checkbox" name="front_back_lights_signal_fit" value="سليم"></td>
                    <td><input type="checkbox" name="front_back_lights_signal_fit" value="غير سليم"></td>
                    <td><input type="text" class="form-control inspection-input" name="front_back_lights_signal_note"></td>
                    <td> إطار خلفي يمين (حالة النقشة - تاريخ الإنتاج - حالة الجنط)</td>
                    <td><input type="checkbox" name="back_tire_right_fit" value="سليم"></td>
                    <td><input type="checkbox" name="back_tire_right_fit" value="غير سليم"></td>
                    <td><input type="text" class="form-control inspection-input" name="back_tire_right_note"></td>
                </tr>
                <tr>
                    <td>إضاءة خارجية</td>
                    <td><input type="checkbox" name="outdoor_lighting_fit" value="سليم"></td>
                    <td><input type="checkbox" name="outdoor_lighting_fit" value="غير سليم"></td>
                    <td><input type="text" class="form-control inspection-input" name="outdoor_lighting_note"></td>
                    <td> إطار إستبن (حالة النقشة - تاريخ الإنتاج - حالة الجنط)</td>
                    <td><input type="checkbox" name="spare_tire_fit" value="سليم"></td>
                    <td><input type="checkbox" name="spare_tire_fit" value="غير سليم"></td>
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
                    <td><input type="checkbox" name="tires_condition" value="سليم"></td>
                    <td><input type="checkbox" name="tires_condition" value="غير سليم"></td>
                    <td><input type="text" class="form-control inspection-input" name="tires_notes"
                               value="يلزم التغيير في الصيانة الدورية"></td>
                    <td> تيل + ديسكات فرامل أمامي وخلفي</td>
                    <td><input type="checkbox" name="tires_condition" value="سليم"></td>
                    <td><input type="checkbox" name="tires_condition" value="غير سليم"></td>
                    <td><input type="text" class="form-control inspection-input" name="tires_notes"></td>
                </tr>
                <tr>
                    <td>بوجيهات</td>
                    <td><input type="checkbox" name="mirrors_condition" value="سليم"></td>
                    <td><input type="checkbox" name="mirrors_condition" value="غير سليم"></td>
                    <td><input type="text" class="form-control inspection-input" name="mirrors_notes"
                               value="يلزم التغيير في الصيانة الدورية"></td>
                    <td>مستوي فرامل اليد</td>
                    <td><input type="checkbox" name="tires_condition" value="سليم"></td>
                    <td><input type="checkbox" name="tires_condition" value="غير سليم"></td>
                    <td><input type="text" class="form-control inspection-input" name="tires_notes"></td>
                </tr>
                <tr>
                    <td>سيور</td>
                    <td><input type="checkbox" name="engine_condition" value="سليم"></td>
                    <td><input type="checkbox" name="engine_condition" value="غير سليم"></td>
                    <td><input type="text" class="form-control inspection-input" name="engine_notes"
                               value="يلزم التغيير في الصيانة الدورية"></td>
                    <td>عفشة</td>
                    <td><input type="checkbox" name="tires_condition" value="سليم"></td>
                    <td><input type="checkbox" name="tires_condition" value="غير سليم"></td>
                    <td><input type="text" class="form-control inspection-input" name="tires_notes"></td>
                </tr>
                <tr>
                    <td>فلتر هواء / تكييف</td>
                    <td><input type="checkbox" name="brakes_condition" value="سليم"></td>
                    <td><input type="checkbox" name="brakes_condition" value="غير سليم"></td>
                    <td><input type="text" class="form-control inspection-input" name="brakes_notes"></td>
                    <td>قواعد محرك</td>
                    <td><input type="checkbox" name="tires_condition" value="سليم"></td>
                    <td><input type="checkbox" name="tires_condition" value="غير سليم"></td>
                    <td><input type="text" class="form-control inspection-input" name="tires_notes"></td>
                </tr>
                <tr>
                    <td>شكمان</td>
                    <td><input type="checkbox" name="engine_condition" value="سليم"></td>
                    <td><input type="checkbox" name="engine_condition" value="غير سليم"></td>
                    <td><input type="text" class="form-control inspection-input" name="engine_notes"></td>
                    <td>شاسيه ( ظاهرى)</td>
                    <td><input type="checkbox" name="tires_condition" value="سليم"></td>
                    <td><input type="checkbox" name="tires_condition" value="غير سليم"></td>
                    <td><input type="text" class="form-control inspection-input" name="tires_notes"></td>
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
                    <td><input type="checkbox" name="tires_condition" value="سليم"></td>
                    <td><input type="checkbox" name="tires_condition" value="غير سليم"></td>
                    <td><input type="text" class="form-control inspection-input" name="tires_notes"></td>
                    <td> التكييف</td>
                    <td><input type="checkbox" name="tires_condition" value="سليم"></td>
                    <td><input type="checkbox" name="tires_condition" value="غير سليم"></td>
                    <td><input type="text" class="form-control inspection-input" name="tires_notes"></td>
                </tr>
                <tr>
                    <td>تابلوه</td>
                    <td><input type="checkbox" name="mirrors_condition" value="سليم"></td>
                    <td><input type="checkbox" name="mirrors_condition" value="غير سليم"></td>
                    <td><input type="text" class="form-control inspection-input" name="mirrors_notes"></td>
                    <td>الولاعة</td>
                    <td><input type="checkbox" name="tires_condition" value="سليم"></td>
                    <td><input type="checkbox" name="tires_condition" value="غير سليم"></td>
                    <td><input type="text" class="form-control inspection-input" name="tires_notes"></td>
                </tr>
                <tr>
                    <td>لمبات إنذار بلوحة العدادات</td>
                    <td><input type="checkbox" name="engine_condition" value="سليم"></td>
                    <td><input type="checkbox" name="engine_condition" value="غير سليم"></td>
                    <td><input type="text" class="form-control inspection-input" name="engine_notes"></td>
                    <td>إنفجار الإيرباج</td>
                    <td><input type="checkbox" name="tires_condition" value="سليم"></td>
                    <td><input type="checkbox" name="tires_condition" value="غير سليم"></td>
                    <td><input type="text" class="form-control inspection-input" name="tires_notes"></td>
                </tr>
                <tr>
                    <td>عدادات</td>
                    <td><input type="checkbox" name="brakes_condition" value="سليم"></td>
                    <td><input type="checkbox" name="brakes_condition" value="غير سليم"></td>
                    <td><input type="text" class="form-control inspection-input" name="brakes_notes"></td>
                    <td>فرش السقف</td>
                    <td><input type="checkbox" name="tires_condition" value="سليم"></td>
                    <td><input type="checkbox" name="tires_condition" value="غير سليم"></td>
                    <td><input type="text" class="form-control inspection-input" name="tires_notes"></td>
                </tr>
                <tr>
                    <td>كاسيت وسماعات</td>
                    <td><input type="checkbox" name="engine_condition" value="سليم"></td>
                    <td><input type="checkbox" name="engine_condition" value="غير سليم"></td>
                    <td><input type="text" class="form-control inspection-input" name="engine_notes"></td>
                    <td>فتحة سقف</td>
                    <td><input type="checkbox" name="tires_condition" value="سليم"></td>
                    <td><input type="checkbox" name="tires_condition" value="غير سليم"></td>
                    <td><input type="text" class="form-control inspection-input" name="tires_notes"></td>
                </tr>
                <tr>
                    <td>إضاءة داخلية</td>
                    <td><input type="checkbox" name="engine_condition" value="سليم"></td>
                    <td><input type="checkbox" name="engine_condition" value="غير سليم"></td>
                    <td><input type="text" class="form-control inspection-input" name="engine_notes"></td>
                    <td>زجاج كهرباء</td>
                    <td><input type="checkbox" name="tires_condition" value="سليم"></td>
                    <td><input type="checkbox" name="tires_condition" value="غير سليم"></td>
                    <td><input type="text" class="form-control inspection-input" name="tires_notes"></td>
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
                    <td><input type="checkbox" name="tires_condition" value="سليم"></td>
                    <td><input type="checkbox" name="tires_condition" value="غير سليم"></td>
                    <td><input type="text" class="form-control inspection-input" name="tires_notes"></td>
                    <td>كبس موتور (Bar)</td>
                    <td><input type="checkbox" name="tires_condition" value="سليم"></td>
                    <td><input type="checkbox" name="tires_condition" value="غير سليم"></td>
                    <td><input type="text" class="form-control inspection-input" name="tires_notes"></td>
                </tr>
                <tr>
                    <td>بطارية + دينامو</td>
                    <td><input type="checkbox" name="mirrors_condition" value="سليم"></td>
                    <td><input type="checkbox" name="mirrors_condition" value="غير سليم"></td>
                    <td><input type="text" class="form-control inspection-input" name="mirrors_notes"></td>
                    <td>الزوايا ( مرفق تقرير الجهاز )</td>
                    <td><input type="checkbox" name="tires_condition" value="سليم"></td>
                    <td><input type="checkbox" name="tires_condition" value="غير سليم"></td>
                    <td><input type="text" class="form-control inspection-input" name="tires_notes"></td>
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
            <textarea class="form-control" name="additional_notes" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary w-100">Submit Inspection</button>
    </form>
@endsection
