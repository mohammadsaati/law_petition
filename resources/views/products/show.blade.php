@extends("layouts.layout")
@section("title" , $data["title"])

@section("content")
<br/><br/><br/>
    <div class="row mx-5 p-4 rounded-3 shadow narrow-border">

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
            <p>
                قیمیت : {{ number_format($data["product"]->price) }}
            </p>
            <br/>
            <a href="#" class="btn btn-outline-success w-25">
                خرید<i class="bi bi-currency-dollar"></i>
            </a>
        </div>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-12" dir="rtl">
            <h2>{{ $data["product"]->content->title }}</h2>
            <br/>
            <small class="text-secondary">
                <i class="bi bi-tags text-dark"></i>
                {{ $data["product"]->content->category->name }}
            </small>
        </div>

    </div>

    <div class="row mx-5 p-4">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12"></div>

        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-12 narrow-border p-3" dir="rtl">
            <p>{{ $data["product"]->content->description }}</p>
        </div>

    </div>
@endsection
