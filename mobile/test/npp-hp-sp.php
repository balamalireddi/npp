<!DOCTYPE html>
    <!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
    <html class="no-js" lang="en" >
    <head>
    <?php include 'header.php'; ?>
    <title>Digital Privacy Notice - Create NPP for Health Plan - Español</title>
    </head>
      <body>

      <!-- body content here -->
  <div class="row">
    <div class="row" id="pageTop"></div>
    <div class="large-12 columns">
 	<?php include 'topbarnav.php'; ?>

 <form id="mydpnForm" action="nppcreator.php" method="post">

    <div class="row" id="mainMsgRow" style="display:none">
      <div class="small-9 large-centered columns">
        <div data-alert="" class="alert-box radius text-center" id="mainMsgDiv"></div>
        <!-- div data-alert="" class="alert-box alert radius text-center" style="display:none" id="mainMsgAlert"></div -->
      </div>
    </div>

    <div class="row">
      <div class="medium-5 large-5 columns">
          <div class="panel callout radius">
            <div id="1-Stop">
              <label id="label-InstaA"><b>Instruction A:</b>
                <input type="text" id="instA" name="instA" placeholder="Insert the health plan's name" style="font-size:16px;font-weight:bold; height: 3.780rem !important;" tabindex="1" />
              </label>
              <small class="error" id="msg-InstaA" style="display:none">Insert the health plan's name</small>
            </div>
          </div>  
      </div>
      <div class="medium-7 large-7 columns">
          <div class="panel callout radius">
            <div id="2-Stop">
              <label><b>Instruction B:</b>
                <textarea id="instB" name="instB" placeholder="Insert the covered entity's address, web site and privacy official's phone, email address, and other contact information." rows="2"  tabindex="2"></textarea> 
              </label>
            </div>  
          </div>  
      </div>
    </div>

  <!-- Intro -->
  <div class="row collapse panel radius">
    <div class="medium-6 large-4 columns">
      <h4>Su información.</h4>
      <h4>Sus derechos.</h4>
      <h4>Nuestras responsabilidades.</h4>
    </div>
    <div class="medium-6 large-8 columns">
        <p>Esta notificación describe cómo puede utilizarse y divulgarse su información médica, y cómo puede acceder usted a esta información.<br><b> Revísela con cuidado.</b></p>
    </div>
  </div>

  <div class="row collapse">
    <div class="medium-6 large-9 columns">
      <p></p>
    </div>
  </div>   

  <!-- Your Rights -->
  <a name="your-rights"></a> 
  <span class="alert label radius" data-magellan-destination="your-rights" style="background:#ef5121"><h3>Sus derechos</h3></span>

  <section class="panel callout radius">

    <div class="row collapse">
      <div class="medium-12 large-12 columns">
      <p><b>Cuando se trata de su información médica, usted tiene ciertos derechos.</b> Esta sección explica sus derechos y algunas de nuestras responsabilidades para ayudarlo.</p>
      </div>
      <hr> 
    </div>

    <div class="row">
        <div class="medium-6 large-4 columns"><b>Recibir una copia de su historial médico y de reclamos</b></div>
        <div class="medium-6 large-8 columns">
          <ul class="disc">
            <li>Puede solicitar que le muestren o le entreguen una copia de su historial médico y reclamos y otra información médica que tengamos de usted. Pregúntenos cómo hacerlo.</li>
            <li>Le entregaremos una copia o un resumen de su historial médico y de reclamos, generalmente dentro de 30 días de su solicitud. Podemos cobrar un cargo razonable en base al costo.</li>
          </ul>  
        </div>
        <hr>
    </div>

    <div class="row">
        <div class="medium-6 large-4 columns"><b>Solicitarnos que corrijamos el historial médico y de reclamos</b></div>
        <div class="medium-6 large-8 columns">
          <ul class="disc">
            <li>Puede solicitarnos que corrijamos su historial médico y de reclamos si piensa que dichos historiales son incorrectos o están incompletos. Pregúntenos cómo hacerlo.</li>
            <li>Podemos decir "no" a su solicitud, pero le daremos una razón por escrito dentro de 60 días.</li>
          </ul>  
        </div>
        <hr>
    </div>

    <div class="row">
        <div class="medium-6 large-4 columns"><b>Solicitar comunicaciones confidenciales</b></div>
        <div class="medium-6 large-8 columns">
          <ul class="disc">
            <li>Puede solicitarnos que nos comuniquemos con usted de una manera específica (por ejemplo, por teléfono particular o laboral) o que enviemos la correspondencia a una dirección diferente.</li>
            <li>Consideraremos todas las solicitudes razonables y debemos decir “sí” si nos dice que estaría en peligro si no lo hacemos.</li>
          </ul>  
        </div>
        <hr>
    </div>

    <div class="row">
        <div class="medium-6 large-4 columns"><b>Solicitarnos que
