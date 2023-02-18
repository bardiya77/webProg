@extends('admin.layouts.admin')

@section('title')
    show show
@endsection

@section('content')

    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-12 col-md-12 mb-4 p-md-5 bg-white">
            <div class="mb-4">
                <h5 class="font-weight-bold">محصول : {{ $product->name }}</h5>
            </div>
            <hr>

            <div class="row">
                <div class="form-group col-md-3">
                    <label>نام</label>
                    <input class="form-control" type="text" value="{{ $product->name }}" disabled>
                </div>
                <div class="form-group col-md-3">
                    <label>نام برند</label>
                    <input class="form-control" type="text" value="{{ $product->brand->name }}" disabled>
                </div>
                <div class="form-group col-md-3">
                    <label>نام دسته بندی</label>
                    <input class="form-control" type="text" value="{{ $product->category->name }}" disabled>
                </div>
                <div class="form-group col-md-3">
                    <label>وضعیت</label>
                    <input class="form-control" type="text" value="{{ $product->is_active }}" disabled>
                </div>
                <div class="form-group col-md-3">
                    <label>تاریخ ایجاد</label>
                    <input class="form-control" type="text" value="{{ verta($product->created_at) }}" disabled>
                </div>
                <div class="form-group col-md-12">
                    <label>توضیحات</label>
                    <textarea class="form-control" rows="3" disabled>{{ $product->description }}</textarea>
                </div>

                {{-- Delivery Section --}}
                <div class="col-md-12">
                    <hr>
                    <p>هزینه ارسال : </p>
                </div>
                <div class="form-group col-md-3">
                    <label>هزینه ارسال</label>
                    <input class="form-control" type="text" value="{{ $product->delivery_amount }}" disabled>
                </div>
                <div class="form-group col-md-3">
                    <label>هزینه ارسال به ازای محصول اضافی</label>
                    <input class="form-control" type="text" value="{{ $product->delivery_amount_per_product }}" disabled>
                </div>

            </div>

            <a href="{{ route('admin.attributes.index') }}" class="btn btn-dark mt-5">بازگشت</a>

        </div>

    </div>

@endsection
