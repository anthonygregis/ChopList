<?php
use voku\helper\HtmlDomParser;

require_once 'vendor/autoload.php';

$text = <<<TEXT
<h2 style="text-align:center"><strong>COMPACTS</strong></h2>



<h3>Blista by Dinka</h3>



<p><strong>Influences:</strong>&nbsp;Hyundai i30, Honda Civic 3-door<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/blistaf.jpg" alt=""/></figure>



<h3>Dilettante by Karin</h3>



<p><strong>Influences:</strong>&nbsp;Toyota Prius, Honda Insight<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/dilettante1f.jpg" alt=""/></figure>



<h3>Issi by Weeny</h3>



<p><strong>Influences:</strong>&nbsp;Mini Cooper<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/issif.jpg" alt=""/></figure>



<h3>Panto by Benefactor</h3>



<p><strong>Influences:</strong>&nbsp;Smart Fortwo<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/pantof.jpg" alt=""/></figure>



<h3>Prairie by Bollokan</h3>



<p><strong>Influences:</strong>&nbsp;Hyundai Tiburon<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/prairief.jpg" alt=""/></figure>



<h3>Rhapsody by Declasse</h3>



<p><strong>Influences:</strong>&nbsp;AMC Pacer sides/rear, Volkswagen Golf front<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/rhapsodyf.jpg" alt=""/></figure>



<h2 style="text-align:center">COUPES</h2>



<h3>Cognoscenti Cabrio by Enus</h3>



<p><strong>Influences:</strong>&nbsp;Bentley Continental GT<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/cognoscenticabriof.jpg" alt=""/></figure>



<h3>Exemplar by Dewbauchee</h3>



<p><strong>Influences:</strong>&nbsp;Aston Martin Rapide<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/exemplarf.jpg" alt=""/></figure>



<h3>F620 by Ocelot</h3>



<p><strong>Influences:</strong>&nbsp;Maserati GranTurismo<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/f620f.jpg" alt=""/></figure>



<h3>Felon by Lampadati</h3>



<p><strong>Influences:</strong>&nbsp;Jaguar XF, Maserati Quattroporte<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/felonf.jpg" alt=""/></figure>



<h3>Felon GT by Lampadati</h3>



<p><strong>Influences:</strong>&nbsp;Jaguar XF, Maserati Quattroporte<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/felongtf.jpg" alt=""/></figure>



<h3>Jackal by Ocelot</h3>



<p><strong>Influences:</strong><br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/jackalf.jpg" alt=""/></figure>



<h3>Oracle by Ubermacht</h3>



<p><strong>Influences:</strong>&nbsp;BMW 7 Series<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/oracle1f.jpg" alt=""/></figure>



<h3>Oracle 2 by Ubermacht</h3>



<p><strong>Influences:</strong>&nbsp;BMW 7 Series, Acura RLX rear<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/oracle2f.jpg" alt=""/></figure>



<h3>Sentinel by Ubermacht</h3>



<p><strong>Influences:</strong>&nbsp;BMW 3 Series<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/sentinelf.jpg" alt=""/></figure>



<h3>Sentinel XS by Ubermacht</h3>



<p><strong>Influences:</strong>&nbsp;BMW M3<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/sentinelxsf.jpg" alt=""/></figure>



<h3>Windsor by Enus</h3>



<p><strong>Influences:</strong>&nbsp;Rolls Royce Wraith<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/windsorf.jpg" alt=""/></figure>



<h3>Windsor Drop by Enus</h3>



<p><strong>Influences:</strong>&nbsp;Rolls Royce Ghost<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/windsor2.jpg" alt=""/></figure>



<h3>Zion by Ubermacht</h3>



<p><strong>Influences:</strong>&nbsp;BMW 6 Series<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/zionf.jpg" alt=""/></figure>



<h3>Zion Cabrio by Ubermacht</h3>



