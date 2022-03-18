<!-- Original Url Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('original_url', 'Original Url:') !!}
    {!! Form::textarea('original_url', null, ['class' => 'form-control']) !!}
</div>

<!-- Short Url Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('short_url', 'Short Url:') !!}
    {!! Form::textarea('short_url', null, ['class' => 'form-control']) !!}
</div>

<!-- Redirect Count Field -->
<div class="form-group col-sm-6">
    {!! Form::label('redirect_count', 'Redirect Count:') !!}
    {!! Form::number('redirect_count', null, ['class' => 'form-control']) !!}
</div>