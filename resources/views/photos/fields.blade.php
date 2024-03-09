<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::text('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Photo Details Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('photo_details_id', 'Photo Details Id:') !!}
    {!! Form::text('photo_details_id', null, ['class' => 'form-control']) !!}
</div>

<!-- String Field -->
<div class="form-group col-sm-6">
    {!! Form::label('String', 'String:') !!}
    {!! Form::text('String', null, ['class' => 'form-control', 'required']) !!}
</div>