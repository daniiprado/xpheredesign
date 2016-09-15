<div class="container clearfix">
 {!! Form:: hidden('register', csrf_token(), ['id' => 'token', 'class' => 'form-control']) !!}
  <div class="col_one_third nobottommargin">

    <div class="well well-lg nobottommargin">

        <h3>Ingrese a su cuenta</h3>

        <div class="col_full">
          {!! Form:: label('login-username', 'Correo Electrónico:') !!}
          {!! Form:: email('email', null, ['id' => 'login-username', 'class' => 'form-control']) !!}
        </div>

        <div class="col_full">
          {!! Form:: label('login-form-password', 'Contraseña:') !!}
          {!! Form:: password('password', ['id' => 'login-password', 'class' => 'form-control']) !!}
        </div>

        <div class="col_full nobottommargin">
      <button class="button button-3d button-black nomargin" id="btn-login" name="register-form-submit" value="register">Register Now</button>
          <a href="#" class="social-icon si-facebook">
          	<i class="icon-facebook"></i>
          	<i class="icon-facebook"></i>
          </a>
          <a href="#" class="social-icon si-google" title="Google">
							<i class="icon-google"></i>
							<i class="icon-google"></i>
					</a>
            <div class="col_full">
              {!! link_to('#', $title = '¿Se te olvidó tu contraseña?', $attributes = array('id' =>'registro', 'class' => 'fright'), $secure = null) !!}
            </div>
        </div>

    </div>
  </div>

  <div class="col_two_third col_last nobottommargin">


    <h3>Don't have an Account? Register Now.</h3>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, vel odio non dicta provident sint ex autem mollitia dolorem illum repellat ipsum aliquid illo similique sapiente fugiat minus ratione.</p>

      <div class="col_half">
        {!! Form:: label('register-form-name', 'Nombre:') !!}
        {!! Form:: text('register-form-name', null, ['id' => 'register-name', 'class' => 'form-control']) !!}
      </div>

      <div class="col_half col_last">
        {!! Form:: label('register-form-lastname', 'Apellido:') !!}
        {!! Form:: text('register-form-lastname', null, ['id' => 'register-lastname', 'class' => 'form-control']) !!}
      </div>

      <div class="clear"></div>

      <div class="col_half">
        {!! Form:: label('register-form-email', 'Correo Electrónico:') !!}
        {!! Form:: email('email', null, ['id' => 'register-email', 'class' => 'form-control']) !!}
      </div>

      <div class="col_half  col_last">
        <label for="register-form-username">Nombre de Usuario:</label>
        <input type="text" id="register-form-username" name="register-form-username" value="" class="form-control" />
      </div>

      <div class="clear"></div>

      <div class="col_half">
        {!! Form:: label('register-form-password', 'Contraseña:') !!}
        {!! Form:: password('register-form-password', ['id' => 'register-password', 'class' => 'form-control']) !!}
      </div>

      <div class="col_half col_last">
        {!! Form:: label('register-form-repassword', 'Repetir Contraseña:') !!}
        {!! Form:: password('register-form-repassword', ['id' => 'register-repassword', 'class' => 'form-control']) !!}
      </div>

      <div class="clear"></div>

      <div class="col_full nobottommargin">
        <button class="button button-3d button-black nomargin" id="btn-register" name="register-form-submit" value="register">Register Now</button>
      </div>


  </div>

</div>
