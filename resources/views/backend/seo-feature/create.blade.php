@extends('layouts.backend.app')
@section('title', 'Add SEO Features')
@section('css')
    {!! Html::style('assets/backend/tagify/css/tagify.css') !!}
@endsection
@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon"> <i class="pe-7s-settings text-success"></i></div>
                    <div>SEO Feautures <div class="page-title-subheading"> Add SEO Features</div>
                    </div>
                </div>
            </div>
        </div> 

        {!! Form::open(['route' => 'seo-features.store', 'method' => 'post', 'enctype' => 'multipart/form-data', 'id' => 'dataForm']) !!}
        <div class="card shadow mb-4">
            <div class="card-header">
                <h6 class="font-weight-bold"><i class="fa fa-plus"></i> Add SEO Feature</h6>
            </div>
            <div class="card-body">
                <fieldset class="border p-3">
                    <legend class="w-auto">Page Info</legend>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('title', 'Title : ', ['class' => 'required-star font-weight-bold']) !!}
                                {!! Form::text('title', '', [ 'class' => 'required form-control ' . ($errors->has('title') ? 'is-invalid' : '')]) !!}
                                @error('title') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span> @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('page_name', 'Page Name : ', ['class' => 'required-star font-weight-bold']) !!}
                                {!! Form::text('page_name', '', [ 'class' => 'required form-control page-name ' . ($errors->has('page_name') ? 'is-invalid' : '')]) !!}
                                @error('page_name') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span> @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('slug', 'Slug : ', ['class' => 'required-star font-weight-bold']) !!}
                                {!! Form::text('slug', '', [ 'class' => 'required form-control slug ' . ($errors->has('slug') ? 'is-invalid' : '')]) !!}
                                @error('slug') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span> @enderror
                            </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="border p-3 mt-3">
                    <legend class="w-auto">Meta Data</legend>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('seo_title', 'SEO Title : ', ['class' => 'required-star font-weight-bold']) !!}
                                {!! Form::text('seo_title', '', [ 'class' => 'required form-control ' . ($errors->has('slug_en') ? 'is-invalid' : '')]) !!}
                                @error('seo_title') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span> @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('og_title', 'OG Title: ', ['class' => 'required-star font-weight-bold']) !!}
                                {!! Form::text('og_title', '', [ 'class' => $errors->has('og_title') ? 'form-control is-invalid' : 'form-control required']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('twitter_title', 'Twitter Title: ', ['class' => 'required-star font-weight-bold']) !!}
                                {!! Form::text('twitter_title', '', [ 'class' => $errors->has('twitter_title') ? 'form-control is-invalid' : 'form-control']) !!}
                                @error('twitter_title') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span> @enderror
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('og_type', 'OG Type: ', ['class' => 'required-star font-weight-bold']) !!}
                                {!! Form::select('og_type', ['Website' => 'Website', 'E-commerce' => 'E-commerce', 'Industrial' => 'Industrial'], '', [ 'class' => $errors->has('og_type') ? 'form-control is-invalid' : 'form-control required']) !!}
                                @error('og_type') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span> @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('image_alt_text', 'Feature Image Alt Text: ', ['class' => 'required-star font-weight-bold']) !!}
                                {!! Form::text('image_alt_text', '', [ 'class' => $errors->has('image_alt_text') ? 'form-control is-invalid' : 'form-control required']) !!}
                                @error('image_alt_text') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span> @enderror
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('og_image_alt_text', 'OG Image Alt Text: ', ['class' => 'font-weight-bold']) !!}
                                {!! Form::text('og_image_alt_text', '', ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('twitter_image_alt_text', 'Twitter Image Alt Text: ', [ 'class' => 'required-star font-weight-bold']) !!}
                                {!! Form::text('twitter_image_alt_text', '', ['class' => $errors->has('twitter_image_alt_text') ? 'form-control is-invalid' : 'form-control required']) !!}
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('canonical_url', 'Canonical URL: ', ['class' => 'font-weight-bold']) !!}
                                {!! Form::text('canonical_url', '', ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('keywords', 'Keywords: ', ['class' => 'required-star font-weight-bold']) !!}
                                {!! Form::text('keywords', '', ['class' => 'required form-control keywords']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('og_description', 'OG Description: ', ['class' => 'required-star font-weight-bold']) !!}
                                {!! Form::textarea('og_description', '', [ 'class' => $errors->has('og_description') ? 'form-control is-invalid' : 'form-control required', 'rows' => 4]) !!}
                                @error('og_description') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span> @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('meta_description', 'Meta Description: ', ['class' => 'required-star font-weight-bold']) !!}
                                {!! Form::textarea('meta_description', '', ['class' => $errors->has('meta_description') ? 'form-control is-invalid' : 'form-control required', 'rows' => 4]) !!}
                                @error('meta_description') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span> @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('twitter_description', 'Twitter Description: ', [ 'class' => 'required-star font-weight-bold']) !!}
                                {!! Form::textarea('twitter_description', '', [ 'class' => $errors->has('twitter_description') ? 'form-control is-invalid' : 'form-control required','rows' => 4]) !!}
                                @error('twitter_description') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span> @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('image', 'Feature Image (1920px*1080px):', ['class' => 'required-star']) !!}
                                <br />
                                <img class="img border image-view" src="{{ url('assets/backend/images/img.png') }}" height="300" width="100%">
                                <label class="btn btn-block btn- btn-primary btn-sm rounded-0 w-100" style="cursor: pointer">
                                    <input class="file" type="file" name="image" style="display: none" accept="image/jpg, image/jpeg, image/png">
                                    <i class="fa fa-image"></i> Browse
                                </label>
                            </div>
                            <div>@error('image') <span class="text-danger" role="alert" style="width: 100%; margin-top: 0.25rem; font-size: 80%; color: #d92550;"> <strong>{!! $message !!}</strong></span> @enderror</div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('og_image', 'OG Image (1200px*630px):') !!}
                                <br />
                                <img class="img border image-view" src="{{ url('assets/backend/images/img.png') }}" height="300" width="100%">
                                <label class="btn btn-block btn- btn-primary btn-sm rounded-0 w-100" style="cursor: pointer">
                                    <input class="file" type="file" name="og_image" style="display: none" accept="image/jpg, image/jpeg, image/png">
                                    <i class="fa fa-image"></i> Browse
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('twitter_image', 'Twitter Image (920px*460px):') !!}
                                <br />
                                <img class="img border image-view" src="{{ url('assets/backend/images/img.png') }}" height="300" width="100%">
                                <label class="btn btn-block btn- btn-primary btn-sm rounded-0 w-100" style="cursor: pointer">
                                    <input class="file" type="file" name="twitter_image" style="display: none" accept="image/jpg, image/jpeg, image/png">
                                    <i class="fa fa-image"></i> Browse
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="card-footer justify-content-between">
                <a href={{ route('seo-features.index') }} class="btn float-left btn-default btn-sm border"><i class="fa fa-backspace"></i> Back</a>
                <button type="submit" class="btn float-right btn-primary"><i class="fa fa-save"></i> Save</button>
            </div>
        </div>
        <!--card-->
        {!! Form::close() !!}
    </div>
