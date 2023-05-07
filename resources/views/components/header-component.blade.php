<div class="container-fluid">
    <div class="row p-4">
        <div class="col-lg-4 col-4">
            <a href="#" class="btn btn-danger shadow-danger">ورود | ثبت نام</a>
        </div>

        <!--    search bar start-->
        <div class="col-lg-8">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-6">
                    <form>
                        <input type="text" class="form-control text-end shadow radius-all border-0 p-2 text-secondary w-75"  name="search" placeholder="جستجو">
                    </form>
                </div>

                <div class="col-2 text-start">
                    <h4 class="text-warning"><b>{{ env("APP_NAME") }}</b></h4>
                </div>

            </div>
        </div>
        <!--    search bar end-->

    </div>


    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                    @foreach($header_categories as $category)
                        <li class="nav-item me-5">
                            <a class="nav-link active" aria-current="page" href="#">{{ $category->name }}</a>
                        </li>
                    @endforeach

                </ul>

            </div>
        </div>
    </nav>

</div>
