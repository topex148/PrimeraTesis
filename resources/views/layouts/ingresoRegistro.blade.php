<!-- -->
			<section>
				<div class="container">

					<div class="row">



              {{csrf_field()}}

            <!-- REGISTER -->
           <div class="col-md-6 offset-md-3">


						 @if (count($errors)>0)
             <!-- ALERT -->
             <div class="alert alert-mini alert-danger mb-30">
               <strong>Oh!</strong> Contraseñas no coinciden!
             </div><!-- /ALERT -->
						 @endif


             <div class="box-static box-transparent box-bordered p-30">

               <div class="box-title mb-30">
                 <h2 class="fs-20">¿Aun no te encuentrar registrado?</h2>
               </div>

               <form class="m-0 sky-form" action="#" method="post" enctype="multipart/form-data">
                 <fieldset>

                   <div class="row">

                     <div class="col-md-6 col-sm-6">
                       <label>Nombre</label>
                       <label class="input mb-10">
                         <i class="ico-append fa fa-user"></i>
                         <input required="" type="text" value="{{old('name')}}" name="name">
                         <b class="tooltip tooltip-bottom-right">Tu Nombre</b>
                       </label>
                     </div>

                     <div class="col-md-6 col-sm-6">
                       <label for="register:email">Email *</label>
                       <label class="input mb-10">
                         <i class="ico-append fa fa-envelope"></i>
                         <input required="" type="text" value="{{old('email')}}" name="email">
                         <b class="tooltip tooltip-bottom-right">Tu Email</b>
                       </label>
                     </div>

                   </div>


                   <div class="row">

                     <div class="col-md-6 col-sm-6">
                       <label for="register:pass1">Contraseña *</label>
                       <label class="input mb-10">
                         <i class="ico-append fa fa-lock"></i>
                         <input required="" type="password" class="err" value="{{old('password')}}" name="password">
                         <b class="tooltip tooltip-bottom-right">Min. 6 caracteres</b>
                       </label>
                     </div>

                     <!--<div class="col-md-6 col-sm-6">
                       <label for="register:pass2">Repetir Contraseña *</label>
                       <label class="input mb-10">
                         <i class="ico-append fa fa-lock"></i>
                         <input required="" type="password" class="err" value="{{old('password')}}" name="password">
                         <b class="tooltip tooltip-bottom-right">Coloque nuevamente la contraseña</b>
                       </label>
                     </div>-->

                   </div>

                   <hr />

                   </fieldset>

                 <div class="row">
                   <div class="col-md-12">
                     <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> REGISTRAR</button>
                   </div>
                 </div>

               </form>

             </div>

           </div>
           <!-- /REGISTER -->



					</div>

				</div>
			</section>
			<!-- / -->
