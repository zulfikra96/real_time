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
            <div class="col-md-4">

            </div>
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>Content Writer</strong>
                    </div>
                    <div class="panel-body">
                     @foreach($article as $articles)
                    <ul class="timeline-inverse">
                        <li class="clearfix no-float"></li>
                            <li> 
                            <div class="timeline-badge"> <a><i class="fa fa-circle" id=""></i></a></div> 
                            <div class="timeline-panel ">
                                    <div class="content-writer">
                                        <div class="timeline-heading"><h4>{{$articles['title']}} </h4></div>
                                        <div class="timeline-body padding-20"> <?=strip_tags($articles['body_html'])?> </div>
                                        <div class="timeline-footer"> <p class="text-right">Feb-21-2014</p>
                                    </div>
                                </div>
                                </div>
                            </li>
                        
                    </ul>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            // $.getJSON({
            //     url:'{{url('shopify/api/article/get')}}',
            //     method:'get',
            //     dataType:'json',
            //     Accept: 'application/json',
            //     success:function(data)
            //     {
            //         $.each(data.data.articles,function(key,value){                       
            //             $(".timeline").append('<li> <div class="timeline-badge"> <a><i class="fa fa-circle" id=""></i></a></div> <div class="timeline-panel"><div class="timeline-heading"><h4>'+ value.title +'</h4></div><div class="timeline-body padding-20"> '+ value.body_html + ' </div><div class="timeline-footer"> <p class="text-right">Feb-21-2014</p></div></div></li>');    
            //         });
            //     }
            // });

             
        });

        // $(function(){
        //     setInterval(function(){
        //         $('.timeline').load("{{url('feed/content-writer')}} .timeline");
        //     },2000);
        // });
    </script>


@endsection