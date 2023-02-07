@extends('admin.layouts.admin')

@section('title')
index categories
@endsection

@section('content')

<div class="col-xl-12 col-md-12 mb-4 p-md-5 bg-white">
    <div class="d-flex justify-content-between mb-4">
        <h5 class="font-weight-bold">  ویژگی </h5>
        <a class="btn btn-sm btn-outline-primary" href={{route('admin.attributes.create')}}>
            <i class="fa fa-plus">ایجاد ویژگی</i>
        </a>
    </div>

    <div>
        <table class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>نام</th>
                    <th>عملیات</th>
                </tr>
            </thead>

          
        </table>
    </div>

</div>


@endsection