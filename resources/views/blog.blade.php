@extends('layout')

@section('title')
    สถานที่ท่องเที่ยว
@endsection

@section('content')
    <h3 class="text-center">สถานที่ท่องเที่ยว</h3>
    <hr>

    <div class="container mt-5">
        <div class="row g-4">
            <div class="col-12 col-md-8 col-lg-4">
                <div class="card">
                    <img src="{{ asset('images/1.jpg')}}" class="card-img-top" alt="Image">
                    <div class="card-body d-flex flex-column">
                        <p class="card-title">
                            <strong>ชื่อสถานที่ : ดอยอ่างขาง</strong>
                        </p>
                        <p class="card-text">
                            สถานที่ตั้ง : จังหวัดเชียงใหม่
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-8 col-lg-4">
                <div class="card">
                    <img src="{{ asset('images/2.jpg')}}" class="card-img-top" alt="Image">
                    <div class="card-body d-flex flex-column">
                        <p class="card-title">
                            <strong>ชื่อสถานที่ : สะพานข้ามแม่น้ำแคว</strong>
                        </p>
                        <p class="card-text">
                            สถานที่ตั้ง : จังหวัดกาญจนบุรี
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-8 col-lg-4">
                <div class="card">
                    <img src="{{ asset('images/3.jpg')}}" class="card-img-top" alt="Image">
                    <div class="card-body d-flex flex-column">
                        <p class="card-title">
                            <strong>ชื่อสถานที่ : ภูลมโล</strong>
                        </p>
                        <p class="card-text">
                            สถานที่ตั้ง : จังหวัดเลย
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection