<?php Layout::Header("SchuelerEltern"); ?> <!--Max-->

<section>
    
<div class="container" style="padding-top: 150px; gap:10px; ">
  <div class="row">
    <h1 class="text-center">Vertrauens-Lehrkraft</h1>
    <div class="col" style="padding: 20px;">
      <div class="ueberUnsText">
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
            
        At vero eos et accusam et justo duo dolores et ea rebum. 
            
        Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
        
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
        
        At vero eos et accusam et justo duo dolores et ea rebum. 
        
        Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
      </div>
    </div>
    <div class="col" style="padding: 20px;">
      <img src="./IMG/pestaloziSchulfoto.jpg" style="width: 700px;"  alt="Foto der Schule">
      
    </div>
  </div>
</div>
</section>
<hr>
<section>

<div class="container" style="padding-top: 2rem; gap:10px; margin-top:2rem;">
    <div class="row">
        <h1 class="text-center">FAQ</h1>
        <div class="col" style="padding: 20px;">

        </div>

    </div>

</div>

<style>
    {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 20px;
    }
    .grid-container {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-gap: 20px;
    }
    .grid-item {
      background-color: #FFDAB9;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
    }
    .grid-item:hover {
        transform: translateY(-5px);
        background-color: #FFDAB9;
      box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
    }
    .question {
      padding: 20px;
      font-weight: bold;
      text-align: center;
      border-bottom: 1px solid #ccc;
    }
    .answer {
      padding: 20px;
      text-align: center;
      display: none;
    }
    .grid-item.active .answer {
      display: block;
    }
  </style>

<div class="grid-container">
    <div class="grid-item">
      <div class="question">Lohnt sich diese Ausbildung?</div>
      <div class="answer">Sie würde sich lohnen, wenn wir bezahlt werden würden.</div>
    </div>
    <div class="grid-item">
      <div class="question">Frage 2</div>
      <div class="answer">Antwort 2</div>
    </div>
    <div class="grid-item">
      <div class="question">Frage 3</div>
      <div class="answer">Antwort 3</div>
    </div>
    <div class="grid-item">
      <div class="question">Frage 4</div>
      <div class="answer">Antwort 4</div>
    </div>
    <div class="grid-item">
      <div class="question">Frage 5</div>
      <div class="answer">Antwort 5</div>
    </div>
    <div class="grid-item">
      <div class="question">Frage 6</div>
      <div class="answer">Antwort 6</div>
    </div>
  </div>

  <script>
    const gridItems = document.querySelectorAll('.grid-item');

    gridItems.forEach(item => {
      item.addEventListener('click', () => {
        item.classList.toggle('active');
      });
    });
  </script>

</section>
<hr>
<section>

<div class="container" style="padding-top: rem; gap:10px; margin-top:2rem;">
    <div class="row">
        <h1 class="text-center">Apps der Lernplattform</h1>
        <div class="col" style="padding: 20px;">
    </div>

    </div>
</div>

</section>
<hr>
<section>

<div class="container" style="padding-top: rem; gap:10px; margin-top:2rem;">
    <div class="row">
        <h1 class="text-center">Downloads</h1>
        <div class="col" style="padding: 20px;">
    </div>

    </div>
</div>

</section>




<?php Layout::Footer();