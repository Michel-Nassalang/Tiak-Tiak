<?php 
	require_once('database.php'); 
?>
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/back.jpg);">
				<div class="desc">
					<div class="container">
						<div class="row">
						<!-- interieur -->
							<div class="col-sm-5 col-md-5">
								<div class="tabulation animate-box">

								  <!-- Nav tabs -->
								   <ul class="nav nav-tabs" role="tablist">
								      <li role="presentation" class="active">
								      	<a href="#tiak" aria-controls="Tiak-Tiak" role="tab" data-toggle="tab">Tiak-Tiak</a>
								      </li>
								      <li role="presentation">
								      	<a href="#taxi" aria-controls="Taxi" role="tab" data-toggle="tab">Taxi</a>
								      </li>
								      <li role="presentation">
								    	   <a href="#livraison" aria-controls="Livraison" role="tab" data-toggle="tab">Livraison</a>
								      </li>
								   </ul>

<!-- ------------------------------------------------------------------------------------------------------- -->
								   <!-- Tab panel tiak-tiak -->
									<div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="tiak">
                                            <form action="" method="post">
                                                <div class="row">
                                                    <div class="col-xxs-12 col-xs-12 mt">
                                                        <div class="input-field">
                                                            <label for="from">Prénom et Nom</label>
                                                            <input type="text" name="nom-tiak" pattern="[a-zA-Z ]*" title="utiliser des lettres et au moins 3 lettres" class="form-control" id="from-place" placeholder="Nom complet" required="required"  />
                                                        </div>
                                                    </div>
                                                    <div class="col-xxs-12 col-xs-6 mt">
                                                        <div class="input-field">
                                                            <label for="from">De:</label>
                                                            <input type="text" name="depart-tiak" class="form-control" id="from-place" placeholder="Lieu de Départ" required="required"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxs-12 col-xs-6 mt">
                                                        <div class="input-field">
                                                            <label for="from">à:</label>
                                                            <input type="text" name="arrivee-tiak" class="form-control" id="to-place" placeholder="Lieu d'Arrivée" required="required" />
                                                        </div>
                                                    </div>
                                                    <div class="col-xxs-12 col-xs-6 mt alternate">
                                                        <div class="input-field">
                                                            <label for="date-start">Heure de départ:</label>
                                                            <input type="time" name="heure-tiak" class="form-control" placeholder="h:m" required="required"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxs-12 col-xs-6 mt">
                                                        <div class="input-field">
                                                            <label for="from">Télephone</label>
                                                            <input type="tel" name="telephone-tiak" pattern="[0-9]+" title="utiliser des chiffres" class="form-control" id="from-place" placeholder="Numéro" required="required"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 mt">
                                                        <section>
                                                            <label for="class">Mode de payements:</label>
                                                            <select class="cs-select cs-skin-border" name="payement-tiak">
                                                                <option value="Orange Money" selected>Orange Money</option>
                                                                <option value="Orange Money">Orange Money</option>
                                                                <option value="Wave">Wave</option>
                                                                <option value="Free Money">Free Money</option>
                                                                <option value="Arrivée">Cash à l'arrivée</option>
                                                            </select>
                                                        </section>
                                                    </div>
                                                    <div class="col-xxs-12 col-xs-6 mt">
                                                        <section>
                                                            <label for="class">Place :</label>
                                                            <select class="cs-select cs-skin-border" name="place-tiak">
                                                                <option value="1" selected>1</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                            </select>
                                                        </section>
                                                    </div>
                                                    <div class="col-xs-12">
                                                        <input type="submit" class="btn btn-primary btn-block" value="Prendre Tiak-Tiak">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <?php 
                                            if(isset($_POST['nom-tiak']) && isset($_POST['depart-tiak']) && isset($_POST['arrivee-tiak']) && isset($_POST['telephone-tiak'])){
                                                $nom = htmlspecialchars($_POST['nom-tiak']);
                                                $depart = htmlspecialchars($_POST['depart-tiak']);
                                                $arrivee = htmlspecialchars($_POST['arrivee-tiak']);
                                                $heure = htmlspecialchars($_POST['heure-tiak']);
                                                $telephone = htmlspecialchars($_POST['telephone-tiak']);
                                                $payement = htmlspecialchars($_POST['payement-tiak']);
                                                $place = htmlspecialchars($_POST['place-tiak']);

                                                $insertion = $db->prepare('INSERT INTO  tiak(nom,depart,arrivee,heure,telephone,payement,place) VALUES (:nom,:depart,:arrivee,:heure,:telephone,:payement,:place)');
                                                $insertion->execute([
                                                    "nom" => $nom,
                                                    "depart" => $depart,
                                                    "arrivee" => $arrivee,
                                                    "heure" => $heure,
                                                    "telephone" => $telephone,
                                                    "payement" => $payement,
                                                    "place" => $place
                                                ]);
                                            }
                                        ?>

