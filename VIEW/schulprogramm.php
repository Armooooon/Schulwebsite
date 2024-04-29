<?php Layout::Header("Schulprogramm"); ?>
<!-- Islam Praktikant -->
<div style="padding-top:120px" class="containerspr" style="display: block;">
        <section class=kopf>
        </section>
        <section class="hintergrund">

        <h1 class="h1spr">Unser Leitbild</h1>

    <div class="leitbild">
        
    <h5 >"Das Fundament einer guten Schule ist das gleiche
        wie das Fundament
    </h5> 
    
    <h5 > alles Menschenglücks und nichts 
        anderes als wahre Weisheit des Lebens."
    </h5>

    <p >
        <i >Johann Heinrich Pestalozzi</i> 
    </p>

    <h4 >
    <strong>
    Lernen mit...
    </strong>
    </h4>
</div>


<div class="containerspr">

<div class="image-wrapper">

<img src="./IMG/head.png" alt="Kopf" class="image">

    <p class="caption">Kenntnisse, Fähigkeiten 
        & Fertigkeiten <br>vermitteln</p>
    <p class="caption">Vermittlung des 
        europäischen Gedankens</p>
    <p class="caption">Fitmachen der
        Schüler/innen für den für sie <br>
        möglichen Schulabschluss </p>
        

</div>

<span class="plus-sign">+</span>

<div class="image-wrapper">

<img src="./IMG/heart.png" alt="Herz" class="image">

    <p class="caption">Gemeinschafts- & 
        Teamfähikeit stärken</p>
    <p class="caption">enge Kooperation 
        mit den Eltern & der
        angeschlossenen Grundschule <br>
        -längeres gemeinsames Lernen</p>
    <p class="caption">Europaschule- <br>
        Zusammenarbeit mit Partnerschulen 
        in Polen & Litauen</p>

</div>

<span class="plus-sign">+</span>

<div class="image-wrapper">

<img src="./IMG/hands.png" alt="Hände" class="image" style="padding-top:3rem;">

    <p style="padding-top:1rem;"class="caption">selbstständiges Arbeiten fördern & fordern</p>
    <p class="caption">Stärkung der Methodenkompetenz</p>
    <p class="caption">Produktives lernen</p>
    <p class="caption">umfangreiche berufsvorbereitende Aktiviäten</p>
    <p class="caption">intensive Nutzung moderner Medien</p>
</div>

</div>
<div class="leitbild">
    <h4 >
    <strong>
    =Verantwortung für sich, die Lerngemeinschaft
und die Gesellschaft übernehmen 
    </strong>
    </h4>
</div>
</div>
</div>


</section>





<style>
.h1spr {
    text-align: center;
}
.leitbild {
    text-align: center;
}
.hintergrund {
    background-color: var(--color2);
    border-radius: 8px;
    padding: 30px;
    margin-bottom: 30px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.kopf{
    background-color: var(--color1);
    padding: 50px 0;
    text-align: center;
    color: #fff;
}


.containerspr {
display: flex;
justify-content: center;
align-items: center;
flex-wrap: wrap;
}

.image-wrapper {
display: flex;
flex-direction: column;
align-items: center;
margin: 20px;
}



.plus-sign {
font-size: 40px;
margin: 20px;
}

.caption {
text-align: center;

}

</style>



<?php Layout::Footer();