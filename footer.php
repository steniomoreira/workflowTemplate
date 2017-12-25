		</main>

		<footer>
			<div class="logo-rodape">
				<a href="index.php">
					<img src="images/logo-tag-rodape.svg" alt="Logo TAG Rodapé">
				</a>
				<p>2017 Todos os Direitos Reservados</p>
			</div>
		</footer>
	</div><!-- layout -->

	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script src="bower_components/wow/dist/wow.min.js"></script>
	<script>
		$(function(){	
			$('.toggle').click(function(){
				$('.layout').toggleClass('ativo');
				$('.menu-responsivo').toggleClass('ativo');
				$(this).toggleClass('ativo');
			});
			new WOW().init();	
		});
	</script>
	
</body>
</html>