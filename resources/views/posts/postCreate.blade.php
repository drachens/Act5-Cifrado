<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if($datos)
        
    <h1>{{$datos["password"]}}</h1>
    <h1>{{$datos["ip"]}}</h1>
    <h1>{{$datos["so"]}}</h1>
    <form name="form" action="{{ asset('/api') }}" method="post">
        <input type="hidden" name="password" value="{{ $datos['password'] }}">
        <input type="hidden" name="ip" value="{{$datos['ip']}}">
        <input type="hidden" name="so" value="{{$datos['so']}}">
    </form>

    @endif
<script type="text/javascript">
    document.form.submit();
</script>
</body>
</html>