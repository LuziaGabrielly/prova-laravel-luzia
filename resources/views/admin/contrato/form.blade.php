<div class="form-group">
    <label for="tipo_contrato">Tipo</label>
    <input type="text" class="form-control" id="tipo_contrato" name="tipo_contrato" value="{{$item->tipo_contrato ?? ''}}">
   
</div>
<div class="form-group">
    <label for="envolvido1">Envolvido 1</label>
    <input type="text" class="form-control" id="envolvido1" name="envolvido1" value="{{$item->envolvido1 ?? ''}}">
</div>
<div class="form-group">
    <label for="envolvido2">Envolvido 2</label>
    <input type="text" class="form-control" id="envolvido2" name="envolvido2" value="{{$item->envolvido2 ?? ''}}">
</div>
<div class="form-group">
    <label for="data_certidao">Data da certidão</label>
    <input type="date" class="form-control-file" id="data_certidao" name="data_certidao" value="{{$item->data_certidao ?? ''}}">
</div>
<div class="form-group">
    <label for="valor">Valor</label>
    <input type="text" class="form-control" id="valor" name="valor" value="{{$item->valor ?? ''}}">
</div>
<div class="form-group">
    <label for="tabeliao">Tabelião</label>
    <input type="text" class="form-control" id="tabeliao" name="tabeliao" value="{{$item->tabeliao ?? ''}}">
</div>