<p><strong>Influences:</strong>&nbsp;BMW M6<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/zioncabriof.jpg" alt=""/></figure>



<h2 style="text-align:center">MOTORCYCLES</h2>



<h3>Akuma by Dinka</h3>



<p><strong>Influences:</strong><br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/akumaf.jpg" alt=""/></figure>



<h3>Avarus by LCC</h3>



<p><strong>Influences:</strong><br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/avarus.jpg" alt=""/></figure>



<h3>Bagger by Western Motorcycle Company</h3>



<p><strong>Influences:</strong><br><strong>Capacity:</strong>&nbsp;1</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/baggerf.jpg" alt=""/></figure>



<h3>Bati 801 by Pegassi</h3>



<p><strong>Influences:</strong>&nbsp;Ducati 848<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/bati801f.jpg" alt=""/></figure>



<h3>Bati 801RR by Pegassi</h3>



<p><strong>Influences:</strong>&nbsp;Ducati 1199<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/bati801rrf.jpg" alt=""/></figure>



<h3>BF400 by Nagasaki</h3>



<p><strong>Influences:</strong>&nbsp;KTM 450 Rally<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/bf400.jpg" alt=""/></figure>



<h3>Carbon RS by Nagasaki</h3>



<p><strong>Influences:</strong>&nbsp;Ducati 1199, EBR 1190RS<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/carbonrsf.jpg" alt=""/></figure>



<h3>Defiler by Shitzu</h3>



<p><strong>Influences:</strong>&nbsp;Suzuki Bandit 1200<br><strong>Capacity:</strong>&nbsp;1</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/diabolus-custom.jpg" alt=""/></figure>



<h3>Double-T by Dinka</h3>



<p><strong>Influences:</strong>&nbsp;Aprilia RSV4, Honda CBR1000RR<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/doubletf.jpg" alt=""/></figure>



<h3>Enduro by Dinka</h3>



<p><strong>Influences:</strong>&nbsp;Honda XL/XR/CB series<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/endurof.jpg" alt=""/></figure>



<h3>Esskey by Pegassi</h3>



<p><strong>Influences:</strong>&nbsp;Ducati Scrambler<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/esskey.jpg" alt=""/></figure>



<h3>Faggio by Pegassi</h3>



<p><strong>Influences:</strong>&nbsp;Vespa<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/faggiof.jpg" alt=""/></figure>



<h3>Faggio Mod by Pegassi</h3>



<p><strong>Influences:</strong>&nbsp;Vespa<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/faggio-mod.jpg" alt=""/></figure>



<h3>FCR 1000 by Pegassi</h3>



<p><strong>Influences:</strong>&nbsp;BMW R100<br><strong>Capacity:</strong>&nbsp;1</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/fcr-1000.jpg" alt=""/></figure>



<h3>FCR 1000 Custom by Pegassi</h3>



<p><strong>Influences:</strong>&nbsp;BMW R100<br><strong>Capacity:</strong>&nbsp;1</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/fcr-1000-custom.jpg" alt=""/></figure>



<h3>Gargoyle by Western Motorcycle Company</h3>



<p><strong>Influences:</strong>&nbsp;Indian 101 Scout hillclimber<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/gargoyle.jpg" alt=""/></figure>



<h3>Hakuchou by Shitzu</h3>



<p><strong>Influences:</strong>&nbsp;Suzuki Hayabusa<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/hakuchouf.jpg" alt=""/></figure>



<h3>Hakuchou Drag by Shitzu</h3>



<p><strong>Influences:</strong>&nbsp;Suzuki Hayabusa<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/hakuchou-drag-bike.jpg" alt=""/></figure>



<h3>Hexer by LCC</h3>



<p><strong>Influences:</strong>&nbsp;West Coast Choppers bikes<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/hexerf.jpg" alt=""/></figure>



<h3>Innovation by LCC</h3>



<p><strong>Influences:</strong>&nbsp;Custom<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/innovationf.jpg" alt=""/></figure>



