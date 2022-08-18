<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <style>
    nav svg {
        height: 20px;
    }

    nav.hidden {
        display: block !important;
    }

    .sclist {
        list-style: none;
    }

    .sclist li {
        line-height: 33px;
        border-bottom: 1px solid #ccc;
    }

    .slink {
        font-size: 15px;
        margin-left: 12px;
    }
</style>
  
  <body>
    
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Member List
                               
                            </div>
                            <div class="col-md-6">
                                <a href="{{ url('/add') }}" class="btn btn-success pull-right">Add Member</a>
                            </div>
                            @if(Session::has('msg'))
                            <p class="alert alert-success">{{ Session::get('msg') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($members as $key => $member)
                                    
                              
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $member->name }}</td>
                                        <td>{{ $member->email }}</td>
                                        <td>{{ $member->address }}</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></i></a>
                                            <a href="{{ url('/delete/'.$member['id']) }}" onclick="return confirm('are you sure to delete?')" class="btn btn-sm btn-danger"><i class="fa fa-times "></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                            </tbody>
                        </table>
                        {{ $members->links() }}
                       
                    </div>
                </div>
            </div>
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>