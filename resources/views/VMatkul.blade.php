
@extends('adminDashboard')
@section('Content')


<a href="#" onclick="ModalAddMatkul();" class="btn btn-info mb-3"> + Add New Data</a>

<div class="table-responsive">
    <table class="table table-striped table-hover" border="1">
    <thead>
        <tr>
            <th scope="col">#</th>      
            <th scope="col">Kode</th>
            <th scope="col">Matakuliah</th>
            <th scope="col">Prodi</th>
            <th scope="col">Kelas</th>
            <th scope="col">Dosen</th>
            <th scope="col">Opsi</th>
        </tr>
    </thead>
        <tbody class="table-group-divider">
        @foreach($matkul as $index => $Get)
        <tr>
            <td scope="row">{{ $index + 1 }}</td>
            <td>{{ $Get->kd_matkul }}</td>
            <td>{{ $Get->matkul }}</td>
            <td>{{ $Get->prodi }}</td>
            <td>{{ $Get->kelas }}</td>
            <td>{{ $Get->dosen }}</td>
            <td >
                <a href="#" onclick="ModalEditMatkul(
                    '{{ $Get->kd_matkul }}',
                    '{{ $Get->matkul }}',
                    '{{ $Get->prodi }}',
                    '{{ $Get->kelas }}',
                    '{{ $Get->dosen }}'
                    )" class="btn btn-dark">Edit</a>
                |
                <a href="#" onclick="ModalHapusMatkul('{{ $Get->kd_matkul }}')" class="btn btn-danger">Delete</a>

            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

<form action="matkul/add" method="post">
    @csrf
<div class="modal fade" id="ModalAddMatkul" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" >Form Add Matkul</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="mb-3">
                <label  class="form-label">Kode Matakuliah</label>
                <input type="text" class="form-control" name="kd_matkul" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Nama Matakuliah</label>
                <input name="matkul" class="form-control" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Prodi</label>
                <select name="prodi" class="form-control" required>
                    <option selected>Pilih Prodi</option>
                    <option value="TI">Teknik Informatika</option>
                    <option value="SI">Sistem Informasi</option>
                    <option value="TEKIN">Teknologi Informasi</option>
                </select>
            </div>
            <div class="mb-3">
                <label  class="form-label">Kelas</label>
                <select name="kelas" class="form-control" required>
                    <option selected >Pilih Kelas</option>
                    <option value="A">Kelas A</option>
                    <option value="B">Kelas B</option>
                    <option value="C">Kelas C</option>
                </select>
            </div>
            <div class="mb-3">
                <label  class="form-label">Nama Dosen</label>
                <input name="dosen" class="form-control" required>
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

<form action="matkul/hapus" method="post">
    @csrf
<div class="modal fade" id="ModalHapusMatkul" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Delete</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
          <div class="modal-footer">
              <input type="hidden" name="kd_matkul">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <input type="submit" class="btn btn-danger" name="hapus" value="Hapus">
          </div>
      </div>
    </div>
  </div>
</form>

<form action="matkul/edit" method="post">
    @csrf
<div class="modal fade" id="ModalEditMatkul" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" >Form Edit</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                    <label  class="form-label">Kode Matakuliah</label>
                    <input type="text" class="form-control" name="kd_matkul" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Nama Matakuliah</label>
                <input name="matkul" class="form-control" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Prodi</label>
                <select name="prodi" class="form-control" required>
                    <option selected>Pilih Prodi</option>
                    <option value="TI">Teknik Informatika</option>
                    <option value="SI">Sistem Informasi</option>
                    <option value="TEKIN">Teknologi Informasi</option>
                </select>
            </div>
            <div class="mb-3">
                <label  class="form-label">Kelas</label>
                <select name="kelas" class="form-control" required>
                    <option selected >Pilih Kelas</option>
                    <option value="A">Kelas A</option>
                    <option value="B">Kelas B</option>
                    <option value="C">Kelas C</option>
                </select>
            </div>
            <div class="mb-3">
                <label  class="form-label">Nama Dosen</label>
                <input name="dosen" class="form-control" required>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <input type="submit" class="btn btn-dark" name="edit" value="Edit">
        </div>
        </div>
        </div>
    </div>
</div>
</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
    function ModalAddMatkul() {
      $('[name="matkul"]').val('');
      $('[name="prodi"]').val('');
      $('[name="kelas"]').val('');
      $('[name="dosen"]').val('');
      $('#ModalAddMatkul').modal('show');
    }    
    function ModalHapusMatkul(kd_matkul) {
    $('[name="kd_matkul"]').val(kd_matkul);
    $('#ModalHapusMatkul').modal('show');
    }

    function ModalEditMatkul (id,matkul,prodi,kelas,dosen) {
      $('[name="kd_matkul"]').val(id);
      $('[name="matkul"]').val(matkul);
      $('[name="prodi"]').val(prodi);
      $('[name="kelas"]').val(kelas);
      $('[name="dosen"]').val(dosen);
      $('#ModalEditMatkul').modal('show');
      console.log(ModalEditMatkul)
    }
</script>
    
@endsection