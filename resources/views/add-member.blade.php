<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body>
    
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Add New Member
                            </div>
                            <div class="col-md-6">
                                <a href="{{ url('list') }}" class="btn btn-success pull-right">All Member</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                     
                        <form class="form-horizontal" method="POST" action="{{ url('/add/member') }}">
                            @csrf
                            <div class="form-group">
                                <label class="col-md-4 control-lebel">Name</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Member Name" name="names" class="form-control input-md">
                                   
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-lebel">Email</label>
                                <div class="col-md-12">
                                    <input type="email" placeholder="Email" name="email" class="form-control input-md">
                                 
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-lebel">Address</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Address" name="address" class="form-control input-md">
                                  
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-lebel"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>