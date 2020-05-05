@extends('layouts.admin')
@section('content')
 {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}
<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('global.setting.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.settings.update", [$setting->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                <div class="box-body setting-block">
                    <!-- Nav tabs -->
                    <ul id="custom-content-below-tab" class="nav nav-tabs setting-tab-list" role="tablist">
                        <li role="presentation" class="nav-item">
                            <a class="nav-link active" href="#tab1" aria-controls="home" role="tab" data-toggle="tab">{{ trans('global.setting.seo') }}</a>
                        </li>
                        <li role="presentation" class="nav-item">
                            <a class="nav-link" href="#tab2" aria-controls="1" role="tab" data-toggle="tab">{{ trans('global.setting.companydetails') }}</a>
                        </li>
                        <li role="presentation" class="nav-item">
                            <a class="nav-link" href="#tab3" aria-controls="2" role="tab" data-toggle="tab">{{ trans('global.setting.mail') }}</a>
                        </li>
                        <li role="presentation" class="nav-item">
                            <a class="nav-link" href="#tab4" aria-controls="3" role="tab" data-toggle="tab">{{ trans('global.setting.footer') }}</a>
                        </li>
                        <li role="presentation" class="nav-item">
                            <a class="nav-link" href="#tab5" aria-controls="4" role="tab" data-toggle="tab">{{ trans('global.setting.terms') }}</a>
                        </li>
                        <li role="presentation" class="nav-item">
                            <a class="nav-link" href="#tab6" aria-controls="5" role="tab" data-toggle="tab">{{ trans('global.setting.google') }}</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div id="myTabContent" class="tab-content setting-tab">
                        <div role="tabpanel" class="tab-pane active" id="tab1">
                            
                            <div class="form-group {{ $errors->has('seo_title') ? 'has-error' : '' }}">
                                <label for="cannonical link">{{ trans('global.setting.fields.seo_title') }}</label>
                                <input type="text" id="seo_title" name="seo_title" class="form-control" value="{{ old('seo_title', isset($setting) ? $setting->seo_title : '') }}" step="0.01">
                                @if($errors->has('seo_title'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('seo_title') }}
                                    </em>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.setting.fields.seo_title_helper') }}
                                </p>
                            </div>
                            <!--- Form Control ---->

                            <div class="form-group {{ $errors->has('seo_keyword') ? 'has-error' : '' }}">
                                <label for="cannonical link">{{ trans('global.setting.fields.seo_keyword') }}</label>
                                <input type="text" id="seo_keyword" name="seo_keyword" class="form-control" value="{{ old('seo_keyword', isset($setting) ? $setting->seo_keyword : '') }}" step="0.01">
                                @if($errors->has('seo_keyword'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('seo_keyword') }}
                                    </em>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.setting.fields.seo_keyword_helper') }}
                                </p>
                            </div>
                            <!--- Form Control ---->

                            <div class="form-group {{ $errors->has('seo_description') ? 'has-error' : '' }}">
                                <label for="seo_description">{{ trans('global.setting.fields.seo_description') }}</label>
                                <textarea id="seo_description" name="seo_description" class="form-control desc-summernote">{{ old('seo_description', isset($setting) ? $setting->seo_description : '') }}</textarea>
                                @if($errors->has('seo_description'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('seo_description') }}
                                    </em>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.setting.fields.seo_description_helper') }}
                                </p>
                            </div>
                            <!--- Form Control ---->

                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab2">
                            <div class="form-group {{ $errors->has('company_contact') ? 'has-error' : '' }}">
                                <label for="cannonical link">{{ trans('global.setting.fields.company_contact') }}</label>
                                <input type="text" id="company_contact" name="company_contact" class="form-control" value="{{ old('company_contact', isset($setting) ? $setting->company_contact : '') }}" step="0.01">
                                @if($errors->has('company_contact'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('company_contact') }}
                                    </em>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.setting.fields.company_contact_helper') }}
                                </p>
                            </div>
                            <!--- Form Control ---->

                            <div class="form-group {{ $errors->has('company_address') ? 'has-error' : '' }}">
                                <label for="cannonical link">{{ trans('global.setting.fields.company_address') }}</label>
                                <input type="text" id="company_address" name="company_address" class="form-control" value="{{ old('company_address', isset($setting) ? $setting->company_address : '') }}" step="0.01">
                                @if($errors->has('company_address'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('company_address') }}
                                    </em>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.setting.fields.company_address_helper') }}
                                </p>
                            </div>
                            <!--- Form Control ---->
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab3">
                            <div class="form-group {{ $errors->has('from_name') ? 'has-error' : '' }}">
                                <label for="cannonical link">{{ trans('global.setting.fields.from_name') }}</label>
                                <input type="text" id="from_name" name="from_name" class="form-control" value="{{ old('from_name', isset($setting) ? $setting->from_name : '') }}">
                                @if($errors->has('from_name'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('from_name') }}
                                    </em>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.setting.fields.from_name_helper') }}
                                </p>
                            </div>
                            <!--- Form Control ---->

                            <div class="form-group {{ $errors->has('from_email') ? 'has-error' : '' }}">
                                <label for="cannonical link">{{ trans('global.setting.fields.from_email') }}</label>
                                <input type="text" id="from_email" name="from_email" class="form-control" value="{{ old('from_email', isset($setting) ? $setting->from_email : '') }}">
                                @if($errors->has('from_email'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('from_email') }}
                                    </em>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.setting.fields.from_email_helper') }}
                                </p>
                            </div>
                            <!--- Form Control ---->
                        </div>

                        <div role="tabpanel" class="tab-pane" id="tab4">
                           <div class="form-group {{ $errors->has('footer_text') ? 'has-error' : '' }}">
                                <label for="cannonical link">{{ trans('global.setting.fields.footer_text') }}</label>
                                <input type="text" id="footer_text" name="footer_text" class="form-control" value="{{ old('footer_text', isset($setting) ? $setting->footer_text : '') }}">
                                @if($errors->has('footer_text'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('footer_text') }}
                                    </em>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.setting.fields.footer_text_helper') }}
                                </p>
                            </div>
                            <!--- Form Control ---->

                            <div class="form-group {{ $errors->has('copyright_text') ? 'has-error' : '' }}">
                                <label for="cannonical link">{{ trans('global.setting.fields.copyright_text') }}</label>
                                <input type="text" id="copyright_text" name="copyright_text" class="form-control" value="{{ old('copyright_text', isset($setting) ? $setting->copyright_text : '') }}">
                                @if($errors->has('copyright_text'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('copyright_text') }}
                                    </em>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.setting.fields.copyright_text_helper') }}
                                </p>
                            </div>
                            <!--- Form Control ---->
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab5">
                            <div class="form-group {{ $errors->has('terms') ? 'has-error' : '' }}">
                                <label for="cannonical link">{{ trans('global.setting.fields.terms') }}</label>
                                <input type="text" id="terms" name="terms" class="form-control" value="{{ old('terms', isset($setting) ? $setting->terms : '') }}">
                                @if($errors->has('terms'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('terms') }}
                                    </em>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.setting.fields.terms_helper') }}
                                </p>
                            </div>
                            <!--- Form Control ---->

                            <div class="form-group {{ $errors->has('disclaimer') ? 'has-error' : '' }}">
                                <label for="cannonical link">{{ trans('global.setting.fields.disclaimer') }}</label>
                                <input type="text" id="disclaimer" name="disclaimer" class="form-control" value="{{ old('disclaimer', isset($setting) ? $setting->disclaimer : '') }}">
                                @if($errors->has('disclaimer'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('disclaimer') }}
                                    </em>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.setting.fields.disclaimer_helper') }}
                                </p>
                            </div>
                            <!--- Form Control ---->
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab6">
                            <div class="form-group {{ $errors->has('facebook') ? 'has-error' : '' }}">
                                <label for="cannonical link">{{ trans('global.setting.fields.facebook') }}</label>
                                <input type="text" id="facebook" name="facebook" class="form-control" value="{{ old('facebook', isset($setting) ? $setting->facebook : '') }}" step="0.01">
                                @if($errors->has('facebook'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('facebook') }}
                                    </em>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.setting.fields.facebook_helper') }}
                                </p>
                            </div>
                            <!--- Form Control ---->

                            <div class="form-group {{ $errors->has('linkedin') ? 'has-error' : '' }}">
                                <label for="cannonical link">{{ trans('global.setting.fields.linkedin') }}</label>
                                <input type="text" id="linkedin" name="linkedin" class="form-control" value="{{ old('linkedin', isset($setting) ? $setting->linkedin : '') }}" step="0.01">
                                @if($errors->has('linkedin'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('linkedin') }}
                                    </em>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.setting.fields.linkedin_helper') }}
                                </p>
                            </div>
                            <!--- Form Control ---->

                            <div class="form-group {{ $errors->has('twitter') ? 'has-error' : '' }}">
                                <label for="cannonical link">{{ trans('global.setting.fields.twitter') }}</label>
                                <input type="text" id="twitter" name="twitter" class="form-control" value="{{ old('twitter', isset($setting) ? $setting->twitter : '') }}" step="0.01">
                                @if($errors->has('twitter'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('twitter') }}
                                    </em>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.setting.fields.twitter_helper') }}
                                </p>
                            </div>
                            <!--- Form Control ---->

                            <div class="form-group {{ $errors->has('google') ? 'has-error' : '' }}">
                                <label for="cannonical link">{{ trans('global.setting.fields.google') }}</label>
                                <input type="text" id="google" name="google" class="form-control" value="{{ old('google', isset($setting) ? $setting->google : '') }}" step="0.01">
                                @if($errors->has('google'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('google') }}
                                    </em>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.setting.fields.google_helper') }}
                                </p>
                            </div>
                            <!--- Form Control ---->

                        </div>
                    </div>
                </div>   
                <div>
                    <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
                </div>
        </form>
    </div>
</div>
@endsection

@section('after-scripts')
<script src='/js/backend/bootstrap-tabcollapse.js'></script>
<script type="text/javascript">
    $('#myTab').tabCollapse({
        tabsClass: 'hidden-sm hidden-xs',
        accordionClass: 'visible-sm visible-xs'
    });
</script>>
@endsection