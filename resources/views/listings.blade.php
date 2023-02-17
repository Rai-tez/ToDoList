<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
</head>
<body>
    {{--
        the @ symbol replaces the terrible starting and ending tags
        so its much more cleaner

        the {{<variable>}} is a quicker way to access variables without
            using the <"?"php"?"> for cleaner code
    --}}

    <h1>{{$heading}}</h1>


    @php
        // insert code here
    @endphp

    @if(count($listings) == 0)
        <h1>Get up and do something now!</h1>
    @else
        @foreach($listings as $item)
            <h2>
                <a href="/listings/{{$item['id']}}">
                    {{$item['title']}}
                </a>
            </h2>
            <p>{{$item['Description']}}</p>
        @endforeach
    @endif
</body>
</html>
