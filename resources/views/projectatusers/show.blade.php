@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Settings</div>

                <div class="card-body">
					
					<div class="page-header">
						<h1>Projectatusers / Show #{{$projectatuser->id}}</h1>
						<form action="{{ route('projectatusers.destroy', $projectatuser->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
							<input type="hidden" name="_method" value="DELETE">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="btn-group pull-right" role="group" aria-label="...">
								<a class="btn btn-warning btn-group" role="group" href="{{ route('projectatusers.edit', $projectatuser->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
								<button type="submit" class="btn btn-danger">Delete <i class="glyphicon glyphicon-trash"></i></button>
							</div>
						</form>
					</div>
					
					<div class="row">
						<div class="col-md-12">

							<form action="#">
								<div class="form-group">
									<label for="nome">ID</label>
									<p class="form-control-static"></p>
								</div>
								<div class="form-group">
									 <label for="title">プロジェクト名</label>
									 <p class="form-control-static">{{$projectatuser->name}}</p>
								</div>
							</form>

							<a class="btn btn-link" href="{{ route('projectatusers.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection





