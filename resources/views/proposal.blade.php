@extends('layouts.mainAuth')
@section('content')
<div class="proposal-wrapper">
    <form method="POST" action="#">
        <p>Unggah proposal terbaikmu disini</p>
        <input type="file" name=""><br>
        <p>Lampirkan link videomu disini</p>
        <input type="text" name="" class="link-input"><br>
        <button id="proposal-btn">Unggah</button>
    </form>
</div>
@endsection
