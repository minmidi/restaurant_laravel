@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm danh mục</div>

                <div class="card-body">
                    
                    <form action="{{ route('category.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Tên danh mục</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên danh mục">
                        </div>

                        <div class="form-group">
                          <button class="btn btn-outline-primary">Gửi</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection