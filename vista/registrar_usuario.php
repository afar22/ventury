<div class="container is-fluid mb-6">
    <h1 class="title">Registrar usuario</h1>
</div>
<div class="container pb-6 pt-6">

    <div class="form-rest mb-6 mt-6"></div>

    <form action="./control/usuario_controlador.php" method="POST" class="formularioAjax" autocomplete="off">
        <div class="columns">
            <div class="column">
                <div class="control">
                    <label>Nombres Usuario</label>
                    <input class="input" type="text" name="usuario_nombre" pattern="[A-Za-z\s]{3,40}" maxlength="40" required>
                </div>
            </div>
            <div class="column">
                <div class="control">
                    <label>Cedula</label>
                    <input class="input" type="text" name="cedula" pattern="\d{3,40}" maxlength="40" required>
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="control">
                    <label>Rol
                        <div class="select is-rounded">
                            <select name="rol" required>
                                <option value="" disabled selected>Selecciona un rol</option>
                                <option value="Administrador">Administrador</option>
                                <option value="Secretaria">Secretaria</option>
                                <option value="Operario">Operario</option>
                            </select>
                        </div>
                    </label>
                </div>
            </div>
            <div class="column">
                <div class="control">
                    <label>Email</label>
                    <input class="input" type="email" name="email" maxlength="70" required>
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="control">
                    <label>Clave</label>
                    <input class="input" type="password" name="password" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required>
                </div>
            </div>
            <div class="column">
                <div class="control">
                    <label>Repetir clave</label>
                    <input class="input" type="password" name="password_2" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required>
                </div>
            </div>
        </div>
        <p class="has-text-centered">
            <button type="submit" class="button is-info is-rounded">Guardar</button>
        </p>
    </form>
</div>