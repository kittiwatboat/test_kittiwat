<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Document</title>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="col-md-10">
                            <form action="/import" method="POST" enctype="multipart/form-data">
                                @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="file-multiple-input">
                                        IMPORT FILE</label>
                                    <div class="col-md-4">
                                        <input id="file-multiple-input" type="file" name="file"
                                            multiple="">
                                    </div>
                                    <div class="col-md-3">
                                <button class="btn btn-success" type="submit">IMPORT</button>
                                    </div>
                                </div>
                            </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="col-md-12">

                            <div class="card-body">
                             <form action="/search" method="GET">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" >
                                        Transaction Status</label>
                                    <div class="col-sm-3">
                                        <input class="form-control" type="search" name="transac">
                                    </div>
                                </div>
                            </form>
                            <form action="/search" method="GET">
                                <div class="form-group row">
                            <label class="col-sm-2 col-form-label" >
                                Barcode</label>
                            <div class="col-sm-3">
                                <input class="form-control" type="search" name="barcode">
                            </div>
                        </div>
                            </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="col-md-12">
                            <div class="card-body">
                                <table class="table table-striped ">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Request Unique No</th>
                                            <th>Transaction Id</th>
                                            <th>Transaction Status</th>
                                            <th>Description</th>
                                            <th>Barcode</th>
                                            <th>Balance</th>
                                            <th>Create Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($test as $key => $item)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$item->request_unique_no}}</td>
                                            <td>{{$item->transaction_id}}</td>
                                            <td>{{$item->transaction_status}}</td>
                                            <td>{{$item->description}}</td>
                                            <td>{{$item->barcode}}</td>
                                            <td>{{$item->balance}}</td>
                                            <td>{{$item->create_date}}</td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                {{$test->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

</html>
