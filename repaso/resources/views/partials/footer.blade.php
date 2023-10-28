<footer class="bg-light text-center text-lg-start">
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    <span id="currentDate"></span> © Copyright: Biblioteca
    <a class="text-dark" href="" alt="Sitio web de la Biblioteca">Biblioteca.com</a>
  </div>
  <!-- Copyright -->
</footer>

<script>
  const currentDate = new Date();
  const options = { year: 'numeric', month: 'long', day: 'numeric' };
  document.getElementById("currentDate").textContent = currentDate.toLocaleDateString('es-ES', options);
</script>
