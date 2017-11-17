@extends('layouts.master')
@section('content')
    <div class="col-md-6 col-sm-6 col-md-offset-3">
        <div class="row">
            <!-- .col -->
            <div class="col-md-6 col-sm-12">
                <a href="{{ route('news.index') }}">
                    <div class="white-box text-center bg-inverse">
                        <h2 class="text-white counter">Thông báo</h2>
                        <p class="text-white"></p>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-sm-12">
                <a href="{{ route('task.index') }}">
                    <div class="white-box text-center bg-success">
                        <h2 class="text-white counter">Công việc</h2>
                        <p class="text-white"></p>
                    </div>
                </a>
            </div>
            <!-- /.col -->
            <!-- .col -->
            <!-- /.col -->
            <!-- .col -->
            <div class="col-md-6 col-sm-12">
                <a href="{{ route('document.index') }}">
                    <div class="white-box text-center bg-info">
                        <h2 class="counter text-white">Mẫu văn bản</h2>
                        <p class="text-white"></p>
                    </div>
                </a>
            </div>
            <!-- /.col -->
            <!-- .col -->
            <div class="col-md-6 col-sm-12">
                <a href="{{ route('student.index') }}">
                    <div class="white-box text-center bg-danger">
                        <h2 class="text-white counter">Đồ án tốt nghiệp</h2>
                        <p class="text-white"></p>
                    </div>
                </a>
            </div>
            <!-- /.col -->
            <!-- .col -->
        </div>
    </div>
@endsection
