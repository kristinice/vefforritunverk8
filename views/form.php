			<h1>Skráning</h1>

			<?php
			$a = "hallo"
			echo $a;

			echo $nameErr;
			// TODO Samantekt af villum
			// TODO Merkja input ef villur í þeim
			// TODO Klára að birta gildi aftur ef villa kom upp -- ekki tapa gögnum 
			?>

			<form id="register" action="index.php" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<div class="field">
					<label for="name">Nafn: *</label>
					<input type="text" name="name" id="name" placeholder="Jón Jóns" value="<?php echo $registration->name; ?>" />
				</div>
				<div class="field">
					<label for="email">Netfang: *</label>
					<input type="text" name="email" id="email" placeholder="nonni@example.org" value="" />
				</div>
				<div class="field">
					<label for="address">Heimilisfang: *</label>
					<input type="text" name="address" id="address" placeholder="Aðalgata 10" value="" />
				</div>

				<div class="field radio">
					<span class="label">Kyn: *</span>
					<label for="kk"><input type="radio" name="sex" id="kk" value="kk">Karl</label>
					<label for="kvk"><input type="radio" name="sex" id="kvk" value="kvk">Kona</label>
				</div>

				<div class="field checkbox">
					<label for="spam"><input type="checkbox" name="spam" id="spam" <?php echo $registration->spam ? ' checked="checked"' : '' ?> value="spam"> Sendu mér kynningar á nýju efni</label>
				</div>

				<div class="field">
					<label for="text">Athugasemd:</label>
					<textarea name="text" id="text"><?php echo $registration->text; ?></textarea>
					<div class="info">
						Hámark 100 stafir.<br>
						<div class="counter"><span id="counter">100</span> eftir.</div>
					</div>
				</div>

				<div class="buttons">
					<input type="submit" value="Skrá mig">
				</div>
			</form>
