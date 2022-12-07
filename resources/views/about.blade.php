@extends('layouts.master')

@section('title','Giới thiệu')
@section('main')
<div class="container-fluid p-5 mt-5">
    <div class="jumbotron text-center">
        <h2>About Page</h2>
        <hr>
        <p class="lead">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas cum officiis, maiores eligendi corporis
            obcaecati, blanditiis, quod nisi minima sequi nam libero nihil. Perspiciatis impedit ab corporis laboriosam
            magni eius.
        </p>
    </div>
</div>
<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-6">
            <img src="https://demoda.vn/wp-content/uploads/2022/02/avatar-anime-cute.jpg" alt="" class="card-img">
        </div>
        <div class="col-lg-6">
            <h3>My name's Tran Lan Anh, or Tran LAnk...</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit odio repellat enim aspernatur ipsa
                dignissimos voluptatem pariatur inventore voluptates, nam natus consequatur? Distinctio nesciunt
                repudiandae asperiores perspiciatis in nemo reiciendis!</p>
            <em><a href="https://github.com/lankngok" class="text-decoration-none text-warning" target="_blank">View My
                    Profile On Github >>></a></em>
        </div>
    </div>
</div>
@stop()