<!-- ------------------------------------------------------------------------------------------------------- -->
								   <!-- Tab panel taxi -->
                                        <div role="tabpanel" class="tab-pane" id="taxi">
                                            <form action="" method="post">
                                                <div class="row">
                                                    <div class="col-xxs-12 col-xs-12 mt">
                                                        <div class="input-field">
                                                            <label for="from">Prénom et Nom</label>
                                                            <input type="text"  pattern="[a-zA-Z ]*" title="utiliser des lettres et au moins 3 lettres" name="nom-taxi" class="form-control" id="from-place" placeholder="Nom complet" required="required"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxs-12 col-xs-6 mt">
                                                        <div class="input-field">
                                                            <label for="from">De:</label>
                                                            <input type="text" name="depart-taxi" class="form-control" id="from-place" placeholder="Lieu de Départ" required="required"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxs-12 col-xs-6 mt">
                                                        <div class="input-field">
                                                            <label for="from">à:</label>
                                                            <input type="text" name="arrivee-taxi" class="form-control" id="to-place" placeholder="Lieu d'Arrivée" required="required"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxs-12 col-xs-6 mt alternate">
                                                        <div class="input-field">
                                                            <label for="date-start">Heure de départ:</label>
                                                            <input type="time" name="heure-taxi" class="form-control" placeholder="h:m" required="required"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxs-12 col-xs-6 mt">
                                                        <div class="input-field">
                                                            <label for="from">Télephone</label>
                                                            <input type="tel" name="telephone-taxi" pattern="[0-9]+" title="utiliser des chiffres" class="form-control" id="from-place" placeholder="Numéro" required="required"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 mt">
                                                        <section>
                                                            <label for="class">Mode de payements:</label>
                                                            <select class="cs-select cs-skin-border" name="payement-taxi">
                                                                <option value="Orange Money" selected>Orange Money</option>
                                                                <option value="Wave">Wave</option>
                                                                <option value="Free Money">Free Money</option>
                                                                <option value="Arrivée">Cash à l'arrivée</option>
                                                            </select>
                                                        </section>
                                                    </div>
                                                    <div class="col-xxs-12 col-xs-6 mt">
                                                        <section>
                                                            <label for="class">Places :</label>
                                                            <select class="cs-select cs-skin-border" name="place-taxi">
                                                                <option value="1" selected>1</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="2">3</option>
                                                                <option value="2">4</option>
                                                            </select>
                                                        </section>
                                                    </div>
                                                    <div class="col-xs-12">
                                                        <input type="submit" class="btn btn-primary btn-block" value="Prendre Taxi">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <?php 
                                            if(isset($_POST['nom-taxi']) && isset($_POST['depart-taxi']) && isset($_POST['arrivee-taxi']) && isset($_POST['telephone-taxi'])){
                                                $nom = htmlspecialchars($_POST['nom-taxi']);
                                                $depart = htmlspecialchars($_POST['depart-taxi']);
                                                $arrivee = htmlspecialchars($_POST['arrivee-taxi']);
                                                $heure = htmlspecialchars($_POST['heure-taxi']);
                                                $telephone = htmlspecialchars($_POST['telephone-taxi']);
                                                $payement = htmlspecialchars($_POST['payement-taxi']);
                                                $place = htmlspecialchars($_POST['place-taxi']);

                                                $insertion = $db->prepare('INSERT INTO  taxi(nom,depart,arrivee,heure,telephone,payement,place) VALUES(:nom,:depart,:arrivee,:heure,:telephone,:payement,:place)');
                                                $insertion->execute([
                                                    "nom" => $nom,
                                                    "depart" => $depart,
                                                    "arrivee" => $arrivee,
                                                    "heure" => $heure,
                                                    "telephone" => $telephone,
                                                    "payement" => $payement,
                                                    "place" => $place
                                                ]);
                                            }
                                        ?>
                                        
