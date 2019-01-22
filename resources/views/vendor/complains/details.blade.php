@extends(app('at').'.index')
{{--@section('title')
  Single Order
@endsection--}}
@section('up')
    {{trans('admin.Complain')}}
@endsection
@section('content')

	<div class="box box-info">
		<div class="box-header">

			<div class="col-md-12 col-md-offset-6">
			
			</div>
		</div>
    </div>



    <table class="table">
            <thead>
            <tr>
                <th>{{trans('admin.OrderCode')}}</th>
                <th>{{trans('admin.UserID')}}</th>
                <th>{{trans('admin.Complain')}}</th>
                <th>{{ trans('admin.message')}}</th> 

            </tr>
            </thead>
            <tbody>

                {{-- {{ dd($reports) }} --}}
                @foreach($reports as $report)
                    <tr>
                        <td>{{ $report->order_code  }}</td>
                        <td>

                              {{  $report->user_id   }}
                        </td>
                        <td>
                            @if($report->complain == 'late-Deliver' )

                                {{ trans('admin.Late-Deliver') }}

                            @elseif($report->complain == 'Broken')

                               {{ trans('admin.Broken') }}

                            @elseif($report->complain == 'Not-Deliver')
                            
                               {{ trans('admin.Not-Deliver') }}

                            @endif
                        
                        </td>
                    <td> {{  $report->message  }}</td>

                        
                    </tr>

                @endforeach
       
            </tbody>
        </table>
    





@endsection