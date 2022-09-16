<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUBSCRIBER'S EMAILS</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="icon" href="/images/stopwatch.png">
    @vite(['resources/js/app.js'])
</head>

<body class="p-2">
    <div class="container mt-2">
        <div class="col-md-8 mx-auto border p-3">
            @if ($message = Session::get('success'))
                <p class='alert alert-success'><strong>{{ $message }}</strong> status updated successfully.</p>
            @endif
            <h2 class="text-center">SUBSCRIBERS</h2>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Emails</th>
                        <th scope="col">Date</th>
                        <th scope="col">CTA</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                     $count = 1;   
                    @endphp
                   @foreach ($subscribers as $subscriber)
                   <tr>
                        <th scope="row">{{$count++}}</th>
                        <td>{{$subscriber->email}}</td>
                        <td>{{ \Carbon\Carbon::parse($subscriber->created_at)->isoFormat('MMM Do, YYYY.')}}                        </td>
                        <td>
                            <form action="{{route('subscribe', $subscriber->id )}}" method="post">
                                @csrf
                                @if($subscriber->cta == 1)
                                    <button class="btn btn-danger btn-sm unsubscribe" type="submit">Unsubscribe</button>
                                @else
                                    <button class="btn btn-success btn-sm subscribe" type="submit">Subscribe</button>
                                @endif
                            </form>
                        </td>
                    </tr>
                   @endforeach
                </tbody>
            </table>
            {{$subscribers->links('pagination::bootstrap-5')}}
            <div class="text-end">
                <form action="{{route('export')}}" method="post" id="export">
                    @csrf
                    <button class="btn btn-success" type="submit">Export</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        // $('#export').on('submit', function (e) {
        //     e.preventDefault();
        //     $.ajax({
        //         type: "post",
        //         url: "/adhsfaldhflasdjajjYGSKllsaalks",
        //         data: $(this).serialize(),
        //         success: function (response) {
                    
        //         }
        //     });
        // });
    </script>
</body>

</html>
