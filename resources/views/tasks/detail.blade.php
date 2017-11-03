@extends('layouts.master')
@section('content')
    <div class="col-sm-12" id="th">
        <div class="white-box">
            
        </div>
    </div>
@endsection
@section('script') 
    <script type="text/javascript">
           var cart = new Vue({
               el: '#th',

               mounted: function () {
                   $('#responsive-modal1').modal('show');
               }
           });
    </script>
@endsection