@extends('layouts.master') @section('content')
<div class="col-sm-12">
     @if(session('message'))
        <p class="{{ session('message')['type'] ? 'btn-info' : 'btn-danger' }} text-center">{{ session('message')['message'] }}</p>
    @endif
    <div class="white-box">
        <a class="text-white" href="{{ route('student.create') }}">
            <div class="btn btn-danger">New</div>
        </a>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th class="col-sm-4">Title</th>
                        <th>Student</th>
                        <th>Score</th>
                        <th>Instructor</th>
                        <th>Course</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="student/1">Tài liệu</a></td>
                        <td>
                            <a href="">Ngô Trung Thắng</a>
                        </td>
                        <td>6.9</td>
                        <td><a href="">Ts.Nguyễn Văn A, Ths.Nguyễn Văn B</a></td>
                        <td>May 15, 2015</td>
                        <td class="text-nowrap">
                            <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                            <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="document/ư">Tài liệu</a></td>
                        <td>
                            <a href="">Ngô Trung Thắng</a>
                        </td>
                        <td>9</td>
                        <td><a href="">Nguyễn Văn C</a></td>
                        <td>May 15, 2015</td>
                        <td class="text-nowrap">
                            <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                            <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection