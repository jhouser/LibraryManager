<div class="col-md-6">
    <form method="get" action="{{url('books')}}">
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
                    <label for="authors">Author:</label>
                    <input type="text"class="form-control" name="author"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-success" type="submit">Search</button>
            </div>
        </div>
    </form>
    </form>
</div>