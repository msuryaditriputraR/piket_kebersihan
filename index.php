<?php
include_once "src/env.php";
require_once("src/crud/read.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PIKET</title>

  <!--- ==================== CSS ===================== -->
  <link rel="stylesheet" href="src/style.css">

  <!--- ==================== ICONS ===================== -->
  <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet" />
</head>

<body>
  <h1>Jadwal Piket Kebersihan <br> <span id="kelas">XI TKJ 2</span></h1>

  <table>
    <thead>
      <tr>
        <th>Senin</th>
        <th>Selasa</th>
        <th>Rabu</th>
        <th>Kamis</th>
        <th>Jumat</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if (gettype($piket) !== "array"):
      ?>
        <tr>
          <td colspan="5"><?= $piket; ?></td>
        </tr>

      <?php else : ?>
        <tr>
          <td>
            <?php foreach ($piket["senin"] as $s): ?>
              <li class=" p-relative">
                <?= $s['nama'] ?>
                <div class=" table__btns">
                  <button class="table__btn table__btn-edit" onclick="modal_edit.showModal()" title="Edit Data">
                    <i class="ri-pencil-fill"></i>
                  </button>
                  <a href="#" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="table__btn table__btn-delete" title="Delete Data">
                    <i class="ri-delete-bin-fill"></i>
                  </a>
                </div>
              </li>
            <?php endforeach ?>
          </td>
          <td>
            <?php foreach ($piket["selasa"] as $s): ?>
              <li class=" p-relative">
                <?= $s['nama'] ?>
                <div class=" table__btns">
                  <button class="table__btn table__btn-edit" onclick="modal_edit.showModal()" title="Edit Data">
                    <i class="ri-pencil-fill"></i>
                  </button>
                  <a href="#" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="table__btn table__btn-delete" title="Delete Data">
                    <i class="ri-delete-bin-fill"></i>
                  </a>
                </div>
              </li>
            <?php endforeach ?>
          </td>
          <td>
            <?php foreach ($piket["rabu"] as $s): ?>
              <li class=" p-relative">
                <?= $s['nama'] ?>
                <div class=" table__btns">
                  <button class="table__btn table__btn-edit" onclick="modal_edit.showModal()" title="Edit Data">
                    <i class="ri-pencil-fill"></i>
                  </button>
                  <a href="#" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="table__btn table__btn-delete" title="Delete Data">
                    <i class="ri-delete-bin-fill"></i>
                  </a>
                </div>
              </li>
            <?php endforeach ?>
          </td>
          <td>
            <?php foreach ($piket["kamis"] as $s): ?>
              <li class=" p-relative">
                <?= $s['nama'] ?>
                <div class=" table__btns">
                  <button class="table__btn table__btn-edit" onclick="modal_edit.showModal()" title="Edit Data">
                    <i class="ri-pencil-fill"></i>
                  </button>
                  <a href="#" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="table__btn table__btn-delete" title="Delete Data">
                    <i class="ri-delete-bin-fill"></i>
                  </a>
                </div>
              </li>
            <?php endforeach ?>
          </td>
          <td>
            <?php foreach ($piket["jumat"] as $s): ?>
              <li class=" p-relative">
                <?= $s['nama'] ?>
                <div class=" table__btns">
                  <button class="table__btn table__btn-edit" onclick="modal_edit.showModal()" title="Edit Data">
                    <i class="ri-pencil-fill"></i>
                  </button>
                  <a href="#" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="table__btn table__btn-delete" title="Delete Data">
                    <i class="ri-delete-bin-fill"></i>
                  </a>
                </div>
              </li>
            <?php endforeach ?>
          </td>
        </tr>
      <?php endif ?>
    </tbody>
  </table>

  <!--- ==================== BUTTON ADD ===================== -->
  <button class="btn__add" id="btn-add" title="Tambah Data" onclick="modal_add.showModal()">
    <i class="ri-add-fill"></i>
  </button>

  <!--- ==================== MODAL ===================== -->
  <!-- ADD -->
  <dialog id="modal_add" class="modal">
    <div class="modal__content">
      <h2>Tambah Data</h2>
      <hr class="modal__hr">
      <form action="<?= $env["BASE_URL"] . "src/crud/create.php"; ?>" method="post" class="modal__form">
        <select name="day" class="modal__select" required>
          <option value="" selected hidden>Hari</option>

          <?php foreach (["Senin", "Selasa", "Rabu", "Kamis", "Jumat"] as $index => $day): ?>
            <option value="<?= $index; ?>"><?= $day; ?></option>
          <?php endforeach ?>
        </select>
        <input type="text" name="name" placeholder="Nama Lengkap" class="modal__input" required>
        <button type="submit" class="btn__form btn__form-add">Tambah</button>
      </form>


      <!-- close -->
      <form method="dialog">
        <button class="btn__close"><i class="ri-close-fill"></i></button>
      </form>

    </div>
  </dialog>

  <!-- EDIT -->
  <dialog id="modal_edit" class="modal">
    <div class="modal__content">
      <h2>Edit Data</h2>
      <hr class="modal__hr">
      <form action="" method="post" class="modal__form">
        <select name="day" class="modal__select" required>
          <option value="" selected hidden>Hari</option>

          <?php foreach (["Senin", "Selasa", "Rabu", "Kamis", "Jumat"] as $index => $day): ?>
            <option value="<?= $index; ?>"><?= $day; ?></option>
          <?php endforeach ?>
        </select>
        <input type="text" name="name" placeholder="Nama Lengkap" class="modal__input" required>
        <button type="submit" class="btn__form btn__form-edit">Edit</button>
      </form>


      <!-- close -->
      <form method="dialog">
        <button class="btn__close"><i class="ri-close-fill"></i></button>
      </form>

    </div>
  </dialog>

  <!--- ==================== JAVASCRIPT ===================== -->
  <script src="src/main.js"></script>
</body>

</html>