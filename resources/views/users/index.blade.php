@extends('layouts.master') @section('content')
<div class="col-sm-12">
    @if(session('message'))
        <p class="{{ session('message')['type'] == true ? 'btn-info' : 'btn-danger' }} text-center">{{ session('message')['message'] }}</p>
    @endif
    <div class="white-box" id="user-list">
        <a class="text-white" href="user/create">
            <div class="btn btn-danger">Thêm mới</div>
        </a>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th></th>
                        <th class="col-sm-4">Tên</th>
                        <th>Email</th>
                        <th>Quyền hạn</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($users))
                        @foreach($users as $user)
                        <tr>
                            <td><img src="{{ asset(config('path.avatar') . $user->avatar) }}" alt="" width="45px" height="45" style="margin: -15px 0px"></td>
                            <td><a href="{{ route('user.show', $user->id) }}">{{ $user->name }}</a></td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if($user->level == config('permission.admin'))
                                    <div class="label label-success">Admin</div>
                                @elseif($user->level == config('permission.normal'))
                                    <div class="label label-info">Giảng viên</div>
                                @else
                                    <div class="label label-danger">Chưa kích hoạt</div>
                                @endif
                            </td>
                            <td class="text-nowrap">
                                <a href="{{ route('user.edit', $user->id) }}" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
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
