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
        <th>No</th>
        <th>Senin</th>
        <th>Selasa</th>
        <th>Rabu</th>
        <th>Kamis</th>
        <th>Jumat</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Irfan</td>
        <td>Irfan</td>
        <td>Irfan</td>
        <td>Irfan</td>
        <td>Irfan</td>
      </tr>
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
      <form action="" method="post" class="modal__form">
        <select name="day" class="modal__select">
          <option value="" selected hidden>Hari</option>

          <?php foreach (["Senin", "Selasa", "Rabu", "Kamis", "Jumat"] as $index => $day): ?>
            <option value="<?= $index; ?>"><?= $day; ?></option>
          <?php endforeach ?>
        </select>
        <input type="text" name="name" placeholder="Nama Lengkap" class="modal__input">
        <button type="submit" class="btn__form btn__form-add">Tambah</button>
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