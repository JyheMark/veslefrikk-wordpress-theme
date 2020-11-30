<?php get_header(); ?>

<section class="page page-kontakt">
    <section>
        <div class="container">
            <div>
                <span class="row">Daglig leder: Monia Berger</span>
                <span class="row">Tel: (+47) 452 93 408</span>
                <span class="row">E-post: veslefrikkteaterskole@gmail.com</span>
                <span class="row">Generalveien 9, 1767 Halden</span>
                <div class="embedded-map">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3125.8811059203986!2d11.393554661394527!3d59.118303945581886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464412d088b780cd%3A0x579f50c01dbfca3!2sGeneralveien%209%2C%201769%20Halden!5e0!3m2!1sen!2sno!4v1606771578563!5m2!1sen!2sno" 
                        height="400" 
                        frameborder="0" 
                        style="border:0;" 
                        allowfullscreen="" 
                        aria-hidden="false" 
                        tabindex="0">
                    </iframe>
            </div>
            </div>
            <div>
                <form action="./takk" method="post" name="contactForm" id="contactForm">
                    <span class="row text-centered">Har du noen spørmal?</span>
                    <input type="text" placeholder="Navn" required/>
                    <input type="email" placeholder="Dinmail@eksempel.com" required/>
                    <input type="phone" placeholder="Telefon"/>
                    <textarea form="contactForm" placeholder="Skriv melding..." required></textarea>
                    <input type="submit" value="Send"/>
                </form>
            </div>
        </div>
    </section>
</section>

<?php get_footer(); ?>