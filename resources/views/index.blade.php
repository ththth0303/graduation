@extends('layouts.master')
@section('content')
    <div class="col-md-5 col-sm-6">
        <div class="row">
            <!-- .col -->
            <div class="col-md-6 col-sm-12">
                <div class="white-box text-center bg-success">
                    <h1 class="text-white counter">165</h1>
                    <p class="text-white">New items</p>
                </div>
            </div>
            <!-- /.col -->
            <!-- .col -->
            <div class="col-md-6 col-sm-12">
                <div class="white-box text-center bg-inverse">
                    <h1 class="text-white counter">2065</h1>
                    <p class="text-white">Feeds</p>
                </div>
            </div>
            <!-- /.col -->
            <!-- .col -->
            <div class="col-md-6 col-sm-12">
                <div class="white-box text-center bg-info">
                    <h1 class="counter text-white">465</h1>
                    <p class="text-white">Reviews</p>
                </div>
            </div>
            <!-- /.col -->
            <!-- .col -->
            <div class="col-md-6 col-sm-12">
                <div class="white-box text-center bg-danger">
                    <h1 class="text-white counter">6555</h1>
                    <p class="text-white">Customers</p>
                </div>
            </div>
            <!-- /.col -->
            <!-- .col -->
        </div>
    </div>
    <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Modal Content is Responsive</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="control-label">Recipient:</label>
                                                    <input type="text" class="form-control" id="recipient-name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="message-text" class="control-label">Message:</label>
                                                    <textarea class="form-control" id="message-text"></textarea>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-danger waves-effect waves-light">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <img src="../plugins/images/model.png" alt="default" data-toggle="modal" data-target="#responsive-modal" class="model_img img-responsive" />

@endsection