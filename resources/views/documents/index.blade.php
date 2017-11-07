@extends('layouts.master') @section('content')
<div class="col-sm-12">
    <div class="white-box">
        <h3 class="box-title m-b-0">Bordered Table</h3>
        <p class="text-muted m-b-20">Add<code>.table-bordered</code>for borders on all sides of the table and cells.</p>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th class="col-sm-4">Title</th>
                        <th>Poster</th>
                        <th>Attack</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="document/ư">Tài liệu</a></td>
                        <td>
                            <a href="">Ngô Trung Thắng</a>
                        </td>
                        <td><a href="">document.docx</a></td>
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
                        <td><a href="">document.docx</a></td>
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