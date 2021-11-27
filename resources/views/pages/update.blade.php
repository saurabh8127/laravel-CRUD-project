@extends('layouts.default')

@section('content')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Update</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                                  
                              <form method="post" action="{{route('update')}}" >
                                @csrf
                                <input type="hidden" name="id" value={{$data['id']}} >
                                <div class="form-group">
                                  <label for="formGroupExampleInput">Name</label>
                                  <input type="text" name="name" value="{{$data['name']}}" class="form-control" id="formGroupExampleInput" placeholder="Enter name...">
                                </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Email address</label>
                                  <input type="email" value="{{$data['email']}}" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                  <label for="formGroupExampleInput2">Mobile Number</label>
                                  <input type="number" value="{{$data['mobile']}}" name="mobile" class="form-control" id="formGroupExampleInput2" placeholder="Enter moblie number...">
                                </div>
                                <div class="form-group">
                                  <label for="formGroupExampleInput2">City</label>
                                  <input type="text" name="city" value="{{$data['city']}}" class="form-control" id="formGroupExampleInput2" placeholder="Enter city...">
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </form>
                          </div>
                         </div>
                      </div>
                     </div>
                </main>
@endsection