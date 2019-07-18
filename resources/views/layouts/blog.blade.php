@extends('layouts.app')

@section('content')
    <main class="py-4 container">

        <div class="offset-2 col-md-8">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">Write something</div>
                            <div class="card-body text-center">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <textarea type="email" class="form-control" id="title"
                                                  placeholder="How are you feeelig?"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="float-right">
                                            <button type="submit" class="btn btn-default btn-success">Post</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container py-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">Jack posted</div>
                            <div class="card-body text-center">
                                <h1>Good morning all</h1>
                            </div>
                            <div class="card-footer">

                                <div class="col-md-12">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            Pooja: Very good morning
                                        </li>
                                        <li class="list-group-item">
                                            Giri: morning
                                        </li>
                                        <ul>
                                        </ul>
                                    </ul>
                                </div>
                                <div class="col-md-12 py-4">

                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <textarea type="email" class="form-control" rows="1" id="title"
                                                      placeholder="Comment"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <div class="float-right">
                                                <button type="submit" class="btn btn-default btn-success">Comment
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container py-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">Veena posted</div>
                                <div class="card-body text-center">
                                    <h1>I got married!</h1>
                                </div>
                                <div class="card-footer">

                                    <div class="col-md-12">
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                Anil: Congrats
                                            </li>
                                            <li class="list-group-item">
                                                George: nice
                                            </li>
                                            <ul>
                                            </ul>
                                        </ul>
                                    </div>
                                    <div class="col-md-12 py-4">

                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <textarea type="email" class="form-control" rows="1" id="title"
                                                          placeholder="Comment"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <div class="float-right">
                                                    <button type="submit" class="btn btn-default btn-success">Comment
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection