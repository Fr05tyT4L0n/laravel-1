@extends('layout')

@section('title')
    เกี่ยวกับฉัน
@endsection

@section('content')
    <h3 class="text-center">เกี่ยวกับฉัน</h3>
    <hr>

    <div class="row d-flex justify-content-center my-5">
        <div class="col-8 col-md-4">
            <div class="card">
                <img src="{{ asset('images/6721618168797.jpg')}}" alt="6721618168797" class="card-img-top" style="height: 500px; object-fit: cover;">
                <div class="card-body text-center">
                    <p class="card-text">
                        รหัสนักศึกษา : 6721618168797
                    </p>
                    <p class="card-text">
                        ชื่อ : นายทักษ์ดนัย ดวงพร
                    </p>
                    <p class="card-text">
                        สาขา : นักพัฒนาซอฟแวร์
                    </p>
                    <p class="card-text">
                        ห้อง : SIT.1/1
                    </p>
                    <p class="card-text">
                        เลขที่ : 31
                    </p>
                </div>
                <div class="card-footer text-center">
                    <h4 class="text-muted">
                        ข้อมูลนักศึกษา
                    </h4>
                </div>
            </div>
        </div>
    </div>

    <style>
        .text-muted {
            margin: 0;
        }
    </style>
@endsection