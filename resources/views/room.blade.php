@extends('layouts.app')


@section('content')
<div class="container">
    <!-- <?php echo json_encode($room);?> -->
    <h1>Room : {{ $room->room_name }}</h1>
    <br>
    <div class="row">
       <div class="col-8">
            <div class="card card-default">
               <div class="card-header">Messages</div>
               <div class="card-body p-0">
                    <ul class="list-unstyled" id="chatWindow" style="height: 300px; overflow-y:scroll">
                        
                    </ul>
               </div>

                @csrf
               <input type="text" name="message" id="newmessage" placeholder="Enter your message..." class="form-control">
           </div>
       </div>

        <div class="col-4">
            <div class="card card-default">
                <div class="card-header">Active Users</div>
                <div class="card-body">
                    <ul>
                        <li class="py-2">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
   </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
<script>
    $(document).ready(function(){
        var myUID = {{ $user->id }};
        function getChat(){
            var htmlchat='';
            $.ajax({
                url:'{{url("chat/get_chat/".$room->id)}}',
                method:'get',
                success: function(response){
                    data = $.parseJSON(response);
                    $.each(data, function(key,value){
                        if(value.id_pengirim==myUID){
                            htmlchat += '<li class="mx-3 py-2 text-right">';
                        } else {
                            htmlchat += '<li class="mx-3 py-2">';
                        }
                        htmlchat += '<strong>'+value.name+'</strong><br>';
                        htmlchat += ''+value.pesan+'';
                        htmlchat += '</li>';;
                    });
                    $('#chatWindow').html(htmlchat);
                }
            });
        }

        $('#newmessage').keypress(function(event){
            var keycode = (event.keyCode ? event.keyCode : event.which);
            if(keycode == '13'){
                var pesan = $('#newmessage').val();
                var token = $('input[name=_token]').val();
                // console.log(token);
                $.ajax({
                url:'{{url("chat/post_chat/".$room->id)}}',
                method:'post',
                data:{message:pesan, _token:token},
                success: function(response){
                    console.log(response);
                    $('#newmessage').val('');
                    // getChat();
                }
            }); 
            }
        });
        getChat();
    });
</script>
@endsection