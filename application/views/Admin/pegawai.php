
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Halaman Data <?= $title ?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('Admin')?>">Dashboard</a></li>
            <li class="breadcrumb-item active">Data <?= $title ?></li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- <div class="card-header">
              
            </div> -->
            <div class="card-body">
              <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahModal"><i class="fas fa-plus"></i>Tambah Data <?= $title ?></button>
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Lengkap Pegawai</th>
                    <th>Alamat Email</th>
                    <th>Nomor Telpon</th>
                    <th>Jabatan Pegawai</th>
                    <th>Nama Departemen</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;?>
                  <?php foreach ($pegawai as $p): ?>
                      <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $p['full_name'] ?></td>
                        <td><?= $p['email'] ?></td>
                        <td><?= $p['telp']?></td>
                        <td><?= $p['jabatan']?></td>
                        <td><?= $p['nama_departemen']?></td>
                        <td>
                          <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#dialog1">Detail</button> -->
                          <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#Edit<?= $p['id']?>"><i class="fas fa-pencil-alt"></i>Edit</button>
                          <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#Delete<?= $p['id']?>"><i class="fas fa-trash"></i>Hapus</button>
                        </td>
                      </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- Start Tambah Modal -->
  <div class="modal fade" data-backdrop="static" id="tambahModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah <?= $title ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?= site_url('TambahPegawai') ?>" method="post">
          <div class="modal-body">
            <div class="form-group">
              <label for="full_name">Nama Pegawai</label>
              <input type="text" class="form-control" id="full_name" name="full_name" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="telp">Nomor Telp</label>
              <input type="text" class="form-control" id="telp" name="telp" required>
            </div>
            <div class="form-group">
              <label for="jabatan">Jabatan Pegawai</label>
              <input type="text" class="form-control" id="jabatan" name="jabatan" required>
            </div>
            <div class="form-group">
                <label for="departemen_id">Nama Departemens</label>
                <select class="form-control" name="departemen_id" id="departemen_id" required>
                    <option value="">-- Pilih Departemen --</option>
                    <?php foreach($departemen as $d): ?>
                        <option value="<?php echo $d['id']; ?>"><?php echo $d['nama_departemen']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<!-- End Tambah Modal -->
<!-- Start Edit Modal -->
  <?php foreach ($pegawai as $p) : ?>
    <div class="modal fade" id="Edit<?= $p['id']?>">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Edit Data <?= $title ?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form id="editPegawai" action="<?= base_url('EditPegawai/'.$p['id'])?>" method="post">
            <div class="modal-body">
                <input type="hidden" id="edit_id" name="id">
                <div class="form-group">
                    <label for="id">Id</label>
                    <input type="text" class="form-control" id="id" name="id" value="<?= $p['id']?>" readonly>
                </div>
                <div class="form-group">
                    <label for="full_name">Nama Pegawai</label>
                    <input type="text" class="form-control" id="full_name" name="full_name" value="<?= $p['full_name']?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Pegawai</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?= $p['email']?>" required>
                </div>
                <div class="form-group">
                    <label for="telp">Nomor Telp Pegawai</label>
                    <input type="text" class="form-control" id="telp" name="telp" value="<?= $p['telp']?>" required>
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan Pegawai</label>
                    <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= $p['jabatan']?>" required>
                </div>
                <div class="form-group">
                    <label for="departemen_id">Nama Departemen</label>
                    <select class="form-control" name="departemen_id" id="departemen_id" required>
                      <?php foreach($departemen as $d): ?>
                        <option value="<?= $d['id']; ?>" <?= ($p['departemen_id'] == $d['id']) ? 'selected' : ''; ?>>
                          <?= $d['nama_departemen']; ?>
                        </option>
                      <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  <?php endforeach ?>
<!-- End Edit Modal -->
<!-- Start Delete Modal -->
    <div class="modal fade" data-backdrop="static" id="Delete<?= $p['id']?>">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Delete Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              Are you sure you want to delete this item?
            </div>
            <form action="DeleteRuangan">
                <div class="modal-footer">
                <button data-dismiss="modal" type="button" class="btn btn-default">Cancel</button>
                <a href="<?= base_url('DeletePegawai/'.$p['id']) ?>" class="btn btn-danger">Hapus</a>
                </div>
            </form>
            </div>
        </div>
    </div>
<!-- End Delete Modal -->
<!-- /.content-wrapper -->