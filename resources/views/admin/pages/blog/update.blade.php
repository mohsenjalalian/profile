@extends('admin.layouts.master')



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
        <div class="container">
            @include('admin.layouts.errors')
            <form id="contact" action="{{route('blog.update',$blog->id)}}" method="post"
                  enctype="multipart/form-data">
                {{csrf_field()}}
                {{ method_field('PUT') }}
                <fieldset>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group{{ $errors->has('title') ? ' has-error': ''}}">
                                <label>تیتر</label>
                                <fieldset>
                                    <input class="form-control m-b" placeholder="تیتر" type="text"
                                           value="{{$blog->title}}" name="title" tabindex="1" required autofocus>
                                </fieldset>
                                @if($errors->has('title'))
                                    <span class="help-block">{{ $errors->first('title')}}</span>
                                @endif
                            </div>
                        </div>
                        <div style="margin-top: 27px;" class="col-md-3">
                            <div class="form-group">
                                <div class="form-group{{ $errors->has('date') ? ' has-error': ''}}">
                                    <div class="input-group">
                                        <div data-mdpersiandatetimepickershowing="false" title="" data-original-title=""
                                             data-mdpersiandatetimepickerselecteddatetime="{&quot;Year&quot;:1393,&quot;Month&quot;:10,&quot;Day&quot;:10,&quot;Hour&quot;:0,&quot;Minute&quot;:0,&quot;Second&quot;:0}"
                                             data-mdpersiandatetimepicker="" style="cursor: pointer;"
                                             class="input-group-addon" data-mddatetimepicker="true" data-trigger="click"
                                             data-targetselector="#fromDate1" data-groupid="group1" data-fromdate="true"
                                             data-enabletimepicker="false" data-placement="left">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </div>
                                        <input data-mdpersiandatetimepickershowing="false"
                                               value="{{$blog->date}}" title="" data-original-title=""
                                               data-mdpersiandatetimepickerselecteddatetime="{&quot;Year&quot;:1393,&quot;Month&quot;:10,&quot;Day&quot;:9,&quot;Hour&quot;:0,&quot;Minute&quot;:0,&quot;Second&quot;:0}"
                                               data-mdpersiandatetimepicker="" class="form-control" id="fromDate1"
                                               placeholder="از تاریخ" data-mddatetimepicker="true" data-trigger="click"
                                               data-targetselector="#fromDate1" data-groupid="group1"
                                               data-fromdate="true" data-enabletimepicker="false" data-placement="right"
                                               name="date" type="text">
                                        @if($errors->has('date'))
                                            <span class="help-block">{{ $errors->first('date')}}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-group{{ $errors->has('description') ? ' has-error': ''}}">
                        <fieldset>
                            <textarea style="height: 80px !important; max-height: 80px; width: 555px; max-width: 555px;"
                                      class="form-control m-b col-md-4" name="description" rows="8" cols="80"
                                      placeholder="توضیحات" tabindex="1" required>{{$blog->description}}</textarea>
                        </fieldset>
                        @if($errors->has('description'))
                            <span class="help-block">{{ $errors->first('description')}}</span>
                        @endif
                    </div>
                    <div class="row">
                        @for($i=0;$i<3;$i++)
                        <div class="col-md-2">
                            <div class="ibox float-e-margins">
                                <div class="form-group{{ $errors->has('photo') ? 'has-error': ''}}">
                                    {{--@if(!empty($blog->album[$i]->photo))--}}
                                        {{--<input type="file" id="file1" name="" value="{{$blog->album[$i]->photo}}"--}}
                                               {{--onchange="readURL1(this)" style="display:none">--}}
                                        <img style="width: 50px;height: 50px" id="photo1"
                                             @if (isset($blog->album[$i]))
                                                src="{{asset(\App\Http\Controllers\BlogController::ALBUM_PATH.'/'.$blog->album[$i]->photo)}}"
                                                alt="{{$blog->album[$i]->photo}}"
                                             @endif
                                        >

                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                          <span class="btn btn-default btn-file"><span
                                                    class="fileinput-new">عکس 1</span> <span
                                                    class="fileinput-exists"><span class="fileinput-exists"><span
                                                            style="color: #2aca76;">بارگذاری شد</span></span> </span>
                                            <input type="file" class="upload-photo"
                                                   name="photo[{{ isset($blog->album[$i]) ? $blog->album[$i]->id : ''}}]">
                                          </span>
                                        </div>

                                        @if($errors->has('photo'))
                                            <span class="help-block">{{ $errors->first('photo')}}</span>
                                        @endif
                                </div>

                            </div>
                        </div>

                        @endfor

                        {{--<div class="col-md-2">--}}
                            {{--<div class="ibox float-e-margins">--}}
                                {{--<div class="form-group{{ $errors->has('photo') ? ' has-error': ''}}">--}}
                                    {{--@if(!empty($blog->album[2]->photo))--}}
                                        {{--<input type="file" id="file3" name="photo[{{ $blog->album[2]->id }}]" value="{{$blog->album[2]->photo}}"--}}
                                               {{--onchange="readURL3(this)" style="display:none">--}}
                                        {{--<img style="width: 50px;height: 50px" id="photo3"--}}
                                             {{--src="{{asset(\App\Http\Controllers\BlogController::ALBUM_PATH.'/'.$blog->album[2]->photo)}}"--}}
                                             {{--alt="{{$blog->album[2]->photo}}">--}}
                                    {{--@else--}}
                                        {{--<input type="file" id="file3" name="photo[]"--}}
                                                {{--onchange="readURL3(this)"--}}
                                               {{--style="display:none">--}}
                                        {{--<img id="photo3" src="#" alt="عکس 3"/>--}}
                                    {{--@endif--}}
                                        {{--<div class="fileinput fileinput-new" data-provides="fileinput">--}}
                                        {{--<span class="btn btn-default btn-file"><span--}}
                                                    {{--class="fileinput-new">عکس 3</span> <span--}}
                                                    {{--class="fileinput-exists"><span class="fileinput-exists"><span--}}
                                                            {{--style="color: #2aca76;">بارگذاری شد</span></span> </span>--}}
                                            {{--<input type="file" name="photo[]"--}}
                                                   {{--onchange="readURL3(this)">--}}
                                        {{--</span>--}}
                                        {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
        <div style="margin-top: -20px;" class="modal-footer col-md-5">
                        <button type="button" class="btn btn-white" data-dismiss="modal">بستن</button>
                        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending"
                                class="btn btn-primary">اعمال تغیرات
                        </button>
                    </div>
        </fieldset>
            </form>

        </div>
    </div>
    <script src="js/cheouts.js"></script>
    <script src="js/time.js"></script>
@endsection
