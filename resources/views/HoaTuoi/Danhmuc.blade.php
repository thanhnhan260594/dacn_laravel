@foreach($danhmuc as $dm)
    <div class="nn-megamenu-sidebar" style="text-align:center; margin-bottom:auto">
                        <ul>
                            <li>
                                <a href="{{action('HoaTuoiController@Hoatheochude',['id' => $dm->Ma_CD]) }}" style="display:block">                                     
                                        <span class="col-md-1">                                       
                                        <img src="{{ asset("resources/views/Themes/Contents/img/icon.png")}}" width="95" height="70">
                                        </span>
                                        <span class="col-md-9"><h5><strong>{{ $dm->Ten_CD }}</strong></h5></span>                                   
                                </a>
                            </li>
                        </ul>
    </div>
@endforeach
