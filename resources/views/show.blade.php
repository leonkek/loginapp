@extends('layout')

@section('content')

<style>
  .push-top {
    margin-top: 50px;
  }
</style>

<div class="push-top">
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>Name</td>
          <td>Email</td>
          <td>Phone</td>
          <td>Password</td>
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->phone}}</td>
            <td>{{$student->password}}</td>
            <td class="text-center">
                <a href="{{ route('students.edit', $student->id)}}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('students.destroy', $student->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"" type="submit">Delete</button>
                  </form>
            </td>
        </tr>
    </tbody>
  </table>
<div>
@endsection