<h3>Lectro by Principe</h3>



<p><strong>Influences:</strong>&nbsp;Ducati Streetfighter S, MV Agusta Brutale S<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x0/lectro.jpg" alt="lectro"/></figure>



<h3>Manchez by Maibatsu</h3>



<p><strong>Influences:</strong><br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/manchez.jpg" alt=""/></figure>



<h3>Nemesis by Principe</h3>



<p><strong>Influences:</strong>&nbsp;Ducati Monster/Hypermotard<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/nemesisf.jpg" alt=""/></figure>



<h3>Nightblade by Western Motorcycle Company</h3>



<p><strong>Influences:</strong>&nbsp;Harley Davidson Night Rod Special<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/nightblade.jpg" alt=""/></figure>



<h3>PCJ 600 by Shitzu</h3>



<p><strong>Influences:</strong><br><strong>Capacity:</strong>&nbsp;2<br><strong>Features:</strong><br><strong>Notes:</strong></p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/pcj600f.jpg" alt=""/></figure>



<h3>Rat Bike by Western Motorcycle Company</h3>



<p><strong>Influences:</strong>&nbsp;Harley-Davidson 1200<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/rat-bike.jpg" alt=""/></figure>



<h3>Ruffian by Pegassi</h3>



<p><strong>Influences:</strong><br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/ruffianf.jpg" alt=""/></figure>



<h3>Sanchez by Maibatsu</h3>



<p><strong>Influences:</strong><br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/sanchez2f.jpg" alt=""/></figure>



<h3>Sovereign by Western Motorcycle Company</h3>



<p><strong>Influences:</strong>&nbsp;Harley Davidson Electra Glide/Road King<br><strong>Capacity:</strong>&nbsp;1<br><strong>Features:</strong><br><strong>Notes:</strong>&nbsp;Independence Day Special</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/sovereignf.jpg" alt=""/></figure>



<h3>Thrust by Dinka</h3>



<p><strong>Influences:</strong>&nbsp;Honda CTX1300<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/thrustf.jpg" alt=""/></figure>



<h3>Vader by Shitzu</h3>



<p><strong>Influences:</strong><br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/vaderf.jpg" alt=""/></figure>



<h2 style="text-align:center">MUSCLE</h2>



<h3>Blade by Vapid</h3>



<p><strong>Influences:</strong>&nbsp;Ford Falcon/Fairlane<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/bladef.jpg" alt=""/></figure>



<h3>Buccaneer by Albany</h3>



<p><strong>Influences:</strong>&nbsp;Ford Fairlane, Buick Riviera<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/buccaneerf.jpg" alt=""/></figure>



<h3>Chino by Vapid</h3>



<p><strong>Influences:</strong>&nbsp;Ford LTD<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/dukeodeathf.jpg" alt=""/></figure>



<h3>Dukes by Imponte</h3>



<p><strong>Influences:</strong>&nbsp;Pontiac LeMans, Dodge Charger/Challenger<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/dukesf.jpg" alt=""/></figure>



<h3>Faction by Willard</h3>



<p><strong>Influences:</strong>&nbsp;Buick Regal<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/faction.jpg" alt=""/></figure>



<h3>Gauntlet by Bravado</h3>



<p><strong>Influences:</strong>&nbsp;Dodge Challenger, Chevy Camaro<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/gauntletf.jpg" alt=""/></figure>



<h3>Lurcher by Albany</h3>



<p><strong>Influences:</strong>&nbsp;Ford Fairlane, Buick Riviera<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/lurcher.jpg" alt=""/></figure>



<h3>Moonbeam by Declasse</h3>



<p><strong>Influences:</strong>&nbsp;GM vans<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/moonbeam.jpg" alt=""/></figure>



<h3>Nightshade by Imponte</h3>



<p><strong>Influences:</strong>&nbsp;Chevy Camaro, Pontiac GTO/Firebird<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/nightshade.jpg" alt=""/></figure>



