@extends('template.base')
@section('content')
    <h1>Nota</h1>
    <div class="card">
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group mb-3">
                    <label for="start" class="form-lable">Mulai dari : </label>
                    <input type="date" name="start" id="start" class="form-control">
                </div>
                <div class="form-group">
                    <label for="end" class="form-lable">Sampai : </label>
                    <input type="date" name="end" id="end"class="form-control">
                </div>
            </form>
        </div>
    </div>
    <div class="card mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>

                </tr>
            </thead>
        </table>
    </div>
@endsection
