@extends('layouts.app')
@section('title')
     All Checks
@endsection
@section('headTitle')
    كل الفحوصات
@endsection
@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>التاريخ</th>
            <th>اسم المشرف</th>
            <th>سنة الصنع</th>
            <th>الفئة</th>
            <th>الفرع</th>
            <th>اسم العميل</th>
            <th>رقم السيارة</th>
            <th>لون السيارة</th>
            <th>ساعه الدخول </th>
            <th> التليفون</th>
            <th>كيلومترات</th>
            <th>السعه</th>
            <th>ساعه الخروج </th>
            <th>نوع السيارة</th>
            <th>رقم الشاسيه</th>
            <th>ناقل الحركة</th>
            <th>رقم الموتور</th>
            <th>Action </th>
        </tr>
        </thead>
        <tbody>
        @foreach($checks as $check)
            <tr>
                <td>{{ $check->id }}</td>
                <td>{{ $check->date }}</td>
                <td>{{ $check->supervisor_name }}</td>
                <td>{{ $check->manufacturing_year }}</td>
                <td>{{ $check->category }}</td>
                <td>{{ $check->branch }}</td>
                <td>{{ $check->customer_name }}</td>
                <td>{{ $check->vehicle_number }}</td>
                <td>{{ $check->car_color }}</td>
                <td>{{ $check->entrance }}</td>
                <td>{{ $check->phone_no }}</td>
                <td>{{ $check->kilometers }}</td>
                <td>{{ $check->cc_capacity }}</td>
                <td>{{ $check->exit }}</td>
                <td>{{ $check->vehicle_model_and_type }}</td>
                <td>{{ $check->chassis_no }}</td>
                <td>{{ $check->transmission }}</td>
                <td>{{ $check->engine_no }}</td>
                <td>
                    <a class="text text-warning mb-1"  href="{{ route('checks.edit',['check'=> $check->id]) }}">تعديل</a>
                    <a class="text text-primary mb-1" href="{{ route('checks.show',['check'=> $check->id]) }}">عرض</a>
                    <a class="text text-danger" href="{{ route('checks.destroy',['check'=> $check->id]) }}">حذف</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
