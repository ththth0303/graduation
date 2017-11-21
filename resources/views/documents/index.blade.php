@extends('layouts.master') @section('content')
<div class="col-sm-12">
    @if(session('message'))
        <p class="btn-info text-center">{{ session('message') }}</p>
    @endif
    <div class="white-box">
        <div class="sttabs tabs-style-linebox">
            <nav>
                <ul>
                    <a href="{{ route('news.create') }}">
                        <div class="btn btn-danger" style="float: left;">New</div>
                    </a>
                    <li class=""><a href="#section-linebox-5"><span>Airline</span></a>
                    </li>
                    <li class="tab-current"><a href="#section-linebox-4"><span>Schedule</span></a>
                    </li>
                    <li class=""><a href="#section-linebox-2"><span>Deals</span></a>
                    </li>
                    <li class=""><a href="#section-linebox-3"><span>Drinks</span></a>
                    </li>
                    <li class=""><a href="#section-linebox-5"><span>Settings</span></a>
                    </li>
                </ul>
            </nav>
            <div class="content-wrap text-center">
                <section id="section-linebox-2" class="content-current">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Tieu de</th>
                                    <th class="">Nguoi dang</th>
                                    <th class="">dinh kem</th>
                                    <th>Thoi gian</th>
                                    <th class="text-nowrap">Hanh dong</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($news as $new)
                                <tr>
                                    <td><a href="{{ route('news.show', $new->id) }}">{{ $new->title }}</a>
                                    </td>
                                    <td>
                                        <a href="">{{ $new->user->name }}</a>
                                    </td>
                                    <td><a href="{{ route('download_attach', [
                                        urlencode($new->attach_name), $new->attach]) }}">{{ $new->attach_name }}</a>
                                    </td>
                                    <td>May 15, 2015</td>
                                    <td class="text-nowrap">
                                        <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                        <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </section>
                <section id="section-linebox-3" class="">
                    <h2>Tabbing 3</h2>
                </section>
                <section id="section-linebox-4" class="">
                    <h2>Tabbing 4</h2>
                </section>
                <section id="section-linebox-5" class="">
                    <h2>Tabbing 5</h2>
                </section>
            </div>
            <!-- /content -->
        </div>
    </div>
</div>
@endsection