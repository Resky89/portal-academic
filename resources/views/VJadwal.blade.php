
@extends('adminDashboard')
@section('Content')


<a href="#" onclick="ModalAddJadwal();" class="btn btn-info mb-3"> + Add New Data</a>

<div class="table-responsive">
    <table class="table table-striped table-hover" border="1">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">KD Matkul</th>
            <th scope="col">Waktu</th>
            <th scope="col">Opsi</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        @foreach($jadwal_kuliah as $index => $Get)
        <tr>
            <th scope="row" >{{ $index + 1 }}</th>
            <td>{{ $Get->kd_matkul }}</td>
            <td>{{ $Get->waktu }}</td>
            <td>
                <a href="#" onclick="ModalEditJadwal(
                    '{{ $Get->id_jadwal }}',
                    '{{ $Get->kd_matkul }}',
                    '{{ $Get->waktu }}'
                    )" class="btn btn-dark">Edit</a>
                |
                <a href="#" onclick="ModalHapusJadwal({{ $Get->id_jadwal }})" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

    <form action="jadwal/add" method="post">
        @csrf
    <div class="modal fade" id="ModalAddJadwal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" >Form Add</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="mb-3">
                <label  class="form-label">Kode Matkul</label>
                <input type="text" class="form-control" name="kd_matkul" required>
            </div>
                <div class="mb-3">
                    <label  class="form-label">Waktu</label>
                    <select name="waktu" class="form-control" required>
                        <option selected >Pilih Waktu</option>
                        <option value="09.00-12.00">09.00-12.00</option>
                        <option value="09.00-12.00">09.00-11.00</option>
                        <option value="10.00-12.00">10.00-12.00</option>
                        <option value="14.00-16.00">14.00-16.00</option>
                        <option value="14.00-17.00">14.00-17.00</option>
                        <option value="18.30-21.00">18.30-21.00</option>
                        <option value="18.30-21.00">18.30-20.30</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
            </div>
            </div>
        </div>
    </div>
    </form>
</div>

<form action="jadwal/hapus" method="post">
    @csrf
<div class="modal fade" id="ModalHapusJadwal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Delete</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
          <div class="modal-footer">
              <input type="hidden" name="id_jadwal">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <input type="submit" class="btn btn-danger" name="hapus" value="Hapus">
          </div>
      </div>
    </div>
  </div>
</form>

<form action="jadwal/edit" method="post">
    @csrf
<div class="modal fade" id="ModalEditJadwal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" >Form Edit</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label  class="form-label">ID Jadwal</label>
                <input type="text" class="form-control" name="id_jadwal" readonly>
            </div>
            <div class="mb-3">
                <label  class="form-label">Kode Matkul</label>
                <input type="text" class="form-control" name="kd_matkul" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Waktu</label>
                <select name="waktu" class="form-control" required>
                    <option >Pilih Waktu</option>
                    <option value="09.00-12.00">09.00-12.00</option>
                    <option value="09.00-12.00">09.00-11.00</option>
                    <option value="10.00-12.00">10.00-12.00</option>
                    <option value="14.00-16.00">14.00-16.00</option>
                    <option value="14.00-17.00">14.00-17.00</option>
                    <option value="18.30-21.00">18.30-21.00</option>
                    <option value="18.30-20.30">18.30-20.30</option>
                </select>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <input type="submit" class="btn btn-dark" name="edit" value="Edit">
        </div>
        </div>
    </div>
</div>
</form>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
    function ModalAddJadwal() {
      $('[name="kd_matkul"]').val('');
      $('[name="waktu"]').val('');
      $('#ModalAddJadwal').modal('show');
    }    
    function ModalHapusJadwal ($id) {
      $('[name="id_jadwal"]').val($id);
      $('#ModalHapusJadwal').modal('show');
    } 
    function ModalEditJadwal (id,kd_matkul,waktu) {
      $('[name="id_jadwal"]').val(id);
      $('[name="kd_matkul"]').val(kd_matkul);
      $('[name="waktu"]').val(waktu);
      $('#ModalEditJadwal').modal('show');
    }
</script>
    
@endsection