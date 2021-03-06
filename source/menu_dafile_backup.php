<?php
  $basedir = dirname(__DIR__);
  $titoli = fopen($basedir . '/Songsss/titoli.txt','r');
  if ($titoli) {
    while (($line = fgets($titoli)) !== false) {
        echo '<div class = "a"><a class="item button" id="ACanaSiFaFesta" name="show">' . $line . '</a></div>';
    }
    fclose($titoli);
  }
?>

<div class="Drop">
  <button name="dropdown" class="button item"><div style="margin-left:5%">Inizio</div></button>
  <div class="ContDrop" name="dropdowntobedisplayed">
    <a class="item button" id="ACanaSiFaFesta" name="show"><div class = "a" name="ACanaSiFaFesta">A Cana Si Fa Festa</div></a>
    <a class="item button" name="show"><div class = "a" name="AccendiInMe">Accendi In Me</div></a>
    <a class="item button" name="show"><div class = "a" name="AcquaSiamoNoi">Acqua Siamo Noi</div></a>
    <a class="item button"><div class = "a" name="PopoliTutti">Altissimo</div></a>
    <a class="item button"><div class = "a" name="PopoliTutti">Camminiamo Incontro Al Signore</div></a>
    <a class="item button"><div class = "a" name="PopoliTutti">Cantate Al Signore Un Canto</div></a>
    <a class="item button"><div class = "a" name="PopoliTutti">Canto La Tua Gloria</div></a>
    <a class="item button"><div class = "a" name="PopoliTutti">C'&egrave; Qualcuno Che Mi Ama</div></a>
    <a class="item button"><div class = "a" name="PopoliTutti">Ci Inviti Alla Tua Festa</div></a>
    <a class="item button"><div class = "a" name="PopoliTutti">Com'&egrave; Bello</div></a>
    <a class="item button"><div class = "a" name="PopoliTutti">Dall'aurora Al Tramonto</div></a>
    <a class="item button"><div class = "a" name="PopoliTutti">E' Bello Lodarti</div></a>
    <a class="item button"><div class = "a" name="PopoliTutti">E' Festa Grande</div></a>
    <a class="item button"><div class = "a" name="IlGiornoDelSignore">E' Il Giorno Del Signore</div></a>
    <a class="item button"><div class = "a" name="PopoliTutti">E' Pi&ugrave; Bello Insieme</div></a>
    <a class="item button"><div class = "a" name="PopoliTutti">Fammi Conoscere</div></a>
    <a class="item button"><div class = "a" name="PopoliTutti">Fratello Sole, Sorella Luna</div></a>
    <a class="item button"><div class = "a" name="PopoliTutti">Gloria A Te, Cristo Ges&ugrave;</div></a>
    <a class="item button"><div class = "a" name="PopoliTutti">Grandi Cose</div></a>
    <a class="item button"><div class = "a" name="PopoliTutti">Il Canto Dell'amore</div></a>
    <a class="item button"><div class = "a" name="PopoliTutti">Il Giorno Della Speranza</div></a>
    <a class="item button"><div class = "a" name="PopoliTutti">In Principio</div></a>
    <a class="item button"><div class = "a" name="PopoliTutti">Inno GMG 2016</div></a>
    <a class="item button"><div class = "a" name="PopoliTutti">L'acqua La Terra Il Cielo</div></a>
    <a class="item button"><div class = "a" name="PopoliTutti">La Tua Dimora</div></a>
    <a class="item button"><div class = "a" name="PopoliTutti">Musica Di Festa</div></a>
    <a class="item button"><div class = "a" name="PopoliTutti">Nacque Il Suo Bambino</div></a>
    <a class="item button"><div class = "a" name="PopoliTutti">Noi Veniamo A Te</div></a>
    <a class="item button"><div class = "a" name="PopoliTutti">Ora &Egrave; Tempo Di Gioia</div></a>
    <a class="item button"><div class = "a" name="PopoliTutti">Presto Andiamo A Betlemme</div></a>
    <a class="item button"><div class = "a" name="PopoliTutti">Popoli Tutti Benedite</div></a>
    <a class="item button"><div class = "a" name="PopoliTutti">Popoli Tutti Acclamate</div></a>
    <a class="item button"><div class = "a" name="PopoliTutti">Resurrezione</div></a>
    <a class="item button"><div class = "a" name="PopoliTutti">Un Sol Corpo Un Sol Spirito</div></a>
    <a class="item button"><div class = "a" name="VivereLaVita">Vieni Spirito Di Cristo</div></a>
    <a class="item button"><div class = "a" name="VivereLaVita">Vieni Qui Tra Noi</div></a>
  </div>
