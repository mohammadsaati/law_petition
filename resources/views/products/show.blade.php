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

    <div class="container-fluid">
        <div class="row mx-5 p-4">
            {{--sidebar start--}}
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 px-4">
                <div class="row">
                    @foreach($data["related_contents"] as $content)
                        <div class="col-12 shadow narrow-border rounded-3 m-2">
                            <div class="d-flex justify-content-between align-items-start py-2">
                                <div class="w-100 mx-2" dir="rtl">
                                    <a href="google.com">
                                        <h5>{{ $content->title }}</h5>
                                    </a>
                                    <small class="text-secondary">
                                        {{ str($content->description)->words(10  ,"....") }}
                                    </small>
                                </div>
                                <img src="{{ create_storage_image($content->image , "products") }}"  class="img-fluid w-50 rounded-3"/>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{--sidebar end--}}

            <div class="col-xl-9 col-lg-9 col-md-6 col-sm-6 col-12" dir="rtl">
                <div class="col-12 narrow-border p-3">
                    <p>{{ $data["product"]->content->description }}</p>
                </div>
            </div>

        </div>

{{--        related products --}}
        <div class="row mx-5" dir="rtl">
            @foreach($data["related_products"] as $product)
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="text-box mb-4" dir="rtl">
                        <h5>{{ $product->content->title }}</h5>
                        <div class="row justify-content-between">
                            <div class="col-4">
                                <small>
                                    <p class="text-secondary mt-3 small">
                                        <i class="bi bi-tags text-dark"></i>
                                        {{ $product->content->category->name }}
                                    </p>
                                </small>
                            </div>

                            <div class="col-4">
                                <small>
                                    <p class="text-secondary mt-3 small">
                                        <i class="bi bi-currency-dollar text-dark"></i>
                                        {{ number_format( $product->price ) }}تومان
                                    </p>
                                </small>
                            </div>

                            <div class="col-4 mt-3">
                                <a href="{{ route('product.show' , $product->code) }}" class="btn btn-success btn-sm">
                                    <i class="bi bi-bag-check-fill"></i>
                                    خرید
                                </a>
                            </div>

                        </div>
                    </div>

                </div>
            @endforeach
        </div>
{{--        related products --}}

    </div>
@endsection
