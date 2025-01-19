
@extends('dosenDashboard')
@section('Content')


<a href="#" onclick="ModalAddNilai();" class="btn btn-info mb-3"> + Add New Data</a>

<div class="table-responsive">
    <table class="table table-striped table-hover" border="1">
    <thead>
        <tr>
            <th scope="col">#</th>      
            <th scope="col">Nama Mahasiswa</th`>
            <th scope="col">Kode Matkul</th>
            <th scope="col">UTS</th>
            <th scope="col">UAS</th>
            <th scope="col">Kehadiran</th>
            <th scope="col">Keaktifan</th>
            <th scope="col">Tugas</th>
            <th scope="col">SKS</th>
            <th scope="col">Opsi</th>
        </tr>
    </thead>
        <tbody class="table-group-divider">
        @foreach($nilai as $index => $Get)
        <tr>
            <td scope="row">{{ $index + 1 }}</td>
            <td>{{ $Get->nama_mhs }}</td>
            <td>{{ $Get->kd_matkul }}</td>
            <td>{{ $Get->uts }}</td>
            <td>{{ $Get->uas }}</td>
            <td>{{ $Get->kehadiran }}</td>
            <td>{{ $Get->keaktifan }}</td>
            <td>{{ $Get->tugas }}</td>
            <td>{{ $Get->sks }}</td>
            <td >
                <a href="#" onclick="ModalEditNilai(
                    '{{ $Get->id_nilai }}',
                    '{{ $Get->nama_mhs }}',
                    '{{ $Get->kd_matkul }}',
                    '{{ $Get->uts }}',
                    '{{ $Get->uas }}',
                    '{{ $Get->kehadiran }}',
                    '{{ $Get->keaktifan }}',
                    '{{ $Get->tugas }}',
                    '{{ $Get->sks }}'
                    )" class="btn btn-dark">Edit</a>
                |
                <a href="#" onclick="ModalHapusNilai('{{ $Get->id_nilai }}')" class="btn btn-danger">Delete</a>

            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

<form action="nilai/add" method="post">
    @csrf
<div class="modal fade" id="ModalAddNilai" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" >Form Add</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label  class="form-label">Nama Mahasiswa</label>
                <input type="text" class="form-control" name="nama_mhs" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Kode Matkul</label>
                <input name="kd_matkul" class="form-control" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">UTS</label>
                <input name="uts" class="form-control" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">UAS</label>
                <input name="uas" class="form-control" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Kehadiran</label>
                <input name="kehadiran" class="form-control" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Keaktifan</label>
                <input name="keaktifan" class="form-control" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Tugas</label>
                <input name="tugas" class="form-control" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">SKS</label>
                <input name="sks" class="form-control" required>
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

<form action="nilai/hapus" method="post">
    @csrf
<div class="modal fade" id="ModalHapusNilai" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Delete</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
          <div class="modal-footer">
              <input type="hidden" name="id_nilai">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <input type="submit" class="btn btn-danger" name="hapus" value="Hapus">
          </div>
      </div>
    </div>
  </div>
</form>

<form action="nilai/edit" method="post">
    @csrf
<div class="modal fade" id="ModalEditNilai" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" >Form Edit</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label  class="form-label">ID</label>
                <input type="text" class="form-control" name="id_nilai" readonly>
            </div>
            <div class="mb-3">
                <label  class="form-label">Nama Mahasiswa</label>
                <input type="text" class="form-control" name="nama_mhs" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Kode Matkul</label>
                <input name="kd_matkul" class="form-control" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">UTS</label>
                <input name="uts" class="form-control" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">UAS</label>
                <input name="uas" class="form-control" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Kehadiran</label>
                <input name="kehadiran" class="form-control" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Keaktifan</label>
                <input name="keaktifan" class="form-control" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Tugas</label>
                <input name="tugas" class="form-control" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">SKS</label>
                <input name="sks" class="form-control" required>
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
    function ModalAddNilai() {
    $('[name="nama_mhs"]').val('');
      $('[name="kd_matkul"]').val('');
      $('[name="uts"]').val('');
      $('[name="uas"]').val('');
      $('[name="kehadiran"]').val('');
      $('[name="keaktifan"]').val('');
      $('[name="tugas"]').val('');
      $('[name="sks"]').val('');
        $('#ModalAddNilai').modal('show');
    }    
    function ModalHapusNilai(id_nilai) {
        $('[name="id_nilai"]').val(id_nilai);
        $('#ModalHapusNilai').modal('show');
    }

    function ModalEditNilai (id_nilai,nama_mhs,kd_matkul,uts,uas,kehadiran,keaktifan,tugas,sks) {
      $('[name="id_nilai"]').val(id_nilai);
      $('[name="nama_mhs"]').val(nama_mhs);
      $('[name="kd_matkul"]').val(kd_matkul);
      $('[name="uts"]').val(uts);
      $('[name="uas"]').val(uas);
      $('[name="kehadiran"]').val(kehadiran);
      $('[name="keaktifan"]').val(keaktifan);
      $('[name="tugas"]').val(tugas);
      $('[name="sks"]').val(sks);
      $('#ModalEditNilai').modal('show');
    }
</script>
    
@endsection