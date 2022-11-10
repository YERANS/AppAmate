
<div id="accordion">
    
        @foreach ($quesions as $key => $item)
            <div class="card mt-3">
                <div class="card-header" id="headingOne{{$key+1}}">
                <h5 class="mb-0">
                    <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne{{$key+1}}" aria-expanded="true" aria-controls="collapseOne{{$key+1}}">
                    Pregunta #{{$key+1}}
                    </button>
                </h5>
                </div>
                <div id="collapseOne{{$key+1}}" class="collapse" aria-labelledby="headingOne{{$key+1}}" data-parent="#accordion">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <input type="hidden" name="id_ask[]" value="{{$item->id}}">
                            <h3>¿{{$item->ask}}?</h3>
                            
                        </div>
                        <div class="col-md-6 offset-md-3 ">
                            <div class="form-group row">
                                <div class="col-sm-6 ">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="optionsRadios{{$key+1}}" id="optionsRadios1{{$key+1}}" value="1" required>
                                            Si
                                        <i class="input-helper"></i></label>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="optionsRadios{{$key+1}}" id="optionsRadios2{{$key+2}}" value="0" required>
                                            No
                                        <i class="input-helper"></i></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                </div>
            </div>
        @endforeach
        <div class="row">
            <div class="col-sm-12 mt-3 text-center">
                <button type="submit" class="btn btn-primary me-2">Guardar</button>
            </div>
        </div>
    
</div>