<h3>Phoenix by Imponte</h3>



<p><strong>Influences:</strong>&nbsp;Pontiac Firebird, Chevy Camaro<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/phoenixf.jpg" alt=""/></figure>



<h3>Picador by Cheval</h3>



<p><strong>Influences:</strong>&nbsp;Chevy El Camino<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/picadorf.jpg" alt=""/></figure>



<h3>Ruiner by Imponte</h3>



<p><strong>Influences:</strong>&nbsp;Chevy Camaro, Pontiac Firebird<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/ruinerf.jpg" alt=""/></figure>



<h3>Sabre Turbo by Declasse</h3>



<p><strong>Influences:</strong>&nbsp;Chevrolet Chevelle, Oldsmobile Cutlass<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/sabref.jpg" alt=""/></figure>



<h3>Stallion by Classique</h3>



<p><strong>Influences:</strong>&nbsp;Oldsmobile Cutlass<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/stallion2f.jpg" alt=""/></figure>



<h3>Tampa by Declasse</h3>



<p><strong>Influences:</strong>&nbsp;Dodge Dart/Charger, Ford Mustang<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/tampa.jpg" alt=""/></figure>



<h3>Vigero by Declasse</h3>



<p><strong>Influences:</strong>&nbsp;Chevy Camaro, Plymouth Barracuda<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/vigerof.jpg" alt=""/></figure>



<h3>Virgo by Albany</h3>



<p><strong>Influences:</strong>&nbsp;Chrysler Newport, Lincoln Continental<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/virgof.jpg" alt=""/></figure>



<h3>Voodoo by Declasse</h3>



<p><strong>Influences:</strong>&nbsp;Chevy Impala<br><strong>Capacity:</strong>&nbsp;2<br></p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/voodoof.jpg" alt=""/></figure>



<h2 style="text-align:center">SEDANS</h2>



<h3>Asea by Declasse</h3>



<p><strong>Influences:</strong>&nbsp;Chevy Aveo/Sonic, Dacia Logan<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/aseaf.jpg" alt=""/></figure>



<h3>Asterope by Karin</h3>



<p><strong>Influences:</strong>&nbsp;Toyota Corolla<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/asteropef.jpg" alt=""/></figure>



<h3>Cognoscenti by Enus</h3>



<p><strong>Influences:</strong>&nbsp;Bentley Continental Flying Spur/Mulsanne, Maybach 57/62<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/cognoscenti.jpg" alt=""/></figure>



<h3>Cognoscenti 55 by Enus</h3>



<p><strong>Influences:</strong>&nbsp;Bentley Continental Flying Spur/Mulsanne<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/cognoscenti2.jpg" alt=""/></figure>



<h3>Emperor by Albany</h3>



<p><strong>Influences:</strong>&nbsp;Cadillac Fleetwood<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/emperorf.jpg" alt=""/></figure>



<h3>Fugitive by Cheval</h3>



<p><strong>Influences:</strong>&nbsp;Chevy SS<br><strong>Capacity:</strong>&nbsp;4<br></p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/fugitivef.jpg" alt=""/></figure>



<h3>Glendale by Benefactor</h3>



<p><strong>Influences:</strong>&nbsp;Mercedes-Benz E- and SL-class<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/glendalef.jpg" alt=""/></figure>



<h3>Ingot by Vulcar</h3>



<p><strong>Influences:</strong>&nbsp;Audi A6 Avant, Nissan Stagea<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/ingotf.jpg" alt=""/></figure>



<h3>Intruder by Karin</h3>



<p><strong>Influences:</strong>&nbsp;Infiniti Q45/I30<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/intruderf.jpg" alt=""/></figure>



<h3>Premier by Declasse</h3>



<p><strong>Influences:</strong>&nbsp;Chevy Cobalt, Chevy Aveo<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/premierf.jpg" alt=""/></figure>



<h3>Primo by Albany</h3>



