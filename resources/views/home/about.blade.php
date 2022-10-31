@extends('base')
@section('content')
<center><h1>ini about</h1>
<p>hai, nama saya {{ $data  ['nama'] }}, kelas {{ $data ['kelas'] }}</p>
</center>
@endsection