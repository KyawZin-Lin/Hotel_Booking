@extends('hotel.layouts.master')
@section('content')
    {{-- <div class="container-fluid pt-4 px-4">
    <div class="card bg-secondary">
        <div class="card-header"></div>
        <div class="card-body"></div>
        <div class="card-footer"></div>
    </div>
</div> --}}
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            {{-- <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Create From</h6>
                <form>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
            </div>
        </div> --}}
            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Create Form</h6>
                    <form action="{{url('hotels/room-types')}}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="col-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="name" id="floatingInput"
                                        placeholder="Enter Your Name">
                                    <label for="floatingInput">Name</label>
                                </div>

                            </div>
                            <div class="col-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="price" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword">Price</label>
                                </div>
                            </div>
                            <div class="col-3">
                                <button type="submit" class="btn btn-danger">Create</button>
                            </div>
                        </div>
                    </form>
                    {{-- <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect"
                        aria-label="Floating label select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <label for="floatingSelect">Works with selects</label>
                </div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here"
                        id="floatingTextarea" style="height: 150px;"></textarea>
                    <label for="floatingTextarea">Comments</label>
                </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
