@extends('app')
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                
                
            </div>
        </div>
    </div>
    <div class="col-md-2 fixed bottom-0">
       <div class="heading-chat "> <a href="javascript:void(0)">Chat Group</a></div>
       <div class="heading-body panel panel-default scroll-active height-300 " hidden>
                @foreach($chat as $chats)
                    <div class="me">
                        <div class="profile 
                        @if(Auth::check())
                             @if($chats->username == Auth::user()->username)
                                left
                            @else
                                right
                            @endif
                        @endif                        
                        ">
                        <span class="label label-primary" style="width:100%;">{{$chats->username}}</span> <small>{{date('h:i A',strtotime($chats->created_at)) }}</small>
                        <p>{{$chats->message}}</p>
                        </div>
                    </div>
                    <hr>
                @endforeach
         </div>
         <form  class="myForm form-horizontal" hidden>
                    <div class="input-group">
                        <input type="text" class="form-control send" name="message" aria-describedby="basic-addon1">
                        {{csrf_field()}}
                        <br>
                        <span class="input-group-btn" id="basic-addon1"> <button type="submit" class="btn btn-primary">Kirim</button></span>
                    </div>
        </form>
    </div>
@endsection

@section('script')

<script>
   $(function(){
        setInterval(function(){
            $('.panel-default').load("{{url('/chat/group')}} .panel-default .me");
        },2000);
   });
    $(document).ready(function(){
       
        
        $('.myForm').on('submit',function(e){
            var message = $('.send').val();
            e.preventDefault();
            

            $.ajax({
                url:'/chat/group/add',
                method:'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data:{
                    message : $('.send').val(),
                    
                },
                success: function(data){
                    console.log(data);
                    var username = "{{Auth::user()->username}}";
                    
                    $('.panel').append('<div class="me"><div class="profile"><span class="label label-primary"> '+ username + '</span> <small>' + data.date + '</small><p> '+ message + '</p></div></div><hr>');
                    delete(data.date);
                    
                }
            });
            $('.send').val('');
        });
    });

    function liveChat()
    {
        $.ajax({
            url:'{{url('chat/group/api')}}',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data:{
                _token:'{{csrf_token()}}'
            },
            success:function(data)
            {
                
                console.log('berhasil');           
            },
            error:function(data)
            {
                console.log('data tidak ada');
            
            }
        });
    }


    $(function(){
        $('.heading-chat').on('mouseenter',function(){
            $('.heading-body').show();
            $('.myForm').show();
        });


        $('.heading-chat').on('click',function(){
            $('.heading-body').hide();
            $('.myForm').hide();
        });
    });
</script>    

@endsection
