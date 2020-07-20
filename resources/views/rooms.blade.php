@extends('layouts.app')


@section('content')
<div class="container">
    <h1>Rooms</h1>
    <br>
    <div id="canvas">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Room Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rooms as $r)
                    <tr>    
                        <td><?php echo $r->room_name;?></td>
                        <td><a href="{{url('room/'.$r->id)}}" class="btn btn-success" id="btn-masuk" room-id="{{$r->id}}">enter</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- <script>
    $(document).ready(function(){
        $('#btn-masuk').on('click', function(){
            var room = $(this).attr('room-id');
            console.log(room);
        });
    });
</script> -->
@endsection