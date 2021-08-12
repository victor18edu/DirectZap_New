@extends('layout.app')

@section('content')
    <form action="">
        <div class="row">
            <div class="col-md-5">
                <label>Token</label>
                <input type="text" name="token" id="" class="form-control" value="df351daaec0b5f2dc849f240f8fdbda3f608dcce">
            </div>
        </div>
    </form>
@endsection
@section('js')
    <script>
        function destroy(id) {
            $.ajax({
                type: "DELETE",
                dataType: "json",
                data: {
                    "_token": "{{ csrf_token() }}",
                },
                url: 'colaboradores/' + id,
                success: function(response) {
                    location.reload();
                }
            });
        }
    </script>
@endsection