<p><strong>Influences:</strong>&nbsp;Cadillac DeVille, Cadillac Allante<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/primof.jpg" alt=""/></figure>



<h3>Regina by Dundreary</h3>



<p><strong>Influences:</strong>&nbsp;Chevy Caprice wagon<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/reginaf.jpg" alt=""/></figure>



<h3>Schafter by Benefactor</h3>



<p><strong>Influences:</strong>&nbsp;Mercedes-Benz CL- and E-class<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/schafterf.jpg" alt=""/></figure>



<h3>Schafter LWB by Benefactor</h3>



<p><strong>Influences:</strong>&nbsp;Mercedes-Benz CL- and E-class<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/schafter4.jpg" alt=""/></figure>



<h3>Schafter V12 by Benefactor</h3>



<p><strong>Influences:</strong>&nbsp;Mercedes-Benz CL- and E-class<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/schafter3.jpg" alt=""/></figure>



<h3>Stanier by Vapid</h3>



<p><strong>Influences:</strong>&nbsp;Ford Crown Victoria<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/stanierf.jpg" alt=""/></figure>



<h3>Stratum by Zirconium</h3>



<p><strong>Influences:</strong>&nbsp;Honda Accord station wagon<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/stratumf.jpg" alt=""/></figure>



<h3>Stretch by Dundreary</h3>



<p><strong>Influences:</strong>&nbsp;Modified Lincoln Town Car<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/stretchf.jpg" alt=""/></figure>



<h3>Super Diamond by Enus</h3>



<p><strong>Influences:</strong>&nbsp;Rolls-Royce Phantom<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/superdiamondf.jpg" alt=""/></figure>



<h3>Surge by Cheval</h3>



<p><strong>Influences:</strong>&nbsp;Chevy Volt<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/surgef.jpg" alt=""/></figure>



<h3>Tailgater by Obey</h3>



<p><strong>Influences:</strong>&nbsp;Audi A6<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/tailgaterf.jpg" alt=""/></figure>



<h3>Stretch E by Benefactor</h3>



<p><strong>Influences:</strong>&nbsp;Mercedes-Benz CL- and E-class<br><strong>Capacity:</strong>&nbsp;5</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/limo2.jpg" alt=""/></figure>



<h3>Warrener by Vulcar</h3>



<p><strong>Influences:</strong>&nbsp;Nissan Skyline HGLC10<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/warrenerf.jpg" alt=""/></figure>



<h3>Washington by Albany</h3>



<p><strong>Influences:</strong>&nbsp;Lincoln Town Car<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/washingtonf.jpg" alt=""/></figure>



<h2 style="text-align:center">SPORTS</h2>



<h3>9F by Obey</h3>



<p><strong>Influences:</strong>&nbsp;Audi R8<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/9ff.jpg" alt=""/></figure>



<h3>9F Cabrio by Obey</h3>



<p><strong>Influences:</strong>&nbsp;Audi R8<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/9fcabriof.jpg" alt=""/></figure>



<h3>Alpha by Albany</h3>



<p><strong>Influences:</strong>&nbsp;Cadillac ATS, Maserati Quattroporte<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/alphaf.jpg" alt=""/></figure>



<h3>Banshee by Bravado</h3>



<p><strong>Influences:</strong>&nbsp;Dodge Viper<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/banshee2f.jpg" alt=""/></figure>



<h3>Bestia by Grotti</h3>



<p><strong>Influences:</strong>&nbsp;Ferrari FF/GTC4Lusso<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/bestiagts.jpg" alt=""/></figure>



<h3>Blista Compact by Dinka</h3>



<p><strong>Influences:</strong>&nbsp;Honda CR-X<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/blistacompactf.jpg" alt=""/></figure>



<h3>Buffalo by Bravado</h3>



<p><strong>Influences:</strong>&nbsp;Dodge Charger<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/buffalo1f.jpg" alt=""/></figure>



