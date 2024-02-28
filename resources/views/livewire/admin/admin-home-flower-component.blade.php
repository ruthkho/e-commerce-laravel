<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Manage Home Flowers
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent="updateHomeFlower">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Choose Flowers</label>
                                <div class="col-md-4"  wire:ignore>
                                    <select class="sel_flowers form-control" name="flowers[]" multiple="multiple" wire:model="selected_flowers">
                                        @foreach ($flowers as $flower)
                                            <option value="{{$flower->id}}">{{$flower->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">No of Products</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control input-md" wire:model="numberofproducts"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(document).ready(function(){
            $('.sel_flowers').select2();
            $('.sel_flowers').on('change',function(e){
                var data = $('.sel_flowers').select2("val");
                @this.set('selected_flowers',data);
            })
        });
    </script>
@endpush
