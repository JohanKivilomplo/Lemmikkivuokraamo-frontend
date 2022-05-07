<header>
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../index.php">ETUSIVU</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../lemminkäinen/eläimet.php">ELÄIMET</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../lemminkäinen/PALAUTE.php">PALAUTE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../lemminkäinen/oheistuotteet.php">OHEISTUOTTEET</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../lemminkäinen/kamppanja.php">KAMPPANJAT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../lemminkäinen/Ostoskori.php">VUOKRAUS</a>
        </li>
          <li class="nav-item">
            <a class="nav-link " href="../lemminkäinen/lisääKäyttäjä.php">LUO KÄYTTÄJÄTUNNUS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../lemminkäinen/asiakkaat.php">ASIAKKAAT</a>
          </li>
          <li class="nav-item">
            <?php 
                if(isset($_SESSION["username"])){
                    echo '<a class="nav-link bg-danger" href="../lemminkäinen/uloskirjautuminen.php">Log out</a>';
                }else{
                    echo '<a class="nav-link bg-success" href="../lemminkäinen/kirjautuminen.php">Log in</a>';
                }
            ?>
            </li>
      </ul>
  </header>