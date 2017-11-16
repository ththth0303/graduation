@extends('layouts.master')
@section('content')
    <div class="col-sm-12" id="th">
        <div class="white-box">
            <div class="clearfix" style="border: 1px solid #d7d7d7; padding: 10px">
                <div class="col-md-12">
                    <div class="title col-md-10 col-sm-12 col-xs-12"><h2>Hoàn thành đề cương</h2></div>
                    <div class="btn btn-danger col-md-2 col-sm-12 col-xs-12 clearfix" data-target="#responsive-modal" data-toggle="modal">Update</div>
                </div>
                <div class="info"><p><b>Priority: </b>Hight</p></div>
                <div class="info"><p><b>Start date: </b>11/11/2017</p></div>
                <div class="info"><p><b>Due date: </b>30/11/2017</p></div>
                <div class="col-sm-12">
                    <p class="col-md-2 status"><b>Status: </b></p>
                    <div class="progress progress-lg col-md-6">
                        <div class="progress-bar progress-bar-success" role="progressbar" style="width: 20%;">
                            20%
                        </div>
                    </div>
                </div>
                <hr>
                <div class="col-md-12"><p><b>Assignee: </b>Ngô Trung Thắng, Ngô Trung Thắng </p></div>
                <hr class="col-md-12">
                <div class="col-md-12"><p><b>Attack: </b><a href="">document.docx</a></p></div>
                <hr class="col-md-12">
                <div class="col-md-12"><p><b>Description: </b>696969</p></div>
                <hr class="col-md-12">
                <div class="col-md-12"><p><b>Messages: </b>696969</p></div>
            </div>
        </div>
        <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="responsive-modal" role="dialog" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-hidden="true" class="close" data-dismiss="modal" type="button">×</button>
                        <h4 class="modal-title">Modal Content is Responsive</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label class="control-label" for="recipient-name">% Done</label>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="message-text">Message:</label>
                                <textarea class="form-control" id="message-text"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-default waves-effect" data-dismiss="modal" type="button">Close</button> <button class="btn btn-danger waves-effect waves-light" type="button">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('style')
  <link rel="stylesheet" href="{{ asset('css/tasks/style.css') }}">
@endsection
