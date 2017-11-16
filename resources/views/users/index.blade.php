@extends('layouts.master') @section('content')
<div class="col-sm-12">
    <div class="white-box">
        <div class="btn btn-danger"><a class="text-white" href="user/create">New</a></div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th class="col-sm-4">Name</th>
                        <th>Email</th>
                        <th>Department</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($users))
                        @foreach($users as $user)
                        <tr>
                            <td><a href="document/ư">{{ $user->name }}</a></td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->department }}</td>
                            <td>May 15, 2015</td>
                            <td class="text-nowrap">
                                <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                            </td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    </div>
</div>
@endsection
