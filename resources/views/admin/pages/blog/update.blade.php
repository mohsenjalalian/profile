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
                        <div style="margin-top: 0px;" class="col-md-3">
                            <div class="form-group">
                                <label>تاریخ</label>
                                <div class="form-group{{ $errors->has('date') ? ' has-error': ''}}">
                                    <div class="input-group">
                                        <div data-mdpersiandatetimepickershowing="false" title="" data-original-title=""
                                             data-mdpersiandatetimepickerselecteddatetime="{&quot;Year&quot;:1393,&quot;Month&quot;:10,&quot;Day&quot;:10,&quot;Hour&quot;:0,&quot;Minute&quot;:0,&quot;Second&quot;:0}"
                                             data-mdpersiandatetimepicker="" style="cursor: pointer;"
                                             class="input-group-addon" data-mddatetimepicker="true" data-trigger="click"
                                             data-targetselector="#fromDate2" data-groupid="group1" data-fromdate="true"
                                             data-enabletimepicker="false" data-placement="left">

                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </div>
                                        <input data-mdpersiandatetimepickershowing="false"
                                               value="{{$blog->date}}" title="" data-original-title=""
                                               data-mdpersiandatetimepickerselecteddatetime="{&quot;Year&quot;:1393,&quot;Month&quot;:10,&quot;Day&quot;:9,&quot;Hour&quot;:0,&quot;Minute&quot;:0,&quot;Second&quot;:0}"
                                               data-mdpersiandatetimepicker="" class="form-control" id="fromDate2"
                                               placeholder="از تاریخ" data-mddatetimepicker="true" data-trigger="click"
                                               data-targetselector="#fromDate2" data-groupid="group1"
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
                        <label>توضیحات</label>
                        <fieldset>
                            <textarea
                                    style="height: 160px !important; max-height: 160px; width: 555px; max-width: 555px;"
                                    class="form-control m-b col-md-4" name="description" rows="8" cols="80"
                                    placeholder="توضیحات" tabindex="1" required>{{$blog->description}}</textarea>
                        </fieldset>
                        @if($errors->has('description'))
                            <span class="help-block">{{ $errors->first('description')}}</span>
                        @endif
                    </div>
                    <div class="row">
                        @for($i=0;$i<3;$i++)
                            @if (isset($blog->album[$i]))

                                <input type="hidden"
                                       id="photo_{{$blog->album[$i]->id}}"
                                       class="rmPhoto" name="old_pic[{{ $blog->album[$i]->id }}]"
                                       value="{{ $blog->album[$i]->id }}">
                            @endif

                            <div class="ibox float-e-margins">
                                <div class="form-group{{ $errors->has('photo') ? 'has-error': ''}}">
                                    <div class="col-md-1">
                                        <img style="width: 50px; height: 50px; margin-top: -10px;"
                                             @if (isset($blog->album[$i]))id="img_{{$blog->album[$i]->id}}"
                                             src="{{asset(\App\Http\Controllers\BlogController::ALBUM_PATH.'/'.$blog->album[$i]->photo)}}"
                                             alt="{{$blog->album[$i]->photo}}"@endif>
                                    </div>
                                    <div class="col-md-1">
                                        @if (isset($blog->album[$i]))
                                            {{--<button type="button"  class="btn btn-danger btnremove"--}}
                                            {{--id="btn_{{$blog->album[$i]->id}}">پاک کردن</button>--}}
                                            <button style="font-family: webmdesign;  background-color: #fff; border: 1px solid #e5e6e7; color: #333;"
                                                    type="button" id="btn_{{$blog->album[$i]->id}}"
                                                    class="btn btnremove">پاک کردن
                                            </button>
                                        @endif
                                    </div>
                                    <div style="position: relative; top: 4px;" class="col-md-1">
                                        <div class="ibox float-e-margins">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <span class="btn btn-default btn-file">
                                                           <span class="fileinput-new">
                                                               بارگذاری عکس
                                                           </span>
                                                           <span class="fileinput-exists">
                                                               <span class="fileinput-exists">
                                                                   <span style="color: #2aca76;">بارگذاری شد</span>
                                                               </span>
                                                           </span>
                                                        <input type="file"
                                                               class="rmPhoto"
                                                               @if (isset($blog->album[$i]))
                                                               value="{{ $blog->album[$i]->photo }}"
                                                               @endif
                                                               name="photo[{{isset($blog->album[$i]) ? $blog->album[$i]->id : ''}}]">
                                                        </span>
                                            </div>
                                            @if($errors->has('photo'))
                                                <span class="help-block">{{ $errors->first('photo')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>


                    <div style="margin-top: 0px;" class="modal-footer col-md-5">
                        <button style="font-family: webmdesign;" type="button" class="btn btn-white"
                                data-dismiss="modal">بستن
                        </button>
                        <button style="font-family: webmdesign;" name="submit" type="submit" id="contact-submit"
                                data-submit="...Sending"
                                class="btn btn-primary">اعمال تغییرات
                        </button>
                    </div>
                </fieldset>
            </form>

        </div>
    </div>
    <script src="js/cheouts.js"></script>
    <script src="js/time.js"></script>
    <script>
        $(document).ready(function () {
            $('.btnremove').click(function () {
                var id = $(this).attr('id').replace('btn_', '');
                $("#img_" + id).fadeOut(2000);
                $("#photo_" + id).val('');
            });
        });
    </script>

@endsection