<h3>Buffalo S by Bravado</h3>



<p><strong>Influences:</strong>&nbsp;Dodge Charger<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/buffalo2f.jpg" alt=""/></figure>



<h3>Carbonizzare by Grotti</h3>



<p><strong>Influences:</strong>&nbsp;Ferrari California front, V12 Zagato rear<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/carbonizzaref.jpg" alt=""/></figure>



<h3>Comet by Pfister</h3>



<p><strong>Influences:</strong>&nbsp;Porsche 911<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/cometf.jpg" alt=""/></figure>



<h3>Coquette by Invetero</h3>



<p><strong>Influences:</strong>&nbsp;Corvette C7, Jaguar F-Type rear<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/coquette1f.jpg" alt=""/></figure>



<h3>Elegy Retro Custom by Annis</h3>



<p><strong>Influences:</strong>&nbsp;Nissan GT-R<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/elegy-retro-custom.jpg" alt=""/></figure>



<h3>Elegy RH8 by Annis</h3>



<p><strong>Influences:</strong>&nbsp;Nissan GT-R<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/elegyrh8f.jpg" alt=""/></figure>



<h3>Feltzer by Benefactor</h3>



<p><strong>Influences:</strong>&nbsp;Mercedes-Benz SL-class<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/feltzerf.jpg" alt=""/></figure>



<h3>Furore GT by Lampadati</h3>



<p><strong>Influences:</strong>&nbsp;Maserati GranTurismo MC &amp; Alfieri concept<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/furoregtf.jpg" alt=""/></figure>



<h3>Fusilade by Schyster</h3>



<p><strong>Influences:</strong>&nbsp;Chrysler Crossfire<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/fusiladef.jpg" alt=""/></figure>



<h3>Futo by Karin</h3>



<p><strong>Influences:</strong>&nbsp;Toyota AE86<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/futof.jpg" alt=""/></figure>



<h3>Go Go Monkey Blista (Compact) by Dinka</h3>



<p><strong>Influences:</strong>&nbsp;Honda CR-X<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/blistacompact2f.jpg" alt=""/></figure>



<h3>Jester by Dinka</h3>



<p><strong>Influences:</strong>&nbsp;Acura NSX<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/jesterf.jpg" alt=""/></figure>



<h3>Kuruma by Karin</h3>



<p><strong>Influences:</strong>&nbsp;Mitsubishi Lancer Evolution X, Subaru WRX STI<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x0/kuruma.jpg" alt="Kuruma"/></figure>



<h3>Massacro by Dewbauchee</h3>



<p><strong>Influences:</strong>&nbsp;Ferrari F12, Aston Martin Vanquish<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/massacrof.jpg" alt=""/></figure>



<h3>Omnis by Obey</h3>



<p><strong>Influences:</strong>&nbsp;Audi Quattro, Fiat 131 Rally<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/omnis.jpg" alt=""/></figure>



<h3>Penumbra by Maibatsu</h3>



<p><strong>Influences:</strong>&nbsp;Mitsubishi Eclipse, Audi TT<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/penumbraf.jpg" alt=""/></figure>



<h3>Rapid GT by Dewbauchee</h3>



<p><strong>Influences:</strong>&nbsp;Aston Martin Vantage<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/rapidgtf.jpg" alt=""/></figure>



<h3>Schwartzer by Benefactor</h3>



<p><strong>Influences:</strong>&nbsp;Mercedes-Benz CL- and C-class<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/schwartzerf.jpg" alt=""/></figure>



<h3>Sultan by Karin</h3>



<p><strong>Influences:</strong>&nbsp;Lexus IS, Mitsubishi Lancer Evo VI<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/sultanf.jpg" alt=""/></figure>



<h2 style="text-align:center">SPORTS CLASSIC</h2>



<h3>Manana by Albany</h3>



<p><strong>Influences:</strong>&nbsp;Buick LeSabre, Cadillac Eldorado<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/mananaf.jpg" alt=""/></figure>



