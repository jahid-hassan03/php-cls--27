@extends('master')

@section('titile')
    Add student
@endsection

@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header text-center">Student Information </div>
                        <div class="card-body">
                            <h4 class="text-success text-center">{{Session::get('message')}}</h4>
                            <form action="{{route('new-student')}}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">mobile</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="mobile"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success" value="create new student"/>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