limitemos lo que utilizamos o compartimos</b></div>
        <div class="medium-6 large-8 columns">
          <ul class="disc">
            <li>Puede solicitarnos que no utilicemos ni compartamos determinada información médica para el tratamiento, pago o para nuestras operaciones.</li>
            <li>No estamos obligados a aceptar su solicitud, y podemos decir "no" si esto afectara su atención.</li>
          </ul>  
        </div>
        <hr>
    </div>

    <div class="row">
        <div class="medium-6 large-4 columns"><b>Recibir una lista de
aquellos con quienes hemos compartido información</b></div>
        <div class="medium-6 large-8 columns">
          <ul class="disc">
            <li>Puede solicitar una lista (informe) de las veces que hemos compartido su información médica durante los seis años previos a la fecha de su solicitud, con quién la hemos compartido y por qué.</li>
            <li>Incluiremos todas las divulgaciones excepto aquellas sobre el tratamiento, pago y operaciones de atención médica, y otras divulgaciones determinadas (como cualquiera de las que usted nos haya solicitado hacer). Le
proporcionaremos un informe gratis por año pero cobraremos un cargo
razonable en base al costo si usted solicita otro dentro de los 12 meses.</li>
          </ul>  
        </div>
        <hr>
    </div>

    <div class="row">
        <div class="medium-6 large-4 columns"><b>Obtener una copia de
esta notificación de privacidad</b></div>
        <div class="medium-6 large-8 columns">
          <ul class="disc">
            <li>Puede solicitar una copia en papel de esta notificación en cualquier momento, incluso si acordó recibir la notificación de forma electrónica. Le
proporcionaremos una copia en papel de inmediato.</li>
          </ul>  
        </div>
        <hr>
    </div>

    <div class="row">
        <div class="medium-6 large-4 columns"><b>Elegir a alguien para
que actúe en su nombre</b></div>
        <div class="medium-6 large-8 columns">
          <ul class="disc">
            <li>Si usted le ha otorgado a alguien la representación médica o si alguien es su tutor legal, aquella persona puede ejercer sus derechos y tomar decisiones sobre su
información médica.</li>
            <li>••Nos aseguraremos de que la persona tenga esta autoridad y pueda actuar en su nombre antes de tomar cualquier medida.</li>
          </ul>  
        </div>
        <hr>
    </div>

     <div class="row">
        <div class="medium-6 large-4 columns"><b>Presentar una queja si
