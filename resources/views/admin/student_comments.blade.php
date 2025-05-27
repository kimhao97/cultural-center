<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Trezo - Laravel Admin Dashboard Template</title>
        <!-- Styles -->
        @include('admin.partials.styles')
    </head>
    <body class="boxed-size">
        @include('admin.partials.preloader')
        @include('admin.partials.sidebar')

        <div class="container-fluid">
			<div class="main-content d-flex flex-column">
				<!-- Start Header Area -->
				@include('admin.partials.header')
				<!-- End Header Area -->

				<div class="main-content-container overflow-hidden">
                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">
                        <h3 class="mb-0">To Do List</h3>
                    </div>

                    <div class="card bg-white border-0 rounded-3 mb-4">
                        <div class="card-body p-0">
                            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 p-4">
                                <form class="position-relative table-src-form me-0">
                                    <input type="text" class="form-control" placeholder="Search here">
                                    <i class="material-symbols-outlined position-absolute top-50 start-0 translate-middle-y">search</i>
                                </form>
                                <button class="btn btn-outline-primary py-1 px-2 px-sm-4 fs-14 fw-medium rounded-3 hover-bg" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddComment" aria-controls="offcanvasAddComment">
                                    <span class="py-sm-1 d-block">
                                        <i class="ri-add-line d-none d-sm-inline-block"></i>
                                        <span>Add New Comment</span>
                                    </span>
                                </button>
                            </div>

                            <div class="default-table-area style-two default-table-width">
                                <div class="table-responsive">
                                    <table class="table align-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault7">
                                                        <label class="position-relative top-2 ms-1" for="flexCheckDefault7">ID</label>
                                                    </div>
                                                </th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Comment</th>
                                                <th scope="col">Avatar</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        @foreach ($comments as $comment)
                                        <tbody>
                                            <tr>
                                                <td class="text-body">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault12">
                                                        <label class="position-relative top-2 ms-1" for="flexCheckDefault12">#854</label>
                                                    </div>
                                                </td>
                                                <td>{{ $comment->name }}</td>
                                                <td>{{ $comment->comment }}</td>
                                                <td><img src="{{ $comment->avatar }}" alt="Avatar" class="rounded-circle" style="width: 50px; height: 50px;"></td>
                                                <td class="text-body">({{ $comment->created_at->format('d M Y') }})</td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                            <i class="material-symbols-outlined fs-16 text-body">edit</i>
                                                        </button>
                                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                            <i class="material-symbols-outlined fs-16 text-danger">delete</i>
                                                        </button>
                                                    </div>
                                                </td> 
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                                <div class="p-4 pt-lg-4">
                                    <div class="d-flex justify-content-center justify-content-sm-between align-items-center text-center flex-wrap gap-2 showing-wrap">
                                        <span class="fs-12 fw-medium">Showing {{ $comments->count() }} of {{ $comments->total() }} Results</span>
        
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination mb-0 justify-content-center">
                                                <li class="page-item">
                                                    <a class="page-link icon" href="to-do-list" aria-label="Previous">
                                                        <i class="material-symbols-outlined">keyboard_arrow_left</i>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link active" href="to-do-list">1</a></li>
                                                <li class="page-item"><a class="page-link" href="to-do-list">2</a></li>
                                                <li class="page-item"><a class="page-link" href="to-do-list">3</a></li>
                                                <li class="page-item"><a class="page-link" href="to-do-list">4</a></li>
                                                <li class="page-item">
                                                    <a class="page-link icon" href="to-do-list" aria-label="Next">
                                                        <i class="material-symbols-outlined">keyboard_arrow_right</i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

				<div class="flex-grow-1"></div>

				<!-- Start Footer Area -->
				@include('admin.partials.footer')
				<!-- End Footer Area -->
			</div>
		</div>

        
        @include('admin.partials.add_comment')
        @include('admin.partials.scripts')
    </body>
</html>
