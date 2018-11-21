<form method="post" id="formnuevafalla">
        {{ csrf_field() }}
        <div class="form-group col-sm-6">
            <label for="falla">Nombre de la Falla:</label>
            <input type="text" name="falla" id="falla" class="form-control" placeholder="Puerto HDMI">
            <br>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </form>