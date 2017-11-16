@extends('layouts.master')
@section('content')
    <div class="col-sm-12" id="th">
        <div class="white-box">
            <div style="border: 1px solid #d7d7d7; padding: 10px">
            <div class="btn btn-default" data-target="#responsive-modal" data-toggle="modal" id="modal">Update</div>
                <h2>Hoàn thành đề cương</h2>
                <div class=""><p><b>Priority: </b>Hight</p></div>
                <div class="">
                    <div class=""><b>Status: </b></div>
                    <div class="progress progress-lg">
                        <div class="progress-bar progress-bar-success" role="progressbar" style="width: 20%;">
                            20%
                        </div>
                    </div>
                </div>
                <div class=""><p><b>Start date: </b>11/11/2017</p></div>
                <div class=""><p><b>Due date: </b>30/11/2017</p></div>
                <div class=""><p><b>Assignee: </b>Ngô Trung Thắng, Ngô Trung Thắng </p></div>
                <hr>
                <div class=""><p><b>Attack: </b><a href="{{ asset('asset/test2.pdf')}}" target="blank">document.docx</a></p></div>
                <hr>
                <div class=""><p><b>Description: </b>696969</p></div>
                <hr>
                <div class=""><p><b>Messages: </b>696969</p></div>
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
                                <input class="form-control" id="recipient-name" type="text" autofocus="true">
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
@section('script') 
    <script type="text/javascript">
        $('#modal').click(function (argument) {
            setTimeout(() => {
            $('#recipient-name').focus();
            }, 200)
        })
    </script>
@endsection