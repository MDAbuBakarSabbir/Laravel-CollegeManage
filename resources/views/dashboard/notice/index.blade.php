@extends('layouts.dashboard')
@section('content')
<x-breadcum title="Notice"></x-breadcum>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Notice</h4>
                    <a href="{{route('notice.create')}}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add Notice</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Notice Date</th>
                            <th scope="col">Notice</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            @forelse ($notices as $notice)
                            <th scope="row">#</th>
                            <td>{{$notice->title}}</td>
                            <td>{{$notice->created_at}}</td>
                            <td>{{$notice->image}}</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash text-danger"></i>
                            </td>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-danger text-center">Notice not found!!</td>
                                </tr>
                            @endforelse

                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection

