            <ul class="nav navbar-nav departments-menu animate-dropdown">
                        <li class="nav-item dropdown ">

                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="departments-menu-toggle" >{{trans('admin.shop_by_dep')}}</a>
                            <ul id="menu-vertical-menu" class="dropdown-menu yamm departments-menu-dropdown" style="width: 300px">
                            

                   <?php
$departments= App\Model\DepartmentProducts::where('parent',0)->take(30)->get();
                     ?>
  @foreach($departments as $department)
                                <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2585 dropdown" >
                                    <a title="Cameras, Audio &amp; Video"  data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">@if( Lang() =='en' ) {{$department->en_name}}@else{{$department->ar_name}} @endif</a>
                                    <ul role="menu" class=" dropdown-menu" style="width: 300px">
                                        <li class="menu-item animate-dropdown menu-item-object-static_block">
                                            <div class="yamm-content" >
                                                <div class="vc_row row wpb_row vc_row-fluid bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12 col-sm-12">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                    <?php  $parent = App\Model\DepartmentProducts::where('parent','=',$department->id)->get(); ?>
                                                <div class="vc_row row wpb_row vc_row-fluid">
                                                    <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="wpb_text_column wpb_content_element " >
                                                                    <div class="wpb_wrapper">
                                                                        <ul >
                                                                        @foreach($parent as $parents)
                                                                         <a href="{{url('/single_dep/'.$parents->id)}}">   <li  class="nav-title">@if( Lang() =='en' ) {{$parents->en_name}}@else{{$parents->ar_name}} @endif</li></a>
                                                                             @endforeach
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
    @endforeach

                            
                            </ul>
                        </li>
                    </ul>