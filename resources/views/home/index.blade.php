@extends('app')
@section('stylesheets')
    <style>
        .scroll-active{
            overflow:scroll;
        }
        .height-400{
            height:400px;
        }
        .padding-20{
            padding:20px;
        }
    </style>

@endsection
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>Content Writer</strong>
                    </div>
                    <div class="panel-body">
                    <ul class="timeline">
                        <li class="clearfix no-float"></li>
                    </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $.getJSON({
                url:'{{url('shopify/api/article/get')}}',
                method:'get',
                dataType:'json',
                Accept: 'application/json',
                success:function(data)
                {
                    $.each(data.data.articles,function(key,value){                       
                        $(".timeline").append('<li> <div class="timeline-badge"> <a><i class="fa fa-circle" id=""></i></a></div> <div class="timeline-panel"><div class="timeline-heading"><h4>'+ value.title +'</h4></div><div class="timeline-body padding-20"> '+ value.body_html + ' </div><div class="timeline-footer"> <p class="text-right">Feb-21-2014</p></div></div></li>');    
                    });
                }
            });
        });
    </script>


@endsection