considera que se violaron sus derechos</b></div>
        <div class="medium-6 large-8 columns">
          <ul class="disc">
            <li>Si considera que hemos violado sus derechos, puede presentar una queja comunicándose con nosotros por medio de la información</li>
            <li>Puede presentar una queja en la Oficina de Derechos Civiles del Departamento de Salud y Servicios Humanos enviando una carta a: Department of Health and Human Services, 200 Independence Avenue, S.W., Washington, D.C. 20201, llamando al 1-800-368-1019 o visitando <a href="http://www.hhs.gov/ocr/privacy/hipaa/understanding/consumers/factsheets_spanish.html" style="font-size:14px"><b>www.hhs.gov/ocr/privacy/hipaa/understanding/consumers/factsheets_spanish.html</b></a> los últimos dos disponibles en español.</li>
            <li>No tomaremos represalias en su contra por la presentación de una queja.</li>
          </ul>  
        </div>
    </div>
  </section>

  <!-- Your Choices -->

  <a name="your-choices"></a> 
  <span class="alert label radius" data-magellan-destination="your-choices" style="background:#7cba01"><h3>Sus opciones</h3></span>

  <section class="collapse panel radius">
    <div class="row">
      <div class="medium-12 large-12 columns">  
        <p><b>Para determinada información médica, puede decirnos sus decisiones sobre qué compartimos.</b> Si tiene una preferencia clara de cómo compartimos su información en las situaciones descritas debajo, comuníquese con nosotros. Díganos qué quiere que hagamos, y seguiremos sus instrucciones.</p>
      </div>
       <hr> 
    </div>

    <div class="row">
      <div class="medium-6 large-4 columns"><b>En estos casos, tiene tanto el derecho como la opción de pedirnos que:</b></div>
      <div class="medium-6 large-8 columns">
        <ul class="disc">
          <li>Compartamos información con su familia, amigos cercanos u otras personas involucradas en el pago de su atención.</li>
          <li>Compartamos información en una situación de alivio en caso de una catástrofe.</li>
          <li>Contact you for fundraising efforts</li>
        </ul>
        <p><i>Si no puede decirnos su preferencia, por ejemplo, si se encuentra inconsciente, podemos seguir adelante y compartir su información si creemos que es para beneficio propio. También podemos compartir su información cuando sea necesario para reducir una amenaza grave e inminente a la salud o seguridad.</i></p>  
      </div>
      <hr>
   </div>

    <div class="row">
        <div class="medium-6 large-4 columns"><b>En estos casos, nunca compartiremos su información a menos que nos entregue un permiso por escrito:</b></div>
        <div class="medium-6 large-8 columns">
          <ul class="disc">
            <li>Propósitos de mercadeo.</li>
            <li>Venta de su información.</li>
          </ul>  
        </div>
        <hr>
    </div> 

  </section>

  <a name="our-uses"></a>
  <span class="alert label radius" data-magellan-destination="our-uses" style="background:#00a6f0"><h3>Nuestros usos y divulgaciones</h3></span>

  <section class="collapse panel callout radius">

    <div class="row">
      <div class="medium-12 large-12 columns">  
        <p><b>Por lo general, ¿cómo utilizamos o compartimos su información médica?</b><br> Por lo general, utilizamos o compartimos su información médica de las siguientes maneras.</p>
      </div>
       <hr> 
    </div>

   <div class="row">
      <div class="medium-2 large-2 columns"><b>Ayudar a administrar el tratamiento de atención médica que usted recibe</b></div>
      <div class="medium-5 large-5 columns">
        <ul class="disc">
          <li>Podemos utilizar su información médica y compartirla con otros profesionales que lo estén tratando.</li>
        </ul>  
      </div>
      <div class="medium-5 large-5 columns"><p><i><b>Ejemplo:</b>Un médico nos envía información sobre su diagnóstico y plan de tratamiento para que podamos organizar los servicios adicionales.</i></p></div>
      <hr>
    </div>

     <div class="row">
      <div class="medium-2 large-2 columns"><b>Dirigir nuestra organización</b></div>
      <div class="medium-5 large-5 columns">
        <ul class="disc">
          <li>Podemos utilizar y divulgar su información para dirigir nuestra organización y comunicarnos con usted cuando sea necesario.</li>
          <li><b>No se nos permite utilizar información genética para decidir si le proveemos cobertura y el precio de dicha cobertura.</b> Esto no se aplica a los planes de atención a largo plazo.</li>
        </ul>  
      </div>
      <div class="medium-5 large-5 columns"><p><i><b>Ejemplo:</b> Utilizamos su información médica para ofrecerle mejores servicios.</i></p></div>
      <hr>
    </div>

      <div class="row">
      <div class="medium-2 large-2 columns"><b>Pagar por sus servicios médicos</b></div>
      <div class="medium-5 large-5 columns">
        <ul class="disc">
          <li>Podemos utilizar y divulgar su información médica cuando pagamos por sus servicios médicos.</li>
        </ul>  
      </div>
      <div class="medium-5 large-5 columns"><p><i><b>Ejemplo:</b> Compartimos su información con su plan dental para coordinar el pago por su trabajo dental.</i></p></div>
      <hr>
    </div>

     <div class="row">
      <div class="medium-2 large-2 columns"><b>Administrar su plan</b></div>
      <div class="medium-5 large-5 columns">
        <ul class="disc">
          <li>Podemos divulgar su información médica a su patrocinador del plan médico para la administración del plan.</li>
        </ul>  
      </div>
      <div class="medium-5 large-5 columns"><p><i><b>Ejemplo:</b> Su compañía nos contrata para proveer un plan médico, y nosotros le proporcionamos a su compañía determinadas estadísticas para explicar las primas que cobramos.</i></p></div>
      <hr>
    </div>

     <div class="row">
      <div class="medium-12 large-12 columns">  
        <p><b>¿De qué otra manera podemos utilizar o compartir su información médica? </b>
          Se nos permite o exige compartir su información de otras maneras (por lo general, de maneras que contribuyan al bien público, como la salud pública e investigaciones médicas). Tenemos que reunir muchas condiciones legales antes de poder compartir su información con dichos propósitos. Para más información, visite: <a href="http://www.hhs.gov/ocr/privacy/hipaa/understanding/consumers/factsheets_spanish.html"><b>www.hhs.gov/ocr/privacy/hipaa/understanding/consumers/factsheets_spanish.html</b></a> disponible en español.
        </p>
      </div>
       <hr> 
    </div>

    <div class="row">
      <div class="medium-6 large-4 columns"><b>Ayudar con asuntos de salud pública y seguridad</b></div>
      <div class="medium-6 large-8 columns">
        <ul class="disc">
          <li>Podemos compartir su información médica en determinadas situaciones, como:
              <ul class="disc">
                <li>Prevención de enfermedades.</li>
                <li>Ayuda con el retiro de productos del mercado.</li>
                <li>Informe de reacciones adversas a los medicamentos.</li>
                <li>Informe de sospecha de abuso, negligencia o violencia doméstica.</li>
                <li>Prevención o reducción de amenaza grave hacia la salud o seguridad de alguien.</li>
              </ul>
          </li>
        </ul>  
      </div>
      <hr>
    </div>

    <div class="row">
      <div class="medium-6 large-4 columns"><b>Realizar investigaciones médicas</b></div>
      <div class="medium-6 large-8 columns">
        <ul class="disc">
          <li>Podemos utilizar o compartir su información para investigación de salud.</li>
        </ul>  
      </div>
      <hr>
    </div>

    <div class="row">
      <div class="medium-6 large-4 columns"><b>Cumplir con la ley</b></div>
      <div class="medium-6 large-8 columns">
        <ul class="disc">
          <li>Podemos compartir su información si las leyes federales o estatales lo requieren, incluyendo compartir la información con el Departamento de Salud y Servicios Humanos si éste quiere comprobar que cumplimos con la Ley de Privacidad Federal.</li>
        </ul>  
      </div>
      <hr>
    </div>

  <div class="row">
      <div class="medium-6 large-4 columns"><b>Responder a las solicitudes de donación de órganos y tejidos y trabajar con un médico forense o director funerario</b></div>
      <div class="medium-6 large-8 columns">
        <ul class="disc">
          <li>Podemos compartir su información médica con las organizaciones de procuración de órganos.</li>
          <li>Podemos compartir información médica con un oficial de investigación forense, médico forense o director funerario cuando un individuo fallece.</li>
        </ul>  
      </div>
      <hr>
  </div>

  <div class="row">
      <div class="medium-6 large-4 columns"><b>Tratar la compensación de trabajadores, el cumplimiento de la ley y otras solicitudes gubernamentales</b></div>
      <div class="medium-6 large-8 columns">
        <ul class="disc">
            <li>Podemos utilizar o compartir su información médica:
                <ul class="disc">
                  <li>En reclamos de compensación de trabajadores.</li>
                  <li>A los fines de cumplir con la ley o con un personal de las fuerzas de seguridad.</li>
                  <li>Con agencias de supervisión sanitaria para las actividades autorizadas por ley.</li>
                  <li>En el caso de funciones gubernamentales especiales, como los servicios de protección presidencial, seguridad nacional y servicios militares.</li>
                </ul>
            </li>
        </ul>      
      </div>
      <hr>
  </div>

  <div class="row">
      <div class="medium-6 large-4 columns"><b>Responder a demandas y acciones legales</b></div>
      <div class="medium-6 large-8 columns">
        <ul class="disc">
          <li>Podemos compartir su información médica en respuesta a una orden administrativa o de un tribunal o en respuesta a una citación.</li>
        </ul>  
      </div>
      
  </div>

  <div class="row">
      <div class="medium-12 large-12 columns">
        <div id="3-Stop">
          <textarea id="instC" name="instC" placeholder="Instruction C: Insert any special nots that apply to your entity's practices such as 'we do not create or manage a hospital directory' or 'we do not create or maintain psychotherapy notes at this practice.'" rows="3" tabindex="3" ></textarea>
        </div>  
      </div>
      <hr>
  </div>

  <div class="row">
      <div class="medium-12 large-12 columns">
        <div id="4-Stop">
          <textarea id="instD" name="instD" placeholder="Instruction D: The Privacy Rule requires you to describe any state or other laws that require greater limits on disclosures. For example, 'we will never share any substance abuse treatment records without your written permission.' Insert this type of information here. If no laws with greater limits apply to your entity, no information needs to be added." rows="3"  tabindex="4" ></textarea>
        </div>  
      </div>
      <hr>
  </div>

    <div class="row">
      <div class="medium-12 large-12 columns">
        <div id="5-Stop">
          <textarea id="instE" name="instE" placeholder="Instruction E: If your entity provides patients with access to their health information via the Blue Button Protocol, you may want to insert a reference to it here." rows="3" tabindex="5" ></textarea>
        </div>  
      </div>
      <hr>
  </div>

  </section>

  <!-- Our Responsibilities -->

  <a name="our-resp"></a>
  <span class="alert label radius" data-magellan-destination="our-resp" style="background:#ffb901"><h3>Nuestras responsabilidades</h3></span>

  <section class="collapse panel radius">

    <div class="row">
      <div class="medium-12 large-12 columns">  
        <ul class="disc">
          <li>Estamos obligados por ley a mantener la privacidad y seguridad de su información médica protegida.</li>
          <li>Le haremos saber de inmediato si ocurre un incumplimiento que pueda haber comprometido la privacidad o seguridad de su información.</li>
          <li> Debemos seguir los deberes y prácticas de privacidad descritas en esta notificación y entregarle una copia de la misma.</li>
          <li>No utilizaremos ni compartiremos su información de otra manera distinta a la aquí descrita, a menos que usted nos diga por escrito que podemos hacerlo. Si nos dice que podemos, puede cambiar de parecer en cualquier momento. Háganos saber por escrito si usted cambia de parecer.</li>
        </ul>
        <p>Para mayor información, visite: <a href="http://www.hhs.gov/ocr/privacy/hipaa/understanding/consumers/factsheets_spanish.html"><b>www.hhs.gov/ocr/privacy/hipaa/understanding/consumers/factsheets_spanish.html</b></a> disponible en español.</p>
            <p><b>Cambios a los términos de esta notificación</b><br> Podemos modificar los términos de esta notificación, y los cambios se aplicarán a toda la información que tenemos sobre usted. La nueva notificación estará disponible según se solicite, en nuestro sitio web, y le enviaremos una copia por correo.
        </p>
      </div>
       <hr> 
    </div>
    
    <div class="row" id="6-Stop">
      <div class="large-6 columns left">
          <input type="text" id="instF" name="instF" placeholder="Instruction F: Insert Effective Date of Notice here."  tabindex="6"/>
      </div>  
    </div>   
  </section>

  <section class="panel callout radius">
    <p><b>Esta Notificación de Prácticas de Privacidad se aplica a las siguientes organizaciones.</b></p>
    <div id="7-Stop">
      <textarea id="instG" name="instG" placeholder="Instruction G: If your entity is part of an OHCA(organized health care arrangement) that has agreed to a joint notice, use this space to inform your patients of how you share information within the ohca (such as for treatment, payment, and operations related to the OHCA). Also, describe the other entities covered by this notice and their service locations. For example, 'This notice applies to Grace Community Hospitals and Emergency Services Incorporated which operate the emrgency services within all Grace hospitals in the greater Dayton area." rows="5" tabindex="7" ></textarea>
    </div>   
  </section>

  <section class="panel radius">
    <div id="8-Stop">
      <textarea type="text" id="instH" name="instH" placeholder="Instruction H: Insert name or title of the privacy official (or other privacy contact) and his/her email address and phone number." tabindex="8"></textarea>
    </div>  
  </section>

  <section class="panel callout radius">
    <div class="row">
      <div class="large-10 columns left">
        <div id="9-Stop">
          <label>Enter Filename <i>(The file is saved as an HTML file. So you don't need to add a extension in the name)</i>
          </label>
        </div>  
      </div>
    </div>
        <div class="row">
      <div class="large-6 columns left">
          <input type="text" name="dpnFilename" id="dpnFilename" placeholder="Enter Filename" tabindex="9">
        </div>  
      </div>
      <div class="large-6 columns"> 
      </div>
    </div>
  </section>
<div ><br><br><br><br><br> </div>
  <section>
    <div class="row">    
        <div class="large-6 medium-6 small-6 columns">
            <a href="#" id="createnotice"  name="createnotice" class="button radius right" tabindex="11">Create Online Notice</a>
        </div>
        <div class="large-6 medium-6 small-6 columns">
          <a href="#" id="resetButton" class="button radius" tabindex="11">Reset</a>
        </div>
      </div> 
  </section>

   
</form>

    <!-- End Thumbnails -->
    </div>
  </div>
 
    <!-- Footer -->
      <footer class="row">
        <div class="large-12 columns">
          <hr />
          <div class="row">
            <div class="large-6 columns">
            </div>
          </div>
        </div>
      </footer>
 
    <!-- End Footer -->
 
    </div>
  </div>
       <?php include 'footer.php'; ?>
    </body>
    </html>