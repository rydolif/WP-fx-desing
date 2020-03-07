

<section class="site-form section" id="contacts">
	<div class="container">
		<div class="site-form__container">

			<p class="sub-title">przechodzimy do sprawy</p>
			<h2>wypełnij formularz</h2>

			<div class="row">
				<div class="offset-lg-2 col-lg-8">

					<form action="sendmail.php" class="form" method="post">

						<input type="hidden" name="subject" value="форма">

						<div class="form__row">
							<label for="name">Imie</label>
							<input type="text" name="namepl" placeholder="Imie" id="name" required>
						</div>
						<div class="form__row">
							<label for="tel">Telefon</label>
							<input type="tel" name="phonepl"  placeholder="Telefon" id="tel" required>
						</div>
						<div class="form__row">
							<label for="email">E-mail</label>
							<input type="email" name="emailpl"  placeholder="E-mail" id="email" required>
						</div>
						<div class="form__row form__row--textarea">
							<label for="comment">Zapytanie</label>
							<textarea name="commentpl" id="comment" placeholder="Zapytanie"></textarea>
						</div>
						<div>
							<button type="submit" class="btn link" name="submit" value="отправить"> Zatwierdź <span></span></button>
						</div>

					</form>

				</div>
			</div>

		</div>
	</div>
</section>