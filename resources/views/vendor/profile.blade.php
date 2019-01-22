@extends(app('at').'.index')
{{--@section('title')
    Products
@endsection--}}
@section('up')
    {{trans('admin.profile')}}
@endsection
@section('content')


        <div class="container">
   
                <form  action="{{url('/vendor/save_vendor')}}"  method="post">

                    {{ csrf_field() }}
                      
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">UserName:</label>
                    <input type="text" class="form-control"  name="username"  id="username"  value="{{ Auth::user()->name }}" >
                    </div>

                    <div class="form-group">
                      <label for="message-text" class="col-form-label">Password:</label>
                      <input type="password" class="form-control"  name="password"  id="password" required>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Update</button>

                </form>

        </div>



@endsection