<!-- ------------------------------------------------------------------------------------------------------- -->
								   <!-- Tab panel livraison -->
                                        <div role="tabpanel" class="tab-pane" id="livraison">
                                            <form action="" method="post">
                                                <div class="row">
                                                    <div class="col-xxs-12 col-xs-12 mt">
                                                        <div class="input-field">
                                                            <label for="from">Prénom et Nom</label>
                                                            <input type="text" pattern="[a-zA-Z ]*" title="utiliser des lettres et au moins 3 lettres" name="nom-livraison" class="form-control" id="from-place" placeholder="Nom complet" required="required"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxs-12 col-xs-12 mt">
                                                        <div class="input-field">
                                                            <label for="from">Produits à livrer</label>
                                                            <input type="text" name="produits-livraison" class="form-control" id="from-place" placeholder="Sama livraison" required="required"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxs-12 col-xs-6 mt">
                                                        <div class="input-field">
                                                            <label for="from">De:</label>
                                                            <input type="text" name="depart-livraison" class="form-control" id="from-place" placeholder="Lieu de Départ" required="required"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxs-12 col-xs-6 mt">
                                                        <div class="input-field">
                                                            <label for="from">à:</label>
                                                            <input type="text" name="arrivee-livraison" class="form-control" id="from-place" placeholder="Lieu de livraison" required="required"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxs-12 col-xs-6 mt alternate">
                                                        <div class="input-field">
                                                            <label for="date-start">Heure de Livraison</label>
                                                            <input type="time" name="heure-livraison" class="form-control" placeholder="h:m"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxs-12 col-xs-6 mt">
                                                        <div class="input-field">
                                                            <label for="from">Télephone</label>
                                                            <input type="tel" name="telephone-livraison" pattern="[0-9]+" title="utiliser des chiffres" class="form-control" id="from-place" placeholder="Numéro" required="required"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 mt">
                                                        <section>
                                                            <label for="class">Poids du Produit:</label>
                                                            <select class="cs-select cs-skin-border" name="poids-livraison"  required="required">
                                                                <option value="prix" selected>0-1 <span> Kg</span></option>
                                                                <option value="prix">0-1 <span> Kg</span></option>
                                                                <option value="prix">1-3 <span> Kg</span></option>
                                                                <option value="prix">3-5 <span> Kg</span></option>
                                                                <option value="prix">5-10 <span> Kg</span></option>
                                                                <option value="prix">+10 <span> Kg</span></option>
                                                            </select>
                                                        </section>
                                                    </div>
                                                    <div class="col-sm-6 mt">
                                                        <section>
                                                            <label for="class">Par:</label>
                                                            <select class="cs-select cs-skin-border" name="type-livraison"  required="required">
                                                                <option value="tiak-tiak" selected>Tiak-Tiak</option>
                                                                <option value="tiak-tiak">Tiak-Tiak</option>
                                                                <option value="tiak-tiak">Taxi</option>
                                                            </select>
                                                        </section>
                                                    </div>
                                                    <div class="col-xxs-12 col-xs-6 mt">
                                                        <div class="input-field">
                                                            <label for="from">Prix :</label>
                                                            <input type="text" name="prix-livraison" class="form-control" id="from-place" placeholder="prix de livraison"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12">
                                                        <input type="submit" class="btn btn-primary btn-block" value="Livrer">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <?php 
                                            if(isset($_POST['nom-livraison']) && isset($_POST['produits-livraison']) && isset($_POST['depart-livraison']) && isset($_POST['arrivee-livraison']) && isset($_POST['telephone-livraison'])){
                                                $nom = htmlspecialchars($_POST['nom-livraison']);
                                                $produits = htmlspecialchars($_POST['produits-livraison']);
                                                $depart = htmlspecialchars($_POST['depart-livraison']);
                                                $arrivee = htmlspecialchars($_POST['arrivee-livraison']);
                                                $heure = htmlspecialchars($_POST['heure-livraison']);
                                                $telephone = htmlspecialchars($_POST['telephone-livraison']);
                                                $poids = htmlspecialchars($_POST['poids-livraison']);
                                                $type = htmlspecialchars($_POST['type-livraison']);
                                                $prix = htmlspecialchars($_POST['prix-livraison']);

                                                $insertion = $db->prepare('INSERT INTO  livraison(nom,produits,depart,livraison,heure,telephone,poids,type,prix) VALUES (:nom,:produits,:depart,:arrivee,:heure,:telephone,:poids,:type,:prix)');
                                                $insertion->execute([
                                                    "nom" => $nom,
                                                    "produits" => $produits,
                                                    "depart" => $depart,
                                                    "arrivee" => $arrivee,
                                                    "heure" => $heure,
                                                    "telephone" => $telephone,
                                                    "poids" => $poids,
                                                    "type" => $type,
                                                    "prix"=> $prix
                                                ]);
                                            }
                                        ?>

									</div>
								</div>
							</div>
							<!-- interieur -->
							<div class="desc2 animate-box">
								<div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
									<p>Le meilleur avec <a href="" target="_blank" class="fh5co-site-name">  Sen Tiak-Tiak</a></p>
									<h2>Le confort pour tous vos déplacements ou locations</h2>
									<h3>Partout à Dakar</h3>
									<p><a class="btn btn-primary btn-lg" href="service.php">Tiak-Tiak</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>