</div>
<div class="Drop">
  <button name="dropdown" class="button item"><div style="margin-left:5%">Gloria</div></button>
  <div class="ContDrop" name="dropdowntobedisplayed">
    <a class="item button"><div class = "a">Gloria a Dio</div></a>
    <a class="item button"><div class = "a">Gloria nell'alto dei cieli</div></a>
    <a class="item button"><div class = "a">Gloria a Dio nell'alto dei cieli</div></a>
    <a class="item button"><div class = "a">Gloria a Dio</div></a>
    <a class="item button"><div class = "a">Gloria (Gloria)</div></a>
    <a class="item button"><div class = "a">Gloria (Gen Verde)</div></a>
    <a class="item button"><div class = "a">Gloria (Giombini)</div></a>
  </div>
</div>
<div class="Drop">
  <button name="dropdown" class="button item"><div style="margin-left:5%">Alleluia</div></button>
  <div class="ContDrop" name="dropdowntobedisplayed">
    <button class="item button"><div class = "a">Alleluia di Natale</div></button>
    <button class="item button"><div class = "a">Alleluia brasiliano</div></button>
    <button class="item button"><div class = "a">Alleluia la nostra festa</div></button>
    <button class="item button"><div class = "a">Alleluia dello Spirito</div></button>
    <button class="item button"><div class = "a">Alleluia di Taiz&egrave;</div></button>
    <button class="item button"><div class = "a">Alleluia chi ascolta</div></button>
    <button class="item button"><div class = "a">Alleluia questa tua parola</div></button>
    <button class="item button"><div class = "a">Alleluia con il cuore</div></button>
    <button class="item button"><div class = "a">Alleluia Cristo &egrave; risorto</div></button>
    <button class="item button"><div class = "a">Alleluia celtico</div></button>
    <button class="item button"><div class = "a">Alleluia della provvidenza</div></button>
    <button class="item button"><div class = "a">Alleluia ecco lo sposo</div></button>
    <button class="item button"><div class = "a">Alleluia &egrave; risorto il Signor</div></button>
    <button class="item button"><div class = "a">Alleluia Passeranno i cieli</div></button>
    <button class="item button"><div class = "a">Alleluia irlandese</div></button>
    <button class="item button"><div class = "a">Alleluia lasciate che i bambini</div></button>
    <button class="item button"><div class = "a">Alleluia parla o Signore</div></button>
    <button class="item button"><div class = "a">Alleluia per il s&igrave;</div></button>
    <button class="item button"><div class = "a">Alleluia Signore sei venuto</div></button>
    <button class="item button"><div class = "a">Alleluia al Signore dei cieli</div></button>
    <button class="item button"><div class = "a">Alleluia vi annuncio</div></button>
    <button class="item button"><div class = "a">Lode a te o Cristo</div></button>
  </div>
</div>
<div class="Drop">
  <button name="dropdown" class="button item"><div style="margin-left:5%">Offertorio</div></button>
  <div class="ContDrop" name="dropdowntobedisplayed">
    <button class="item button"><div class = "a">Accogli i nostri doni</div></button>
    <button class="item button"><div class = "a">Antica eterna danza</div></button>
    <button class="item button"><div class = "a">Benedetto nei secoli</div></button>
    <button class="item button"><div class = "a">Benedetto Tu Signore</div></button>
    <button class="item button"><div class = "a">Benedici Padre Buono</div></button>
    <button class="item button"><div class = "a">Benedici (nebbia e freddo)</div></button>
    <button class="item button"><div class = "a">Benedir&ograve; (Ricci)</div></button>
    <button class="item button"><div class = "a">Benedir&ograve; il Signore</div></button>
    <button class="item button"><div class = "a">Come la pioggia e la neve</div></button>
    <button class="item button"><div class = "a">Come un fiume Il frutto</div></button>
    <button class="item button"><div class = "a">Ecco il pane</div></button>
    <button class="item button"><div class = "a">Ecco quel che abbiamo</div></button>
    <button class="item button"><div class = "a">Frutto della nostra terra</div></button>
    <button class="item button"><div class = "a">Noi saremo il pane</div></button>
    <button class="item button"><div class = "a">Ogni mia parola</div></button>
    <button class="item button"><div class = "a">Servo per amore</div></button>
    <button class="item button"><div class = "a">Se m'accogli</div></button>
    <button class="item button"><div class = "a">Segni del tuo amore</div></button>
    <button class="item button"><div class = "a">Ti offriamo, Signore</div></button>
    <button class="item button"><div class = "a">Una nuova vita</div></button>
    <button class="item button"><div class = "a">Voi siete di Dio</div></button>
  </div>
