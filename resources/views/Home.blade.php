@extends("layouts.layout")
@section("title" , $data["title"])

@section("content")
    <div class="container mt-4">

        <div class="row">
            <div class="col-2"></div>
            <div class="col-6" dir="rtl">
                <div class="row">

                    @foreach($data["new_products"] as $product)
                        <div class="col-6">
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
                                        <a href="#" class="btn btn-success btn-sm">
                                            <i class="bi bi-bag-check-fill"></i>
                                            خرید
                                        </a>
                                    </div>

                                </div>
                            </div>

                        </div>
                    @endforeach

                </div>
            </div>
            <div class="col-4">
                <img src="svg/news.svg"/>
            </div>
        </div>


        <!--    circular categories start-->
        <div class="row flex justify-content-between align-items-center">
            <div class="col-xl-3 col-lg-3 col-sm-3 align-items-center">
                <div class="w-50 bg-secondary-subtle rounded-circle p-3">
                    <img src="svg/judje.png" class="img-fluid">
                </div>
                <h5 class="mt-4 text-secondary">قرار داد ملکی</h5>
            </div>

            <div class="col-xl-3 col-lg-3 col-sm-3 align-items-center">
                <div class="w-50 bg-secondary-subtle rounded-circle p-3">
                    <img src="svg/divorce.png" class="img-fluid">
                </div>
                <h5 class="mt-4 text-secondary">خانواده</h5>
            </div>

            <div class="col-xl-3 col-lg-3 col-sm-3 align-items-center">
                <div class="w-50 bg-secondary-subtle rounded-circle p-3">
                    <img src="svg/img_191495.png" class="img-fluid">
                </div>
                <h5 class="mt-4 text-secondary">معاملات تجاری</h5>
            </div>

            <div class="col-xl-3 col-lg-3 col-sm-3 align-items-center">
                <div class="w-50 bg-secondary-subtle rounded-circle p-3">
                    <img src="svg/dollar.png" class="img-fluid">
                </div>
                <h5 class="mt-4 text-secondary">کسب وکار</h5>
            </div>
        </div>
        <!--    circular categories end-->

        <br/><br>
{{--        web site news start --}}
        <div class="border shadow rounded-3" dir="rtl">
            <div class="section-title p-3 bg-warning w-25">
                <h5 class="text-end fw-bolder">اخبار سایت</h5>
            </div>
            <br/>
            <div class="row p-3">

                <div class="col-xl-3 col-lg-3 col-sm-6 col-12 mb-3">
                    <div class="card">
                        <img src="images/section.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#" class="text-dark">
                                <h5 class="card-title">بیا بریم کوه کدوم کوه همون کوهی که</h5>
                            </a>
                            <p class="card-text small text-secondary">در این مورددر این مورددر این مورددر این مورددر این مورددر این مورددر این مورددر این مورد....</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6 col-12 mb-3">
                    <div class="card">
                        <img src="images/section.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#" class="text-dark">
                                <h5 class="card-title">بیا بریم کوه کدوم کوه همون کوهی که</h5>
                            </a>
                            <p class="card-text small text-secondary">در این مورددر این مورددر این مورددر این مورددر این مورددر این مورددر این مورددر این مورد....</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6 col-12 mb-3">
                    <div class="card">
                        <img src="images/section.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#" class="text-dark">
                                <h5 class="card-title">بیا بریم کوه کدوم کوه همون کوهی که</h5>
                            </a>
                            <p class="card-text small text-secondary">در این مورددر این مورددر این مورددر این مورددر این مورددر این مورددر این مورددر این مورد....</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-sm-6 col-12 mb-3">
                    <div class="card">
                        <img src="images/section.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#" class="text-dark">
                                <h5 class="card-title">بیا بریم کوه کدوم کوه همون کوهی که</h5>
                            </a>
                            <p class="card-text small text-secondary">در این مورددر این مورددر این مورددر این مورددر این مورددر این مورددر این مورددر این مورد....</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        {{--        web site news end --}}

    </div>
@endsection
