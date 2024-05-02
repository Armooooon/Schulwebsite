<?php Layout::Header("Stundenplan"); ?>

<?php Layout::IMGCarousel("timetable.png"); ?>

<div class="container headline">
  <h2>Aktueller Stundenplan</h2>
</div>
<div class="container">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Stunde</th>
        <th>Zeit</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1.</td>
        <td>7.25 - 8.10</td>
      </tr>
      <tr>
        <td>2.</td>
        <td>8.15 - 9.00</td>
      </tr>
      <tr>
        <td>3.</td>
        <td>9.20 - 10.05</td>
      </tr>
      <tr>
        <td>4.</td>
        <td>10.10 - 10.55</td>
      </tr>
      <tr>
        <td>5.</td>
        <td>11.15 - 12.00</td>
      </tr>
      <tr>
        <td>6.</td>
        <td>12.05 - 12.50</td>
      </tr>
      <tr>
        <td>7.</td>
        <td>12.55 - 13.40</td>
      </tr>
      <tr>
        <td>8.</td>
        <td>13.45 - 14.30</td>
      </tr>
    </tbody>
  </table>
</div>

<div class="container headline">
  <h2>Bei verkürztem Unterricht gilt folgender Zeitplan</h2>
</div>
<div class="container headlineText">
  <p>Gilt bei großer Hitze</p>
</div>

<div class="container">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Stunde</th>
        <th>Zeit</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1.</td>
        <td>7.25 - 7.55</td>
      </tr>
      <tr>
        <td>2.</td>
        <td>8.05 - 8.35 - 8.45 Frühstück</td>
      </tr>
      <tr>
        <td>3.</td>
        <td>8.50 - 9.20 - 9.35 große Pause</td>
      </tr>
      <tr>
        <td>4.</td>
        <td>9.40 - 10.10</td>
      </tr>
      <tr>
        <td>5.</td>
        <td>10.20 - 10.50 - 11.05 große Pause</td>
      </tr>
      <tr>
        <td>6.</td>
        <td>11.10 - 11.40</td>
      </tr>
      <tr>
        <td>7.</td>
        <td>11.45 - 12.15</td>
      </tr>
      <tr>
        <td>8.</td>
        <td>12.15 - 12.45</td>
      </tr>
    </tbody>
  </table>
</div>

<?php Layout::Footer();
