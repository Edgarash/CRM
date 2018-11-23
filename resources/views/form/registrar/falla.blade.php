<form method="POST" id="formnuevafalla">
    {{ csrf_field() }}
    <input type="hidden" name="R">
    <div class="form-group col-sm-6">
        <label for="falla">Nombre de la Falla:</label>
        <input type="text" name="falla" id="falla" class="form-control" placeholder="Puerto HDMI">
        <br>
        <button type="submit" class="btn btn-primary pull-right">Registrar</button>
    </div>
</form>
<script src="{{asset('/assets/scripts/forms/registrar.falla.js')}}"></script>