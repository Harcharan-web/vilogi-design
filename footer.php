
  <div class="grid-container-footer">
    <div class="grid-item-footer">
      <img src="home/contue-footer/developer-france.png">
    </div>
    <div class="grid-item-footer">
      <img src="home/contue-footer/certifile.png">
    </div>
    <div class="grid-item-footer">
      <img src="home/contue-footer/essai-gratuit.png">
    </div>

    <!-- Add more items as needed -->
  </div>
  <footer>
    <div class="footer-container">
      <div class="footer-column">
        <img src="home/footer/Logo-VILOGI.png">
        <p style="color: #fff;">71/73 Boulevard Richard Lenoir<br>
          75011 PARIS</p><br>
        <img src="home/footer/icon-phone.png">
        <p style="color: #fff; margin-top: -40px; margin-left: 55px;">àcompléter@vilogi.com</p><br><br>
        <img src="home/footer/icono-mail.png">
        <p style="color: #fff; margin-top: -40px; margin-left: 55px;">+33 (0) 1 55 28 32 32</p><br><br>
        <ul class="social-icon">
          <li><img src="home/footer/linkedin.png"></li>&nbsp;&nbsp;&nbsp;&nbsp;
          <li><img src="home/footer/facebook.png"></li>&nbsp;&nbsp;&nbsp;&nbsp;
          <li><img src="home/footer/twitter.png"></li>
        </ul>
      </div>
      <div class="footer-column">
        <!-- <div class="column" > -->
        <h5>PLAN DU SITE</h5>
        <nav>
          <ul class="navbar-footer">
            <p>à compléter</p>
            <li>. Exerrovid ut rem et offictur sum e</li>
            <li>. ris rererovit fuga. Atur? Us il min</li>
            <li>. es ex eaqui dolor adi dolorro ritatur modi to eaque pe et qui con conse</li>
            <li>. laborem quidero dolorehentem eos</li>
            <li>. digniminis ea volese nis issimpel</li>
            <li>. min nonsecae nimporepel idi ullam,</li>
            <li>. sitaerum asi dolupta erferup t</li>
            <li>. tem. Elibusam, sin corpori dolorepta</li>
            <li>. porectusae parum rerum qui delia</li>
            <li>. quos non resci quo id modisci e</li>
            <li>. dessequodi aut alibus es autenim et</li>
          </ul>
        </nav>
        <!-- </div> -->
      </div>
      <div class="footer-column">
        <br>
        <p>Nous rejoindre</p><br>
        <p>Mentions Légales</p><br>
        <p>Politique de Confidentialité / Gestion des cookies</p><br>
        <p>Condition Générale de Vente</p><br>
        <p>Copyright © VILOGI 2023 </p><br>
        <div class="logo">
          <img src="home/footer/logo-Unis.png">
          <img src="home/footer/logo-ubiflow.png">
          <img src="home/footer/Logo-coin.png">
        </div>
      </div>
    </div>
  </footer>
</div>
  <script>
    function toggleNavbar() {
      var x = document.getElementById("top-navbar");
      var openIcon = document.querySelector(".icon.open");
      var closeIcon = document.querySelector(".icon.close");
      if (x.className === "navbar") {
        x.className += " responsive";
        openIcon.classList.add("d-none");
        closeIcon.classList.add("mb-d-show");
      } else {
        x.className = "navbar";
        openIcon.classList.add("mb-d-show");
        closeIcon.classList.add("d-none");
      }
    }

    document.getElementById("targetElement").onclick = () => {
      console.log("jhi");
      const target = document.getElementById("target");
      console.log({target});
      if (target.className === "pages-left target mb-d-show") {
        target.classList.add("d-none");
        target.classList.remove("mb-d-show");
      } else if (target.className === "pages-left target d-none") {
        target.classList.add("mb-d-show");
        target.classList.remove("d-block");
      } else {
        target.classList.add("mb-d-show");
      }
    }
  </script>
</body>

</html>