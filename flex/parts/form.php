

<section class="site-form section" id="contacts">
	<div class="container">
		<div class="site-form__container">

			<p class="sub-title wow bounceInUp" data-wow-duration="2s">let's start</p>
			<h2 class="wow bounceInUp" data-wow-duration="2s">please fill</h2>

			<div class="row">
				<div class="offset-lg-2 col-lg-8">

					<form action="telegram.php" class="form" method="post">
						<div class="form__row">
							<label for="name">Name</label>
							<input type="text" name="name" placeholder="Name" id="name" required>
						</div>
						<div class="form__row">
							<label for="tel">Telephone number</label>
							<input type="tel" name="phone"  placeholder="Telephone number" id="tel" required>
						</div>
						<div class="form__row">
							<label for="email">E-mail</label>
							<input type="email" name="mail"  placeholder="E-mail" id="email" required>
						</div>
						<div class="form__row form__row--textarea">
							<label for="comment">Request</label>
							<textarea name="comment" id="comment" placeholder="Request"></textarea>
						</div>
						<div>
							<button type="submit" class="btn link" name="submit" value="отправить">Send <span></span></button>
						</div>

					</form>

				</div>
			</div>

		</div>
	</div>
</section>