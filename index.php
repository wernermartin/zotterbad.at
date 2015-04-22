<?php require 'contact.php'; ?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="de"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="de"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="de"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="de"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Zotter - Bad &amp; Energie</title>
        <meta name="description" content="Zotter - Bad &amp; Energie">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="all.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 0px;
            }
        </style>
        <script src="modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- NAVIGATION -->    
    <ul class="nav nav-pills navbar-fixed-top nav-custom" id="main_navigation">
      <li class="dropdown"><a class="btn-nav nav-active" href="#carousel-content" role="button" data-slide-to="0" id="nav_home">Home</a></li>
      <li class="dropdown"><a class="btn-nav" href="#carousel-content" role="button" data-slide-to="1" id="nav_aboutzotter">&Uuml;ber Zotter</b></a></li>
      <li class="dropdown"><a class="btn-nav" href="#carousel-content" role="button" data-slide-to="2" id="nav_bath">Bad</b></a></li>
      <li class="dropdown"><a class="btn-nav" href="#carousel-content" role="button" data-slide-to="3" id="nav_energy">Energie</b></a></li>
      <li class="dropdown"><a class="btn-nav" href="#carousel-content" role="button" data-slide-to="4" id="nav_zotterpoints">Zotterpoints</a></li></li>
      <li class="dropdown"><a class="btn-nav" href="#carousel-content" role="button" data-slide-to="17" id="nav_news">Aktuelles</a></li></li>
    </ul>    
    <!-- !NAVIGATION -->

    <!-- Header & Carousel -->
    <div class="container-fluid nav-fix">
      <div class="row col-header">
        <div class="col-md-12">
          <div class="row">

            <!-- SUB-NAV SLIDER -->
            <div class="col-md-3 times">            
              <div id="carousel-sub-nav" class="carousel slide" data-ride="carousel" data-interval="false">
                <div class="carousel-inner carousel-sub-nav" id="sub_navigation">
                  <div class="item sub-nav active" id="subnav_home">                                
                  </div>
                  <!-- SUB-NAV - ABOUT US -->
                  <div class="item sub-nav" id="subnav_aboutzotter">
                      <span class="glyphicon glyphicon-chevron-right"></span> <a href="#carousel-content" data-slide-to="7">&Uuml;ber uns</a>
                      <br />
                      <span class="glyphicon glyphicon-chevron-right"></span> <a href="#carousel-content" data-slide-to="6">Mitarbeiter</a>
                      <br />
                      <span class="glyphicon glyphicon-chevron-right"></span> <a href="#carousel-content" data-slide-to="8">Kontakt</a>                    
                  </div>
                  <!-- ENDOF: SUB-NAV - ABOUT US -->
                  <!-- SUB-NAV - BATHROOM -->
                  <div class="item sub-nav" id="subnav_bath">
                      <span class="glyphicon glyphicon-chevron-right"></span> <a href="#carousel-content" data-slide-to="9">Das Zotterbad</a>
                      <br />
                      <span class="glyphicon glyphicon-chevron-right"></span> <a href="#carousel-content" data-slide-to="10">Badplanung</a>
                      <br />
                      <span class="glyphicon glyphicon-chevron-right"></span> <a href="#carousel-content" data-slide-to="11">Barrierefrei</a>
                      <br />
                      <span class="glyphicon glyphicon-chevron-right"></span> <a href="#carousel-content" data-slide-to="12">Das kleine Bad</a>
                      <br />
                      <span class="glyphicon glyphicon-chevron-right"></span> <a href="#carousel-content" data-slide-to="13">Wellness</a>
                      <br />
                      <span class="glyphicon glyphicon-chevron-right"></span> <a href="#carousel-content" data-slide-to="14">Wanne raus - Dusche rein</a>
                      <br />
                      <span class="glyphicon glyphicon-chevron-right"></span> <a href="#carousel-content" data-slide-to="15">Staubfrei Arbeiten</a>
                  </div>
                  <!-- ENDOF: SUB-NAV - BATHROOM -->
                  <!-- SUB-NAV - NEWS -->
                   <div class="item sub-nav" id="subnav_news">
                      <span class="glyphicon glyphicon-chevron-right"></span> <a href="#carousel-content" data-slide-to="17">RenoDeco</a>
                      <br />
                      <span class="glyphicon glyphicon-chevron-right"></span> <a href="#carousel-content" data-slide-to="18">Klima Design Wände</a>
                      <br /><br />
                      <span class="glyphicon glyphicon-chevron-right"></span> <a href="#carousel-content" data-slide-to="16">Bildergalerie</a>                  
                  </div>
                  <!-- ENDOF: SUB-NAV - NEWS -->
                </div>
              </div>
            </div>
            <!-- ENDOF: SUB-NAV SLIDER -->

            <!-- IMAGE SLIDER -->
            <div class="col-md-6">
                <div id="carousel-generic" class="carousel slide carousel-big" data-ride="carousel" data-interval="5000">
                <!-- INDICATORS -->
                <ol class="carousel-indicators">
                  <li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-generic" data-slide-to="2"></li>
                  <li data-target="#carousel-generic" data-slide-to="4"></li>
                </ol>
                <!-- ENDOF: INDICATORS -->
               
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="./img/main01.jpg" alt="...">
                    <div class="carousel-caption">
                        <h3>&nbsp;</h3>
                    </div>
                  </div>
                  <div class="item">
                    <img src="./img/main02.jpg" alt="...">
                    <div class="carousel-caption">
                        <h3>&nbsp;</h3>
                    </div>
                  </div>
                  <div class="item">
                    <img src="./img/main03.jpg" alt="...">
                    <div class="carousel-caption">
                        <h3>&nbsp;</h3>
                    </div>
                  </div>
                  <div class="item">
                    <img src="./img/main04.jpg" alt="...">
                    <div class="carousel-caption">
                        <h3>&nbsp;</h3>
                    </div>
                  </div>
                </div>
               
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-generic" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-generic" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
              </div>               
           </div><!-- ENDOF: IMAGE-Carousel -->
            <div class="col-md-3 logo">
            </div>
          </div>
        </div>
      </div>
      </div>
      <!-- CONTENT CAROUSEL -->
      <div class="container">
      <div class="col-md-12">
                <div id="carousel-content" class="carousel slide carousel-user" data-ride="carousel" data-interval="false">        
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <!-- HOME 0 -->
                  <div class="item active" data-active-slide="0">
                  <span id="xyz" data-sub-nav="home"></span>
                    <div class="row content">
                      <div class="col-md-4">
                        <h4>Zotter Bad: <p class="black">Das Bad aus einer Hand!</p></h4>
                        <p>
                          Wir modernisieren, erneuern und auch mit Teil-Modernisierungen liegen Sie bei uns richtig! Wir sind Ihr Komplettbadeinrichter vorwiegend im privaten Bereich -fix und fertig zu festen Preisen. Wir übernehmen die komplette Koordination und Beistellung sämtlicher Handwerker sowie Maurer, Fliesenleger, Maler, Elektriker, Tischler...<br />
                          Langjährige Erfahrung im Bereich Komplettbad-Modernisierung und entsprechende Referenzen sprechen für uns! Mit Bad &amp; Energie richten wir unseren Kunden Naherholungsgebiete in den eigenen vier Wänden.
                        </p>
                        <img src="./img/content01.jpg" alt="Zotter Bad &amp; Energie">
                      </div>
                      <div class="col-md-4">
                        <h4>Zotter Energie: <p class="black">Für die Umwelt und Ihr Budget!</p></h4>
                          <p>
                          Wir finden für Sie das optimale Heizsystem.
                          Heizung mit Biomasse, Wärmepumpen, Wand und Fußbodenheizung, sowie auch Wand und Deckenkühlung. Hochwertige Solar- oder Photovoltaikanlagen.
                          Höchste Qualität zum gerechten Preis und Erfahrung sind die Basis aller Überlegungen.
                          Seit über 40 Jahren sind wir ein verlässlicher Partner für viele zufriedene Kunden.
                        </p>
                        <img src="./img/content02.jpg" alt="Sauberkeit und Umweltbewusstsein">
                      </div>
                      <div class="col-md-4">
                        <h4>Kontinuierliche Verbesserung aller Prozesse<p class="black">&nbsp;</p></h4>
                          <p>
                          Wer nicht täglich versucht besser zu werden, hat aufgehört gut zu sein. Aus diesem Grunde werden in unserer Firma ständig alle Tätigkeiten mit dem Anspruch ausgeführt, diese für unseren Kunden zu verbessern. Für Hinweise unserer Kunden, Lieferanten und Partner zur Optimierung unserer Organisation sind wir dankbar.
                        </p>
                        <img src="./img/content03.jpg" alt="Kontinuierliche Verbesserung aller Prozesse">
                      </div>
                    </div>
                  </div>
                  <!-- !HOME -->
                  <!-- ABOUTZOTTER 1 -->
                  <div class="item">                    
                   <div class="row content">
                      <div class="col-md-4">
                        <h4>Kundenorientierung</h4>
                        <p>
                          Das Wohl unserer Kunden hat für unsere Firma oberste Priorität. Unsere Kunden sind die wichtigsten Personen in unserem Betrieb. Gemeinsam mit unserem Kunden erarbeiten wir eine optimale Lösung. Unsere umfassende und faire Beratung ist auf die Bedürfnisse des Kunden abgestimmt. Unsere Aussagen den Kunden gegenüber sind immer bindend. Wir wollen die Zeit und das Geld unserer Kunden nicht verschwenden. Auch nach der Auftragsabwicklung sind wir zu jeder Zeit zuverlässiger Ansprechpartner für unsere Kunden.
                        </p>
                        <img src="./img/aboutzotter_01.jpg" alt="Kunde ist K&ouml;nig">
                      </div>
                      <div class="col-md-4">
                        <h4><a href="#carousel-content" role="button" data-slide-to="6">Mitarbeiter</a></h4>
                          <p>
                          Kundenzufriedenheit fällt nicht vom Himmel, sondern muss täglich erarbeitet werden. Zufriedene und engagierte Mitarbeiter sind die Voraussetzung für zufriedene Kunden. Wir bieten unseren Mitarbeitern einen sicheren und auf gegenseitigem Vertrauen basierenden Arbeitsplatz, der ausreichend Handlungsspielraum und Gestaltungsmöglichkeiten bietet. Unsere Mitarbeiter werden gut aus- und weitergebildet, um die erworbenen Kenntnisse beim Kunden einzusetzen. Wir sind uns der sozialen Verantwortung für unsere Mitarbeiter bewusst.
                        </p>
                        <img src="./img/aboutzotter_02.jpg" alt="Zotter - Mitarbeiter">
                      </div>
                      <div class="col-md-4">
                        <h4>Qualit&auml;t ist kein Zufall</h4>
                          <p>
                          Für unsere Kunden setzen wir ausschließlich hochwertige Produkte von Marktführern und Spezialisten ein, mit denen wir in einem partnerschaftlichen Verhältnis stehen. Die Produkte unserer ausgewählten Lieferanten in Kombination mit unserem fachlichen Know-how und innovativen Ideen ermöglichen es uns, dem Kunden eine hochwertige Leistung zu bieten.
                        </p>
                        <img src="./img/aboutzotter_03.jpg" alt="Alles aus einer Hand">
                      </div>
                    </div>
                  </div>
                  <!-- ! ABOUTZOTTER 1 -->
                  <!-- BATH 2 -->
                  <div class="item">
                    <div class="row content">
                      <div class="col-md-4">
                        <h4><a href="#carousel-content" role="button" data-slide-to="7">Das Zotterbad:  Das Bad - aus einer – Hand</a></h4>
                        <p>
                          Es ist schon erstaunlich wie schnell das eigene Bad 25 oder sogar mehr Jahre Jubiläum feiert. Sie träumen von einem schönen großzügigen Bad mit Dampfdusche oder einer gemütlichen Badewanne. Doch wenn es an die Umsetzung geht, ist der Traum häufig schnell ausgeträumt, die Vorstellung oder Erfahrung ist oft das Ende der Renovierungswünsche. Deshalb gibt es für unsere Bad Kunden das " Zotterbad"! Das Bad - aus einer - Hand. Das bedeutet für Sie erhebliche Vorteile, weil Sie es nur mit einen Ansprechpartner zu tun haben. Sie brauchen sich nicht um die Koordinierung der verschiedenen Arbeiten kümmern. Das ist unser Knowhow und unser Job!
                        </p>                         
                        <h3>Machen Sie entspannt Urlaub – wir bauen währenddessen Ihr Traum Bad für Sie.</h3>
                        <br />
                        <img src="./img/bath_01.jpg" alt="Zotter Bad">
                      </div>
                      <div class="col-md-4">
                        <h4>Badplanung - individuell</h4>
                          <p>
                          Nachdem wir uns vor Ort mit Ihnen über ihre Bedürfnisse und Wünsche unterhalten haben, bieten wir Ihnen ein überzeugendes Angebot mit einer exakten Badplanung, mit farblich abgestimmten Gestaltungsmöglichkeiten wie Bodenbeläge, Fliesengestaltungen, Malereien, Beleuchtungsideen und vieles mehr. Wir haben uns auf die individuelle 3-D Planung spezialisiert und planen gemeinsam mit Ihnen Ihr Traum Bad, in dem sich jedes Familienmitglied wohl fühlt. In unseren Schauraum können die verschiedensten Materialmuster im Original kombiniert werden.<br />                          
                          Wir beraten Sie ehrlich und bieten Ihnen Qualität zum fairen Preis. Wir bedienen Sie mit exzellenten Service termingerecht.
                          </p>
                          <h3>Einen individuellen Badplanungs- &amp; Beratungstermin bei Ihnen zu Hause können Sie gerne unter <bold>04268/26 44</bold> vereinbaren.</h3>                 
                        
                        <img src="./img/bath_02.jpg" alt="3D Badplanung">
                      </div>
                      <div class="col-md-4">
                        <h4>Staubfrei Arbeiten</h4>                          
                          <p>                         
                            Zufriedene Kunden sind die beste Werbung für einen Handwerker. Um dies zu erreichen, arbeiten wir mit den innovativen „Staubfrei Arbeiten System“. Unsere Kunden legen die anfängliche Skepsis wegen eventueller Staubbelästigung schnell ab, wenn diese feststellen, dass beinahe staubfrei gearbeitet wird. 
                        </p>
                        <h3>Vertrauen Sie uns, wenn es um eine „saubere“ Badmodernisierung geht.</h3>
                        <br />
                        <img src="./img/bath_03.jpg" alt="Kontinuierliche Verbesserung aller Prozesse">
                      </div>
                    </div>
                  </div>                  
                  <!-- ! BATH -->
                  <!-- ENERGY 3 -->
                   <div class="item">
                    <div class="row content">
                      <div class="col-md-4 minheight450">
                        <h4>W&auml;rme- und Energieerzeugung</h4>
                        <p>
                          <bold>Damit der nächste Winter keine bösen Überraschungen bringt,</bold>
                          helfen wir Ihnen die optimale Heizung zu finden. Gemeinsam mit Ihnen streben wir nach maximaler Effizienz bei minimalen Energiekosten. Dabei stellen wir an die handwerkliche Umsetzung unserer Installations- und Montagearbeiten höchste Qualitätsansprüche. 
                          <br /><br />                       
                          Sie müssen uns vertrauen können, wenn es um eine der wichtigsten Lösungen für Ihre Gesundheit, Ihr Wohlbefinden und Ihre Brieftasche geht. Wir nehmen uns für Ihre Beratung und Planung Zeit! Es bleiben keine Wünsche offen und die Qualität der Dienstleistung ist mit nichts Anderem zu vergleichen.
                          <br /><br />
                          Die Möglichkeiten sind sehr vielfältig. Wir informieren Sie gerne umfassend über die ideale Lösung für Ihre spezifischen Anforderungen – für Neubau oder Sanierung.
                        </p>
                        <img src="./img/energy_01.jpg" alt="W&auml;rme- und Energieerzeugung">
                      </div>
                      <div class="col-md-4 minheight450">
                        <h4>W&auml;rme und K&auml;lteverteilung</h4>
                          <p>
                          Fußboden- Wandheizungen- oder Deckenkühlung bieten Heiz- und Kühllösungen, die mit anderen Heizsystemen so nicht zu verwirklichen sind. Fußboden- und Wandheizsysteme erfüllen höchste Ansprüche, keine optisch störenden Heizkörper, Energieeinsparung etc. sind nur einige der Vorteile.
                          <br />
                          Für uns steht das „Empfinden“ - der tatsächliche Komfort unserer Kunden - eindeutig im Vordergrund. Deswegen bieten alle Produkte die beste und absolut angenehme Strahlungswärme durch großflächige Temperaturflächen. So werden Fußböden, Wände, Dachschrägen oder Zimmerdecken zu sanft wärmenden „Wohlfühlflächen“, die fast unbemerkt für eine sensationelle Raumatmosphäre sorgen. Wir sind Ihr Experte in Sachen Wärme und Kälteverteilung.
                        </p>
                        <img src="./img/energy_02.jpg" alt="W&auml;rme und K&auml;lteverteilung">
                      </div>
                      <div class="col-md-4 minheight450">
                        <h4>Solar und Photovoltaik</h4>
                          <p>
                          Die Nutzung der Sonnenenergie für Warmwasserbereitung und Raumheizung ist heute bereits eine ausgereifte Möglichkeit, den Verbrauch fossiler Energien zu reduzieren. Eine gut geplante und von professioneller Hand ausgeführte Solaranlage bereitet Warmwasser nicht nur an sonnigen Tagen. Eine Solaranlage zeichnet Komfort und Betriebssicherheit, günstige Betriebskosten, keinerlei Schadstoffemissionen und eine lange Lebensdauer aus!
                          <br />
                          <bold>Eine Solaranlage bedeutet ein Stück Unabhängigkeit, denn die Sonne scheint kostenlos.</bold>

                          Eine <bold>Photovoltaikanlage</bold> wandelt die Sonnenenergie durch den photoelektrischen Effekt in Solarzellen in Photovoltaik Modulen mit Hilfe eines Wechselrichters nutzbaren Strom um - dank staatlich garantierter Förderung in Form der Einspeisevergütung (bei Einspeisung ins Stromnetz) und der Möglichkeit zum Eigenverbrauch des erzeugten Solarstroms ist die Investition in Solaranlagen nicht nur nachhaltig, sondern in den meisten Fällen auch wirtschaftlich rentabel.
                        </p>
                        <img src="./img/energy_03.jpg" alt="Solar und Photovoltaik">
                      </div>
                    </div>
                  </div>
                  <!-- ENDOF: ENERGY -->
                  <!-- ZOTTERPOINTS 4 -->
                   <div class="item">
                    <div class="row content">
                      <div class="col-md-12">
                        <img src="./img/zotterpoints.jpg" alt="Zotterpoints">
                        <br /><br />
                        <p>
                          Gute Handwerker sind wie gute Ärzte, ihre Adressen gibt man nur den besten Freunden. Aus diesem Grund haben wir den wertvollen Tipp entwickelt. Ein Empfehlungs-Gutschein für einen Menschen mit dem Sie es gut meinen. Wir haben uns überlegt wie wir es machen könnten, dass nicht nur wir durch Ihre Empfehlung, sondern auch Sie von Ihrer Weiterempfehlung des Zotter-Teams profitieren. Deshalb haben wir für Ihre Weiterempfehlungen ein Punktesystem eingeführt. Für jeden Auftrag den Sie uns vermitteln bekommen Sie Zotter Points. 
                        </p>                        
                        <h4>1 Zotter Point ist € 200,- vermittelter Umsatz</h4>
                      </div>
                    </div>
                    <div class="row content">                      
                      <div class="col-md-4 reset">
                        <h4>Ab 100 Zotterpoints</h4>
                        <p>
                          Ein Abendessen für 2 Personen
                        </p>
                        <img src="./img/zotterpoints01.jpg" alt="Abendessen f&uuml;r 2 Personen">
                      </div>
                      <div class="col-md-4 reset">
                        <h4>Ab 200 Zotterpoints</h4>
                          <p>
                         Ein Wellness-Wochenende für zwei Personen in einem ****Hotel, in Österreich
                        </p>
                        <img src="./img/zotterpoints02.jpg" alt="Wellness Wochenende">
                      </div>
                      <div class="col-md-4 reset">
                        <h4>Ab 500 Zotterpoints</h4>
                          <p>
                          Eine Woche Urlaub für zwei Personen in einem ****Hotel, inklusive Flug, in Europa
                        </p>
                        <img src="./img/zotterpoints03.jpg" alt="Urlaub inklusive Flug">
                      </div>
                    </div>
                  </div>
                  <!-- ENDOF: ZOTTERPOINTS -->
                  <!-- NEWS 5 -->
                   <div class="item">
                    <div class="row content">
                      &nbsp;
                    </div>
                  </div>
                  <!-- ENDOF: NEWS -->
                  <!-- EMPLOYEES 6 -->
                  <div class="item">                                
                   <div class="row content">                      
                      <div class="col-md-2">
                        <a href="#" data-toggle="modal" data-target="#employee-01"><img src="./img/employee-01.jpg" alt="Roman Zotter" class="img-employee"></a>
                        <a href="#" data-toggle="modal" data-target="#employee-02"><img src="./img/employee-04.jpg" alt="Selina Zotter" class="img-employee"></a>
                        <a href="#" data-toggle="modal" data-target="#employee-03"><img src="./img/employee-07.jpg" alt="Stefan Pirzl" class="img-employee"></a>
                        <a href="#" data-toggle="modal" data-target="#employee-10"><img src="./img/employee-10.jpg" alt="" class="img-employee"></a>
                      </div>
                      <div class="col-md-2">                       
                        <a href="#" data-toggle="modal" data-target="#employee-04"><img src="./img/employee-02.jpg" alt="Hildegard Zotter" class="img-employee"></a>
                        <a href="#" data-toggle="modal" data-target="#employee-05"><img src="./img/employee-05.jpg" alt="Roland Schlintl" class="img-employee"></a>
                        <a href="#" data-toggle="modal" data-target="#employee-06"><img src="./img/employee-08.jpg" alt="Christoph Sabitzer" class="img-employee"></a>
                        <img src="./img/employee-empty.jpg" alt="" class="img-employee">
                      </div>
                      <div class="col-md-2">                       
                        <a href="#" data-toggle="modal" data-target="#employee-07"><img src="./img/employee-03.jpg" alt="Melanie Zotter" class="img-employee"></a>
                        <a href="#" data-toggle="modal" data-target="#employee-08"><img src="./img/employee-06.jpg" alt="Michael Baumschlager" class="img-employee"></a>
                        <a href="#" data-toggle="modal" data-target="#employee-09"><img src="./img/employee-09.jpg" alt="Meinhard Pichler" class="img-employee"></a>
                        <img src="./img/employee-empty.jpg" alt="" class="img-employee">
                      </div>
                      <div class="col-md-2">                    
                      </div>
                      <div class="col-md-4">
                        <p>
                          "Einer kann nicht alles", besagt eine alte Volksweisheit Und daher ist es umso wichtiger, dass alle eines können: Zusammenarbeiten! Darauf setzen wir, aufgrund unserer unterschiedlichen Interessen und Erfahrungen ergänzt sich das Team von Roman Zotter ideal. Die individuellen Schwerpunkte unserer Mitarbeiter zu nutzen, ihre Kräfte zu bündeln und sie mit dem bestmöglichen Werkzeugen sowie Material auszustatten, ist das A und 0 in unserem Unternehmen. Für unsere Kunden bedeutet das: Sie erhalten das geballte Teamm Wissen und können sich darauf verlassen, dass wir die unterschiedlichsten Aufträge stets zuverlässig und kompetent zu Ihrer vollsten Zufriedenheit erfüllen. Nur weil wir gemeinsam unser Bestes geben, sind wir so erfolgreich. Den großen Erfolg haben wir unserer perfekten Arbeitsweise und unserem großartigen Fachwissen zu verdanken. Wir sind dankbar, euch als Mitarbeiter und Freunde zu haben. Schön, dass es euch gibt - danke für eure Treue.
                        </p>
                      </div>                      
                    </div>
                  </div>
                  <!-- END: EMPLOYEES -->
                  <!-- ABOUTUS 7 -->
                  <div class="item">                    
                   <div class="row content">                      
                      <div class="col-md-8">                       
                        <h4>Firmenchronologie, -Philosophie und Leistungsumfang</h4>
                        <p>
                        Die Firma Zotter wurde 1970 von Roman Zotter Senior gegründet.
                        </p>
                        <p>
                        Nach erfolgreich abgelegter Konzessionsprüfung für das Gewerbe der Gas- und Wasserleitungsinstallation ist Roman Zotter Junior seit 1990 Betriebsinhaber und hat danach auch die Meisterprüfung für Zentralheizungsbauer erfolgreich abgelegt.
                        </p>
                        <p>
                        1992 zog das Unternehmen in die Olsastraße 6 in Friesach. Nach kontinuierlichem Aufwärtstrend in den 90er-Jahren hat sich der Personalstand auf sieben Mitarbeiter eingependelt. Es werden ständig Lehrlinge ausgebildet und konsequent Fortbildungsmaßnahmen durchgeführt um guten Mitarbeiterstamm zu gewährleisten.
                        </p>
                        <p>
                        Im Jahr 2010 zog das Unternehmen in das selbst geplante und neu gebaute Geschäftsgebäude in die Solarstrasse 1. Das neue Geschäftsgebäude wurde mit einem großzügigen Schauraum versehen, dessen Sortiment mit exklusiven Badmöbel und ausgesuchten Fliesenkeramiken ausgestattet ist. Im hinteren Bereich des Gebäudes  befinden sich Lagerräume. Zudem bietet der Besprechungsbereich im Schauraum sowie im Büro ideale Voraussetzungen um Kundentermine, sowie Planungsbesprechungen durchzuführen.
                        </p>
                        <p>
                        Wir beraten, planen, installieren und modernisieren seit über 40 Jahren mit dem Bestreben, Anlagen von höchster Qualität zu bauen. Unsere Stärken sind neben fachlicher Kompetenz Terminsicherheit, Preissicherheit, prompter Service und Leistungen „Alles aus einer Hand“
                        </p>
                      </div>
                      <div class="col-md-4">
                        <img src="./img/aboutus_outside.jpg" alt="Aussenansicht des Betriebs">
                      </div>                                        
                    </div>                    
                  </div>
                  <!-- END: ABOUTUS 7 -->
                  <!--  CONTACT FORM 8 -->
                  <div class="item">                    
                   <div class="row content">
                      <div class="col-lg-6">
                        <br />
                        <h4>IMPRESSUM</h4>
                          <address>
                            Zotter - Bad &amp; Energie<br>
                            9360 Friesach</a><br>
                            Tel.: +43 (0)4268 / 26 44<br>
                            Tel.: +43 (0)4268 / 26 44 - 44
                          </address>                            
                          Für den Inhalt verantwortlich: Firma Zotter Bad &amp; Energie GmbH<br />
                          Geschäftsführer: Roman Zotter<br />
                          E-Mail: <a href="mailto:zotter@zotterbad.at">zotter@zotterbad.at</a><br /><br />
                          Konzept, Design &amp; Entwicklung: <a href="http://www.kopf-kunst.at" taget="_blank">Kahlbacher Events &amp; Fotografie</a>
                          <br /><br />
                          Programmierung: <a href="http://www.martinwerner.at" taget="_blank">Martin Werner – Medientechnik www.martinwerner.at</a>
                          <br /><br />
                          Bildernachweis: Bilder © Fotolia, Kevin Kahlbacher und diverse. <br /><br />
                          <p>
                          Verwendung der Bilder ohne Zustimmung ist verboten und strafbar! Wir übernehmen keine Haftung für die Inhalte externer Links. Für den Inhalt der verlinkten Seiten sind ausschließlich deren Betreiber verantwortlich. Urheberrechtliche Hinweise: Der Inhalt dieser Website ist urheberrechtlich geschützt. Die Bereitstellung von Inhalten und Bildmaterial dieser Website auf anderen Websites ist nur mit ausdrücklicher Genehmigung von Herrn Roman Zotter, Geschäftsführer, 9360 Friesach oder Herrn Kevin Kahlbacher, 9300 St.Veit an der Glan, gestattet. Die auf der Website enthaltenen Angaben werden nach bestemWissen erstellt und mit großer Sorgfalt auf ihre Richtigkeit überprüft. Trotzdem sind inhaltliche und sachliche Fehler nicht vollständig auszuschließen. Herr Roman Zotter übernimmt deshalb keinerlei Garantie und Haftung für die Richtigkeit, Aktualität und Vollständigkeit der bereitgestellten Informationen. Alle Angaben sind ohne Gewähr. Dies gilt auch für alle Links zu anderen URL’s, die auf unserer Website genannt werden.<br />
                          </p>
                      </div>                   
                      <form class="form-horizontal" role="form" action="index.php" method="post" >
                        <div class="col-lg-6">
                          <div class="form-group">                            
                            <div class="col-sm-10">
                              <label for="InputName">Name</label>
                              <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Vorname Nachname" value="<?php echo htmlspecialchars($_POST['InputName']); ?>" required >
                              <?php echo "<p class='text-danger'>$errName</p>";?>
                            </div>
                          </div>
                          <div class="form-group">                            
                            <div class="col-sm-10">
                              <label for="InputEmail">Email</label>
                              <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Email Adresse" required  >
                              <?php echo "<p class='text-danger'>$errEmail</p>";?>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-10">                            
                              <label for="InputMessage">Nachricht</label>
                              <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" placeholder="Ihre Nachricht an uns." required></textarea>
                            </div>
                          </div>
                          <div class="form-group">                            
                            <div class="col-sm-10">
                              <label for="InputReal">4+3? (Spam Check)</label>
                              <input type="text" class="form-control" name="InputReal" id="InputReal" required>
                              <?php echo "<p class='text-danger'>$errHuman</p>";?>
                              
                              </div>
                          </div>
                          <input type="submit" name="submit" id="submit" value="Versenden" class="btn btn-info">
                          <div class="col-sm-10">
                            <div class="col-sm-10 col-sm-offset-2">
                                <?php echo $result; ?>
                            </div>
                          </div>

                        </div>
                      </form>                                                                                
                    </div>
                    <div class="row content">
                      
                    </div>
                  </div>
                  <!-- END: CONTACT FORM 8-->
                  <!--  ZOTTERBAD 9 -->
                  <div class="item">                    
                   <div class="row content">
                     <div class="col-md-4">
                          <h4>Zotter Bad: <p class="black">Das Bad aus einer Hand!</p></h4>
                          <p>
                            Unser Ziel ist es Ihnen eine neue Wohlfühl – Oase zu schaffen, in der Sie sich entspannen und ausruhen können. Dabei achten wir nicht nur auf Design und praxisorientierter Funktionalität, sondern bedenken auch zukünftige Bedürfnisse. Auch die Arbeitsschritte während des Umbaus oder der Errichtung Ihres Wohlfühl-Badezimmers, sollten für Sie zu keinem Stressfaktor werden. Wir wissen, dass zufriedene Kunden unser wertvollstes Kapital sind und wir sind überzeugt, dass wir das nur mit kompetenter Beratung und sauberer Ausführung erreichen. Als Premium-Baddesigner sind Melanie und Selina Zotter unter anderem auf individuelle Badplanung spezialisiert. Sie werden Augen machen - bei diesen detaillierten Planungen bleibt kein Wunsch offen. Unabhängig vom Budget kann so ein Bad gestaltet werden – indem Sie sich einfach wohl fühlen und vom stressigen Alltag abschalten können.
                          </p>
                          <h3>Machen Sie entspannt Urlaub – wir bauen währenddessen Ihr Traum Bad für Sie.</h3>
                          <!--<img src="./img/zotterbad-01.jpg" alt="Zotter Bad &amp; Energie">-->
                      </div>
                      <div class="col-md-4">                          
                          <img src="./img/zotterbad-02.jpg" alt="Zotterbad">
                          <img src="./img/zotterbad-03.jpg" alt="Zotterbad">
                      </div>
                      <div class="col-md-4">                          
                          <img src="./img/zotterbad-04.jpg" alt="Zotterbad">
                          <img src="./img/zotterbad-05.jpg" alt="Zotterbad">
                      </div>                 
                    </div>
                  </div><!-- END: ZOTTERBAD 9-->
                  <!--  PLANING 10 -->
                  <div class="item">                    
                   <div class="row content">
                     <div class="col-md-4">
                          <h4>Badplanung - individuell !</h4>
                          <p>
                            Ob  Familien-, Single- oder Wellnessbad, barrierefreies oder ein kleines Gäste Bad ... es ist nicht einfach, die richtigen Kombinationen für sein eigenes Bad zu finden.<br />
                            Deshalb haben wir uns darauf spezialisiert, für jeden Kundenwunsch das perfekte Traumbad zu planen.<br />
                            <br /> 
                            Unserer Meinung nach ist das Bad Mittelpunkt des privaten Lebensraums, der sich in Richtung Schlafen, Fitness und Wellness öffnen wird. Ein Traumbad soll Urlaubsgefühle wecken und versuchen, diese temporäre Gefühlswelt der Tiefenentspannung zu konservieren und wiederzubringen.<br />
                            <br /> 
                            Das private Badezimmer entwickelt sich stetig weiter zu einer Erholungswelt, die Platz bietet für die Gesundheitsvorsorge und ganz persönliche Baderituale. Als Teil einer intimen Wohnsphäre tanken die Menschen in ihrem Bad neue Lebensenergie und schaffen sich so einen Ort für mehr Lebensqualität. Mit anderen Worten: Urlaub im eigenen Bad. 
                          </p>
                          <!--<img src="./img/content01.jpg" alt="Zotter Bad &amp; Energie">-->
                      </div>
                      <div class="col-md-4">                          
                          <img src="./img/badplanung-02.jpg" alt="Badplanung">
                          <img src="./img/badplanung-03.jpg" alt="Badplanung">
                      </div>
                      <div class="col-md-4">                          
                          <img src="./img/badplanung-04.jpg" alt="Badplanung">
                          <img src="./img/badplanung-05.jpg" alt="Badplanung">
                      </div>          
                    </div>
                  </div><!-- END: PLANING 10 -->
                  <!--  BARRIERFREE 11 -->
                  <div class="item">                    
                   <div class="row content">
                     <div class="col-md-4">
                          <h4>Barrierefrei Leben ohne Einschränkung.</h4>
                          <h3>Vertrauen Sie uns, wenn es um eine „saubere“ Badmodernisierung geht.</h3>
                            <p>
                            Barrierefreies Wohnen gewinnt im Hinblick auf die Alterspyramide immer mehr an Bedeutung und stellt speziell bei der Badausstattung besondere Anforderungen.<br />
                            <br />
                            Während junge Menschen das Badezimmer immer intensiver auch zur Entspannung nutzen, bedeutet Baden oder Duschen für viele ältere Menschen eine erhebliche Anstrengung. Niemand ist davor gefeit, durch Krankheit oder einem Unfall seine Mobilität zu verlieren.<br />
                            <br />
                            Zotterbad baut Badezimmer, die speziell auf solche Bedürfnisse zugeschnitten sind und durch viele Details das Leben erleichtern. Bei uns gibt es eine große Auswahlmöglichkeit Ihr Badezimmer in einem schönen Design barrierefrei zu gestalten.<br />
                            <br />
                            Beim Seniorenbad geht es vor allem darum, dem Benutzer optimale Sicherheit und kleine Hilfen zu bieten, wie zum Beispiel ausreichend groß dimensionierte Haltegriffe und rutschfeste bodenebene Duschplatten sowie ausreichende Sitzmöglichkeiten. 
                          </p>
                          <!--<img src="./img/barrierefrei-01.jpg" alt="Barrierefrei">-->
                      </div>
                      <div class="col-md-4">                          
                          <img src="./img/barrierefrei-02.jpg" alt="Barrierefrei">
                          <img src="./img/barrierefrei-03.jpg" alt="Barrierefrei">
                      </div>
                      <div class="col-md-4">                          
                          <img src="./img/barrierefrei-04.jpg" alt="Barrierefrei">
                          <img src="./img/barrierefrei-05.jpg" alt="Barrierefrei">
                      </div>                    
                    </div>
                  </div><!-- END: BARRIERFREE 11 --> 
                  <!--  SMALLBATH 12 -->
                  <div class="item">                    
                   <div class="row content">
                     <div class="col-md-4">
                          <h4>Das Kleine Bad</h4>
                          <p class="bottom-padding-large">
                            Ihr Bad ist Klein, schmal, und vielleicht auch ohne Fenster – doch das ist noch lange kein Grund, das Bad stiefmütterlich zu behandeln. Auch kleine Badezimmer haben die Chance, groß rauszukommen, wenn man sie liebevoll und mit genügend Stauraum einrichtet. Kleine Badezimmer brauchen vor allem viel Stauraum, der gleichzeitig als Nutzfläche dient.  Kleine Badezimmer, die auch noch die Waschmaschine beherbergen müssen, können gar nicht schön aussehen? Aber klar doch. Man braucht nur eine kompetente fachgerechte Beratung vor Ort. 
                          </p>                          
                          <img src="./img/daskleinebad-01.jpg" alt="Zotter Bad &amp; Energie">
                      </div>
                      <div class="col-md-4">
                          <h4>Duschen &amp; Baden</h4>
                          <p class="bottom-padding-small">
                            Wer für gewöhnlich eine erfrischende Dusche bevorzugt, in der kalten Jahreszeit aber gemütliche Wannenbäder liebt, stand bislang vor dem Problem „entweder – oder“. Mittlerweile gibt es eine Lösung, die beides zulässt, Duschen und Baden. Die Großraum-Dusche kann in eine absolut dichte Wohlfühlwanne verwandelt werden. Ein All – inklusive Lösung für Ihr Bad. Ein überzeugendes Argument wenn Sie ein eher kleines Bad haben und trotzdem von einem feinen Wellnessbereich in Ihrem Bad träumen. Bei einer niedrigen Einstiegshöhe genießen Sie eine erfrischende Dusche oder ein herrlich entspannendes Vollbad.<br />
                            <br /> 
                            Die Devise: auf kleinstem Raum größtmöglichen Genuss und Spaß haben und Tiefenentspannung zu erreichen.
                          </p>                          
                          <img src="./img/daskleinebad-02.jpg" alt="Sauberkeit und Umweltbewusstsein">
                      </div>
                      <div class="col-md-4">                        
                          <img src="./img/daskleinebad-03.jpg" alt="Kontinuierliche Verbesserung aller Prozesse">
                          <img src="./img/daskleinebad-04.jpg" alt="Kontinuierliche Verbesserung aller Prozesse">
                      </div>                 
                    </div>
                  </div><!-- END: SMALLBATH 12 -->       
                  <!--  WELLNESS 13 -->
                  <div class="item">                    
                   <div class="row content">
                     <div class="col-md-4">
                          <h4>Wellness</h4>
                          <p>
                            Oft eilen wir durch unseren Alltag, finden wenig Ruhe und Entspannung. Deswegen ist es wichtig seine Energiereserven täglich zu füllen. Wellness Zuhause ist eine einfache und zeitsparende Möglichkeit dazu. Ob Sie nun Ihr Immunsystem in einem Dampfbad oder Sauna trainieren - in einem Whirlpool Ihre Rückenmuskulatur entspannen möchten - es gibt viele Einsatzmöglichkeiten für Ihr Bad. Auch in kleinen Räumen!<br />
                            <br />
                            Sie sehnen sich nach Wellness, Stressbewältigung, Erholung und Gesundheit?<br />
                            <br />
                            Gönnen Sie sich eine ganz bewusste Auszeit! Türe schließen und abtauchen - in Ihrem eigenen privaten Spa!
                          </p>                          
                          <!--<img src="./img/content01.jpg" alt="Zotter Bad &amp; Energie">-->
                      </div>
                      <div class="col-md-4">                          
                          <img src="./img/wellness-02.jpg" alt="Wellness">
                          <img src="./img/wellness-03.jpg" alt="Wellness">
                      </div>
                      <div class="col-md-4">                          
                          <img src="./img/wellness-04.jpg" alt="Wellness">
                          <img src="./img/wellness-05.jpg" alt="Wellness">
                      </div>                   
                    </div>
                  </div><!-- END: WELLNESS 13 -->
                  <!--  SWAP 14 -->
                  <div class="item">                    
                   <div class="row content">
                     <div class="col-md-4">
                          <h4>Wanne raus – Dusche rein</h4>
                          <p>
                            Sie benötigen mehr Platz im Bad und Sie möchten einen leichteren Einstieg in ihre Dusche? Wir bieten Ihnen eine Teilmodernisierung – und das ganz nach Ihren Wünschen und Bedürfnissen.<br />
                            Gerade für Senioren ist es wichtig, die Dusche bequem erreichen zu können. Deshalb sollte die Dusche möglichst ebenmäßig und ohne Rutschgefahr zu betreten sein. Abhilfe schafft hier der Austausch der vorhandenen Wanne gegen eine bequem erreichbare und barrierefreie Dusche mit niedrigem Zugang: 
                            Ohne viel Schmutz ersetzen wir Ihre alte Wanne oder Dusche durch eine neue Dusche -Barrierefrei, rutschhemmend, schnell und in zeitlosem Design.<br />
                            <br />
                            Die alte Dusche oder Badewanne wird entfernt, Rohre werden bei Bedarf neu verlegt.<br />
                            Boden, Decke und Fließen bleiben bestehen. Wir können die neue Dusche selbstverständlich so produzieren, dass diese die Öffnung Ihrer alten Dusche überdeckt oder er wird durch einen Klickboden ersetzt. <br />
                            Die Wände werden mit speziellen fugenlosen Patten verkleidet und die Wand Ihrer barrierefreien Dusche erscheint in neuem Glanz zudem ist sie noch superleicht zu pflegen und die perfekte Lösung zu ihrem System. Es ist daher nicht zwingend erforderlich, das ganze Badezimmer zu renovieren.
                          </p>                          
                          <!--<img src="./img/content01.jpg" alt="Zotter Bad &amp; Energie">-->
                      </div>
                      <div class="col-md-4">                          
                          <img src="./img/dusche-02.jpg" alt="Wanne raus - Dusche rein">
                          <img src="./img/dusche-03.jpg" alt="Wanne raus - Dusche rein">
                      </div>
                      <div class="col-md-4">                          
                          <img src="./img/dusche-04.jpg" alt="Wanne raus - Dusche rein">
                          <img src="./img/dusche-05.jpg" alt="Wanne raus - Dusche rein">
                      </div>                  
                    </div>
                  </div><!-- END: SWAP 14 -->
                  <!--  DUSTLESS 15 -->
                  <div class="item">                    
                   <div class="row content">
                     <div class="col-md-4">
                        <div class="content_element">
                          <h4>Staubfrei Arbeiten</h4>
                          <h3>Vertrauen Sie auf unser Knowhow, wenn es um eine „saubere“ Badmodernisierung geht.</h3>
                          <p>                            
                            Zufriedene Kunden sind die beste Werbung für einen Handwerker. Um dies zu erreichen, arbeiten wir mit den innovativen „Staubfrei Arbeiten System“. Unsere Kunden legen die anfängliche Skepsis wegen eventueller Staubbelästigung schnell ab, wenn diese feststellen, dass beinahe staubfrei gearbeitet wird.
                          </p>   
                        </div>                                               
                          <img src="./img/staubfrei-01.jpg" alt="Zotter Bad &amp; Energie">
                      </div>
                      <div class="col-md-4">
                        <div class="content_element">
                          <h4>Das „Staubfrei Arbeiten Konzept“: </h4>                          
                            <ul>
                              <li>Monteure tragen Überziehschuhe, bis das Schutzvlies ausgelegt ist.</li>
                              <li>Mit dem Schutzvlies werden die Böden und Treppen während der Bauarbeiten abgedeckt.</li>
                              <li>Der Türrahmenschutz sichert die wertvollen Türstöcke vor Beschädigung.</li>
                              <li>Mit der Staubschutztür wird sichergestellt, dass der Staub nicht in den Wohnbereich dringt.</li>
                              <li>Herzstück des "Staubfrei Arbeiten Konzepts“ sind die Luftreinigungsgeräte wie Staubschlucker, Staubabsaugung, Staubfresser und Airclean.</li>
                            </ul>
                          </div>                                
                          <img src="./img/staubfrei-02.jpg" alt="Sauberkeit und Umweltbewusstsein">
                      </div>
                      <div class="col-md-4">                        
                          <img src="./img/staubfrei-03.jpg" alt="Kontinuierliche Verbesserung aller Prozesse">
                          <img src="./img/staubfrei-04.jpg" alt="Kontinuierliche Verbesserung aller Prozesse">
                      </div>                 
                    </div>
                  </div><!-- END: DUSTLESS 15 -->
                  <!-- NEWS - GALLERY 16 -->
                  <div class="item">
                    <div class="row content">
                    <div class="col-md-4">                                      
                        <div class="newsitem">
                          <h4>Aktuelle Fotogalerien</h4>
                          <ul>
                            <li><a href="#">Eisstockschießen 2015</a></li>
                            <li><a href="#">Kart Rennen 2014</a></li>
                            <li><a href="#">20 Jahre Jubiläum Roland</a></li>
                            <li><a href="#">10 Jahre Jubiläum Michael</a></li>
                          </ul>
                          <br /><br />
                        </div>
                    </div>                    
                    <!-- IMAGE SLIDER -->
                    <div class="col-md-8">
                        <div id="carousel-gallery" class="carousel slide carousel-big" data-ride="carousel" data-interval="5000">
                        <!-- INDICATORS -->
                        <ol class="carousel-indicators">
                          <li data-target="#carousel-gallery" data-slide-to="0" class="active"></li>
                          <li data-target="#carousel-gallery" data-slide-to="1"></li>
                          <li data-target="#carousel-gallery" data-slide-to="2"></li>
                          <li data-target="#carousel-gallery" data-slide-to="4"></li>
                        </ol>
                        <!-- ENDOF: INDICATORS -->
                       
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                          <div class="item active">
                            <img src="./img/main01.jpg" alt="...">
                            <div class="carousel-caption">
                                <h3>&nbsp;</h3>
                            </div>
                          </div>
                          <div class="item">
                            <img src="./img/main02.jpg" alt="...">
                            <div class="carousel-caption">
                                <h3>&nbsp;</h3>
                            </div>
                          </div>
                          <div class="item">
                            <img src="./img/main03.jpg" alt="...">
                            <div class="carousel-caption">
                                <h3>&nbsp;</h3>
                            </div>
                          </div>
                          <div class="item">
                            <img src="./img/main04.jpg" alt="...">
                            <div class="carousel-caption">
                                <h3>&nbsp;</h3>
                            </div>
                          </div>
                        </div>
                       
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-gallery" role="button" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-gallery" role="button" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                      </div>               
                   </div><!-- ENDOF: IMAGE-Carousel -->
                    </div>
                    <div class="row content">
                    </div>
                  </div>
                  <!-- ENDOF: GALLERY 16 -->
                  <!-- NEWS - RenoDeco 17 -->
                  <div class="item">
                    <div class="row content">
                      <div class="col-md-4">                                      
                          <div class="newsitem">
                          <h4>RenoDeco</h4>
                          <p>
                            Kreative Wandgestaltung liegt im Trend. Setzen Sie Akzente oder zaubern Sie eine ganz neue Stimmung in Ihr Bad mit RenoDeco!
                            <br />
                            <h4>Was ist RenoDeco</h4>
                            <ul>
                              <li>Ideales Wandverkleidungsmaterial für die Teilrenovierung im Badezimmer</li>
                              <li>3 mm starke Aluminium-Verbundplatte mit einseitigem, digitalem Direktdruck</li>
                              <li>Hochwertige Oberflächenveredelung mit kratzfestem und UV-beständigem Strukturlack</li>
                              <li>Hygienisch-fugenlose Wandgestaltung mit pflegeleichter Oberfläche</li>
                              <li>Vielfältige Dekorpalette für die individuelle Badgestaltung</li>
                              <li>Schnelle Verkleidung großer Wandbereiche durch großformatige Platten (1000 o. 1500 mm Breite x 2550 mm Höhe)</li>
                              <li>Be- und Verarbeitung direkt vor Ort mit handelsüblichen Werkzeugen – ohne schmutzige Fliesenarbeiten</li>
                            </ul>
                          </p>
                        </div>
                      </div>
                    <div class="col-md-4"> 
                      <img src="img/news_renodeco_01.jpg" alt="RenoDeco"><br />
                      <img src="img/news_renodeco_02.jpg" alt="RenoDeco"><br />                      
                    </div> 
                    <div class="col-md-4">
                      <img src="img/news_renodeco_03.jpg" alt="RenoDeco"><br />
                      <img src="img/news_renodeco_04.jpg" alt="RenoDeco"><br />
                    </div>
                  </div>                    
                </div>
                <!-- ENDOF: NEWS RenoDeco 17-->
                <!-- NEWS - KlimaDesign 18 -->
                  <div class="item">
                    <div class="row content">
                    <div class="col-md-4">                                      
                          <div class="newsitem">
                          <h4>...WO IMMER SIE ANGENEHME STRAHLUNGSWÄRME BENÖTIGEN!</h4>
                          <p>
                            Ein wesentlicher Faktor beim Leben im Freien ist selbstverständlich das Wetter bzw. die Temperatur. Genau bei diesem springenden Punkt setzen Klima-Designwände von Harreither an: "Die Aufenthaltszeit des Menschen im Freien zu verlängern!" Vergessen sind Abende, die aufgrund sinkender Temperaturen viel zu früh endeten. Die mobilen Wohlfühlflächen bringen milde Strahlungswärme dorthin, wo sie gebraucht wird.
                            <br />
                            <bold>Flexibel, ästhetisch, gesund und wirtschaftlich.</bold>
                            <br />
                            <h3>MOBILE STRAHLUNGSWÄRME UND OPTISCHE REIZE FÜR BESONDERE STUNDEN IM FREIEN:</h3>
                            <ul>
                              <li>Rasch spürbare Behaglichkeit</li>
                              <li>Erhöhte Lebensqualität</li>
                              <li>Dreifaches Sommerfeeling</li>
                              <li>Modernes Design</li>
                              <li>Einfachst zu bedienen</li>
                              <li>Österreichisches Qualtitätsprodukt</li>
                              <li>CE-zertifiziert</li>
                            </ul>

                            <h3>DIE EINSATZBEREICHE DER KLIMA-DESIGNWÄNDE SIND VIELSEITIGST:</h3>
                            <ul>
                              <li>Privatbereich: Auf Gartenterrassen platziert, können Sie auch an kühleren Tagen oder Abenden die Zeit mit Familie und Freunden verbringen.</li>
                              <li>Gastronomie: Verwenden Sie die Klima-Designwand als behagliche Trennung in ihrem Gastgarten und forcieren Sie gleichzeitig ihre Marke mit einem individuellen Branding. Visualisieren Sie einfach nur Gemütlichkeit. Oder bieten Sie ihren rauchenden Gästen eine beheizte Lounge im Freien.</li>
                              <li>Eventbereich: Nützen Sie den Komfort, sowie die energiesparende Betriebsweise und gestalten Sie perfekte Wohlfühlbereiche im Freien oder in Zelten. Ihre Veranstaltungen werden als optisches und behagliches Erlebnis positioniert!</li>
                              <li>Die Anwendungen von Klima-Designwänden sind beinahe grenzenlos und bieten gestalterische Freiheiten für Erlebnisabende.</li>
                            </ul>
                          </p>
                          <br />
                        </div>
                    </div>
                    <div class="col-md-4"> 
                      <img src="img/news_klimadesign_01.jpg" alt="Klima Design W&auml;nde"><br />
                      <img src="img/news_klimadesign_02.jpg" alt="Klima Design W&auml;nde"><br />                      
                    </div> 
                    <div class="col-md-4">
                      <img src="img/news_klimadesign_03.jpg" alt="Klima Design W&auml;nde"><br />
                      <img src="img/news_klimadesign_04.jpg" alt="Klima Design W&auml;nde"><br />
                    </div>
                </div>
                <!-- ENDOF: NEWS KlimaDesign 18-->
                </div>
              </div> <!-- Carousel -->
           </div>
      </div>
      <!-- EMPLOYEE MODAL -->
      <div class="modal fade" id="employee-01" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Roman Zotter</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6">                  
                  <h4>Roman Zotter</h4>
                  <h3>Geschäftsführer</h3>
                  <p>Heizung-, Gas- und Wasserinstallationsmeister</p>
                  <p>Tel.: 04268 / 2644</p>
                  <p>E-Mail: <a href="mailto:zotter@zotterbad.at">zotter@zotterbad.at</a></p>
                </div>
                <div class="col-md-6">
                  <img src="./img/employee-01-large.jpg" alt="Roman Zotter">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 

      <div class="modal fade" id="employee-02" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Roman Schlintl</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6">                  
                  <h4>Roman Schlintl</h4>
                  <h3>Monteur</h3>
                  <p>&nbsp;</p>
                  <p>Tel.: 04268 / 2644</p>
                  <p>E-Mail: <a href="mailto:zotter@zotterbad.at">zotter@zotterbad.at</a></p>
                </div>
                <div class="col-md-6">
                  <img src="./img/employee-02-large.jpg" alt="Roman Schlintl">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="employee-03" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Stefan Pirzl</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6">                  
                  <h4>Stefan Pirzl</h4>
                  <h3>Monteur</h3>
                  <p>&nbsp;</p>
                  <p>Tel.: 04268 / 2644</p>
                  <p>E-Mail: <a href="mailto:zotter@zotterbad.at">zotter@zotterbad.at</a></p>
                </div>
                <div class="col-md-6">
                  <img src="./img/employee-03-large.jpg" alt="Stefan Pirzl">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="employee-04" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Melanie Zotter</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6">                  
                  <h4>Hildegard Zotter</h4>
                  <h3>Office, Buchhaltung, Rechnungslegung</h3>
                  <p>&nbsp;</p>
                  <p>Tel.: 04268 / 2644-1</p>
                  <p>E-Mail: <a href="mailto:h.zotter@zotterbad.at">h.zotter@zotterbad.at</a></p>
                </div>
                <div class="col-md-6">
                  <img src="./img/employee-04-large.jpg" alt="Hildegard Zotter">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 

      <div class="modal fade" id="employee-05" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Selina Zotter</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6">                  
                  <h4>Selina Zotter</h4>
                  <h3>Marketing &amp; Office, Bäderplanung</h3>
                  <p>Sanitär-Fachberaterin, Reparaturen-Annahme, Logistik</p>
                  <p>Tel.: 04268 / 2644-2</p>
                  <p>E-Mail: <a href="mailto:s.zotter@zotterbad.at">s.zotter@zotterbad.at</a></p>
                </div>
                <div class="col-md-6">
                  <img src="./img/employee-05-large.jpg" alt="Selina Zotter">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 

      <div class="modal fade" id="employee-06" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Michael Baumschlager</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6">                  
                  <h4>Michael Baumschlager</h4>
                  <h3>Monteur</h3>
                  <p>&nbsp;</p>
                  <p>Tel.: 04268 / 2644</p>
                  <p>E-Mail: <a href="mailto:zotter@zotterbad.at">zotter@zotterbad.at</a></p>
                </div>
                <div class="col-md-6">
                  <img src="./img/employee-06-large.jpg" alt="Placeholder">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 

      <div class="modal fade" id="employee-07" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Melanie Zotter</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6">                  
                  <h4>Melanie Zotter</h4>
                  <h3>Technikerin, Logistik &amp; Office</h3>
                  <p>Bäderplanung, Sanitär &amp; Heizungsfachberaterin</p>
                  <p>Tel.: 04268 / 2644-5</p>
                  <p>E-Mail: <a href="mailto:m.zotter@zotterbad.at">m.zotter@zotterbad.at</a></p>
                </div>
                <div class="col-md-6">
                  <img src="./img/employee-07-large.jpg" alt="Melanie Zotter">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 

      <div class="modal fade" id="employee-08" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content modal-lg">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Meinhard Pichler</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6">                  
                  <h4>Meinhard Pichler</h4>
                  <h3>Monteur</h3>
                  <p>&nbsp;</p>
                  <p>Tel.: 04268 / 2644</p>
                  <p>E-Mail: <a href="mailto:zotter@zotterbad.at">zotter@zotterbad.at</a></p>
                </div>
                <div class="col-md-6">
                  <img src="./img/employee-08-large.jpg" alt="Placeholder">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 

      <div class="modal fade" id="employee-09" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Christoph Sabitzer</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6">                  
                  <h4>Christoph Sabitzer</h4>
                  <h3>Monteur</h3>
                  <p>&nbsp;</p>
                  <p>Tel.: 04268 / 2644</p>
                  <p>E-Mail: <a href="mailto:zotter@zotterbad.at">zotter@zotterbad.at</a></p>
                </div>
                <div class="col-md-6">
                  <img src="./img/employee-09-large.jpg" alt="Christoph Sabitzer">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 

      <div class="modal fade" id="employee-10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Max Mustermann</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6">                  
                  <h4>Max Mustermann</h4>
                  <h3>Mitarbeiter</h3>
                  <p>Heizung-, Gas- und Wasserinstallationsmeister</p>
                  <p>Tel.: 04268 / 2644</p>
                  <p>E-Mail: <a href="mailto:zotter@zotterbad.at">zotter@zotterbad.at</a></p>
                </div>
                <div class="col-md-6">
                  <img src="./img/employee-10-large.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
      <!-- ENDOF: EMPLOYEE MODAL --> 

      
    </div> <!-- /container --> 
    <footer>
        <p>&copy; <a href="http://www.zotterbad.at">Zotter - Bad &amp; Energie 2015</a> - 9360 Friesach - Tel.: +43 (0)4268/26 44 - 0 - Fax: +43 (0)4268/26 44 - 44 - Email: <a href="mailto:office@zotterbad.at">office@zotterbad.at</a> -
        <a href="#carousel-content" data-slide-to="8">Impressum</a> - Grafik &amp; Design: <a href="http://www.kopf-kunst.at" target="_blank">KopfKunst</a></p>
    </footer>       
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="jquery-1.11.2.min.js"><\/script>')</script>
    <script src="bootstrap.min.js"></script>
    <script src="bootstrap-lightbox.min.js"></script>
    <script src="all.min.js"></script>
    <script src="//localhost:35729/livereload.js"></script>   

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--<script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>-->
    </body>
</html>
