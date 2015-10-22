 <div class="form-group">
    {!! Form::label('title', 'Category Title') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
    {!! Form::label('content', 'Category Content') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
    {!! Form::label('category_id', 'Category') !!}
    {!! Form::select('category_id', \App\Category::lists('title','id'), null, ['class' => 'form-control', 'placeholder'=>'-Pick Category-']) !!}
    </div>