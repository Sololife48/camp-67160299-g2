@extends('template.default')
@section('title', 'My Controller')
@section('header1', "My view")

@section('content')
    <form action="#" method="post">
        @csrf
        <label for="num">ป้อนข้อมูลแม่สูตรคูณ</label>
        <input type="number" name="num" id="num"
         class="form-control">
        <button class="btn btn-success" type="submit">ส่งข้อมูล</button>
    </form>
@endsection
