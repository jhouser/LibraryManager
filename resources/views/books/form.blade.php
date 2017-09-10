<div class="col-md-6">
    <form method="post" action="{{url('books')}}">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-12">
                <div class="form-group col-md-8">
                    <label for="title">Title: </label>
                    <input type="text"class="form-control" name="title" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group col-md-8">
                    <label for="authors">Authors:</label>
                    <input type="text"class="form-control" name="author"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-success" type="submit">Add</button>
            </div>
        </div>
    </form>
</div>