<h3>Peyote by Vapid</h3>



<p><strong>Influences:</strong>&nbsp;Ford Thunderbird<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/peyotef.jpg" alt=""/></figure>



<h3>Pigalle by Lampadati</h3>



<p><strong>Influences:</strong>&nbsp;Citroen SM, Maserati Ghibli<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/pigallef.jpg" alt=""/></figure>



<h3>Tornado by Declasse</h3>



<p><strong>Influences:</strong>&nbsp;Chevy Bel Air<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/tornado3f.jpg" alt=""/></figure>



<h2 style="text-align:center">SUPER</h2>



<h3>811 by Pfister</h3>



<p><strong>Influences:</strong>&nbsp;Porsche 918<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/pfister811.jpg" alt=""/></figure>



<h3>Adder by Truffade</h3>



<p><strong>Influences:</strong>&nbsp;Bugatti SuperVeyron Concept<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/adderf.jpg" alt=""/></figure>



<h3>Banshee 900R by Bravado</h3>



<p><strong>Influences:</strong>&nbsp;Dodge Viper<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/banshee900r.jpg" alt=""/></figure>



<h3>Bullet by Vapid</h3>



<p><strong>Influences:</strong>&nbsp;Ford GT<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/bulletf.jpg" alt=""/></figure>



<h3>Infernus by Pegassi</h3>



<p><strong>Influences:</strong>&nbsp;Lamborghini Murcielago, Pagani Zonda<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/infernusf.jpg" alt=""/></figure>



<h3>Rocket Voltic by Coil</h3>



<p><strong>Influences:</strong>&nbsp;Lotus Elise, Tesla Roadster<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/rocket-voltic.jpg" alt=""/></figure>



<h3>Sultan RS by Karin</h3>



<p><strong>Influences:</strong>&nbsp;Lexus IS, Mitsubishi Lancer Evo V<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/sultanrs.jpg" alt=""/></figure>



<h3>Voltic by Coil</h3>



<p><strong>Influences:</strong>&nbsp;Lotus Elise, Tesla Roadster<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/volticf.jpg" alt=""/></figure>



<h2 style="text-align:center">SPORTS UTILITY</h2>



<h3>Baller by Gallivanter</h3>



<p><strong>Influences:</strong>&nbsp;Range Rover<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/baller1f.jpg" alt=""/></figure>



<h3>Baller 2 by Gallivanter</h3>



<p><strong>Influences:</strong>&nbsp;Range Rover Evoque<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/baller2f.jpg" alt=""/></figure>



<h3>Baller LE by Gallivanter</h3>



<p><strong>Influences:</strong>&nbsp;Range Rover Sport SVR<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/baller3.jpg" alt=""/></figure>



<h3>Baller LE LWB by Gallivanter</h3>



<p><strong>Influences:</strong>&nbsp;Range Rover Sport SVR<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/baller4.jpg" alt=""/></figure>



<h3>BeeJay XL by Karin</h3>



<p><strong>Influences:</strong>&nbsp;Toyota FJ Crusier<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/beejayxlf.jpg" alt=""/></figure>



<h3>Cavalcade by Albany</h3>



<p><strong>Influences:</strong>&nbsp;Cadillac Escalade<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/cavalcade1f.jpg" alt=""/></figure>



<h3>Cavalcade 2 by Albany</h3>



<p><strong>Influences:</strong>&nbsp;Cadillac Escalade<br><strong>Capacity:</strong>&nbsp;<strong>4</strong></p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/cavalcade2f.jpg" alt=""/></figure>



<h3>Granger by Declasse</h3>



<p><strong>Influences:</strong>&nbsp;Chevrolet Suburban<br><strong>Capacity:</strong>&nbsp;8</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/grangerf.jpg" alt=""/></figure>



<h3>Gresley by Bravado</h3>



<p><strong>Influences:</strong>&nbsp;Dodge Durango<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/gresleyf.jpg" alt=""/></figure>



