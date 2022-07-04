<?php include("partials/header.php"); ?>
<!-- headerKontakt -->
<section class="kontaktBlog">
  <img src="img/header-kontakt.jpg" alt="" />
  <div class="animatedHeader animate__animated animate__backInDown">
    <h1 class="display-4 text-center">Kontakt</h1>
  </div>
</section>
<!-- forma -->
<section class="forma container py-5">
  <form>
    <div class="form-group">
      <label>Ime i Prezime</label>
      <input type="text" class="form-control">
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="email" class="form-control">
    </div>
    <div class="form-group">
      <label>Poruka</label>
      <textarea class="form-control" cols="30" rows="10"></textarea>
    </div>
    <a href="">Pošaljite poruku</a>
  </form>
</section>
<?php include("partials/footer.php"); ?>