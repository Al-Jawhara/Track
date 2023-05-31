@extends('layouts.app')
@section('title', 'Phones')
@section('content')

</head>
<body>
    <div class="container">
        <div class="row text-white bg-dark m-2">
        <h1 class="text-center text-white"><strong>Apple Mobile store</strong></h1></div>
@foreach($apple as $item)
        <div class="row m-5">
            <div class="col text-center">
                 <div class="card">
                    <div class="card-header"><h1>{{$item['Name']}}</h1></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <img src="https://media.extra.com/s/aurora/100315778_800/Apple-iPhone-14-Pro-Max%2C-5G%2C-128GB%2C-Deep-Purple?locale=en-GB,en-*,*" height="200">
                            </div>
                            <div class="col m-5"><ul>
                                <li><big>{{$item['Color']}}</big></li>
                                <li><big>{{$item['Size']}}</big></li>
                                <li><big>{{$item['Price']}}</big></li>
                           </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-3"> 
                                <img src="https://cdn.salla.sa/qXqEV/5NSVd6hEkYhZvqdeEv3q5A760qtKEFUh4Na1ezMD.png" height="20">
                            </div>
                            <div class="col-sm-9">Split into 3 payments of +{{$item['Tamara']}}+/month (with service charges included)</div>
                        </div>
                    </div>
                </div>
            </div>
@endforeach
            {{-- <div class="col text-center">
                <div class="card">
                    <div class="card-header"><h1>Apple iPhone 13</h1></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <img src="https://m.media-amazon.com/images/I/71xb2xkN5qL._AC_SX679_.jpg" height="200">
                            </div>
                            <div class="col m-5"><ul>
                                <li><big>Blue</big></li>
                                <li><big>128GB</big></li>
                                <li><big>2,879SR</big></li>
                           </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-3"> 
                                <img src="https://cdn.salla.sa/qXqEV/5NSVd6hEkYhZvqdeEv3q5A760qtKEFUh4Na1ezMD.png" height="20">
                            </div>
                            <div class="col-sm-9">Split into 3 payments of 959.6SR/month (with service charges included)</div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col text-center">
                <div class="card">
                    <div class="card-header"><h1>Apple iPhone 12</h1></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <img src="https://m.media-amazon.com/images/I/71fVoqRC0wL._AC_SX679_.jpg" height="200">
                            </div>
                            <div class="col m-5"><ul>
                                <li><big>Black</big></li>
                                <li><big>64GB</big></li>
                                <li><big>2,599SR</big></li>
                           </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-3"> 
                                <img src="https://cdn.salla.sa/qXqEV/5NSVd6hEkYhZvqdeEv3q5A760qtKEFUh4Na1ezMD.png" height="20">
                            </div>
                            <div class="col-sm-9">Split into 3 payments of SR866.3/month (with service charges included)</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">about us</a></li>
                  <li><a href="#">support</a></li>
                </ul>
        </div>
    </div> --}}
@endsection