</div>
<div class="Drop">
  <button name="dropdown" class="button item"><div style="margin-left:5%">Santo</div></button>
  <div class="ContDrop" name="dropdowntobedisplayed">
    <button class="item button"><div class = "a">E' santo</div></button>
    <button class="item button"><div class = "a">Santo (Ruaro)</div></button>
    <button class="item button"><div class = "a">Santo (come fuoco vivo)</div></button>
    <button class="item button"><div class = "a">Santo (P. Ruaro)</div></button>
    <button class="item button"><div class = "a">Santo per l'Avvento</div></button>
    <button class="item button"><div class = "a">Santo SuperAfrica</div></button>
    <button class="item button"><div class = "a">Santo Zaire</div></button>
    <button class="item button"><div class = "a">Santo (Gen Rosso)</div></button>
    <button class="item button"><div class = "a">Santo rock</div></button>
    <button class="item button"><div class = "a">Santo (Spoladore)</div></button>
    <button class="item button"><div class = "a">Santo Jesus</div></button>
  </div>
</div>
<div class="Drop">
  <button name="dropdown" class="button item"><div style="margin-left:5%">Pace</div></button>
  <div class="ContDrop" name="dropdowntobedisplayed">
    <button class="item button"><div class = "a">Agnus Dei</div></button>
    <button class="item button"><div class = "a">Agnello di Dio</div></button>
    <button class="item button"><div class = "a">Hopes of peace</div></button>
    <button class="item button"><div class = "a">Io ti do la pace</div></button>
    <button class="item button"><div class = "a">La pace sia con te</div></button>
    <button class="item button"><div class = "a">Pace (vedo un giorno nuovo)</div></button>
    <button class="item button"><div class = "a">Pace, pace sia con te</div></button>
    <button class="item button"><div class = "a">Pace sia</div></button>
    <button class="item button"><div class = "a">Ti do la pace</div></button>
  </div>
</div>
<div class="Drop">
  <button name="dropdown" class="button item"><div style="margin-left:5%">Comunione</div></button>
  <div class="ContDrop" name="dropdowntobedisplayed">
    <button class="item button"><div class = "a">Abbracciami</div></button>
    <button class="item button"><div class = "a">Ave Maria (Giovane Donna)</div></button>
    <button class="item button"><div class = "a">Beatitudine</div></button>
    <button class="item button"><div class = "a">Canter&ograve; solo per te</div></button>
    <button class="item button"><div class = "a">Canzone di San Damiano</div></button>
    <button class="item button"><div class = "a">Come fuoco vivo</div></button>
    <button class="item button"><div class = "a">Come tu mi vuoi</div></button>
    <button class="item button"><div class = "a">Come un fiume in piena</div></button>
    <button class="item button"><div class = "a">Dico s&igrave;</div></button>
    <button class="item button"><div class = "a">E sono solo un uomo</div></button>
    <button class="item button"><div class = "a">E venne il giorno</div></button>
    <button class="item button"><div class = "a">Grazie per la vita</div></button>
    <button class="item button"><div class = "a">Il pane della vita</div></button>
    <button class="item button"><div class = "a">Insieme a te</div></button>
    <button class="item button"><div class = "a">La "Danza" del Signore</div></button>
    <button class="item button"><div class = "a">Mani</div></button>
    <button class="item button"><div class = "a">Nella tua presenza</div></button>
    <button class="item button"><div class = "a">Pacem in terra</div></button>
    <button class="item button"><div class = "a">Pane del cielo</div></button>
    <button class="item button"><div class = "a">Per quale festa</div></button>
    <button class="item button"><div class = "a">Per accendere in cuore</div></button>
    <button class="item button"><div class = "a">Restate qui</div></button>
    <button class="item button"><div class = "a">San Francesco</div></button>
    <button class="item button"><div class = "a">Solo tu</div></button>
    <button class="item button"><div class = "a">Su ali d'aquila</div></button>
    <button class="item button"><div class = "a">Symbolum '77 (Tu sei la mia vita)</div></button>
    <button class="item button"><div class = "a">Ti lodiamo Signore Ges&ugrave;</div></button>
    <button class="item button"><div class = "a">Tu al centro del mio cuore</div></button>
    <button class="item button"><div class = "a">Tu sei</div></button>
    <button class="item button"><div class = "a">Un comandamento nuovo</div></button>
    <button class="item button"><div class = "a">Unico maestro</div></button>
    <button class="item button"><div class = "a">Un'altra umanit&agrave;</div></button>
    <button class="item button"><div class = "a">Verbum panis</div></button>
    <button class="item button"><div class = "a">Vieni e seguimi</div></button>
    <button class="item button"><div class = "a">Vieni nasci ancora</div></button>
    <button class="item button"><div class = "a">Vivere la vita</div></button>
    <button class="item button"><div class = "a">Vocazione</div></button>
  </div>
