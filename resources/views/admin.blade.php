@extends('layout')

@section('title')
    ผู้ดูแลระบบ
@endsection

@section('content')
    <h3 class="text-center">ผู้ดูแลระบบ</h3>
    <hr>

    <div class="container mt-5 text-center">
        <h3 class="mb-2">หน้าที่การทำงาน</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, odit atque molestiae dolore quibusdam voluptatibus neque ad ratione aliquid vero quae temporibus quia quos deserunt facere qui id quas earum architecto esse maiores provident velit culpa! Unde et recusandae rem quia error repellendus quo eligendi repellat iure? In, ut fuga?</p>
        <a href="{{ route('blog')}}" class="btn btn-primary">สถานที่ท่องเที่ยว</a>
        <a href="{{ route('about')}}" class="btn btn-success mx-2">เกี่ยวกับฉัน</a>
        <a href="{{ route('admin')}}" class="btn btn-danger">ผู้ดูแลระบบ</a>
    </div>
@endsection