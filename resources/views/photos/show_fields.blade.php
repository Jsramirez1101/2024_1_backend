<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $photo->user_id }}</p>
</div>

<!-- Photo Details Id Field -->
<div class="col-sm-12">
    {!! Form::label('photo_details_id', 'Photo Details Id:') !!}
    <p>{{ $photo->photo_details_id }}</p>
</div>

<!-- String Field -->
<div class="col-sm-12">
    {!! Form::label('String', 'String:') !!}
    <p>{{ $photo->String }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $photo->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $photo->updated_at }}</p>
</div>