</div>
<div class="Drop">
  <button name="dropdown" class="button item"><div style="margin-left:5%">Fine</div></button>
  <div class="ContDrop" name="dropdowntobedisplayed">
    <button class="item button"><div class = "a">Amatevi l'un l'altro</div></button>
    <button class="item button"><div class = "a">Andate per le strade</div></button>
    <button class="item button"><div class = "a">Apritevi o cieli</div></button>
    <button class="item button"><div class = "a">Buon Natale a Te</div></button>
    <button class="item button"><div class = "a">Camminiamo sulla strada</div></button>
    <button class="item button"><div class = "a">Canzone dell'amicizia</div></button>
    <button class="item button"><div class = "a">Che gioia ci d&agrave;</div></button>
    <button class="item button"><div class = "a">Chi?</div></button>
    <button class="item button"><div class = "a">Cieli nuovi e terra nuova</div></button>
    <button class="item button"><div class = "a">Come creta fra le dita (Geremia)</div></button>
    <button class="item button"><div class = "a">Dammi un cuore, Signor</div></button>
    <button class="item button"><div class = "a">Danza la vita</div></button>
    <button class="item button"><div class = "a">E' bello</div></button>
    <button class="item button"><div class = "a">E la strada si apre</div></button>
    <button class="item button"><div class = "a">Esci subito</div></button>
    <button class="item button"><div class = "a">Gioia che invade l'anima</div></button>
    <button class="item button"><div class = "a">Gloria dal basso della terra</div></button>
    <button class="item button"><div class = "a">Grazie Signore</div></button>
    <button class="item button"><div class = "a">Hevenu shalom alekhem</div></button>
    <button class="item button"><div class = "a">Io ci sar&ograve; (883)</div></button>
    <button class="item button"><div class = "a">L&agrave; sulla montagna</div></button>
    <button class="item button"><div class = "a">La vita &egrave; nuova</div></button>
    <button class="item button"><div class = "a">Le tue meraviglie</div></button>
    <button class="item button"><div class = "a">Litanie dei santi</div></button>
    <button class="item button"><div class = "a">Oh Happy Day</div></button>
    <button class="item button"><div class = "a">Osanna Osanna</div></button>
    <button class="item button"><div class = "a">O santa notte</div></button>
    <button class="item button"><div class = "a">Resta accanto a me</div></button>
    <button class="item button"><div class = "a">Sale e luce</div></button>
    <button class="item button"><div class = "a">Santa Maria del Cammino</div></button>
    <button class="item button"><div class = "a">Ti ringrazio mio Signore</div></button>
    <button class="item button"><div class = "a">Tutti si risorger&agrave;</div></button>
    <button class="item button"><div class = "a">Tu scendi dalle stelle</div></button>
    <button class="item button"><div class = "a">Va per le vie del mondo</div></button>
    <button class="item button"><div class = "a">Vivi con noi la festa</div></button>
  </div>
