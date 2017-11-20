@extends('layouts.master') @section('content')
<div class="col-sm-12">
    <div class="white-box">
        <a href="{{ route('news.create') }}"><div class="btn btn-danger">New</div></a>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Tieu de</th>
                        <th class="col-sm-1">Nguoi dang</th>
                        <th class="col-sm-1">dinh kem</th>
                        <th>Thoi gian</th>
                        <th class="text-nowrap">Hanh dong</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($news as $new)
                    <tr>
                        <td><a href="news/1">{{ $new->title }}</a></td>
                        <td>
                            <a href="">{{ $new->title }}</a>
                        </td>
                        <td></td>
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