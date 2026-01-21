<?php include 'subpages/header.php' ?>
<section id="domov" class="hero">
    <h1>Vitajte vo Fitku</h1>
    <p>Moderné fitness centrum s personalizovaným tréningom a online rezerváciou</p>
</section>
<h3 style="text-align:center; margin:40px 0 20px;">Naše priestory</h3>
<div class="gallery-center">
    <div class="gallery-scroll">
        <?php 
            for ($i = 1; $i <= 5; $i++) {
                echo '<a href="Assets/imgs/gym'.$i.'.jpg"><img src="Assets/imgs/gym'.$i.'.jpg"></a>';
            }
        ?>
    </div>
</div>
</section>
<?php include 'subpages/footer.php' ?>