</div>
<div class="Drop">
  <button name="dropdown" class="button item"><div style="margin-left:5%">Altro</div></button>
  <div class="ContDrop" name="dropdowntobedisplayed">
    <button class="item button"><div class = "a">Adoriamo il sacramento</div></button>
    <button class="item button"><div class = "a">Agnello di Dio abbi piet&agrave;</div></button>
    <button class="item button"><div class = "a">Amen</div></button>
    <button class="item button"><div class = "a">Arderanno sempre</div></button>
    <button class="item button"><div class = "a">Ave Maria (Verbum Panis)</div></button>
    <button class="item button"><div class = "a">Bonum est confidere</div></button>
    <button class="item button"><div class = "a">Cantate al Signore (Ricci)</div></button>
    <button class="item button"><div class = "a">Canto dell'acqua</div></button>
    <button class="item button"><div class = "a">Canto di nozze</div></button>
    <button class="item button"><div class = "a">Del tuo Spirito Signore</div></button>
    <button class="item button"><div class = "a">Devo dire che</div></button>
    <button class="item button"><div class = "a">Dove vita &egrave; davvero</div></button>
    <button class="item button"><div class = "a">E' il segno del tuo amore</div></button>
    <button class="item button"><div class = "a">Esultiamo in te, Ges&ugrave;</div></button>
    <button class="item button"><div class = "a">Guarigione del paralitico</div></button>
    <button class="item button"><div class = "a">Il cieco di Gerico</div></button>
    <button class="item button"><div class = "a">Il dono sempre nuovo</div></button>
    <button class="item button"><div class = "a">Il pane del cammino</div></button>
    <button class="item button"><div class = "a">Il Signore &egrave; il mio pastore</div></button>
    <button class="item button"><div class = "a">Incontrare te</div></button>
    <button class="item button"><div class = "a">Inno del giubileo</div></button>
    <button class="item button"><div class = "a">Inno dei donatori</div></button>
    <button class="item button"><div class = "a">Invochiamo la tua presenza</div></button>
    <button class="item button"><div class = "a">Io ci sto</div></button>
    <button class="item button"><div class = "a">Io sar&ograve; con te</div></button>
    <button class="item button"><div class = "a">Io vi do il buon esempio</div></button>
    <button class="item button"><div class = "a">I will follow him</div></button>
    <button class="item button"><div class = "a">Jesus Christ you are my life</div></button>
    <button class="item button"><div class = "a">La mia anima canta</div></button>
    <button class="item button"><div class = "a">Misericordias Domini</div></button>
    <button class="item button"><div class = "a">Nada te turbe</div></button>
    <button class="item button"><div class = "a">Oggi &egrave; nato</div></button>
    <button class="item button"><div class = "a">Ora</div></button>
    <button class="item button"><div class = "a">Ora sei con noi</div></button>
    <button class="item button"><div class = "a">Salmo 144</div></button>
    <button class="item button"><div class = "a">Scusa Signore</div></button>
    <button class="item button"><div class = "a">Servire &egrave; regnare</div></button>
    <button class="item button"><div class = "a">Si accende una luce</div></button>
    <button class="item button"><div class = "a">Sono qui a lodarti</div></button>
    <button class="item button"><div class = "a">Ti far&ograve; mia sposa</div></button>
    <button class="item button"><div class = "a">Tu accompagnali</div></button>
    <button class="item button"><div class = "a">Tutto il mondo deve sapere</div></button>
    <button class="item button"><div class = "a">Tutto &egrave; possibile</div></button>
    <button class="item button"><div class = "a">Ubi caritas</div></button>
    <button class="item button"><div class = "a">Venite fedeli</div></button>
    <button class="item button"><div class = "a">Veni sancte spiritus</div></button>
    <button class="item button"><div class = "a">Vieni santo spirito, manda</div></button>
    <button class="item button"><div class = "a">Vieni o Spirito, Spirito di Dio</div></button>
    <button class="item button"><div class = "a">Vieni santo spirito di Dio, come</div></button>
    <button class="item button"><div class = "a">Vieni Santo Spirito (Piatti)</div></button>
    <button class="item button"><div class = "a">Vieni Santo Spirito (Ruaro)</div></button>
    <button class="item button"><div class = "a">Voglio cantare al Signor</div></button>
  </div>
</div>
