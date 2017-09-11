<div class="col-md-6">
    <form action="{{url('books')}}" method="post">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-12">
                <div class="form-group col-md-8 {{ $errors->has('title') ? 'has-error' : '' }}">
                    <label for="title">Title: </label>
                    <input type="text"class="form-control" name="title" />
                    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group col-md-8 {{ $errors->has('author') ? 'has-error' : '' }}">
                    <label for="author">Author:</label>
                    <input type="text"class="form-control" name="author"/>
                     {!! $errors->first('author', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-success col-md-2" type="submit">Add</button>
            </div>
        </div>
    </form>
</div>