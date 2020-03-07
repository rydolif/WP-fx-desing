

<section class="site-form section" id="contacts">
	<div class="container">
		<div class="site-form__container">

			<p class="sub-title">переходим к действиям</p>
			<h2>заполните форму</h2>

			<div class="row">
				<div class="offset-lg-2 col-lg-8">

					<form action="sendmail.php" class="form" method="post">

						<input type="hidden" name="subject" value="форма">

						<div class="form__row">
							<label for="name">Имя</label>
							<input type="text" name="name" placeholder="Имя" id="name" required>
						</div>
						<div class="form__row">
							<label for="tel">Телефон</label>
							<input type="tel" name="phone"  placeholder="Телефон" id="tel" required>
						</div>
						<div class="form__row">
							<label for="email">E-mail</label>
							<input type="email" name="email"  placeholder="E-mail" id="email" required>
						</div>
						<div class="form__row form__row--textarea">
							<label for="comment">Запрос</label>
							<textarea name="comment" id="comment" placeholder="Запрос"></textarea>
						</div>
						<div>
							<button type="submit" class="btn link" name="submit" value="отправить">Отправить <span></span></button>
						</div>

					</form>

				</div>
			</div>

		</div>
	</div>
</section>