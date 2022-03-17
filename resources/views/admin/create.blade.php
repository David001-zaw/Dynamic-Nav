<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Add Menu Item</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('menu.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="menu-name">Menu Name</label>
                                <input type="text" name="name" class="form-control" id="menu-name" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <label for="menu-name">Status</label>
                                <select class="form-control" required name="status">
                                    <option>Enabled</option>
                                    <option>Disabled</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="menu-link">Menu Item Link</label>
                                <input type="text" name="link" class="form-control" id="menu-link" placeholder="Enter Link" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Menu Item</button>
                        </form>
                    </div>

                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</body>
</html>