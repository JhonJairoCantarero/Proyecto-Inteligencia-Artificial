

<html>
     <head><title>GPIO</title>
     </head>
            <style type="text/css">
                                   .div1
                                       {
                                       width: 28%;
                                       height: 78px;
                                       background-color:#1E90FF;
                                       margin: 0 auto;
                                       color: white;
                                       }


                                    .div2
                                       {
                                       width: 28%;
                                       height: 650px;
                                       background-color:#AABDB0;
                                       margin: 0 auto;
                                       color: white;
                                       font-weight: bold;
                                       }
				#imagen{
					width: 78%;
					}
				 #imagennn{
                                	width: 2%;
					left:57%;
					top:52%;
					position:absolute;
                                        }
			@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,600);
:root {
  --color__accent: #6200ee;

  --field__background: #f5f5f5;
  --field__background--hover: #e9e9e9;
  --input__border: rgba(0, 0, 0, 0.42);
  --input__border--hover: rgba(0, 0, 0, 0.62);
  --label__color: #222;

  --font__size: 16px;
  --font__family: Roboto, Arial, sans-serif;
}

.floating {
  margin-bottom: 2rem;
  background-color: var(--field__background);
  transition: background-color 0.2s ease;
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
}

.floating:hover,
.floating:focus-within {
  background-color: var(--field__background--hover);
}

.floating__input {
  padding: 1.8rem 1rem 0.6rem;
  font-size: 1rem;
  border-bottom: 0.1rem solid var(--input__border);
  transition: border-color 0.2s ease;
  caret-color: var(--color__accent);
}

.floating:hover .floating__input {
  border-color: var(--input__border--hover);
}

.floating__input::placeholder {
  color: rgba(0, 0, 0, 0);
}

.floating__label {
  display: block;
  position: relative;
  max-height: 0;
  font-weight: 500;
  pointer-events: none;
}

.floating__label::before {
  color: var(--label__color);
  content: attr(data-content);
  display: inline-block;
  filter: blur(0);
  backface-visibility: hidden;
  transform-origin: left top;
  transition: transform 0.2s ease;
  left: 1rem;
  position: relative;
}

.floating__label::after {
  bottom: 1rem;
  content: "";
  height: 0.1rem;
  position: absolute;
  transition: transform 180ms cubic-bezier(0.4, 0, 0.2, 1),
    opacity 180ms cubic-bezier(0.4, 0, 0.2, 1), background-color 0.3s ease;
  opacity: 0;
  left: 0;
  top: 100%;
  margin-top: -0.1rem;
  transform: scale3d(0, 1, 1);
  width: 100%;
  background-color: var(--color__accent);
}

.floating__input:focus + .floating__label::after {
  transform: scale3d(1, 1, 1);
  opacity: 1;
}

.floating__input:placeholder-shown + .floating__label::before {
  transform: translate3d(0, -2.2rem, 0) scale3d(1, 1, 1);
}

.floating__label::before,
.floating__input:focus + .floating__label::before {
  transform: translate3d(0, -3.12rem, 0) scale3d(0.82, 0.82, 1);
}

.floating__input:focus + .floating__label::before {
  color: var(--color__accent);
}


body {
  display: flex;
  align-items: center;
  padding: 1rem 3rem;
  max-width: 40rem;
  margin: 0 auto;
  font-family: var(--font__family);
  font-size: var(--font__size);
  font-weight: 400;
  min-height: 100vh;
}

fieldset {
  padding: 3rem 2rem 1.5rem;
}

legend {
  padding: 0 0.5rem;
}

html {
  box-sizing: border-box;
  background: #AABDB0 ;
}

*,
*:before,
*:after {
  box-sizing: inherit;
}

.hidden--visually {
  border: 0;
  clip: rect(1px 1px 1px 1px);
  clip: rect(1px, 1px, 1px, 1px);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
}

.button {
  background: var(--color__accent);
  border-width: 0;
  color: #fff;
  display: block;
  width: 100%;
  padding: 1rem 2rem;
  font-weight: 600;
  font-size: 1.25rem;
  text-transform: uppercase;
  letter-spacing: 1px;
}

.form {
  background-color: #fff;
  padding: 2rem 3rem 4rem;
  box-shadow: 2px 2px 16px 3px rgba(0, 0, 0, 0.4);
}
input[type=submit] {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 7px 15px;
  text-decoration: none;
  cursor: pointer;
}


          </style>

<body>
<div class="form">
<center>  <h2>CONTROL DE PLACA </h2>
           <?php
                $timezone=-24;
                $hora=gmdate("H:i:s", time()+3600*($timezone+date("I")-6));

                print "<h3>" . $hora . "</h3>"
           ?>
 <?php
                 echo '<img src="logo" id="imagen"\>';
           ?> 
</center>
  <br />

 <form name="myForm"  method="post" action="gpio.php">

<center>


 <input type="submit" id="foto" name="foto" value="Tomar Foto">
<br />
<br />
CAMARA HI <input type="text" id="horaini4" name="horaini4" value="" size="2">
          MI <input type="text" id="minini4" name="minini4" value="" size="2">
             <input type="submit" id="progf4" name="progf4" value="Aplicar">


</center>
<br />
  <center> FOCO1 <br />  <input type="submit" id="encender17" name="encender17" value="Encender">
           <input type="submit" id="apagar17" name="apagar17" value="Apagar" class"button">
           <br></br>
           FOCO2 <br /> <input type="submit" id="encender21" name="encender21" value="Encender">
                 <input type="submit" id="apagar21" name="apagar21" value="Apagar">
           <br></br>
           FOCO3 <br /> <input type="submit" id="encender27" name="encender27" value="Encender">
                 <input type="submit" id="apagar27" name="apagar27" value="Apagar">

</center>
           <br></br>
          FOCO1 HI <input type="text" id="horaini" name="horaini" value="" size="2">
          MI <input type="text" id="minini" name="minini" value="" size="2">
          HF <input type="text" id="horafin" name="horafin" value="" size="2">
          MF <input type="text" id="minifin" name="minifin" value="" size="2">
              <input type="submit" id="progf1" name="progf1" value="Aplicar">
          <br></br>
          FOCO2 HI <input type="text" id="horaini2" name="horaini2" value="" size="2">
          MI <input type="text" id="minini2" name="minini2" value="" size="2">
          HF <input type="text" id="horafin2" name="horafin2" value="" size="2">
          MF <input type="text" id="minifin2" name="minifin2" value="" size="2">
             <input type="submit" id="progf2" name="progf2" value="Aplicar">
         <br></br>
          FOCO3 HI <input type="text" id="horaini3" name="horaini3" value="" size="2">
          MI <input type="text" id="minini3" name="minini3" value="" size="2">
          HF <input type="text" id="horafin3" name="horafin3" value="" size="2">
          MF <input type="text" id="minifin3" name="minifin3" value="" size="2">
             <input type="submit" id="progf3" name="progf3" value="Aplicar">
               

</form>
             
           
</body>
</html>




          
          
