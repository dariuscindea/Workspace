<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo url('css/style.css');?>">
</head>
<body>
<header id="header" class="">
    <img src="<?php echo url('images/web.png');?>" width="50px" alt="Logo">
    <img src="<?php echo url('images/button.png');?>" width="40px" alt="Meniu buton">
</header>

<section id="hero">
    <div id="heroinfo">
        <h1>Cindea Darius-Gabriel</h1>
        <p>Programator & desingner web.</p>
        <p>Full stack dev-HTML5, CSS3.</p>
    </div>
    <div id="heroimg"></div>
</section>

<section id="servicii">
    <div>
        <h1>Servicii oferite</h1>
    </div>
    <article id="serva1">
        <img src="<?php echo url('images/web.png');?>" width="50px" alt="Logo design grafic">
        <h1>Design grafic</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet ipsam, eius odio expedita sapiente voluptas
            porro facere, aut obcaecati sed!</p>
    </article>

    <article>
        <img src="<?php echo url('images/web.png');?>" width="50px" alt="Logo dezvoltare front-end">
        <h1>Dezvoltare front-end</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet ipsam, eius odio expedita sapiente voluptas
            porro facere, aut obcaecati sed!</p>
    </article>

    <article>
        <img src="<?php echo url('images/web.png');?>" width="50px" alt="Logo dezvoltare back-end">
        <h1>Dezvoltare back-end</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet ipsam, eius odio expedita sapiente voluptas
            porro facere, aut obcaecati sed!</p>
    </article>
</section>

<section id="portofoliu">
    <div>
        <h1>Portofoliu</h1>
    </div>

    <div>
        <h3>VEN.RO</h3>
        <img src="<?php echo url('images/bara.png');?>" width="350px" height="10px" alt="Proiect logo">
        <h1>Full website</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore laboriosam nobis, unde in, deleniti quo
            pariatur fuga molestiae accusamus inventore consequuntur vitae excepturi dignissimos soluta, nihil adipisci
            doloremque. Autem, veniam.</p>
    </div>

    <div>
        <img src="<?php echo url('images/bara.png');?>" width="350px" height="10px" alt="">
        <h3>LION</h3>
        <img src="<?php echo url('images/web.png');?>" width="20px" alt="Proiect logo">
        <h1>Branding & catalog</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore laboriosam nobis, unde in, deleniti quo
            pariatur fuga molestiae accusamus inventore consequuntur vitae excepturi dignissimos soluta, nihil adipisci
            doloremque. Autem, veniam.</p>
    </div>

    <div>
        <img src="<?php echo url('images/bara.png');?>" width="350px" height="10px" alt="">
        <h3>ANDU.RO</h3>
        <img src="<?php echo url('images/bara.png');?>" width="20px" alt="Proiect logo">
        <h1>Backend CMS</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore laboriosam nobis, unde in, deleniti quo
            pariatur fuga molestiae accusamus inventore consequuntur vitae excepturi dignissimos soluta, nihil adipisci
            doloremque. Autem, veniam.</p>
    </div>

    <div>
        <img src="<?php echo url('images/bara.png');?>" width="350px" height="10px" alt="">
        <h3>TECHNO.RO</h3>
        <img src="<?php echo url('images/web.png');?>" width="20px" alt="Proiect logo">
        <h1>Full website</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore laboriosam nobis, unde in, deleniti quo
            pariatur fuga molestiae accusamus inventore consequuntur vitae excepturi dignissimos soluta, nihil adipisci
            doloremque. Autem, veniam.</p>
    </div>

    <div>
        <img src="<?php echo url('images/bara.png');?>" width="350px" height="10px" alt="">
        <h3>XOP.RO</h3>
        <img src="<?php echo url('images/web.png');?>" width="20px" alt="Proiect logo">
        <h1>Branding & catalog</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore laboriosam nobis, unde in, deleniti quo
            pariatur fuga molestiae accusamus inventore consequuntur vitae excepturi dignissimos soluta, nihil adipisci
            doloremque. Autem, veniam.</p>
    </div>

    <div>
        <img src="<?php echo url('images/bara.png');?>" width="350px" height="10px" alt="">
        <h3>ONOH.RO</h3>
        <img src="<?php echo url('images/web.png');?>" width="20px" alt="Proiect logo">
        <h1>Full website</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore laboriosam nobis, unde in, deleniti quo
            pariatur fuga molestiae accusamus inventore consequuntur vitae excepturi dignissimos soluta, nihil adipisci
            doloremque. Autem, veniam.</p>
    </div>
</section>

<section id="contact">
    <h3>Contacteaza-ma pentru orice detalii</h3>
    <article>
        <div class="contact-info">
            <h3>Informatii de contact:</h3>
            <h4>Adresa postala</h4>
            <p>Strada Vasile Goldis nr.9, ap.12, Alba Iulia, jud.Alb</p>
            <p><b>Tel : </b>0730671185</p>
            <p><b>Email : </b>dariusgabrielcindea@gmail.com</p>
            <h4>Social media:</h4>
            <div>
                <img src="<?php echo url('images/insta.png');?>" alt="icon" width="30" height="30">
                <img src="<?php echo url('images/facebook.png');?>" alt="icon" width="30" height="30">
                <img src="<?php echo url('images/linkedin.png');?>" alt="icon" width="30" height="30">
            </div>

        </div>

        <div class="contact-form">
            <h3>Scrie un mesaj aici:</h3>
            <form>
                <label for="name">Nume:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="subiect">Subiect:</label>
                <select id="subiect" name="subiect">
                    <option value="General">General</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>

                <label for="message">Mesaj:</label>
                <textarea id="message" name="message" required></textarea>

                <button type="submit">Trimite</button>
            </form>
        </div>
    </article>
</section>

<footer id="footerul">
    <img src="<?php echo url('images/web.png');?>" width="50px" alt="Logo">
    <p>©2023.Design si implementare:Cindea Darius-Gabriel.All rights reserved</p>
</footer>
</body>
</html>