<h3>Habanero by Emperor</h3>



<p><strong>Influences:</strong>&nbsp;Lexus RX<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/habanerof.jpg" alt=""/></figure>



<h3>Huntley S by Enus</h3>



<p><strong>Influences:</strong>&nbsp;Bentley SUV (aka Falcon)<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/huntleysf.jpg" alt=""/></figure>



<h3>Landstalker by Dundreary</h3>



<p><strong>Influences:</strong>&nbsp;Ford Expedition<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/landstalkerf.jpg" alt=""/></figure>



<h3>Mesa by Canis</h3>



<p><strong>Influences:</strong>&nbsp;Jeep Wrangler JK Unlimited, UAZ-469<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/mesaf.jpg" alt=""/></figure>



<h3>Patriot by Mammoth</h3>



<p><strong>Influences:</strong>&nbsp;Hummer H2<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/patriotf.jpg" alt=""/></figure>



<h3>Radius by Vapid</h3>



<p><strong>Influences:</strong>&nbsp;Ford Edge<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/radiusf.jpg" alt=""/></figure>



<h3>Rocoto by Obey</h3>



<p><strong>Influences:</strong>&nbsp;Porsche Cayenne<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/rocotof.jpg" alt=""/></figure>



<h3>Seminole by Canis</h3>



<p><strong>Influences:</strong>&nbsp;Jeep Cherokee, Nissan Pathfinder<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/seminolef.jpg" alt=""/></figure>



<h3>Serrano by Benefactor</h3>



<p><strong>Influences:</strong>&nbsp;Mercedes-Benz M-class<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/serranof.jpg" alt=""/></figure>



<h3>XLS by Benefactor</h3>



<p><strong>Influences:</strong>&nbsp;Mercedes-GL Class<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/xls.jpg" alt=""/></figure>



<h2 style="text-align:center">VANS / TRUCK</h2>



<h3>Bison by Bravado</h3>



<p><strong>Influences:</strong>&nbsp;Dodge Ram HD<br><strong>Capacity:</strong>&nbsp;6</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/bisonf.jpg" alt=""/></figure>



<h3>Bobcat XL by Vapid</h3>



<p><strong>Influences:</strong>&nbsp;GM trucks<br><strong>Capacity:</strong>&nbsp;5</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/bobcatxlf.jpg" alt=""/></figure>



<h3>Minivan by Vapid</h3>



<p><strong>Influences:</strong>&nbsp;Ford Windstar, Dodge Caravan<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/minivanf.jpg" alt=""/></figure>



<h3>Rumpo Custom by Bravado</h3>



<p><strong>Influences:</strong>&nbsp;GM vans<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/rumpo-custom.jpg" alt=""/></figure>



<h3>Speedo by Vapid</h3>



<p><strong>Influences:</strong>&nbsp;GM vans<br><strong>Capacity:</strong>&nbsp;4</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/speedof.jpg" alt=""/></figure>



<h3>Youga by Bravado</h3>



<p><strong>Influences:</strong>&nbsp;Dodge Ram Van<br><strong>Capacity:</strong>&nbsp;2</p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/yougaf.jpg" alt=""/></figure>



<h3>Youga Classic by Bravado</h3>



<p><strong>Influences:</strong>&nbsp;Ford Econoline<br><strong>Capacity:</strong>&nbsp;<strong>4</strong></p>



<figure class="wp-block-image"><img src="https://www.igta5.com/images/400x160/youga-classic.jpg" alt=""/></figure>
  

</div>
TEXT;
$dom = new DOMDocument();
$paragraphs = array();
$dom->loadHTML($text);
foreach($dom->getElementsByTagName('h3') as $node)
{

    $paragraphs[] = $dom->saveHTML($node);

}
$paragraphs = substr($paragraphs, 0, strpos($paragraphs, "By"));
print_r($paragraphs);
?>