@endsection


@section('script')
    {!! Html::script('assets/backend/tagify/js/tagify.js') !!}
    
    <script>
    function slugConvert(Text) {
        return Text.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
    }

    function convertToSlug(Text) {
        return Text
            .trim()
            .replace(/[^a-z0-9-]/gi, '-')
            .replace(/-+/g, '-')
            .replace(/^-|-$/g, '')
            .toLowerCase();
    }

    $(document).ready(function() {
        $('.keywords').tagify();
        $('.page-name').keyup(function() {
            var takedata = $(this).val()
            $('.slug').val(convertToSlug(takedata));
        });
        $('.slug').keyup(function() {
            var takedata = $(this).val()
            $(this).val(slugConvert(takedata));
        });

        /**************************
         IMAGE PREVIEW START HERE
        **************************/

        $('.file').on("change", function() {
            let parentHtml = $(this).parent().parent();
            let image = parentHtml.find('.image-view');
            let error = parentHtml.find('.err');
            error.html('');
            if (this.files && this.files[0]) {
                let mime_type = this.files[0].type;
                if (!(mime_type == 'image/jpeg' || mime_type == 'image/jpg' || mime_type == 'image/png')) {
                    error.html("Invalid file format Only jpg jpeg png is allowed");
                    this.value = null;
                    $(this).prop('required', true);
                    image.attr('src', '/assets/backend/images/img.png');
                    return false;
                }
                let reader = new FileReader();
                reader.onload = function(e) {
                    image.attr('src', e.target.result);
                };
                reader.readAsDataURL(this.files[0]);
            }
        });
    });
    </script>
@endsection
