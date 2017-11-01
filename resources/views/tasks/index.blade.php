@extends('layouts.master')
@section('content')
<div class="col-sm-6">
    <div class="white-box">
        <h3 class="box-title">Basic Table</h3>
        <p class="text-muted">Add class <code>.table</code></p>
        <div class="table-responsive">
            <table class="table hover-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                        <th>Role</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Deshmukh</td>
                        <td>Prohaska</td>
                        <td>@Genelia</td>
                        <td><span class="label label-danger">admin</span> </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Deshmukh</td>
                        <td>Gaylord</td>
                        <td>@Ritesh</td>
                        <td><span class="label label-info">member</span> </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Sanghani</td>
                        <td>Gusikowski</td>
                        <td>@Govinda</td>
                        <td><span class="label label-warning">developer</span> </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Roshan</td>
                        <td>Rogahn</td>
                        <td>@Hritik</td>
                        <td><span class="label label-success">supporter</span> </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Joshi</td>
                        <td>Hickle</td>
                        <td>@Maruti</td>
                        <td><span class="label label-info">member</span> </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Nigam</td>
                        <td>Eichmann</td>
                        <td>@Sonu</td>
                        <td><span class="label label-success">supporter</span> </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
