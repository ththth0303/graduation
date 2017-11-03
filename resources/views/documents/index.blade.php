@extends('layouts.master') @section('content')
<div class="col-sm-12">
    <div class="white-box">
        <h3 class="box-title m-b-0">Bordered Table</h3>
        <p class="text-muted m-b-20">Add<code>.table-bordered</code>for borders on all sides of the table and cells.</p>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Student</th>
                        <th>instructor</th>
                        <th>Poter</th>
                        <th>course</th>
                        <th class="text-nowrap">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-target="#responsive-modal" data-toggle="modal">
                        <td>Thông  báo</td>
                        <td>
                            <a href="">Ngô Trung Thắng</a>
                        </td>
                        <td></td>
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
    <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="responsive-modal" role="dialog" style="display: none;" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-hidden="true" class="close" data-dismiss="modal" type="button">×</button>
                        <h4 class="modal-title">Modal Content is Responsive</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label class="control-label" for="recipient-name">Attach</label>
                                <a href="">ab.docx</a>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="message-text">Content</label> 
                                <p>Custom scrollbars are getting popular, and you might have come across websites that have unique scrollbars, making the sites feel and look different. There are basically a few ways to implement a custom scrollbar. In this tutorial we will be using CSS3, which is the most straightforward way. However, there are jQuery plugins that can help with customizing scrollbar, but I do not like to add more JavaScript to my website. If you are a designer, photographer or you just want your website to have a cool scrollbar, go ahead with the jQuery plugins.</p>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-default waves-effect" data-dismiss="modal" type="button">Close</button>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection