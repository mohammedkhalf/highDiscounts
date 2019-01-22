@extends(app('at').'.index')
{{--@section('title')
  Single Order
@endsection--}}
@section('up')
    {{trans('admin.Complain')}}
@endsection
@section('content')

    <!-- Column selectors -->
    <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title"> {{trans('admin.Complain')}}</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                      
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>
    
            <?php

                // $users = DB::table('users')->get();
                // echo "<pre>"; print_r($users); die;

            
            ?>
        
            {{-- datatable-button-html5-columns // datatable class --}}
    
            <table class="table ">
                <thead>
                <tr>
                    <th>{{ trans('admin.OrderCode')}}</th>
                    <th>{{ trans('admin.UserID')}}</th>
                    {{-- <th>{{ trans('admin.VendorID')}}</th> --}}
                    <th>{{ trans('admin.Complain')}}</th>
                    <th>{{ trans('admin.message')}}</th> 
                    <th>{{ trans('admin.Action')}}</th> 
                    <th>{{ trans('admin.Order Transaction')}}</th> 

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
                            {{-- <td>{{ $report->vendor_id  }}</td> --}}
                            <td>
                                @if($report->complain == 'late-Deliver')

                                    {{ trans('admin.Late-Deliver') }}

                                @elseif($report->complain == 'Broken')

                                   {{ trans('admin.Broken') }}

                                @elseif($report->complain == 'Not-Deliver')
                                
                                   {{ trans('admin.Not-Deliver') }}

                                @endif
                            
                            </td>
                        <td> {{  $report->message  }}</td>

                        <td> 

                            <div class="form-group {{ $errors->has('action') ? ' has-error' : '' }}">
                                <select  class="form-control action"  data-title="{{ $report->id }}"  >
                                    <option value=""    >  {{ trans('admin.Select Action') }} </option>
                                    <option  value="Customer-Contact"  @if($report->stauts == 'Customer-Contact') selected @endif  > {{ trans('admin.Customer-Contact') }} </option>
                                    <option  value="Reship-Order"  @if($report->stauts == 'Reship-Order') selected @endif > {{ trans('admin.Reship-Order') }} </option>
                                    <option  value="Return-Order" @if($report->stauts == 'Return-Order') selected @endif> {{ trans('admin.Return-Order') }} </option>
                                    <option  value="Pinding" @if($report->stauts == 'Pinding') selected @endif > {{ trans('admin.Pinding') }}  </option>
                                    <option  value="Unactive-Vendor" @if($report->stauts == 'Unactive-Vendor') selected @endif > {{ trans('admin.Unactive-Vendor') }} </option>
                                    <option  value="Order-Cancel"  @if($report->stauts == 'Order-Cancel') selected @endif > {{ trans('admin.Order-Cancel') }}  </option>
                                </select>

                                @if ($errors->has('action'))
                                    <span class="help-block">
                                        <small class="text-danger">{{ $errors->first('action') }}</small>
                                    </span>
                                @endif

                            </div>
                            
                        </td>


                        <td>    

                            @if($report->stauts == 'Customer-Contact')

                                {{ trans('admin.Customer-Contact') }}

                            @elseif($report->stauts == 'Reship-Order')

                                {{ trans('admin.Reship-Order') }}

                            @elseif($report->stauts == 'Return-Order')

                               {{ trans('admin.Return-Order') }}

                            @elseif($report->stauts == 'Pinding')

                               {{  trans('admin.Pinding')  }}
                            
                            @elseif($report->stauts == 'Unactive-Vendor')

                                {{ trans('admin.Unactive-Vendor') }}

                            @else  

                                {{ trans('admin.Order-Cancel') }}


                            @endif
                            
                        
                        </td>
                        
                        </tr>

                    @endforeach
           
                </tbody>
            </table>
        </div>


@endsection 

@section('js_2')


<script> 

        $.ajaxSetup( {
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
       function saveToDatabase()
       {
            $(".action").on('change' , function(){
                var selected_value = $("option:selected" , $(this)).val();
                var selected_id = $(this).attr('data-title');
                // var stauts_id = $('#stauts').attr('data-title');
                // console.log(stauts_id);
                $.ajax({
                    type: 'POST',
                    data: {
                        selected_id : selected_id,
                        selected_value : selected_value
                    },
                    url: "{{ url('admin/post_action') }}",

                    success:function (data)
                    {
                        console.log(data);
                    }
                })
            }) //on change
        } //end function 
        $(document).ready(function()
        {
            saveToDatabase();
        });
    </script>

    
@endsection




    

