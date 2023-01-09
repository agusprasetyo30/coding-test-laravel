<div class="modal fade show" id="modal_mahasiswa" style="display: none; padding-right: 17px;" aria-modal="true" role="dialog">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      	<div class="modal-header">
			<h5 class="modal-title">Mahasiswa</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
            <input type="hidden" name="uuid" id="uuid">

            <div class="row">
         		<div class="col-md-12 col-sm-12 col-lg-12">
						<label class="form-control-label">
                  	Nama
						</label>

						<input type="text" id="nama" class="form-control">
					</div>
            </div>
            <div class="row">
         		<div class="col-md-12 col-sm-12 col-lg-12">
						<label class="form-control-label">
                  	Tempat
						</label>

						<input type="text" id="tempat" class="form-control">
					</div>
            </div>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-lg-12">
						<label class="form-control-label">
							Tanggal Lahir
						</label>
						
						<input type="date" id="tanggal_lahir" class="form-control">
					</div>
				</div>
				<div class="row">
         		<div class="col-md-12 col-sm-12 col-lg-12">
						<label class="form-control-label">
                  	Hobi
						</label>

						<input type="text" id="hobi" class="form-control">
					</div>
            </div>
				<div class="row">
         		<div class="col-md-12 col-sm-12 col-lg-12">
						<label class="form-control-label">
                  	UKT
						</label>

						<input type="text" id="ukt" class="form-control">
					</div>
            </div>
			</div>
			<div class="modal-footer">
				<div class="flex">
					<div class="action-buttons">
						<button type="button" id="save_button" class="btn btn-sm btn-success add_mahasiswa">
							Save
						</button>

						<button type="button"  class="btn btn-sm btn-warning clse"  data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
      </div>
      <!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>