<html>
    <head>
        <title>Registeration Form</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" >
    </head>
    <body>

    <div class="container">
        <div class="form-group col-12 p-0">
            <div>
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
                @endif
            </div>

            <form method="POST" action="{{ route('store') }}">
              @csrf

                <div class="from-group">
                    <div class="col-sm-12">
                        <h2 style="text-align: center;color: blue">User Details</h2>
                    </div>
                </div>

                <hr/>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="your name">
                    </div>

                    <div class="form-group col-md-6">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="your email">
                    </div>

                    <div class="form-group col-md-6">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="your password">
                    </div>

                    <div class="form-group col-md-6">
                        <label>Confirm Password</label>
                        <input type="password" name="passwordconfirm" class="form-control" id="passwordconfirm" placeholder="your confirm password">
                    </div>

                    <div class="form-group col-md-6">
                        <button class="btn btn-success" style="width: 80px;">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    </body>
</html>
