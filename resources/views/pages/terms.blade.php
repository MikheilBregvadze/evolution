@extends('layouts.app')

@section('content')
<home-page inline-template>
<div>
@include('homePage.header')
<main>
    <div class="page-title color-white pt-5" style="background: url('/images/bg-piece.png') center center / cover no-repeat">
        <div class="container">
            <h2 class="fs-32 pt-5 pb-3">Terms</h2>
        </div>
    </div>
    <div>
    <div>
        <div class="container">
            content
        </div>
    </div>
</main>
@include('homePage.footer')
</div>
</home-page>
@endsection