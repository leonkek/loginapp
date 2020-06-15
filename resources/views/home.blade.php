@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in {{ Auth::user()->name }}!
                </div>
            </div>
			<div class="container">

                <table class="table table-striped">
					<thead>
						<tr>
							<th>Id</th>
							<th>Name</th>
							<th>Email</th>
						</tr>
					</thead>
					<tbody>
                    
						<tr>
							<td>{{ Auth::user()->id }}</td>
							<td>{{ Auth::user()->name }}</td>
							<td>{{ Auth::user()->email }}</td>
						</tr>
					
					</tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
