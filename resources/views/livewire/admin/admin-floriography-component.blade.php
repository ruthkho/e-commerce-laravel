<div>
    <style>
        nav svg{
            height: 20px;
        }

        nav .hidden{
            display: block !important;
        }
    </style>

    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-4">
                                All Flower
                            </div>
                            <div class="col-md-4">
                                <a href="{{route('admin.addfloriography')}}" class="btn btn-success pull-right">Add New</a>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Search.. Try some keyword.." wire:model="searchTerm">
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Created Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($floriographies as $floriography)
                                    <tr>
                                        <td>{{$floriography->id}}</td>
                                        <td><img src="{{asset('assets/images/floriographies')}}/{{$floriography->image}}" width="60"></td>
                                        <td>{{$floriography->name}}</td>
                                        <td>{{$floriography->description}}</td>
                                        <td>{{$floriography->created_at}}</td>
                                        <td>

                                            <a href="{{route('admin.editfloriography2', ['floriography_slug'=>$floriography->slug])}}"><i class="fa fa-edit fa-2x text-info"></i></a>
                                            <a href="#" onclick="confirm('Are you sure you want to delete this floriography?') || event.stopImmediatePropagation()" style="margin-left: 10px;" wire:click.prevent="deleteFloriography({{$floriography->id}})"><i class="fa fa-times fa-2x text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$floriographies->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
