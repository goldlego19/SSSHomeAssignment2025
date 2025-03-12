<div class="row">
    
        <div class="col">
                
                    <select id="filter_college_id" class="form-select">
                        @if($colleges->count())
                            @foreach($colleges as $id=>$name)
                                <option {{$id == request('college_id')? 'selected':''}} value="{{$id}}">{{$name}}</option>
                            @endforeach
                        @endif
                    </select>
                
            </div>
        </div>
            