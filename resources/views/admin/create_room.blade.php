<!DOCTYPE html>
<html>
  <head>

    <base href="/public">

    @include('admin.css')

    <style>
        label
        {
            display: inline-block;
            width: 200px;
        }

        .form_div
        {
            padding-top: 30px;

        }


    </style>

  </head>
  <body>

    @include('admin.header')


        @include('admin.sidebar')

      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <h1 style="font-size: 40px; font-weight: bold; ">Add Rooms</h1>

            <div>
                <form class="form-horizontal" action="{{url('add_room')}}" method="post" enctype="multipart/form-data">

                    @csrf




                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Room Title</label>
                        <div class="col-sm-7">
                            <input type="text" name="title" class="form-control" style="background: transparent; border: 1px solid #444951;">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Description</label>
                        <div class="col-sm-7">
                            <textarea name="description" class="form-control" style="background: transparent; border: 1px solid #444951;"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">price</label>
                        <div class="col-sm-7">
                            <input type="number" name="price" class="form-control" style="background: transparent; border: 1px solid #444951;">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Room Type</label>
                        <div class="col-sm-7">
                        <select name="type" class="form-control" style="background: transparent; border: 1px solid #444951;">
                            <option selected value="regular">Regular</option>
                            <option value="premium">Premium</option>
                            <option value="deluxe">Deluxe</option>
                        </select>
                    </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Free wifi</label>
                        <div class="col-sm-7">
                        <select name="wifi" class="form-control" style="background: transparent; border: 1px solid #444951;">
                            <option selected value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Uplode Image</label>
                        <div class="col-sm-7">
                            <input type="file" name="image" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-7">
                        <input type="submit" value="Add Room" class="btn btn-primary">
                    </div>

                </form>
            </div>


          </div>
        </div>
      </div>



        @include('admin.footer')

  </body>
</html>

